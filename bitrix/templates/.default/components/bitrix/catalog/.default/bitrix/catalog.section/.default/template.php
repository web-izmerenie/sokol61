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
$APPLICATION->SetTitle($arResult['NAME']);
if(!empty($arResult['ITEMS'])){	
    foreach($arResult['ITEMS'] as $key => $arItem){
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
        $arData = array(
            'NAME'=>$arItem['NAME'],
            'DETAIL_TEXT'=>$arItem['~DETAIL_TEXT'],
            'PRICE'=>$arItem['DISPLAY_PROPERTIES']['PRICE']['VALUE']
        );
        foreach($arItem['DISPLAY_PROPERTIES']['PHOTO']['VALUE'] as $key=>$photo_id){
            $arData['PHOTO'][$key] = array(
                'PREVIEW_PICTURE'=>CFile::ResizeImageGet($photo_id, array('width'=>83, 'height'=>83), BX_RESIZE_IMAGE_EXACT),
                'DETAIL_PICTURE'=>CFile::ResizeImageGet($photo_id, array('width'=>642, 'height'=>300), BX_RESIZE_IMAGE_EXACT),
                'DESCRIPTION'=>$arItem['DISPLAY_PROPERTIES']['PHOTO']['DESCRIPTION'][$key]
            );
        }
        $APPLICATION->SetTitle($arData['NAME']);        
        ?>
        <div class="docs-catalog">
            <div id="catalog-slider">
                <ul class="slides">
                    <?foreach($arData['PHOTO'] as $key=>$arPhoto){?>
                        <li><img src="<?=$arPhoto['DETAIL_PICTURE']['src']?>" title="<?=$arPhoto['DESCRIPTION']?>" /><div class="title-wrapper"><div class="title"><?=$arPhoto['DESCRIPTION']?></div></div></li>
                    <?}?>                    
                </ul>
            </div> 
            <div id="catalog-carousel">
                <ul class="slides">
                    <?foreach($arData['PHOTO'] as $key=>$arPhoto){?>
                        <li><span class="overlay"></span><img src="<?=$arPhoto['PREVIEW_PICTURE']['src']?>" alt="" /></li>
                    <?}?>                   
                </ul>
            </div>            
            <?$APPLICATION->IncludeFile("iblock/order.php", array(
                    'PRICE'=>$arData['PRICE'],
                    'PRODUCT_ID'=>$arItem['ID']
                )
            )?>
            <?$APPLICATION->IncludeComponent("bitrix:news.list", "promo", Array(
                "IBLOCK_TYPE" => "-",	// Тип информационного блока (используется только для проверки)
                    "IBLOCK_ID" => "6",	// Код информационного блока
                    "NEWS_COUNT" => "20",	// Количество новостей на странице
                    "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                    "SORT_BY2" => "NAME",	// Поле для второй сортировки новостей
                    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                    "FILTER_NAME" => "",	// Фильтр
                    "FIELD_CODE" => array(	// Поля
                            0 => "",
                            1 => "",
                    ),
                    "PROPERTY_CODE" => array(	// Свойства
                            0 => "",
                            1 => "undefined",
                            2 => "",
                    ),
                    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    "AJAX_MODE" => "N",	// Включить режим AJAX
                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                    "CACHE_TYPE" => "A",	// Тип кеширования
                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                    "SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                    "PARENT_SECTION" => "",	// ID раздела
                    "PARENT_SECTION_CODE" => "",	// Код раздела
                    "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "N",
                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                    "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                    "PAGER_TITLE" => "Новости",	// Название категорий
                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                ),
            false
        );?>                                       
        </div>
        <?=$arData['DETAIL_TEXT']?>
        <?
    }
}