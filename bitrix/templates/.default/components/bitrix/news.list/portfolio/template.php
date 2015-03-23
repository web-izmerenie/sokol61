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
<div class="docs-portfolio">
    <div id="portfolio-slider">
        <ul class="slides">                               
        <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>        
                <?
                $arData = array('NAME'=>$arItem['NAME']);
                if($arItem['PREVIEW_PICTURE']['ID']){
                    $arData['PREVIEW_PICTURE'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>83, 'height'=>83), BX_RESIZE_IMAGE_EXACT);
                }else{
                    $arData['PREVIEW_PICTURE'] = CFile::ResizeImageGet($arItem['DETAIL_PICTURE']['ID'], array('width'=>83, 'height'=>83), BX_RESIZE_IMAGE_EXACT);
                }
                $arData['DETAIL_PICTURE'] = CFile::ResizeImageGet($arItem['DETAIL_PICTURE']['ID'], array('width'=>642, 'height'=>300), BX_RESIZE_IMAGE_EXACT);
                ?>
                <li data-thumb="<?=$arData['PREVIEW_PICTURE']['src']?>"><img src="<?=$arData['DETAIL_PICTURE']['src']?>" alt="" /><div class="title-wrapper"><div class="title"><?=$arData['NAME']?></div></div></li>
        <?endforeach;?>
        </ul>
    </div>                              
</div>

