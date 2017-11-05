<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 11:27:20
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81509221959fee7885a7900-40193129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43e57f6ab62ce2230aae0f7ee5a8387fce1009dd' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl',
      1 => 1509215144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81509221959fee7885a7900-40193129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fee7885b3c53_75109114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fee7885b3c53_75109114')) {function content_59fee7885b3c53_75109114($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-truck"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
