<? if ($_SERVER['PHP_SELF'] == "/index.php"): ?>
	<div class = "recommend">
		<h3>Мы рекомендуем</h3>
		<?$GLOBALS['arrFilter'] = array("PROPERTY_REKOMENDUEM_VALUE" => 'да')?>
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "rekomenduem", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "5",
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
		0 => "REKOMENDUEM",
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
	"PRICE_CODE" => array(
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRODUCT_PROPERTIES" => array(
	),
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
	),
	false
);?>


	</div>
<? endif ?>
</div>
</div>

<div class = "clear"></div>

<div id = "footer">
	<div class = "range_fot">
		<div class = "footer_center">
			<div class = "logo">
				<a href = "/">
					<img src = "/bitrix/templates/index/image/logo_footer.png" alt = ""/>
				</a>
			</div>

			<div class = "phone">
				<i>многоканальный телефон</i>

				<h3><span>(4712)</span> 77-02-80</h3>

				<p>г. Курск, ул. Магистральная, 44 А</p>
				<br>
				<!-- Yandex.Metrika informer -->
				<a href="http://metrika.yandex.ru/stat/?id=17337745&amp;from=informer"
				target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/17337745/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
				style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" /></a>
				<!-- /Yandex.Metrika informer -->

				<!--LiveInternet counter--><script type="text/javascript"><!--
				document.write("<a href='http://www.liveinternet.ru/click' "+
				"target=_blank><img src='//counter.yadro.ru/hit?t22.11;r"+
				escape(document.referrer)+((typeof(screen)=="undefined")?"":
				";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
				screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
				";"+Math.random()+
				"' alt='' title='LiveInternet: показано число просмотров за 24"+
				" часа, посетителей за 24 часа и за сегодня' "+
				"border='0' width='88' height='31'><\/a>")
				//--></script><!--/LiveInternet-->
			</div>
			<div class = "clear"></div>

			<div class = "fot_cent">
				разработка сайта <a target="_new" href = "http://hit-media.ru/">High-Tech Media</a>
			</div>
		</div>
	</div>
</div>

<script type = "text/javascript">
	var slideshow = new TINY.slider.slide('slideshow', {
		id: 'slider',
		auto: 3,
		resume: false,
		vertical: false,
		navid: 'pagination',
		activeclass: 'current',
		position: 0,
		rewind: false,
		elastic: false,
		left: 'slideleft',
		right: 'slideright'
	});
</script>




<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter17337745 = new Ya.Metrika({id:17337745,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/17337745" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?if($_REQUEST['SECTION_ID'] == 'metallicheskie-dveri'){
	$mail = "2633888@optidoor.ru";
}elseif($_REQUEST['SECTION_ID'] == 'mezhkomnatnye-dveri'){
	$mail = "7233327@optidoor.ru";
}else{
	$mail = "stroyka@optidoor.ru";
}?>

<div id="element_to_pop_up2" style="display:none">
        <div class="style_popap">
            <div class="b-close">
				<img src="/bitrix/templates/index/image/close.png" alt="">
            </div>

            <div style="width: 400px; line-height: 22px; color: #686868; font-size: 14px">Для получения более подробной информации по
                                                                                          ассортименту,
                                                                                          оптовым  и розничным ценам, а так же
                условиям
                сотрудничества, необходимо связаться с сотрудниками нашей компании:<br> по телефону <b>8 800 450-02-80</b>,либо
                отправить запрос на email : <span style="color: #0D77BD"><?=$mail?></span>
            </div>
        </div>

    </div>

</body>
</html>