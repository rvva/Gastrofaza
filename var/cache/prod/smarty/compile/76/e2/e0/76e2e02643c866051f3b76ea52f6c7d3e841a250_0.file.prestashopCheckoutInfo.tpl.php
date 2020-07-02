<?php
/* Smarty version 3.1.33, created on 2020-07-01 21:22:13
  from '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/modules/paypal/views/templates/admin/_partials/messages/prestashopCheckoutInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efce265e6a693_83470841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76e2e02643c866051f3b76ea52f6c7d3e841a250' => 
    array (
      0 => '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/modules/paypal/views/templates/admin/_partials/messages/prestashopCheckoutInfo.tpl',
      1 => 1593631314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efce265e6a693_83470841 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info ps-checkout-info">
  <button type="button" class="close" data-dismiss="alert" data-action="close">×</button>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module allows your customers to pay with their PayPal account. If you wish to accept credit cards and other payment methods in addition to PayPal, we recommend the [a @href1@]PrestaShop Checkout[/a] module.','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
ob_start();
echo '#';
$_prefixVariable5 = ob_get_clean();
ob_start();
echo 'data-action="install"';
$_prefixVariable6 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable4,array('@href1@'=>$_prefixVariable5,'@target@'=>$_prefixVariable6));?>

</div>
<?php }
}
