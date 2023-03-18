<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');

const I_BLOCK=2;// Id инфоблока с продукцией
const MAT_CODE='MATERIAL'; // Код своства "Материал"
const MANUF_CODE='MANUFACTURER'; // Код своства "Производитель"

$arSelect = Array("ID","IBLOCK_ID", "NAME","PROPERTY_MATERIAL","PROPERTY_MANUFACTURER");
$arFilter = Array("IBLOCK_ID"=>I_BLOCK);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()){ 
   $arProps = $ob->GetProperties();
   $strTags=$arProps[MAT_CODE]['VALUE'].', '.$arProps[MANUF_CODE]['VALUE'];
   $el = new CIBlockElement;
   $result = $el->Update($ob->GetFields()['ID'],Array('TAGS'=>$strTags));
}
echo "Done!";
?>
