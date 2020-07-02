<?php
/* Smarty version 3.1.33, created on 2020-07-01 21:22:36
  from '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/admin914ob5iqv/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efce27c37ce16_57699880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce545fd549277c8f254d194e014170dcba6962c0' => 
    array (
      0 => '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/admin914ob5iqv/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1593626339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efce27c37ce16_57699880 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
