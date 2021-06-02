<?php
/* Smarty version 3.1.39, created on 2021-06-02 08:38:30
  from 'C:\xampp\htdocs\php\hostel\templates\reservations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b72766a169c8_58326283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd769310c31feca04470895d097a515237021b93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\hostel\\templates\\reservations.tpl',
      1 => 1622615878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60b72766a169c8_58326283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- <div class="reservations-box">
        <h1>Your Reservations</h1>
    </div> -->
    <div class="rooms-wrapper">
        <div class="rooms-box">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?>
                <div class="rooms-box-item">
                    <img class="rooms-box-photo" src="./img/room<?php echo $_smarty_tpl->tpl_vars['room']->value['imgID'];?>
.jpg" alt="room">
                    <div class="rooms-box-description">
                        <div class="rooms-box-description-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cupiditate recusandae beatae, fugiat nulla rerum nobis unde aliquam modi totam debitis accusamus magnam, repudiandae hic, architecto dolore reprehenderit deleniti maxime.
                        </div>
                        <div class="rooms-box-status">
                            <form action="index.php" name="deleteReserv" method="post">
                                <input type="hidden" name="action" value="deleteReserv">
                                <input type="hidden" name="roomID" value=<?php echo $_smarty_tpl->tpl_vars['room']->value['roomID'];?>
>
                                <input type="hidden" name="reservID" value=<?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
>
                                <div class="rooms-box-status-city">City: <?php echo $_smarty_tpl->tpl_vars['room']->value['city'];?>
</div>
                                <?php if (($_smarty_tpl->tpl_vars['room']->value['type']) == 1) {?>
                                    <div class="rooms-box-status-type">Room: Personal room with 1 huge bed</div>
                                <?php } elseif (($_smarty_tpl->tpl_vars['room']->value['type']) == 2) {?>
                                    <div class="rooms-box-status-type">Room: Personal room with 2 beds</div>
                                <?php } elseif (($_smarty_tpl->tpl_vars['room']->value['type']) == 3) {?>
                                    <div class="rooms-box-status-type">Room: 1 bed in public room with 6 beds</div>
                                <?php }?>
                                <div class="rooms-box-status-name">id: <?php echo $_smarty_tpl->tpl_vars['room']->value['roomID'];?>
</div>
                                <div class="rooms-box-description-btn">
                                    <button class="rooms-box-btn btn-1">Delete</button>
                                </div>
                        </form>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
