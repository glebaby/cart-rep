<?php
/* Smarty version 3.1.33, created on 2019-09-10 10:53:55
  from '/var/www/html/site1/templates/shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d774883d8c721_29387609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f876db7dea8c20fe8d134a02dbd4d4e361b2b390' => 
    array (
      0 => '/var/www/html/site1/templates/shop.tpl',
      1 => 1568098383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d774883d8c721_29387609 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Каталог товаров </h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
	<div class="products">
			<img  src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
"/>
			<hr>
			<div class= "productName"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</div>
			<div class= "productModel"><?php echo $_smarty_tpl->tpl_vars['product']->value['model'];?>
</div>
			<hr>
			<div class="productDesc"><?php echo $_smarty_tpl->tpl_vars['product']->value['deck'];?>
</div>
			<hr>
			<div class="productPrice">Цена : <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</div>
			<div class="more"> <a href="index.php?page=product&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"> Подробнее </a> </div> 
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
