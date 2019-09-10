<?php
/* Smarty version 3.1.33, created on 2019-09-10 11:50:53
  from '/var/www/html/site1/templates/openProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7755dd69a2c8_55049696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609e5ca866f8ad241f79cf8b9376087a4de979cb' => 
    array (
      0 => '/var/www/html/site1/templates/openProduct.tpl',
      1 => 1568099130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7755dd69a2c8_55049696 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="openedProduct"> 
	<div class ="openedProduct-img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img'];?>
"/>
	</div>
	<div id="openedProduct-content">
		<h1 id="openedProduct-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h1>
		<div id="openedProduct-deck">
			Модель : <?php echo $_smarty_tpl->tpl_vars['product']->value['model'];?>

			<hr>
			<?php echo $_smarty_tpl->tpl_vars['product']->value['more'];?>

			<hr>
		</div>
		<div id="openedProduct-price">
			Цена : <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>

		</div>
		<div class="bottoms">
			<div class="bottom">
			<a href=index.php?page=next>Продолжаем?</a>
			</div>
			<div class="bottom">
			<a href=index.php?page=shop>Назад</a>
			</div>
		</div>
	</div>
</div>
<?php }
}
