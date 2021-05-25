<?php
/* Smarty version 3.1.39, created on 2021-05-24 17:18:31
  from 'C:\xampp\htdocs\php\hostel\templates\registr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60abc3c7e37fb2_94584643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd06463c919187a1c2c1a0f636d3da4a85a998c57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\hostel\\templates\\registr.tpl',
      1 => 1621869506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60abc3c7e37fb2_94584643 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="center">
                <div class="loginBox">
                    <form action="index.php" method="post">
                        <input type="hidden" name="action" value="processRegistr">
                        <input type="text" placeholder="First Name" class="loginBox-item" id="firstName" name="firstName" required>
                        <input type="text" placeholder="Second Name" class="loginBox-item" id="secondName" name="secondName" required>
                        <input type="email" placeholder="E-Mail" class="loginBox-item" id="email" name="email" required>
                        <input type="password" placeholder="Password" class="loginBox-item" id="password" name="password" required>
                        <button type="submit" class="btn-1">Sign Up</button>
                    </form>
                </div>
                <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                    <div class="error error-email">
                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                    </div>
                <?php }?>
            </div>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
