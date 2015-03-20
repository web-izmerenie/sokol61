<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<nav class="docs-sidebar">
<ul class="nav bs-docs-sidenav">
<?
$previousLevel = 0;
foreach($arResult as $arItem):
?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>
        <?
        //Если в ветке есть разделы 3 уровня, то вторый уровень делаем родительскими не зависимо от наличия потомков
        if($arItem['DEPTH_LEVEL'] == 3){
            $bVirtualParent = true;
        }
        //Если перешли в новую ветку, то сбрасываем принудительную установку родительского статуса для разделов второго уровня
        if($arItem['DEPTH_LEVEL'] == 1){
            $bVirtualParent = false;
        }
        ?>
	<?if ($arItem["IS_PARENT"]):?>
                        <?
                        $class = 'parent group';                        
                        ?>
			<li class="<?=$class?>">
                            <?if($arItem['DEPTH_LEVEL'] == 1 && $arItem['PARAMS']['PICTURE']){?>
                                <span style="background-image:url(<?=$arItem['PARAMS']['PICTURE']?>)" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></span>
                            <?}else{?>
                                <span href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></span>                                
                            <?}?>
                            <ul class="nav">

	<?else:?>
                <?if($arItem['DEPTH_LEVEL'] == 2 && $bVirtualParent){?>
                    <li class="group"><a href="<?=$arItem["LINK"]?>" <?=($arItem['SELECTED'] ? 'class="active"' : NULL)?>><?=$arItem["TEXT"]?></a></li>		
                <?}else{?>                	
                    <li><a href="<?=$arItem["LINK"]?>" <?=($arItem['SELECTED'] ? 'class="active"' : NULL)?>><?=$arItem["TEXT"]?></a></li>		
                <?}?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
</nav>
<?endif?>