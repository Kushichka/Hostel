<?php
/* Smarty version 3.1.39, created on 2021-05-24 19:05:07
  from 'C:\xampp\htdocs\php\hostel\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60abdcc304cf20_10365989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c681960376046b56e4088f8a05d2099c27ccbc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\hostel\\templates\\head.tpl',
      1 => 1621875862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60abdcc304cf20_10365989 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                <?php if ((isset($_smarty_tpl->tpl_vars['firstName']->value))) {?>
                    <ul class="navbar-left">
                        <li class="navbar-item navbar-left-item">
                            About Us</li>
                        <li class="navbar-item navbar-left-item">Gallery</li>
                        <li class="navbar-item navbar-left-item">Contact</li>
                        <li class="navbar-item navbar-left-item">Reservations</li>
                    </ul>
                    <ul class="navbar-right">
                        <li class="navbar-item btn navbar-right-item" id="greeting">Hello <?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
</li>
                        <li class="navbar-item btn navbar-right-item" id="logout"><a href="index.php?action=logout" class="navbar-item-link">Logout</a></li>
                    </ul>
                <?php } else { ?>
                    <ul class="navbar-left">
                        <li class="navbar-item navbar-left-item">About Us</li>
                        <li class="navbar-item navbar-left-item">Gallery</li>
                        <li class="navbar-item navbar-left-item">Contact</li>
                    </ul>
                    <ul class="navbar-right">
                        <li class="navbar-item btn navbar-right-item" id="login"><a href="index.php?action=registr" class="navbar-item-link">Sign Up</a></li>
                        <li class="navbar-item btn navbar-right-item" id="registr"><a href="index.php?action=login" class="navbar-item-link">Sign In</a></li>
                    </ul>
                <?php }?>
            </div><?php }
}
