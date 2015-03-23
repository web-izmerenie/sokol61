<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="docs-order">
    <?if($arParams['PRICE']){?>
        <div class="price">
            <div class="label">Цена:</div>
            <div class="value"><?=$arParams['PRICE']?></div>
        </div>
    <?}?>
    <div class="form">
        <form>
            <input type="hidden" name="ADD_RESULT" value="1" />
            <input type="hidden" name="PRODUCT_ID" value="<?=$arParams['PRODUCT_ID']?>" />
            <div class="list">   
                <div class="row">
                    <div class="col-md-6">
                        <div class="item">
                            <input type="text" name="NAME" class="styler" placeholder="Ваше имя" required />
                        </div>
                    </div>
                    <div class="col-md-6">    
                        <div class="item">
                            <input type="text" name="PHONE" class="styler" placeholder="Телефон" required />
                        </div>
                    </div>  
                    <div class="clearfix"></div>
                </div>
            </div>    
            <div class="button-wrapper"><input type="submit" class="styler" value="Заказать просчет"></div>
        </form>
    </div>
</div>