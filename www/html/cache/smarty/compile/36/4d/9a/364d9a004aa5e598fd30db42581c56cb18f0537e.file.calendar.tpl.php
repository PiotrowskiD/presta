<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 11:27:15
         compiled from "/var/www/html/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113708182859fee7839ff728-54476436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '364d9a004aa5e598fd30db42581c56cb18f0537e' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1509215144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113708182859fee7839ff728-54476436',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fee783a01d17_08235502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fee783a01d17_08235502')) {function content_59fee783a01d17_08235502($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
