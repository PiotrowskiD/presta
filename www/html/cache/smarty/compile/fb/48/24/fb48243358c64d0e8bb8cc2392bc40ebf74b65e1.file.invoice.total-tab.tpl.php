<?php /* Smarty version Smarty-3.1.19, created on 2017-11-17 16:15:16
         compiled from "/var/www/html/pdf/invoice.total-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12004729795a0efd045a2d71-72747575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb48243358c64d0e8bb8cc2392bc40ebf74b65e1' => 
    array (
      0 => '/var/www/html/pdf/invoice.total-tab.tpl',
      1 => 1510508613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12004729795a0efd045a2d71-72747575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0efd045d9ec8_80823759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0efd045d9ec8_80823759')) {function content_5a0efd045d9ec8_80823759($_smarty_tpl) {?>
<table id="total-tab" width="100%">

	<tr>
		<td class="grey" width="70%">
			<?php echo smartyTranslate(array('s'=>'Total Products','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white" width="30%">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['products_before_discounts_tax_excl']),$_smarty_tpl);?>

		</td>
	</tr>

	<?php if ($_smarty_tpl->tpl_vars['footer']->value['product_discounts_tax_excl']>0) {?>

		<tr>
			<td class="grey" width="70%">
				<?php echo smartyTranslate(array('s'=>'Total Discounts','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white" width="30%">
				- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['product_discounts_tax_excl']),$_smarty_tpl);?>

			</td>
		</tr>

	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['order']->value->isVirtual()) {?>
	<tr>
		<td class="grey" width="70%">
			<?php echo smartyTranslate(array('s'=>'Shipping Cost','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white" width="30%">
			<?php if ($_smarty_tpl->tpl_vars['footer']->value['shipping_tax_excl']>0) {?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['shipping_tax_excl']),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smartyTranslate(array('s'=>'Free Shipping','pdf'=>'true'),$_smarty_tpl);?>

			<?php }?>
		</td>
	</tr>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['footer']->value['wrapping_tax_excl']>0) {?>
		<tr>
			<td class="grey">
				<?php echo smartyTranslate(array('s'=>'Wrapping Cost','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['wrapping_tax_excl']),$_smarty_tpl);?>
</td>
		</tr>
	<?php }?>

	<tr class="bold">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Total (Tax excl.)','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_paid_tax_excl']),$_smarty_tpl);?>

		</td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['footer']->value['total_taxes']>0) {?>
	<tr class="bold">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Total Tax','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_taxes']),$_smarty_tpl);?>

		</td>
	</tr>
	<?php }?>
	<tr class="bold big">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Total','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_paid_tax_incl']),$_smarty_tpl);?>

		</td>
	</tr>
</table>
<?php }} ?>
