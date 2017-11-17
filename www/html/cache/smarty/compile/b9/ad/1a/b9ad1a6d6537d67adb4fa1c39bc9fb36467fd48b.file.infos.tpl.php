<?php /* Smarty version Smarty-3.1.19, created on 2017-11-17 14:52:19
         compiled from "/var/www/html/modules/bankwire/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9384878125a0ee993248ab2-66665074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9ad1a6d6537d67adb4fa1c39bc9fb36467fd48b' => 
    array (
      0 => '/var/www/html/modules/bankwire/views/templates/hook/infos.tpl',
      1 => 1510508613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9384878125a0ee993248ab2-66665074',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0ee993273d60_29775630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ee993273d60_29775630')) {function content_5a0ee993273d60_29775630($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
