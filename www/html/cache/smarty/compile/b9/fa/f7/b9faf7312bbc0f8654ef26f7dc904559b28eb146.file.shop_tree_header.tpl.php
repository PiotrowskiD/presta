<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 11:27:16
         compiled from "/var/www/html/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41047792659fee784efc972-25365391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9faf7312bbc0f8654ef26f7dc904559b28eb146' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1509215144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41047792659fee784efc972-25365391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fee784f075e3_17091801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fee784f075e3_17091801')) {function content_59fee784f075e3_17091801($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>
