<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 11:27:23
         compiled from "/var/www/html/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138388289259fee78be66c93-02608752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07210e455ce8d6247a1375683131eb3e24233916' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1509215145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138388289259fee78be66c93-02608752',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fee78be6d198_84477903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fee78be6d198_84477903')) {function content_59fee78be6d198_84477903($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
