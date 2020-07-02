<?php
/* Smarty version 3.1.33, created on 2020-07-01 21:22:13
  from '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/modules/paypal/views/templates/admin/setup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efce265e5d6c5_69240775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95e9b7b0bcdc4c1b26275939eee07139104cbad8' => 
    array (
      0 => '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/modules/paypal/views/templates/admin/setup.tpl',
      1 => 1593631314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/messages/prestashopCheckoutInfo.tpl' => 1,
    'file:./_partials/messages/restApiIntegrationMessage.tpl' => 1,
    'file:./_partials/headerLogo.tpl' => 1,
  ),
),false)) {
function content_5efce265e5d6c5_69240775 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['showPsCheckoutInfo']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/prestashopCheckoutInfo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['showRestApiIntegrationMessage']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/restApiIntegrationMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender('file:./_partials/headerLogo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <div class="row pp__flex">
        <div class="col-lg-8 stretchHeightForm pp__pb-4">
            <?php if (isset($_smarty_tpl->tpl_vars['formAccountSettings']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['formAccountSettings']->value;?>
             <?php }?>

        </div>
        <div class="col-lg-4 pp__flex pp__flex_direction_column pp__justify-content-between">
            <?php if (isset($_smarty_tpl->tpl_vars['formEnvironmentSettings']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['formEnvironmentSettings']->value;?>
             <?php }?>

            <div class="status-block-container">
                <?php if (isset($_smarty_tpl->tpl_vars['formStatusTop']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['formStatusTop']->value;?>
                 <?php }?>
            </div>
        </div>
    </div>

    <div class="row pp__flex">
        <div class="col-lg-8">
            <?php if (isset($_smarty_tpl->tpl_vars['formPaymentSettings']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['formPaymentSettings']->value;?>
             <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['formMerchantAccounts']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['formMerchantAccounts']->value;?>

            <?php }?>
        </div>
        <div class="col-lg-4 stretchHeightForm pp__pb-4 status-block-container">
            <?php if (isset($_smarty_tpl->tpl_vars['formStatus']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['formStatus']->value;?>
             <?php }?>
        </div>
    </div>
</div>
<?php }
}
