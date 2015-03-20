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
<div class="docs-material-list">
    <div class="material-index">
        <div class="row">                                
            <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <?
                    $i++;
                    $arData = array(
                        'NAME'=>$arItem['NAME'],
                        'DETAIL_PAGE_URL'=>$arItem['DETAIL_PAGE_URL']
                    );
                    if($arItem['PREVIEW_PICTURE']['ID']){
                        $arData['PREVIEW_PICTURE'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>100, 'height'=>100), BX_RESIZE_IMAGE_EXACT);
                    }
                    ?>
                    <div class="col-md-3">
                        <div class="item">
                            <a href="<?=$arData['DETAIL_PAGE_URL']?>">
                                <div class="preview"><img src="<?=$arData['PREVIEW_PICTURE']['src']?>" alt="<?=$arData['NAME']?>" /></div>
                                <div class="name"><?=$arData['NAME']?></div>
                            </a>
                        </div>                                 
                    </div>
                    <?
                    $bClear = false;
                    if($i%4 == 0){
                        $bClear = true;
                    }
                    if($i == count($arResult["ITEMS"])){
                        $bClear = true;
                    }
                    ?>
                    <?if($bClear){?>
                        <div class="clearfix"></div>
                    <?}?>
            <?endforeach;?>
        </div>
    </div>        
    <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "about_index",
            Array(
            )
    );?>    
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"brand", 
	array(
            "IBLOCK_TYPE" => "-",
            "IBLOCK_ID" => "3",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "NAME",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
                    0 => "",
                    1 => "undefined",
                    2 => "",
            ),
            "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "undefined",
                    2 => "",
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_STATUS_404" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "PAGER_TEMPLATE" => ".default",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "AJAX_OPTION_ADDITIONAL" => ""
	),
	false
    );?>
</div>
