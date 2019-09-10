<h1>Каталог товаров </h1>
{foreach from=$products item=product}
	<div class="products">
			<img  src="{$product.img}"/>
			<hr>
			<div class= "productName">{$product.name}</div>
			<div class= "productModel">{$product.model}</div>
			<hr>
			<div class="productDesc">{$product.deck}</div>
			<hr>
			<div class="productPrice">Цена : {$product.price}</div>
			<div class="more"> <a href="index.php?page=product&id={$product.id}"> Подробнее </a> </div> 
	</div>
{/foreach}