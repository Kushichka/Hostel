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
                $_SESSION['email'] = $row['email'];
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
            switch ($_POST['city']) {
                case 'Gdansk':
                    $city = 'Gdansk';
                    break;
                case 'London':
                    $city = 'London';
                    break;
                case 'Paris':
                    $city = 'Paris';
                    break;             
                default:
                    $smarty->display('index.tpl');
                    break;
            }
            switch ($_POST['room']) {
                case '1': 
                    $type = 1;
                    break;
                case '2':
                    $type = 2;
                    break;
                case '3':
                    $type = 3;
                    break;
                default:
                    $smarty->display('index.tpl');
                    break;
            }
            $query = $db->prepare("SELECT * FROM room WHERE city = '$city' AND type = '$type'");
            $query->execute();
            $result = $query->get_result();
            $rooms = array();
            while ($row = $result->fetch_assoc()) {
                array_push($rooms, $row);
            }
            $smarty->assign('rooms', $rooms);
            $smarty->display('rooms.tpl');
        break;
        case 'reserv':
            // if(!isset($_POST['roomID'])) {
            //     $_POST['roomID'] = 1;
            //     $smarty->assign('error', $_POST['roomID']);
            //     $smarty->display('login.tpl');
            // }
            // else {
            //     $smarty->assign('error', $_POST['roomID']);
            //     $smarty->display('login.tpl');
            // }
            if(!isset($_SESSION['userID'])) {
                
                $smarty->assign('error', "Login to make a reservations");
                $smarty->display('login.tpl');
            }
            else {
                $query = $db->prepare("INSERT INTO reservation (id, username, roomID) VALUES (NULL, ?, ?)");
                $query->bind_param("si", $_SESSION['email'],$_POST['roomID']);
                $query->execute();
                header('Location: index.php?action=reservations');
            }
            break;
        case 'reservations':
            if(!isset($_SESSION['userID'])) {
                
                $smarty->assign('error', "Login to make a reservations");
                $smarty->display('login.tpl');
            }
            $query = $db->prepare("SELECT roomID FROM reservation WHERE username = ? LIMIT 1");
            $query->bind_param("s", $_SESSION['email']);
            $query->execute();
            $result = $query->get_result();
            $row = $result->fetch_assoc();
            // $arr = array();
            // while ($row = $result->fetch_assoc()) {
            //     array_push($arr, $row);
            // }
            // $smarty->assign('error', $row['roomID']);
            // $smarty->display('login.tpl');

            // $roomID = array();
            // while ($row = $result->fetch_assoc()) {
            //         array_push($roomID, $row);
            // } 
            // $smarty->assign('roomIDs', $roomID);

            $query = $db->prepare("SELECT * FROM room WHERE id = ?");
            $query->bind_param("i", $row['roomID']);
            $query->execute();
            $result = $query->get_result();
            $rooms = array();
            while ($rows = $result->fetch_assoc()) {
                array_push($rooms, $rows);
            }
            $smarty->assign('rooms', $rooms);
            $smarty->display('reservations.tpl');
            break;
        case 'deleteReserv':
            
            break;
        default: 
            $smarty->display('index.tpl');
        break;
    }
} else {
    $smarty->display('index.tpl');
}

?>