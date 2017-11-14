<?php /* Smarty version Smarty-3.1.19, created on 2017-11-12 21:48:21
         compiled from "/var/www/html/admin1/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1775578795a08b395e8a642-70717209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '563d615bc1d55a058016185de8f30bb735281a7c' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1510508613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1775578795a08b395e8a642-70717209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a08b395eac7a0_10909589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a08b395eac7a0_10909589')) {function content_5a08b395eac7a0_10909589($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
