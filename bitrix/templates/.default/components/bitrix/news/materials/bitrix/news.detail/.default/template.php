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
$sub_title = $arResult['IBLOCK']['NAME'];
$APPLICATION->SetPageProperty('sub_title', $sub_title);
?>
<div class="docs-material-detail">
    <?if($arResult["DETAIL_TEXT"]){?>
        <?=$arResult["DETAIL_TEXT"];?>
    <?}else{?>
        <p>Страница в разработке</p>
    <?}?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list", 
        "material_other", 
        array(
            "IBLOCK_TYPE" => "-",
            "IBLOCK_ID" => "2",
            "NEWS_COUNT" => "4",
            "SORT_BY1" => "RAND",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "NAME",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
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
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "PAGER_TEMPLATE" => ".default",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
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