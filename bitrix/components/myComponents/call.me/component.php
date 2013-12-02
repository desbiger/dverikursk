<?
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
		die();
	}
	include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/classes/general/captcha.php");
	$cptcha = new CCaptcha();


	if (isset($_REQUEST['call']) && $_REQUEST['call'] == 'Отправить') {
		if (!strlen($_REQUEST["captcha_word"]) > 0) {
			$err .= "! Не введен защитный код<br/>";
			$arResult['ERROR'] = $err;
		}
		elseif (!$cptcha->CheckCode($_REQUEST["captcha_word"], $_REQUEST["captcha_sid"])) {
			$err .= "! Код с картинки заполнен не правильно<br/>";
			$arResult['ERROR'] = $err;
		}
		else {
			require_once("libmail/libmail.php");
			$mail     = $arParams['EMAIL'];
			$m        = new Mail('utf-8');
			$template = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/bitrix/components/myComponents/call.me/Mail_templates/recall_me.php');
			$template = preg_replace("/(#NAME#)/", $_REQUEST['name'], $template);
			$template = preg_replace("/(#PHONE#)/", $_REQUEST['phone'], $template);
			$template = preg_replace("/(#EMAIL#)/", $_REQUEST['email'], $template);
			$template = preg_replace("/(#TEXT#)/", $_REQUEST['text'], $template);

			$m->Body($template, "html");
			$m->Subject('Просьба перезвонить');
			$m->From('info@dverikursk.ru');
			$m->To($mail);
			$m->Send();
			echo "
		<script type='text/javascript'>
		alert('Ваша заявка перезвонить отправлена. Ожидайте звонка.');
		</script>";
		}
	}
	$this->IncludeComponentTemplate();
?>