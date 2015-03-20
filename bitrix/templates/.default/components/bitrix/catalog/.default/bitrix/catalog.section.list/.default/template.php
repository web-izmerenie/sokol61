<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?
/*$arLastSection = array('DEPTH_LEVEL'=>0);
foreach($arResult['SECTIONS'] as $arSectionItem){
    if(!$bEnd){
        if($arSectionItem['DEPTH_LEVEL'] <= $arLastSection['DEPTH_LEVEL']){
            ob_clean();
            header("Location: ".$arLastSection['SECTION_PAGE_URL']);
            exit();
        }else{
            $arLastSection = $arSectionItem;
        }
    }
}*/
?><ul><?
foreach($arResult['SECTIONS'] as $arSectionItem){
    ?><li><a href="<?=$arSectionItem['SECTION_PAGE_URL']?>"><?=$arSectionItem['NAME']?></a></li><?
}
?>
</ul>