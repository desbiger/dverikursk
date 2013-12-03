<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowHead()?>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8"/>
	

	<link href = "/bitrix/templates/index/css/style.css" type = "text/css" rel = "stylesheet"/>
	<link rel = "stylesheet" type = "text/css" href = "/bitrix/templates/index/fancybox/jquery.fancybox-1.3.4.css" media = "screen"/>

	<!--	<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery-1.7.1.min.js"></script>-->
	<!--<pre>--><?//print_r($_SERVER)?><!--</pre>-->
	<?if ($_SERVER['PHP_SELF'] != '/about-company/our_clients/index.php'): ?>
		<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery.min.1.4.js"></script>
	<? endif?>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/script.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery.jcarousel.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/mootools-core-1.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/doors.js"></script>

	<script type = "text/javascript" src = "/bitrix/templates/index/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type = "text/javascript">
		$(document).ready(function () {


$('#download').bind('click', function (e) {
                e.preventDefault();
                $('#element_to_pop_up2').bPopup({
                    easing: 'easeOutBack',
                    speed: 600,
                    opacity: 0.7,
                    modalColor: 'white',
                    transition: 'slideDown'
                });
            });



			$("a.fancy").fancybox({
				'titlePosition': 'inside'
			});

			$('.show_div').click(function () {
				$(this).toggleClass('active_show');
				$('.hide').stop(true, true).slideToggle(500);
			});

		});
	</script>


	<script type = "text/javascript">
		$(function () {
			$('ul.menu_top li').each(function () {
				var li = $(this);
				var children = li.children();
				if (children.length > 1) {
					children.first().addClass('active');
				}
			});
			$('.d-carousel .carousel').jcarousel({
				scroll: 1
			});
		});
	</script>

	<?if ($_SERVER['PHP_SELF'] == '/about-company/our_clients/index.php'): ?>
		<script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<? endif ?>
	<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/ppgallery.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery.easing.1.3.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery.bpopup.min.js"></script>
	<script type = "text/javascript">
		$(function () {
			$("ul.tab li:first a").addClass("active");
			$("ul.tab li a").click(function () {
				if (!$(this).hasClass('active')) {
					$("ul.tab li a").removeClass("active");
					$(this).addClass("active");
					$(".filter_in").hide();
					var activeTab = $(this).attr("href");
					$(activeTab).show(300);
				}
				return false;
			});

			$('#popap').bind('click', function (e) {
				e.preventDefault();
				$('#element_to_pop_up').bPopup({
					easing: 'easeOutBack',
					speed: 600,
					opacity: 0.7,
					modalColor: 'white',
					transition: 'slideDown'
				});
			});
			$('#popap1').bind('click', function (e) {
				e.preventDefault();
				$('#element_to_pop_up1').bPopup({
					easing: 'easeOutBack',
					speed: 600,
					opacity: 0.7,
					modalColor: 'white',
					transition: 'slideDown'
				});
			});

		});
	</script>


</head>
<body>
<?$APPLICATION->ShowPanel()?>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type = 'text/javascript'>
	(function () {
		var widget_id = '43630';
		var s = document.createElement('script');
		s.type = 'text/javascript';
		s.async = true;
		s.src = '//code.jivosite.com/script/widget/' + widget_id;
		var ss = document.getElementsByTagName('script')[0];
		ss.parentNode.insertBefore(s, ss);
	})();</script>
<!-- {/literal} END JIVOSITE CODE -->


<div id = "header">
	<h5>
		<a href = "/">
			<img src = "/bitrix/templates/index/image/logo.png" alt = ""/>
		</a>
	</h5>
<div style="position: absolute; left: 10px; bottom: 0px">
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => "top",
			"EDIT_TEMPLATE" => ""
		)
	);?>
</div>
	<div class = "mess_phone">

		<?$APPLICATION->IncludeComponent("myComponents:size.me", ".default", array(
	"EMAIL" => "stroyka@optidoor.ru"
	),
	false
);?><?$APPLICATION->IncludeComponent("myComponents:call.me", ".default", array(
	"EMAIL" => "stroyka@optidoor.ru"
	),
	false
);?>
		<?$APPLICATION->IncludeComponent("myComponents:basket.small", ".default", array(
	"EMAIL" => "stroyka@optidoor.ru"
	),
	false
);?>

	</div>

	<div class = "contact">
		<i>Горячая линия, звонок бесплатный</i>

		<h3><span>8 800</span> 450-02-80</h3>

		<!--		<p>г. Курск, ул. Магистральная, 44 а</p>-->
		<p style = "font-size: 13px; color: #0D77BD">Консультации специалистов<br>
		                                             Пн-Пт 08:00-18:00, Сб 09:00-14:00</p>
	</div>

	<div class = "clear"></div>

	<div class = "menu">
		<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel_my", array(
			"ROOT_MENU_TYPE" => "top",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"MENU_CACHE_GET_VARS" => array(),
			"MAX_LEVEL" => "3",
			"CHILD_MENU_TYPE" => "left",
			"USE_EXT" => "Y",
			"DELAY" => "N",
			"ALLOW_MULTI_SELECT" => "N"
		), false);?>
	</div>

</div>

<div class = "clear"></div>


<div id = "content_top">
	<div class = "range">
		<div class = "content_top_center">

			<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "slider_on_base", array(
					"IBLOCK_TYPE" => "other",
					"IBLOCK_ID" => "15",
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
					"SHOW_ALL_WO_SECTION" => "N",
					"PAGE_ELEMENT_COUNT" => "30",
					"LINE_ELEMENT_COUNT" => "3",
					"PROPERTY_CODE" => array(
						0 => "LINK",
						1 => "ONCLICK",
						2 => "",
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
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Товары",
					"PAGER_SHOW_ALWAYS" => "Y",
					"PAGER_TEMPLATE" => "",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "Y",
					"AJAX_OPTION_ADDITIONAL" => ""
				), false);?>

			<? if ($_SERVER['PHP_SELF'] == "/index.php"): ?>
				<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "razdels_on_base", array(
					"IBLOCK_TYPE" => "products",
					"IBLOCK_ID" => "8",
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
					"SHOW_ALL_WO_SECTION" => "N",
					"PAGE_ELEMENT_COUNT" => "30",
					"LINE_ELEMENT_COUNT" => "3",
					"PROPERTY_CODE" => array(
						0 => "RAZDEL",
						1 => "PICTURE",
						2 => "",
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
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Товары",
					"PAGER_SHOW_ALWAYS" => "Y",
					"PAGER_TEMPLATE" => "",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "Y",
					"AJAX_OPTION_ADDITIONAL" => ""
				), false);?>

			<? endif?>

		</div>
	</div>
</div>
<div id = "content">
	<div class = "content_center">
		<?if ($_SERVER['PHP_SELF'] == "/index.php"): ?>
			<!--			<div class = "slaider_cont">-->
			<!--				<div id = "wrapper">-->
			<!--					<div class = "d-carousel">-->
			<!--						<ul class = "carousel">-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic2.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Противопожарные люки</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic3.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Противопожарные люки</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic4.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Рентгенозащитные двери</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic5.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Почтовые ящики</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic2.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Противопожарные люки</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic3.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Противопожарные люки</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic4.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Рентгенозащитные двери</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic5.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Почтовые ящики</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic2.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Противопожарные люки</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic3.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Противопожарные люки</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic4.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Рентгенозащитные двери</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic5.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Почтовые ящики</a>-->
			<!--							</li>-->
			<!--							<li>-->
			<!--								<div class = "border">-->
			<!--									<a href = "#"><img src = "/bitrix/templates/index/image/pic5.jpg" alt = ""/></a>-->
			<!--								</div>-->
			<!--								<a href = "#" class = "carous_a">Почтовые ящики</a>-->
			<!--							</li>-->
			<!--						</ul>-->
			<!--					</div>-->
			<!--					<div class = "clear"></div>-->
			<!--				</div>-->
			<!--			</div>-->
		<? endif ?>
