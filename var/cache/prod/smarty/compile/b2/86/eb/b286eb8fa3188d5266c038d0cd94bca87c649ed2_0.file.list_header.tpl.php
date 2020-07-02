<?php
/* Smarty version 3.1.33, created on 2020-07-01 21:23:41
  from '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/admin914ob5iqv/themes/default/template/controllers/addresses/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efce2bd4409d4_23776793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b286eb8fa3188d5266c038d0cd94bca87c649ed2' => 
    array (
      0 => '/home/pomarex16/domains/gastrofaza.dark-side.eu/public_html/admin914ob5iqv/themes/default/template/controllers/addresses/helpers/list/list_header.tpl',
      1 => 1593626339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efce2bd4409d4_23776793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3243276695efce2bd438a15_32401600', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_3243276695efce2bd438a15_32401600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_3243276695efce2bd438a15_32401600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		parent.getSummary();
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
