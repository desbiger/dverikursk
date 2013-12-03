<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>


<?
$first_properties = array(
	'Производитель' => 'MANUF',
	'Модель' => 'MODEL',
	'Розничная цена' => 'PRICE',
	'Оптовая цена' => 'PRICE_OPT',
	'Стоимость' => 'PRICE_STRING',
);
$not_included_properties = array(
	'DOP_TEXT',
	'PHOTOS',
);
CModule::IncludeModule('iblock');
$section = CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID'])
		->Fetch();
?>
<? $img = Cfile::ResizeImageGet($arResult['DETAIL_PICTURE']['ID'], array(
	'width' => 230,
	'height' => 2000
)) ?>
<script type = "text/javascript">
	$(function () {
		var tovar_id = '<?=$arResult['ID']?>';
		var session = '<?=$_SESSION['fixed_session_id']?>';
		$('#add_to_basket').click(function () {
			$.post(
					'/ajax/basket_add.php',
					{
						'PRODUCT_ID': tovar_id
					},
					function(date){
						$('#basket_count').html(date);
						alert('Товар добавлен в корзину');
					}

			);
		});


		$('.small_picture a').click(function () {
			$('.big_picture img').fadeOut(200);
			$('.big_picture img').attr('src', $(this).attr('rel'));
			$('.fancy').attr('href', $(this).attr('real_size'));
			$('.big_picture img').fadeIn(200);
			return false;
		});
	});
</script>

<div class = "sidebar_L">
	<div class = "left_cont">
		<div class = "big_picture">
			<a rel = "gallery" id = "img_href" href = "<?= $img['src'] ?>" class = "fancy"><img id = "img_conteiner" src = "<?= $img['src']
				?>" alt = ""></a>
		</div>

		<?if (count($arResult['PROPERTIES']['PHOTOS']['VALUE']) > 0): ?>
			<? foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photo): ?>
				<? $img        = CFile::ResizeImageGet($photo, array(
					'width' => 40,
					'height' => 50
				));
				$for_conteyner = CFile::ResizeImageGet($photo, array(
					'width' => 230,
					'height' => 2000
				));
				$realsize      = CFile::GetPath($photo);

				?>

				<div class = "small_picture">
					<a href = "" real_size = "<?= $realsize ?>" rel = "<?= $for_conteyner['src'] ?>">
						<img src = "<?= $img['src'] ?>" alt = "">
					</a>
				</div>
			<? endforeach ?>
			<div style = "display: none">
				<? foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photo): ?>
					<a rel = "gallery" href = "<?= CFile::GetPath($photo) ?>"></a>
				<? endforeach ?>
			</div>
		<? endif?>

	</div>


	<div class = "right_cont">

		<div class = "clear"></div>
		<h4><?=$section['NAME']?></h4>

		<table class = "sett">
			<tbody>
			<?foreach ($first_properties as $key => $f): ?>
				<? if ($arResult['PROPERTIES'][$f]['VALUE']): ?>
					<? if ($key == 'Розничная цена' | $key == 'Оптовая цена'): ?>
						<tr>
							<td><span><?=$key?>:</span></td>
							<td>
								<div class = "price">
									<i <?=$key == 'Оптовая цена' ? "class='red'" : ""?>>
										<?=preg_replace("/(.*)([0-9]{3})/isU", "$1 $2", $arResult['PROPERTIES'][$f]['VALUE'])?> р.
									</i>
								</div>
							</td>
						</tr>
					<? elseif ($key == "Стоимость"): ?>
						<? if (count($arResult['PROPERTIES'][$f]['VALUE']) > 0): ?>
							<tr>
								<td><span><strong><?=$key?>:</strong></span></td>
								<td>
									<? foreach ($arResult['PROPERTIES'][$f]['VALUE'] as $prices): ?>
										<div class = "price">
											<?$text = preg_replace("/^(.*)(от [0-9]+ т.р.)(.*)$/isu", "$1<span class='red_price'>$2</span>$3", $prices)?>
											<i><?=$text?></i>
										</div>
									<? endforeach ?>
								</td>
							</tr>
						<? endif ?>

					<?
					elseif ($key != ''): ?>
						<tr>
							<td><span><?=$key?>:</span></td>
							<td><?=$arResult['PROPERTIES'][$f]['VALUE']?></td>
						</tr>
					<?endif ?>
				<? endif ?>
			<? endforeach?>
			<tr>
				<td colspan = "2" style = "text-align: right">
					<input id = 'add_to_basket' type = "button" value = "В корзину" style = "width: 100px; height:
				40px; font-size:
				18px;
			background-color: #0D77BD; color: white; cursor:pointer; border: none; "></td>
			</tr>
			</tbody>
		</table>

		<?
		if ((bool)$arResult['PROPERTIES']['DOP_TEXT']['VALUE']) {
			$t = CIblockElement::GetByID($arResult['PROPERTIES']['DOP_TEXT']['VALUE'])
					->Fetch();?>
			<p><?= str_replace(array(
					"\r\n",
					"\n\r",
					"\n",
					"\r"
				), array(
					"<br>",
					"<br>",
					"<br>",
					"<br>"
				), $t['DETAIL_TEXT']) ?></p>
		<?
		}
		?>
		<p><?=$arResult['DETAIL_TEXT']?></p>


		<!--		<p><b>Основные технические характеристики:</b></p>-->
		<!---->
		<!--		<ul class = "setting">-->
		<!--			--><?//foreach ($arResult['PROPERTIES'] as $key => $vol): ?>
		<!--				--><?// if ($vol['VALUE'] && !in_array($key, $not_included_properties)): ?>
		<!--					<li>— --><?//=$vol['NAME']?><!-- --><?//=$vol['VALUE']?><!--</li>-->
		<!--				--><?// endif ?>
		<!--			--><?// endforeach?>
		<!---->
		<!--		</ul>-->


	</div>

	<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "news_list_3_in_detail", Array(
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"IBLOCK_TYPE" => "news",	// Тип инфоблока
		"IBLOCK_ID" => "6",	// Инфоблок
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_USER_FIELDS" => "",	// Свойства раздела
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"DISPLAY_COMPARE" => "N",	// Выводить кнопку сравнения
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
		"PAGE_ELEMENT_COUNT" => "3",	// Количество элементов на странице
		"LINE_ELEMENT_COUNT" => "",	// Количество элементов выводимых в одной строке таблицы
		"PROPERTY_CODE" => "",	// Свойства
		"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
		"PRICE_CODE" => "",	// Тип цены
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "Y",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Название шаблона
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		),
		false
	);?>
</div>
