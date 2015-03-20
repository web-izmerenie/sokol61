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
<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?> 
    <?
    $arCoords = explode(',', $arItem['DISPLAY_PROPERTIES']['MAPS_COORDS']['VALUE']);
    $arData = array(
        'NAME'=>$arItem['NAME'],
        'PREVIEW_TEXT'=>$arItem['PREVIEW_TEXT'],
        'ADDRESS'=>$arItem['DISPLAY_PROPERTIES']['ADDRESS']['~VALUE']['TEXT'],
        'MAPS_COORDS_X'=>trim($arCoords[0]),
        'MAPS_COORDS_Y'=>trim($arCoords[1]),
        'MAPS_TITLE'=>$arItem['DISPLAY_PROPERTIES']['MAPS_TITLE']['VALUE'],
        'EMAIL'=>$arItem['DISPLAY_PROPERTIES']['EMAIL']['VALUE'],
        'PHONE'=>implode('<br />', $arItem['DISPLAY_PROPERTIES']['PHONE']['VALUE'])
    );
    ?>
    <div class="docs-contacts">
        <div class="row">
            <div class="col-md-5">
                <?=$arData['PREVIEW_TEXT']?>
                <h4>Адрес:</h4>
                <?=$arData['ADDRESS']?>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <h4>Телефоны:</h4>
                <p class="phone"><?=$arData['PHONE']?></p>
                <h4>Почта: <a href="mailto:<?=$arData['EMAIL']?>"><?=$arData['EMAIL']?></a></h4>
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeFile("iblock/feadback.php")?>
    <script src="//api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU" type="text/javascript"></script>
    <script type="text/javascript">
        arMap = [{'x':'<?=$arData['MAPS_COORDS_X']?>', 'y':'<?=$arData['MAPS_COORDS_Y']?>', 'zoom':'14', 'icon':'/img/map-icon.png', 'name':'<?=$arData['MAPS_TITLE']?>'}];
    </script>                        
    <div class="map-area" id="ya-map"></div>
    <script src="/js/map.js"></script> 
<?endforeach;?>

