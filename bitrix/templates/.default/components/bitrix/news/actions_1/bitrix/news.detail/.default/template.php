<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(is_array($arResult["PREVIEW_PICTURE"])):?>
<img src="<?=$arResult["PREVIEW_PICTURE"]?>" align="left" alt="<?=$arResult["NAME"]?>"/> 
<?endif;?>
<?echo $arResult["PREVIEW_TEXT"];?>

