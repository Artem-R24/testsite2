<?
define("NEED_AUTH",true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if(isset($_REQUEST["backurl"])&&strlen($_REQUEST["backurl"])>0)
	LocalRedurect($backurl);
$APPLICATION->SetTitle("Пользователь");
?>
<p><a href="<?=SITE_DIR?>"Вернуться на главную страницу</a></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>