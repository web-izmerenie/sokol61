<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="docs-feadback">                            
    <div class="form">
        <input type="hidden" name="ADD_RESULT" value="1" />
        <form>
            <div class="list">
                <div class="item">
                    <textarea class="styler" name="TEXT" placeholder="Текст сообщения" required></textarea>
                </div>
                <div class="item">
                    <input type="text" class="styler" name="NAME" placeholder="Ваше имя" required />
                </div>
                <div class="item">
                    <input type="text" class="styler" name="PHONE" placeholder="Телефон" required />
                </div>
            </div>    
            <div class="button-wrapper"><input type="submit" class="styler" value="Отправить сообщение"></div>
        </form>
    </div>
</div>