<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<script type = "text/javascript">
	$(function () {

		var div = $('#element_to_pop_up1');

		div.find('form').submit(function () {

			var name = div.find('input[name=name]').val();
			var phone = div.find('input[name=phone]').val();
			var email = div.find('input[name=email]').val();
			var adress = div.find('input[name=adress]').val();
			var text = '';
			if (name == '') {
				text += "Поле Имя не может быть пустым \n";
			}
			if (phone == '') {
				text += "Поле Телефон не может быть пустым \n";
			}
			if (adress == '') {
				text += "Поле Адрес не может быть пустым \n";
			}
			if (email == '') {
				text += "Поле Email не может быть пустым";
			}

			if (text != '') {
				alert(text);
			} else {
				$(this).submit();
			}
			return false;
		});
	});
</script>
<?if($arResult['ERROR']):?>
		<?=$arResult['ERROR']?>
<?endif?>
<?
$arResult["CAPTCHA_CODE"] = htmlspecialchars($GLOBALS["APPLICATION"]->CaptchaGetCode());
?>
<a href = "javascript:;" id = "popap1">Вызвать замерщика</a>
<div id="element_to_pop_up1" style="display:none">
    <div class="style_popap">
        <div class="b-close">
            <img src="/bitrix/templates/index/image/close.png" alt="">
        </div>
        <form action="#" method="post">
	        <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
            <h2>Вызвать замерщика</h2>

            <p>Ваше имя: <span>*</span></p>
            <input type="text" name="name" class="inp_send"/>

            <p>Контактный телефон: <span>*</span></p>
            <input class="inp_send" name="phone" type="text"/>

            <p>Адрес: <span>*</span></p>
            <input class="inp_send" name="adress" type="text"/>

            <p>Ваш E-Mail:</p>
            <input class="inp_send" name="email" type="text"/>

            <p>Комментарий:</p>

            <textarea name="text" class="mess"></textarea>
	        <p>Введите защитный код</p>
	        <img src="/bitrix/tools/captcha.php?captcha_code=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
	        <br>
	        <p><input type="text" name="captcha_word" maxlength="50" value="" /></p>

            <div>
                <input type="submit" name="size" class="sub_mail" value="Отправить">
            </div>
	        <input type = "hidden" name = "back_url" value = "<?= $_SERVER['REQUEST_URI'] ?>">
        </form>
    </div>
</div>

