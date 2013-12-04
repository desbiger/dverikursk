<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>

<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery.carouFredSel-5.5.5-packed.js"></script>
<script type = "text/javascript" language = "javascript">
	$(function () {

		$('#carousel ul').carouFredSel({
			prev: '#prev',
			next: '#next',
			pagination: "#pager",
			auto: true,
			scroll: 1000,
			pauseOnHover: true
		});

	});
</script>

<style type = "text/css" media = "all">


</style>

<div id = "carousel">
	<h3>Популярые модели</h3>
	<ul>
		<?foreach ($arResult['ITEMS'] as $item): ?>
			<? $img = CFile::ResizeImageGet($item['DETAIL_PICTURE']['ID'], array(
				'width' => 110,
				'height' => 220
			)) ?>
			<?
			$this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
			?>


			<li id = "<?= $this->GetEditAreaId($item['ID']); ?>">
				<a href = "<?=$item['DETAIL_PAGE_URL']?>"><img src = "<?= $img['src'] ?>" alt = ""/></a>

				<div class = "wp_border">
					<a href = "<?=$item['DETAIL_PAGE_URL']?>"><?=$item['NAME']?></a>

					<div class = "price"><?=preg_replace("/([0-9]+)([0-9]{3})/", "$1 $2", $item['PROPERTIES']['PRICE']['VALUE'])?> руб</div>
				</div>
			</li>
		<? endforeach?>
	</ul>
	<div class = "clearfix"></div>
	<a id = "prev" class = "prev" href = "#">&lt;</a>
	<a id = "next" class = "next" href = "#">&gt;</a>

</div>



