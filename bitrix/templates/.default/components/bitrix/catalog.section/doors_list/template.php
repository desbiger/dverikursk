<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<? if ($arResult['SECTION']): ?>
	<h1><?=$arResult['SECTION']['UF_H1'] ? $arResult['SECTION']['UF_H1'] : $arResult['SECTION']['NAME']?></h1>

<? endif ?>
<?$not_show_in = $arParams['RAZDELS'];


array(
	'protivopozharnaya-produktsiya',
	'pochtovye-yashchiki',
	'metallicheskie-stellazhi',
	'dlya-doma',
	'dlya-sklada',
	'dlya-ofisa',
	"vorota",
	"rentgenozashchitnye-dveri",
	"protivopozhanye-dveri",
)?>

<? if (count($arResult['ITEMS']) > 0 && !in_array($_REQUEST['SECTION_ID'], $not_show_in)): ?>
	<div class = "filter">
		<ul class = "filter_in" id = "tab1" style = "display: block;">
			<li><a href = "?PRICE_DIAPOZON=1"> <span> <img src = "/bitrix/templates/index/image/price1.png"/> </span> <b> до 4 999 р
			                                                                                                              .</b> </a>
			</li>

			<li><a href = "?PRICE_DIAPOZON=2"> <span> <img src = "/bitrix/templates/index/image/price2.png"/> </span> <b>от 5 000 р. до
			                                                                                                             9 999 р.</b>
				</a></li>

			<li><a href = "?PRICE_DIAPOZON=3"> <span> <img src = "/bitrix/templates/index/image/price3.png"/> </span> <b> от 10 000 р .
			                                                                                                              до 14 999
			                                                                                                              р.</b> </a>
			</li>

			<li><a href = "?PRICE_DIAPOZON=4"> <span> <img src = "/bitrix/templates/index/image/price4.png"/> </span> <b> от 15 000 р
			                                                                                                              .</b> </a>
			</li>
		</ul>
		<?$brends = my_class::GetBrendsBySectionCode($_REQUEST['SECTION_ID']);?>
		<ul class = "filter_in" id = "tab2" style = "display: none;">
			<?foreach ($brends as $brand): ?>
				<? $img = CFile::ResizeImageGet($brand['DETAIL_PICTURE'], array(
					'width' => 60,
					'height' => 60
				)) ?>
				<li style = "width: 60px; height: 100px">
					<a style = "width:60px" href = "?PROPERTY_BREND=<?= $brand['NAME'] ?>">
						<span style = "height:63px"> <img src = "<?= $img['src'] ?>"/> </span>
						<b><?=$brand['NAME']?></b>
					</a>
				</li>
			<? endforeach?>
		</ul>
	</div>

	<div class = "clear"></div>

<? endif ?>
<? function Check($value, $name)
{
	if (isset($_REQUEST[$name])) {
		return $_REQUEST[$name] == $value ? "selected='selected'" : "";
	}
	else {
		$_REQUEST[$name] = 16;
		return $_REQUEST[$name] == $value ? "selected='selected'" : "";
	}
}?>
<div class = "clear"></div>
<? if (count($arResult['ITEMS']) > 0): ?>
	<div class = "sort">
		<form method = "get">
			<input type = "hidden" value = "<?= preg_replace("/(.*)\&items=[0-9]*(.*)/", "$1$2", $_SERVER['REQUEST_URI']) ?>">
			<span>Товаров на странице:</span>
			<?$items = array(
				"16",
				"32",
				"64"
			)?>
			<select onchange = "this.form.submit()" class = "sell1" name = "items">
				<?foreach ($items as $v): ?>
					<option <?=Check($v, 'items')?> value = "<?= $v ?>"><?=$v?></option>
				<? endforeach?>
			</select>
		</form>
		<?= preg_replace("/(.*)nav(.*)/", "$1nav_top$2", $arResult['NAV_STRING']) ?>

	</div>

<? endif ?>
<!--		<pre>--><?//print_r($arResult)?><!--</pre>-->

<? $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "sections_list", Array(
	"IBLOCK_TYPE" => "products",
	// Тип инфоблока
	"IBLOCK_ID" => "5",
	// Инфоблок
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	// ID раздела
	"SECTION_CODE" => $_REQUEST["SECTION_ID"],
	// Код раздела
	"COUNT_ELEMENTS" => "N",
	// Показывать количество элементов в разделе
	"TOP_DEPTH" => "1",
	// Максимальная отображаемая глубина разделов
	"SECTION_FIELDS" => array( // Поля разделов
		0 => "",
		1 => "",
	),
	"SECTION_USER_FIELDS" => array( // Свойства разделов
		0 => "",
		1 => "",
	),
	"SECTION_URL" => "",
	// URL, ведущий на страницу с содержимым раздела
	"CACHE_TYPE" => "N",
	// Тип кеширования
	"CACHE_TIME" => "36000000",
	// Время кеширования (сек.)
	"CACHE_GROUPS" => "Y",
	// Учитывать права доступа
	"ADD_SECTIONS_CHAIN" => "Y",
	// Включать раздел в цепочку навигации
), false);?>

<?
function GetDop($array)
{
	$class = false;
	$dop   = array(
		'DOOR_DAY' => 'stock5',
		'SPECPRICE' => 'stock8',
		'SKIDKA' => 'stock7',
		'RASPRODAZHA' => 'stock6',
		'AKCIYA' => 'stock3',
		'HIT' => 'xit',
		'NEW' => 'new',
		'RECOMNEND' => 'recommend_img',
	);
	foreach ($dop as $key => $vol) {
		if ($array['PROPERTIES'][$key]['VALUE'] != '' && !$class) {
			$class = $vol == "stock3" ? '<div class="stock3"></div>
					<div class="stock4"></div>
					' : '<div class="' . $vol . '"></div>';
		}
	}
	return $class;
}
?>
<? foreach ($arResult['ITEMS'] as $product): ?>

	<?
	$this->AddEditAction($product['ID'], $product['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($product['ID'], $product['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
	?>

	<? $img = CFile::ResizeImageGet($product['DETAIL_PICTURE']['ID'], array(
		'width' => 100,
		'height' => 220
	)) ?>
	<?
	if (!$product['PROPERTIES']['CHECK']['VALUE']) {
		$string = "width = '100' height='218'";
	}
	else {
		$string = '';
	}
	?>
	<div class = "product_spic" id = "<?= $this->GetEditAreaId($product['ID']); ?>">
		<div class = "product_img">
			<a class = "img_href" href = "<?= $product['DETAIL_PAGE_URL'] ?>">
				<img <?=$string?> src = "<?= $img['src'] ?>" alt = "">
			</a>

			<?= GetDop($product) ?>
			<? if ($product['PROPERTIES']['PRICE']['VALUE'] | $product['PROPERTIES']['PRICE']['VALUE']): ?>
				<div class = " price_product
			">
					<?=$product['PROPERTIES']['PRICE']['VALUE'] ? $product['PROPERTIES']['PRICE']['VALUE'] : $product['PROPERTIES']['PRICE']['VALUE'] ?>
					р.
				</div>
			<? endif?>
		</div>
		<a href = "<?= $product['DETAIL_PAGE_URL'] ?>"><?=$product['NAME']?></a>
	</div>
<? endforeach ?>

<div class = "clear"></div>
<div class = "sort">
	<?= $arResult['NAV_STRING'] ?>
</div>
<? if ($arResult['SECTION']): ?>

	<p><?=$arResult['SECTION']['DESCRIPTION']?></p>
<? endif ?>
