<?

	$sections = CIBlockSection::GetList(null, array(
		'CODE' => $_REQUEST['SECTION_ID'],
		'IBLOCK_ID' => 5
	),false,array('UF_H1'))
			->Fetch();
   $arResult['SECTION'] = $sections;