<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle();?></title>	        
        <link rel="shortcut icon" href="/favicon.ico?v=1" rev="shortcut icon">
        <link rel="icon" href="/favicon.ico?v=1" rev="shortcut icon">
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/bootstrap.css?v=2" rel="stylesheet" />');?>
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/style.css?v=2" rel="stylesheet" />');?>
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/jquery.formstyler.css?v=2" rel="stylesheet" />');?>
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/flexslider.css?v=2" rel="stylesheet" />');?>
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/jquery.fancybox.css?v=2" rel="stylesheet" />');?>
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/top.css?v=2" rel="stylesheet" />');?>
        <script src="<?=SITE_DIR?>js/jquery-1.9.1.min.js"></script>
    </head>    
    <body>
        <?$APPLICATION->ShowPanel();?>
        <header>
            <div class="container sokol61"> 
                <div class="row">
                    <div class="col-md-12">                        
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
                                "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                                "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            ),
                            false
                        );?>
                    </div>
                </div>
            </div>
            <div class="docs-header">
                <div class="container sokol61">
                    <div class="row">
                        <div class="col-md-3">
                            <!--<div class="logo">
                                <a href="/"><img src="img/logo.jpg" alt="" /></a>
                            </div>-->
                        </div> 
                        <div class="col-md-8 col-md-offset-1">
                            <div class="phone">
                                <?$APPLICATION->IncludeFile(SITE_DIR.'include/header/phone.php');?>
                                <!--noindex--><div class="sub"><?$APPLICATION->IncludeFile(SITE_DIR.'include/header/phone_sub.php');?></div><!--/noindex-->
                                <div class="icon phone-header" title="Заказать обратный звонок"></div>                                
                            </div>
                        </div>                    
                    </div>                                 
                </div>
            </div>
        </header>     
        <div class="container sokol61">                                       
            <div class="row row-container">
                <div class="col-md-3">
                    <div class="site-logo">
                        <a href="/"><img src="<?=SITE_DIR?>img/logo.jpg" alt="" /></a>
                    </div>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "catalog", Array(
                            "ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
                                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                                    "MAX_LEVEL" => "4",	// Уровень вложенности меню
                                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                    "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                    "MENU_THEME" => "site"
                            ),
                            false
                    );?>
                </div>
                <div class="col-md-8 col-md-offset-1">
                    <div class="docs-container">     
                        <a name="top"></a>
                        <h1 class="template"><?$APPLICATION->ShowProperty('sub_title')?></h1>
                        <?
                        $sub_title = $APPLICATION->GetDirProperty("sub_title");
                        $APPLICATION->SetPageProperty('sub_title', $sub_title);
                        ?>
                        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", Array(
                                "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                                "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                                "SITE_ID" => "-",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                            ),
                            false
                        );?>
                        <?if($APPLICATION->GetCurDir() != '/'){?>
                            <h2 class="template"><?$APPLICATION->ShowTitle(false)?></h2>
                        <?}?>