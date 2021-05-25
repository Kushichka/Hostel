<?php
require_once('./smarty/Smarty.class.php');
session_start();
$smarty = new Smarty();
$db = new mysqli('localhost', 'root', '', 'hostel');

$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');

$smarty->assign('name', 'Ned');

if (isset($_SESSION['userID'])) {
    $smarty->assign('firstName', $_SESSION['firstName']);
}


if(isset($_REQUEST['action'])) {
    switch($_REQUEST['action']) {
        case 'login':
            $smarty->display('login.tpl');
        break;
        case 'processLogin':
            $query = $db->prepare("SELECT * FROM user WHERE email = ? LIMIT 1");
            $query->bind_param("s", $_REQUEST['email']);
            $query->execute();
            $result = $query->get_result();
            if($result->num_rows == 0) {
                $smarty->assign('error', "Wrong email or password!");
                $smarty->display('login.tpl');
                break;
            }
            $row = $result->fetch_assoc();

            if(password_verify($_REQUEST['password'], $row['password'])) {
                $_SESSION['userID'] = $row['id'];
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['secondName'] = $row['secondName'];
                $smarty->assign('firstName', $_SESSION['firstName']);
                $smarty->display('index.tpl');
            } else {
                $smarty->assign('error', "Wrong email or password!");
                $smarty->display('login.tpl');
            }
        break;
        case 'registr':
            $smarty->display('registr.tpl');
        break;
        case 'processRegistr':
            $query = $db->prepare("INSERT INTO user (id, firstName, secondName, email, password) VALUES (NULL, ?, ?, ?, ?)");
            $passwordHash = password_hash($_REQUEST['password'], PASSWORD_ARGON2I);
            $query->bind_param("ssss", $_REQUEST['firstName'], $_REQUEST['secondName'], $_REQUEST['email'], $passwordHash);
            $query->execute();
            if($query->errno == 1062)
            {
                $smarty->assign('error', "Use another e-mail, please!");
                $smarty->display('registr.tpl');   
            }
            else {
                $smarty->display('index.tpl');
            }
        break;
        case 'logout':
            session_destroy();
            header('Location: index.php');
        break;
        case 'rooms':
            $query = $db->prepare("SELECT * FROM room");
            $query->execute();
            $result = $query->get_result();
            $rooms = array();
            while ($row = $result->fetch_assoc()) {
                array_push($rooms, $row);
            }
            $smarty->assign('rooms', $rooms);
            $smarty->display('rooms.tpl');
        break;
        default: 
            $smarty->display('index.tpl');
        break;
    }
} else {
    $smarty->display('index.tpl');
}

?>