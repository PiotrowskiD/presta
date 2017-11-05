<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 11:27:20
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85378880659fee788648126-03106800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9a89b28ea1237ca1ad2329b8265955520170562' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1509215144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85378880659fee788648126-03106800',
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
  'unifunc' => 'content_59fee788650f95_33061474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fee788650f95_33061474')) {function content_59fee788650f95_33061474($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
