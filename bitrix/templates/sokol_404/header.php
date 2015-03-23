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
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/bootstrap.css" rel="stylesheet" />');?>
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/font.css" rel="stylesheet" type="text/css" charset="utf-8" />');?>
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/style.css" rel="stylesheet" />');?>
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/jquery.formstyler.css" rel="stylesheet" />');?>
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/flexslider.css" rel="stylesheet" />');?>
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/jquery.fancybox.css" rel="stylesheet" />');?>
        <?$APPLICATION->AddHeadString('<link href="'.SITE_DIR.'css/top.css" rel="stylesheet" />');?>
        <script src="<?=SITE_DIR?>js/jquery-1.9.1.min.js"></script>
    </head>    
    <body class="body-404">
        <?$APPLICATION->ShowPanel();?>
        <header>            
            <div class="docs-header">                
            </div>
        </header>     
        <div class="container sokol61">                                       
            <div class="row row-container">                
                <div class="col-md-12">
                    <div class="docs-container docs-404">     
                        <a name="top"></a>         
                        <div class="site-logo">
                            <a href="/"><img src="<?=SITE_DIR?>img/logo.jpg" alt="" /></a>
                        </div>
                        <h2 class="template-404"><?$APPLICATION->ShowTitle(false)?></h2> 
                        <div class="row">
                            <div class="col-md-2 col-md-offset-4"><a href="#" onclick="history.back(); return false;" class="history-back">Вернуться назад</a></div>
                            <div class="col-md-2"><a href="/" class="main-back">На главную</a></div>
                        </div>