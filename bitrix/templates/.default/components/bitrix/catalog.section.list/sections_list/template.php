<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<!--	<pre>--><?//print_r($arResult)?><!--</pre>-->
<? foreach ($arResult['SECTIONS'] as $vol): ?>
	<?
	$this->AddEditAction($vol['ID'], $vol['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($vol['ID'], $vol['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
	?>

	<a id = "<?= $this->GetEditAreaId($vol['ID']); ?>" class = "section_div" href = "<?= $vol['SECTION_PAGE_URL'] ?>">
		<? $img = CFile::ResizeImageGet($vol['PICTURE'], array(
			'width' => 100,
			'height' => 130
		)) ?>
		<div class = "s_left">
			<img src = "<?= $img['src'] ?>">
		</div>
		<div class = "s_right">
			<h3><?=$vol['NAME']?></h3>

			<p><?=substr($vol['DESCRIPTION'],0,200)?>...</p>
		</div>
	</a>
<? endforeach ?>