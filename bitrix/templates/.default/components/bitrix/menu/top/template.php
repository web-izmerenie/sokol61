<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="top-menu">                                                    
<?if (!empty($arResult)):?>
<ul>
<?
$i=0;
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
        <?
        $i+=1;
        $arClass = array();
        if($arItem["SELECTED"]){
            $arClass[] = 'active';
        }
        if($i == 1){
            $arClass[] = 'first';
        }
        if($i == count($arResult)){
            $arClass[] = 'last';
        }        
        ?>
	<li class="<?=implode(' ', $arClass)?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>	
<?endforeach?>
</ul>
<?endif?>
</div>