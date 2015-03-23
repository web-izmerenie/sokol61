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
<?if(count($arResult["ITEMS"])>0):?>
    <div class="index-slider-sub">            
        <?foreach($arResult["ITEMS"] as $arItem):?> 
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <?
            $arData = array(
                'NAME'=>$arItem['NAME'],
                'DETAIL_PAGE_URL'=>$arItem['DETAIL_PAGE_URL'],
                'PREVIEW_TEXT'=>$arItem['PREVIEW_TEXT']
            );
            if($arItem['PREVIEW_PICTURE']['ID']){
                $arData['PREVIEW_PICTURE'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>100, 'height'=>100), BX_RESIZE_IMAGE_EXACT);
            }
            ?>
            <div class="text"><?=$arData['NAME']?></div>
            <div class="bage"><div class="bage-preview" style="background:url(<?=$arData['PREVIEW_PICTURE']['src']?>) no-repeat center bottom"></div><div class="bage-anounce"><?=$arData['PREVIEW_TEXT']?></div></div>                                                    
        <?endforeach;?>            
    </div>  
<?endif?>
