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
    <div id="slider">
        <div class="slider-index">      
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <?
                $arData = array(
                    'NAME'=>$arItem['NAME'],
                    'PREVIEW_TEXT'=>$arItem['PREVIEW_TEXT']
                );
                if($arItem['DETAIL_PICTURE']['ID']){
                    $arData['PREVIEW_PICTURE'] = CFile::ResizeImageGet($arItem['DETAIL_PICTURE']['ID'], array('width'=>590, 'height'=>331), BX_RESIZE_IMAGE_EXACT);
                }
                ?>
                <div class="item">
                    <div class="photo"><img src="<?=$arData['PREVIEW_PICTURE']['src']?>" title="<?=$arData['NAME']?>" /></div>
                </div>                                
            <?endforeach;?>            
        </div> 
    </div>  
<?endif?>
