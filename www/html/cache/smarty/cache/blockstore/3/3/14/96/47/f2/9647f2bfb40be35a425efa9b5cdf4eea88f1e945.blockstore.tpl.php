<?php /*%%SmartyHeaderCode:14096233955a0ef0031073d0-30663386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9647f2bfb40be35a425efa9b5cdf4eea88f1e945' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockstore/blockstore.tpl',
      1 => 1510508613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14096233955a0ef0031073d0-30663386',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0ef0031349f4_74494058',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ef0031349f4_74494058')) {function content_5a0ef0031349f4_74494058($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://localhost:8080/sklepy" title="Nasze sklepy">
			Nasze sklepy
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://localhost:8080/sklepy" title="Nasze sklepy">
				<img class="img-responsive" src="http://localhost:8080/modules/blockstore/store.jpg" alt="Nasze sklepy" />
			</a>
		</p>
				<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://localhost:8080/sklepy" 
			title="Nasze sklepy">
				<span>Odkryj nasze sklepy<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
