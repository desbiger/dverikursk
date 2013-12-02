<?
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
	$APPLICATION->SetTitle("О нас");
?>
	<div class = "sidebar_R left_sid"> <?$APPLICATION->IncludeComponent("bitrix:menu", "left_menu_for_page", Array(
				"ROOT_MENU_TYPE" => "left",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS" => array(),
				"MAX_LEVEL" => "1",
				"CHILD_MENU_TYPE" => "left",
				"USE_EXT" => "N",
				"DELAY" => "N",
				"ALLOW_MULTI_SELECT" => "N"
			));?> <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "articles_list", Array(
				"IBLOCK_TYPE" => "news",
				"IBLOCK_ID" => "7",
				"SECTION_ID" => $_REQUEST["SECTION_ID"],
				"SECTION_CODE" => "",
				"SECTION_USER_FIELDS" => array(
					0 => "",
					1 => "",
				),
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_ORDER" => "asc",
				"FILTER_NAME" => "arrFilter",
				"INCLUDE_SUBSECTIONS" => "Y",
				"SHOW_ALL_WO_SECTION" => "Y",
				"PAGE_ELEMENT_COUNT" => "30",
				"LINE_ELEMENT_COUNT" => "3",
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
			));?> </div></div>
	<div class = "sidebar_L">
		<h4><span style = "font-family: arial, sans-serif; font-size: 1.17em; text-align: justify;">&laquo;Оптидор&raquo;: лучшие двери в
		                                                                                                   Курске</span></h4>
		<br/>

		<div style = "text-align: justify;">
			<span style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif;">Оптовая сеть</span><span style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif;"> </span><strong style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif; margin: 0px; padding: 0px;">&ldquo;Оптидор&rdquo;</strong><span style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif;"> </span><span style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif;">&ndash;
				динамично развивающаяся компания, сотрудничающая только с ведущими производителями и импортёрами, поставляющими двери в Курск. Широкий ассортимент и гибкая ценовая политика нашей компании позволяют нам предлагать двери в Курске по выгодным ценам широчайшему кругу клиентов, от розничных покупателей до специализированных магазинов и крупных строительных компаний. На данный момент нашими клиентами является более двухсот тысяч частных лиц, а также около 500 предприятий.</span>
		</div>

		<div style = "text-align: justify;"><span style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif;">Предприятие поставляет в Курск</span><span style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif;"> </span><a href = "http://dverikursk.ru/katalog/metallicheskie-dveri/" target = "blank_" style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif; margin: 0px; padding: 0px;">металлические
		                                                                                                                                                                                                                                                                                                                                                                                                                                          двери</a><span style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif;"> </span><span style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif;">всех уровней сложности и устойчивости к взломам, модельный ряд варьируется от простых, но надежных дверей до эксклюзивных моделей, дымонепроницаемых и противопожарных дверей и люков.</span>
		</div>

		<div style = "text-align: justify;"><span style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif;">Компания “Оптидор” производит двери в Курске благодаря собственному производству с парком современного металлообрабатывающего оборудования, который включает в себя: координатно-пробивные прессы с ЧПУ, гибочные прессы с ЧПУ и немецкие сварочные полуавтоматы. В производстве дверей применяются материалы от ведущих мировых производителей. </span><span style = "font-size: 12px; line-height: 2; font-family: arial, sans-serif;">Мы постоянно развиваем дилерскую сеть, расширяем и модернизируем производственные мощности, повышаем качество выпускаемой продукции. Политика ценообразования порадует любого, кто ищет качественно изготовленные двери в Курске.</span>
		</div>

		<div style = "text-align: justify;">
			<br/>
		</div>
	</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>