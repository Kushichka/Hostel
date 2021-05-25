<?php
/* Smarty version 3.1.39, created on 2021-05-25 20:41:13
  from 'C:\xampp\htdocs\php\hostel\templates\rooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ad44c9ddfb89_20118893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a22fa4b131597275c0fc0fcf1e8a9a5eacf72809' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\hostel\\templates\\rooms.tpl',
      1 => 1621968066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60ad44c9ddfb89_20118893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="rooms-wrapper">
        <div class="rooms-box">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?>
                <div class="rooms-box-item" value="<?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
">
                    <img class="rooms-box-photo" src="./img/room<?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
.jpg" alt="room">
                    <div class="rooms-box-description">
                        <div class="rooms-box-description-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cupiditate recusandae beatae, fugiat nulla rerum nobis unde aliquam modi totam debitis accusamus magnam, repudiandae hic, architecto dolore reprehenderit deleniti maxime.
                        </div>
                        <div class="rooms-box-status">
                            <div class="rooms-box-status-city">City: <?php echo $_smarty_tpl->tpl_vars['room']->value['city'];?>
</div>
                            <?php if (($_smarty_tpl->tpl_vars['room']->value['type']) == 1) {?>
                                <div class="rooms-box-status-type">Room: Personal room with 1 huge bed</div>
                            <?php } elseif (($_smarty_tpl->tpl_vars['room']->value['type']) == 2) {?>
                                <div class="rooms-box-status-type">Room: Personal room with 2 beds</div>
                            <?php } elseif (($_smarty_tpl->tpl_vars['room']->value['type']) == 3) {?>
                                <div class="rooms-box-status-type">Room: 1 bed in public room with 6 beds</div>
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['room']->value['status']) == 1) {?>
                            <div class="rooms-box-status-name">Status: <span class="color-green">Free</span></div>
                            <div class="rooms-box-description-btn">
                                <div class="rooms-box-btn btn-1">Reserv</div>
                            </div>
                            <?php } else { ?>
                            <div class="rooms-box-status-name">Status: <span class="color-red">Reserved</span></div>
                            <?php }?>
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
