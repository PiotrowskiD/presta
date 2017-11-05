<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 11:30:07
         compiled from "/var/www/html/admin1/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194596483459fee82f127892-87181823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97769a35fa32bcee1a7354872ba5c61bc8a2e5c0' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/content.tpl',
      1 => 1509215144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194596483459fee82f127892-87181823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fee82f12deb5_20839451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fee82f12deb5_20839451')) {function content_59fee82f12deb5_20839451($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
