<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?CModule::IncludeModule("iblock")?>
<?
$el = new CIBlockElement;
$PROP = array();
$PROP['NAME'] = $_REQUEST['NAME'];
$PROP['PHONE'] = $_REQUEST['PHONE'];
$PROP['TEXT'] = array("VALUE" => array ("TEXT" => $_REQUEST['TEXT'], "TYPE" => "text"));
$arElement = array(        
    'ACTIVE'=>'Y',
    'NAME'=>$PROP['NAME'],
    'IBLOCK_ID'=>8,
    'PROPERTY_VALUES'=>$PROP
);
$arEventFields = array(
    'NAME' => $PROP['NAME'],
    'PHONE' => $PROP['PHONE'],
    'TEXT' => $PROP['TEXT']['VALUE']['TEXT'],
);
?>
<?if($ID = $el->Add($arElement)){?>
    <?CEvent::Send("FEEDBACK_FORM", 's1', $arEventFields);?>
    <div class="success">
        <div class="title">Сообщение отправлено</div>
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
