<?
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
	$APPLICATION->SetPageProperty("keywords", "входные двери, межкомнатные двери, металлические двери в курске");
	$APPLICATION->SetPageProperty("description", "входные и межкомнатные двери в Курске оптом и в розницу. Широкий ассортимент в наличии и под заказ.");
	$APPLICATION->SetTitle("Каталог");
?>
	<div class = "sidebar_R left_sid">        <?$not_show_in = array(
			'protivopozharnaya-produktsiya',
			'pochtovye-yashchiki',
			'metallicheskie-stellazhi',
			'dlya-doma',
			'dlya-sklada',
			'dlya-ofisa',
			"vorota",
			"rentgenozashchitnye-dveri",
			"protivopozhanye-dveri",
			"lyuki"
		)?>        <?if (!in_array($_REQUEST['SECTION_ID'], $not_show_in)): ?>
			<h3 style="margin-top: 30px;">Сортировать</h3>
			<ul class = "tab">
				<li><a href = "#tab1" class = "active">По цене</a></li>

				<li><a href = "#tab2">По производителю</a></li>
			</ul>
		<? endif?>
		<div class = "download"><a id = "download" href = "#">Скачать прайс-лист</a></div>

		<div class = "baner"><a href = "/services/">
				<img src = "/bitrix/templates/index/image/baner11.jpg" width = "220" height = "110"/></a></div>

		<div class = "baner"><a href = "/services/"> <img src = "/bitrix/templates/index/image/baner2.jpg"/></a></div>

		<div class = "baner"><a href = "/services/"> <img src = "/bitrix/templates/index/image/baner3.jpg"/></a></div>
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "articles_list", Array(
				"IBLOCK_TYPE" => "news",
				"IBLOCK_ID" => "7",
				"SECTION_ID" => "",
				"SECTION_CODE" => "",
				"SECTION_USER_FIELDS" => array(
					0 => "",
					1 => "",
				),
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_ORDER" => "asc",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER2" => "desc",
				"FILTER_NAME" => "arrFilter",
				"INCLUDE_SUBSECTIONS" => "Y",
				"SHOW_ALL_WO_SECTION" => "Y",
				"PAGE_ELEMENT_COUNT" => "3",
				"LINE_ELEMENT_COUNT" => "",
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
				"OFFERS_LIMIT" => "5",
				"SECTION_URL" => "",
				"DETAIL_URL" => "",
				"BASKET_URL" => "/personal/basket.php",
				"ACTION_VARIABLE" => "action",
				"PRODUCT_ID_VARIABLE" => "id",
				"PRODUCT_QUANTITY_VARIABLE" => "quantity",
				"PRODUCT_PROPS_VARIABLE" => "prop",
				"SECTION_ID_VARIABLE" => "SECTION_ID",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "Y",
				"META_KEYWORDS" => "-",
				"META_DESCRIPTION" => "-",
				"BROWSER_TITLE" => "-",
				"ADD_SECTIONS_CHAIN" => "N",
				"DISPLAY_COMPARE" => "N",
				"SET_TITLE" => "Y",
				"SET_STATUS_404" => "N",
				"CACHE_FILTER" => "N",
				"PRICE_CODE" => array(),
				"USE_PRICE_COUNT" => "N",
				"SHOW_PRICE_COUNT" => "1",
				"PRICE_VAT_INCLUDE" => "Y",
				"PRODUCT_PROPERTIES" => array(),
				"USE_PRODUCT_QUANTITY" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Товары",
				"PAGER_SHOW_ALWAYS" => "Y",
				"PAGER_TEMPLATE" => "",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "Y",
				"AJAX_OPTION_ADDITIONAL" => ""
			));?>
		<h3>Новости</h3>
		<?$APPLICATION->IncludeComponent("myComponents:news.list", ".default", Array(
				"IBLOCK_TYPE" => "news",
				"IBLOCK_ID" => "6",
				"NEWS_COUNT" => "3",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_ORDER1" => "DESC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "d-m-Y",
				"SET_TITLE" => "Y",
				"SET_STATUS_404" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Новости",
				"PAGER_SHOW_ALWAYS" => "Y",
				"PAGER_TEMPLATE" => "",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"AJAX_OPTION_ADDITIONAL" => ""
			));?> </div>

	<div class = "sidebar_L"> <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", Array(
				"START_FROM" => "0",
				"PATH" => "",
				"SITE_ID" => "-"
			));?> <?include_once($_SERVER['DOCUMENT_ROOT'] . "/my_class.php");?>
		<h4><?=my_class::GetRazdelName($_REQUEST['SECTION_ID'])?></h4>
		<? if ($_GET) {
			$prices = array(
				'1' => array(
					'min' => 0,
					'max' => 4999,
				),
				'2' => array(
					'min' => 5000,
					'max' => 9999,
				),
				'3' => array(
					'min' => 10000,
					'max' => 14999,
				),
				'4' => array(
					'min' => 15000,
					'max' => 50000,
				),
			);
			foreach ($_GET as $key => $fields) {
				if ($key != 'PRICE_DIAPOZON') {
					$GLOBALS['arrFilter'][$key] = $fields;
				}
				else {
					$GLOBALS['arrFilter'][] = array(
						'LOGIC' => 'AND',
						array(
							'<PROPERTY_PRICE' => $prices[$_GET['PRICE_DIAPOZON']]['max']
						),
						array(
							'>PROPERTY_PRICE' => $prices[$_GET['PRICE_DIAPOZON']]['min']
						)

					);
				}
			}


		}
		?>
		<div class = "clear"></div>
		<? $count = isset($_REQUEST['items']) ? $_REQUEST['items'] : 16?> <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "doors_list", Array(
				"IBLOCK_TYPE" => "products",
				"IBLOCK_ID" => "5",
				"SECTION_ID" => $_REQUEST["SECTION_ID"],
				"SECTION_CODE" => $_REQUEST["SECTION_ID"],
				"SECTION_USER_FIELDS" => array(
					0 => "UF_KEY",
					1 => "UF_DESCRIPTION",
					2 => "UF_TITLE",
					3 => "UF_H1",
					4 => "",
				),
				"ELEMENT_SORT_FIELD" => "PROPERTY_PRICE",
				"ELEMENT_SORT_ORDER" => "asc",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER2" => "desc",
				"FILTER_NAME" => "arrFilter",
				"INCLUDE_SUBSECTIONS" => "N",
				"SHOW_ALL_WO_SECTION" => "N",
				"PAGE_ELEMENT_COUNT" => $count,
				"LINE_ELEMENT_COUNT" => "3",
				"PROPERTY_CODE" => array(
					0 => "CHECK",
					1 => "AKCIYA",
					2 => "HIT",
					3 => "REKOMENDUEM",
					4 => "NEW",
					5 => "MANUF",
					6 => "OTDELKA_IN",
					7 => "OTDELKA_OUT",
					8 => "DOOR_DAY",
					9 => "DOP_POLE",
					10 => "DOP_LOCK",
					11 => "MODEL",
					12 => "FOR",
					13 => "NAPOLNITEL",
					14 => "BASE_LOCK",
					15 => "PETLI",
					16 => "POROG",
					17 => "BREND",
					18 => "SIZE",
					19 => "RASPRODAZHA",
					20 => "SKIDKA",
					21 => "WIDTH",
					22 => "PRICE",
					23 => "PRICE_OPT",
					24 => "SPECPRICE",
					25 => "",
				),
				"OFFERS_LIMIT" => "5",
				"SECTION_URL" => "",
				"DETAIL_URL" => "",
				"BASKET_URL" => "/personal/basket.php",
				"ACTION_VARIABLE" => "action",
				"PRODUCT_ID_VARIABLE" => "id",
				"PRODUCT_QUANTITY_VARIABLE" => "quantity",
				"PRODUCT_PROPS_VARIABLE" => "prop",
				"SECTION_ID_VARIABLE" => "SECTION_ID",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "Y",
				"META_KEYWORDS" => "UF_KEY",
				"META_DESCRIPTION" => "UF_DESCRIPTION",
				"BROWSER_TITLE" => "UF_TITLE",
				"ADD_SECTIONS_CHAIN" => "N",
				"DISPLAY_COMPARE" => "N",
				"SET_TITLE" => "Y",
				"SET_STATUS_404" => "N",
				"CACHE_FILTER" => "N",
				"PRICE_CODE" => array(),
				"USE_PRICE_COUNT" => "N",
				"SHOW_PRICE_COUNT" => "1",
				"PRICE_VAT_INCLUDE" => "Y",
				"PRODUCT_PROPERTIES" => array(),
				"USE_PRODUCT_QUANTITY" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"PAGER_TITLE" => "Товары",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => "optidor",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "Y",
				"RAZDELS" => array(
					0 => $not_show_in,
					1 => "",
				),
				"AJAX_OPTION_ADDITIONAL" => ""
			));?> </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>