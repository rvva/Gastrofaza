<?php
/* Smarty version 3.1.33, created on 2020-07-01 21:22:11
  from '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/modules/paypal/views/templates/admin/_partials/alertInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efce2633ea794_89241325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5b9a40ef9e7e11a7da4a2ccb0e100112d49a866' => 
    array (
      0 => '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/modules/paypal/views/templates/admin/_partials/alertInfo.tpl',
      1 => 1593631314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efce2633ea794_89241325 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info <?php if (isset($_smarty_tpl->tpl_vars['widthByContent']->value) && $_smarty_tpl->tpl_vars['widthByContent']->value) {?>d-inline-block<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['class']->value) && $_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php }?>">
    <?php if (isset($_smarty_tpl->tpl_vars['btnClose']->value) && $_smarty_tpl->tpl_vars['btnClose']->value) {?>
        <button type="button" class="close" data-dismiss="alert">×</button>
    <?php }?>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value,'htmlall','utf-8' ));?>

</div>
<?php }
}
