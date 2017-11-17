<?php /* Smarty version Smarty-3.1.19, created on 2017-11-17 14:46:50
         compiled from "/var/www/html/admin1/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14496390545a0ee84a5de089-62897093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0601122a917da595678656ac06b526b37083998b' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1510508613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14496390545a0ee84a5de089-62897093',
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
  'unifunc' => 'content_5a0ee84a5e7701_40985408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ee84a5e7701_40985408')) {function content_5a0ee84a5e7701_40985408($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
