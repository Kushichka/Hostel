<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>TEB Hostel</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="navbar">
                <a href="index.php"><img class="logo" src="./img/logo1.png" alt="logo"></a>
                {if isset($firstName)}
                    <ul class="navbar-left">
                        <li class="navbar-item navbar-left-item">
                            About Us</li>
                        <li class="navbar-item navbar-left-item">Gallery</li>
                        <li class="navbar-item navbar-left-item">Contact</li>
                        <li class="navbar-item navbar-left-item">Reservations</li>
                    </ul>
                    <ul class="navbar-right">
                        <li class="navbar-item btn navbar-right-item" id="greeting">Hello {$firstName}</li>
                        <li class="navbar-item btn navbar-right-item" id="logout"><a href="index.php?action=logout" class="navbar-item-link">Logout</a></li>
                    </ul>
                {else}
                    <ul class="navbar-left">
                        <li class="navbar-item navbar-left-item">About Us</li>
                        <li class="navbar-item navbar-left-item">Gallery</li>
                        <li class="navbar-item navbar-left-item">Contact</li>
                    </ul>
                    <ul class="navbar-right">
                        <li class="navbar-item btn navbar-right-item" id="login"><a href="index.php?action=registr" class="navbar-item-link">Sign Up</a></li>
                        <li class="navbar-item btn navbar-right-item" id="registr"><a href="index.php?action=login" class="navbar-item-link">Sign In</a></li>
                    </ul>
                {/if}
            </div>