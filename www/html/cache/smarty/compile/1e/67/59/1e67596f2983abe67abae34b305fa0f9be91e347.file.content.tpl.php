<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 11:27:19
         compiled from "/var/www/html/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77397257459fee787e0dd33-36646290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e67596f2983abe67abae34b305fa0f9be91e347' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/content.tpl',
      1 => 1509215144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77397257459fee787e0dd33-36646290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fee787e14775_84171242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fee787e14775_84171242')) {function content_59fee787e14775_84171242($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
