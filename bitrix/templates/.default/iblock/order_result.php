<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?CModule::IncludeModule("iblock")?>
<?
$el = new CIBlockElement;
$PROP = array();
$PROP['NAME'] = $_REQUEST['NAME'];
$PROP['PHONE'] = $_REQUEST['PHONE'];
$PROP['PRODUCT_ID'] = $_REQUEST['PRODUCT_ID'];
$arElement = array(        
    'ACTIVE'=>'Y',
    'NAME'=>$PROP['NAME'],
    'IBLOCK_ID'=>10,
    'PROPERTY_VALUES'=>$PROP
);

$dbProduct = CIBlockElement::GetList(array(), array('IBLOCK_ID'=>11, 'ACTIVE'=>'Y', 'ID'=>$PROP['PRODUCT_ID']), false, false, array('ID', 'NAME'));
$arProduct = $dbProduct->Fetch();

$arEventFields = array(
    'NAME' => $PROP['NAME'],
    'PHONE' => $PROP['PHONE'],
    'PRODUCT' => ($arProduct['NAME'] ? $arProduct['NAME'] : 'Не удалось определить товар'),
);
?>
<?if($ID = $el->Add($arElement)){?>
    <?CEvent::Send("ORDER_FORM", 's1', $arEventFields);?>
    <div class="success">
        <div class="title">Заказ на просчет отправлен</div>
        <div class="text">Мы свяжемся с Вами в ближайшее время</div>
        <a href="#" class="button close">Закрыть</a>
    </div>
<?}else{?>
    <div class="error">
        <div class="title">Пожалуйста</div>
        <div class="text">Заполните все поля формы</div>
        <a href="#" class="button close">Закрыть</a>
    </div>
<?}?>