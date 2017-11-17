<?php /* Smarty version Smarty-3.1.19, created on 2017-11-17 15:40:04
         compiled from "/var/www/html/modules/blockcategories/views/blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18245115915a0ef4c477f485-18995988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c5a265bd6e65c8026dd5feba9bdbb63edfefdf3' => 
    array (
      0 => '/var/www/html/modules/blockcategories/views/blockcategories_admin.tpl',
      1 => 1510508613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18245115915a0ef4c477f485-18995988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helper' => 0,
    'format' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0ef4c478ac32_88360204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ef4c478ac32_88360204')) {function content_5a0ef4c478ac32_88360204($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'In the default theme, these images will be displayed in the top horizontal menu; but only if the category is one of the first level (see Top horizontal menu module for more info).','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Menu thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
	<div class="col-lg-6 col-lg-offset-3">
		<div class="help-block"><?php echo smartyTranslate(array('s'=>'Recommended dimensions (for the default theme): %1spx x %2spx','sprintf'=>array($_smarty_tpl->tpl_vars['format']->value['width'],$_smarty_tpl->tpl_vars['format']->value['height'])),$_smarty_tpl);?>
</div>
	</div>
</div>
<?php }} ?>
