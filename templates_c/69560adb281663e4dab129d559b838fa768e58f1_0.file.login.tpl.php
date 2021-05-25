<?php
/* Smarty version 3.1.39, created on 2021-05-24 17:35:03
  from 'C:\xampp\htdocs\php\hostel\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60abc7a7e41373_01680823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69560adb281663e4dab129d559b838fa768e58f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\hostel\\templates\\login.tpl',
      1 => 1621870471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_60abc7a7e41373_01680823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="center">
                <div class="loginBox">
                    <form action="index.php">
                        <input type="hidden" name="action" value="processLogin">
                        <input type="email" placeholder="E-Mail" class="loginBox-item" id="email" name="email" required>
                        <input type="password" placeholder="Password" class="loginBox-item" id="password" name="password" required>
                        <button type="submit" class="btn-1">Sign In</button>
                    </form>
                </div>
                <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                    <div class="error">
                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                    </div>
                <?php }?>
            </div>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
