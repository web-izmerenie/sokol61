<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";

$num_items = count($arResult);

if($num_items < 2)
	return "";

$strReturn = '<div class="breadcrumbs"><a href="/">Главная</a> / ';


for($index = 0, $itemSize = $num_items; $index < $itemSize; $index++)
{
    if($arResult[$index]["LINK"] != '/catalog/'){
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	
	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
		$strReturn .= '<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a> / ';
	else
		$strReturn .= $title;
    }    
}

$strReturn .= '</div>';

return $strReturn;
?>