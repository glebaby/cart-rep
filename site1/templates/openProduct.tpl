<div id="openedProduct"> 
	<div class ="openedProduct-img">
		<img src="{$product.img}"/>
	</div>
	<div id="openedProduct-content">
		<h1 id="openedProduct-name">{$product.name}</h1>
		<div id="openedProduct-deck">
			Модель : {$product.model}
			<hr>
			{$product.more}
			<hr>
		</div>
		<div id="openedProduct-price">
			Цена : {$product.price}
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
