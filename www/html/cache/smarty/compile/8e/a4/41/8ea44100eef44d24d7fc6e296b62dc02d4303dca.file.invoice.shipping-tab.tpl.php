<?php /* Smarty version Smarty-3.1.19, created on 2017-11-17 16:15:16
         compiled from "/var/www/html/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8525514865a0efd045ec8a0-24877581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ea44100eef44d24d7fc6e296b62dc02d4303dca' => 
    array (
      0 => '/var/www/html/pdf/invoice.shipping-tab.tpl',
      1 => 1510508613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8525514865a0efd045ec8a0-24877581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0efd045f1780_71011119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0efd045f1780_71011119')) {function content_5a0efd045f1780_71011119($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
