<?
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
		die();
	}?>
	<h2>Корзина</h2>
<? if (count($arResult) > 0): ?>
<!--	<pre>--><?//print_r($arResult)?><!--</pre>-->
	<form method = "post">
		<table class = "basket_table">
			<tr>
				<td>Картинка</td>
				<td>Название</td>
				<td>Количество</td>
				<td>Удалить</td>
			</tr>

			<? foreach ($arResult as $vol) : ?>
				<? $img   = CFile::ResizeImageGet($vol['PROPERTY']['TOVAR']['DETAIL_PICTURE'], array(
					'width' => 100,
					'height' => 100
				));
				$real_img = CFile::GetPath($vol['PROPERTY']['TOVAR']['DETAIL_PICTURE']);
				?>
				<tr>
					<td style = "text-align: center"><a class = "fancy" href = "<?= $real_img ?>"><img src = "<?= $img['src'] ?>" alt = ""/></a>
					</td>
					<td><a href = "<?= $vol['PROPERTY']['TOVAR']['DETAIL_PAGE_URL'] ?>"><?= $vol['NAME'] ?></a></td>
					<td style = "text-align: center">
						<input type = "text" name = "count_<?= $vol['ID'] ?>" value = "<?= $vol['PROPERTY']['COUNT']['VALUE'] ?>"/></td>
					<td><a href = "?itemdel=<?= $vol['ID'] ?>">Удалить</a></td>
				</tr>
			<? endforeach ?>
		</table>
		<div class = "clear"></div>
		<div style = "text-align: right">
			<input type = "submit" name = "update" value = "Обновить корзину">
			<input type = "submit" name = "del" value = "Очистить корзину">
		</div>
	</form>
	<div class = "clear"></div>
	<h3>Оформление заказа</h3>
	<form action = "" method = "post">
		<lable>Контактное лицо<br>
			<input type = "text" name = "name"/></lable>
		<br><br>
		<lable>Телефон<br>
			<input type = "text" name = "phone"/></lable>
		<br><br>
		<lable>email<br>
			<input type = "text" name = "email"/></lable>
		<br><br>

		<div class = "clear"></div>
		<br>
		Примечание <br>
		<textarea name = "text" style = "margin: 0px;
width: 730px;
height: 167px;" rows = "10"></textarea>

		<div class = "clear"></div>
		<input name="finish" type = "submit" value = "Оформить заказ"/>
	</form>
<? else: ?>
		<?if($_REQUEST['ready']):?>
			Ваш заказ оформлен. В ближайшее время с вами свяжется наш менеджер
			<?else:?>
		Ваша корзину пуста
			<?endif?>

<?endif ?>