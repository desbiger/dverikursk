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
</div>
