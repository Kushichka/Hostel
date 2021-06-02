<!-- 

    - Działa rejestracja, login, rezerwacja pokoju oraz rezygnacja z rezerwacji.
    - Guzik "Reservations" pojawia się po logowaniu.
    - Nie mozna dokonać rezerwacji bez logowania.
    - Opuśćiłem wybór daty rezerwacji żęby łatwiej można było sprawdżić działanie strony.
    - Na lepszy wygląd strony już mi zabrakło czasu, ponieważ mam jeszcze drugi projekt do zrobienia (=

 -->



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
            if($_POST['city'] == 1 || $_POST['room'] == 0)
            {
                $smarty->display('index.tpl');
            }
            else {
                $query = $db->prepare("SELECT * FROM room WHERE city = ? AND type = ?");
                $query->bind_param("si", $_POST['city'], $_POST['room']);
                $query->execute();
                $result = $query->get_result();
                $rooms = array();
                while ($row = $result->fetch_assoc()) {
                    array_push($rooms, $row);
                }
                $smarty->assign('rooms', $rooms);
                $smarty->display('rooms.tpl');
            }
        break;
        case 'reserv':
            if(!isset($_SESSION['userID'])) {
                
                $smarty->assign('error', "Login to make a reservations");
                $smarty->display('login.tpl');
            }
            else {
                $query = $db->prepare("UPDATE room SET room.status = 0 WHERE room.id = ? LIMIT 1");
                $query->bind_param("i", $_REQUEST['roomID']);
                $query->execute();
                // $smarty->assign('error', $_REQUEST['roomID']);
                // $smarty->display('login.tpl');
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
            $query = $db->prepare("SELECT * FROM room JOIN reservation ON reservation.roomID = room.id WHERE reservation.username = ?");
            $query->bind_param("s", $_SESSION['email']);
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
            $query = $db->prepare("UPDATE room SET room.status = '1' WHERE room.id = ?");
            $query->bind_param("i", $_POST['roomID']);
            $query->execute();
            
            $query = $db->prepare("DELETE FROM reservation WHERE id = ?");
            $query->bind_param("i", $_REQUEST['reservID']);
            $query->execute();
            // $smarty->assign('error', $_POST['roomID']);
            // $smarty->display('login.tpl');
            header('Location: index.php?action=reservations');
            break;
        default: 
            $smarty->display('index.tpl');
        break;
    }
} else {
    $smarty->display('index.tpl');
}

?>