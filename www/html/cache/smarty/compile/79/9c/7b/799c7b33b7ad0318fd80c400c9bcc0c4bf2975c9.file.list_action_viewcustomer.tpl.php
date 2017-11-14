<?php /* Smarty version Smarty-3.1.19, created on 2017-11-12 21:56:09
         compiled from "/var/www/html/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8639766715a08b569cf9833-89516613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '799c7b33b7ad0318fd80c400c9bcc0c4bf2975c9' => 
    array (
      0 => '/var/www/html/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1510508613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8639766715a08b569cf9833-89516613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a08b569d22525_69079060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a08b569d22525_69079060')) {function content_5a08b569d22525_69079060($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
