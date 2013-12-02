<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<h3>Статьи</h3>
<? foreach ($arResult['ITEMS'] as $news): ?>
	<div class = "article"><span><?=preg_replace("/([0-9]{2})\.([0-9]{2})\.([0-9]{4}).*/", "$1-$2-$3", $news['ACTIVE_FROM'])?></span>
		<a href =
		   "<?= $news['DETAIL_PAGE_URL'] ?>"><?=$news['NAME']?></a>

		<p><?=strip_tags(substr($news['DETAIL_TEXT'], 0, 100))?>...</p>
	</div>
<? endforeach ?>

<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
	<br/><?= $arResult["NAV_STRING"] ?>
<? endif; ?>


