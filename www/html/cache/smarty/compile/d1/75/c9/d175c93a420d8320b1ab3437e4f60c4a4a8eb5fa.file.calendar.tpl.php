<?php /* Smarty version Smarty-3.1.19, created on 2017-12-10 22:22:42
         compiled from "/var/www/html/admin1/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4482858215a2da5a2d97420-06907026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd175c93a420d8320b1ab3437e4f60c4a4a8eb5fa' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1512939708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4482858215a2da5a2d97420-06907026',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2da5a2d98f43_49346191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2da5a2d98f43_49346191')) {function content_5a2da5a2d98f43_49346191($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
