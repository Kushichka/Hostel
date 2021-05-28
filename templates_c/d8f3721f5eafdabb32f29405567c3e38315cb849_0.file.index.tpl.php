<?php
/* Smarty version 3.1.39, created on 2021-05-28 22:38:08
  from 'C:\xampp\htdocs\php\hostel\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b154b0659414_18258778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8f3721f5eafdabb32f29405567c3e38315cb849' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\hostel\\templates\\index.tpl',
      1 => 1622234076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60b154b0659414_18258778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
            <h1>What is your next trip?</h1>
            <div class="reservation-box">
                <form class="reservation-box-form" action="index.php" name="rooms" method="post">
                    <input type="hidden" name="action" value="rooms">
                    <div class="box-wrapper">
                        <select class="reservation-box-item reservation-box-city" name="city">
                            <option class="reservation-box-city-item reservation-box-item-item" selected value="1">City</option>
                            <option class="reservation-box-city-item reservation-box-item-item" value="Gdansk">Gdansk</option>
                            <option class="reservation-box-city-item reservation-box-item-item" value="London">London</option>
                            <option class="reservation-box-city-item reservation-box-item-item" value="Paris">Paris</option>
                        </select>
                        <select class="reservation-box-item reservation-box-room" name="room">
                            <option class="reservation-box-room-item reservation-box-item-item" selected value="0">Choose room</option>
                            <option class="reservation-box-room-item reservation-box-item-item"  value="1">Personal room with 1 huge bed</option>
                            <option class="reservation-box-room-item reservation-box-item-item" value="2">Personal room with 2 beds</option>
                            <option class="reservation-box-room-item reservation-box-item-item" value="3">1 bed in public room with 6 beds</option>
                        </select>
                        <input class="reservation-box-item reservation-box-start" type="date">
                        <input class="reservation-box-item reservation-box-end" type="date">
                    </div>
                    <button class="reservation-box-item reservation-box-btn btn">Search</button>
                </form>
            </div>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
