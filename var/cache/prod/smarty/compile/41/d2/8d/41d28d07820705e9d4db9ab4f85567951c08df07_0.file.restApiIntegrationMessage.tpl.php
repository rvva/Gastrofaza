<?php
/* Smarty version 3.1.33, created on 2020-07-01 21:22:13
  from '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/modules/paypal/views/templates/admin/_partials/messages/restApiIntegrationMessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efce265e73d93_77666656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d28d07820705e9d4db9ab4f85567951c08df07' => 
    array (
      0 => '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/modules/paypal/views/templates/admin/_partials/messages/restApiIntegrationMessage.tpl',
      1 => 1593631314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efce265e73d93_77666656 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">×</button>

    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'As we are constantly working on the security of your information, a new version of your merchant account authentication will be available starting from the v5.2.0 of PayPal Official module (v5.2.0 will be released in June 2020).','mod'=>'paypal'),$_smarty_tpl ) );?>

    </div>

    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please pay attention that after the update of the module it will be required to reconnect your PayPal merchant account in order to continue to use PayPal payment solution.','mod'=>'paypal'),$_smarty_tpl ) );?>

    </div>
</div>
<?php }
}
