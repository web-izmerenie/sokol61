<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

//if (!function_exists("GetTreeRecursive")) //Include from main.map component
//{

    $aMenuLinksExt = $APPLICATION->IncludeComponent(
        "ai:menu.sections",
        "",
        Array(
            "IS_SEF" => "Y",
            "SEF_BASE_URL" => "/catalog/",
            "SECTION_PAGE_URL" => "#SECTION_ID#/",
            "DETAIL_PAGE_URL" => "#SECTION_ID#/",
            "IBLOCK_TYPE" => "sokol",
            "IBLOCK_ID" => "11",
            "DEPTH_LEVEL" => "5",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000"
        )
    );

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
//}

?>