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
	<!--noindex-->
		<div class="promo-index">
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
					'PREVIEW_TEXT'=>$arItem['PREVIEW_TEXT']
				);
				if($arItem['PREVIEW_PICTURE']['ID']){
					$arData['PREVIEW_PICTURE'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>100, 'height'=>100), BX_RESIZE_IMAGE_EXACT);
				}
				?>
				<div class="col-md-6">
					<div class="item" style="background:url(<?=$arData['PREVIEW_PICTURE']['src']?>) no-repeat left top">
						<div class="name"><?=$arData['NAME']?></div>
						<div class="text"><?=$arData['PREVIEW_TEXT']?></div>
					</div>                                 
				</div>
				<?
				$bClear = false;
				if($i%2 == 0){
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
	<!--/noindex-->
<?endif?>
