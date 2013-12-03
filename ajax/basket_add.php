<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php"); ?>
<?
	$iblock_id = 16;


	if ($_POST['PRODUCT_ID']) {
		$session = $_SESSION['fixed_session_id'];
		CModule::IncludeModule('iblock');

		$temp = CIblockElement::GetList(null, array(
			'IBLOCK_ID' => $iblock_id,
			'PROPERTY_TOVAR' => $_POST['PRODUCT_ID'],
			'PROPERTY_SESSION' => $session
		));
		if ($basketItem = $temp->GetNextElement()) {
			$props = $basketItem->getProperties();
			$count = $props['COUNT']['VALUE'];
			$id    = $basketItem->GetFields();;
			CIBlockElement::SetPropertyValueCode($id['ID'], 'COUNT', $count + 1);
			echo CIBlockElement::GetList(null, array(
				'IBLOCK_ID' => $iblock_id,
				'PROPERTY_SESSION' => $session
			))
					->SelectedRowsCount();
		}
		else {


			$tovar = CIBlockElement::GetByID($_POST['PRODUCT_ID'])
					->Fetch();
			$name  = $tovar['NAME'];

			$el     = new CIBlockElement();
			$PROP   = array(
				'TOVAR' => $_POST['PRODUCT_ID'],
				'SESSION' => $session,
				'COUNT' => 1
			);
			$fields = array(
				'IBLOCK_ID' => $iblock_id,
				'NAME' => $name,
				'PROPERTY_VALUES' => $PROP
			);
			if ($el->add($fields)) {
				echo CIBlockElement::GetList(null, array(
					'IBLOCK_ID' => $iblock_id,
					'PROPERTY_SESSION' => $session
				))
						->SelectedRowsCount();
			}

		}
	}
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php"); ?>