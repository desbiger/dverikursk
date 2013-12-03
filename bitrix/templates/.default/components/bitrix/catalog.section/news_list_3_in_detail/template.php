<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<h4>Новости</h4>
<? foreach ($arResult['ITEMS'] as $news): ?>
	<? $img = CFile::ResizeImageGet($news['DETAIL_PICTURE'], array(
		'width' => 150,
		'height' => 150
	)) ?>
	<?
	$this->AddEditAction($news['ID'], $news['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($news['ID'], $news['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
	?>

	<div id = "<?= $this->GetEditAreaId($news['ID']); ?>" class = "article" style="float:left; width: 200px; height: 200px; border: 1px
	solid green; margin-right: 7px; padding: 7px">

			<span><?=preg_replace("/([0-9]{2})\.([0-9]{2})\.([0-9]{4}) .*/","$1-$2-$3",$news['DATE_CREATE'])?></span>
			<a href = "<?= $news['DETAIL_PAGE_URL'] ?>"><?=$news['NAME']?></a>

			<p><?=substr($news['DETAIL_TEXT'],0,100)?>...</p>

	</div>
<? endforeach ?>

<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
	<br/><?= $arResult["NAV_STRING"] ?>
<? endif; ?>


