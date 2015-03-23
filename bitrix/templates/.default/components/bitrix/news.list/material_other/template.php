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
    <div class="material-other material-index">
        <h3 class="template">Другие материалы,<br />которые мы используем в своей работе:</h3>
        <div class="row">
            <?foreach($arResult["ITEMS"] as $arItem):?>                       
                <?
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
            <?endforeach;?>
            <div class="clearfix"></div>                                    
        </div>
    </div>  
<?endif?>
