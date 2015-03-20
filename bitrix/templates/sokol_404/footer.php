<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>      
                    </div>    
                </div>
            </div>                                           
        </div>
        <footer>     
            <div class="container sokol61"> 
                <div class="docs-footer">
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
        </footer>
        <a href="#top" class="cd-top">Top</a>
        <script src="<?=SITE_DIR?>js/jquery.scrollTo-min.js"></script>
        <script src="<?=SITE_DIR?>js/jquery.formstyler.js"></script>
        <script src="<?=SITE_DIR?>js/jquery-ui.js"></script>
        <script src="<?=SITE_DIR?>js/jquery.flexslider.js"></script>
        <script src="<?=SITE_DIR?>js/jquery.fancybox.js"></script>
        <script src="<?=SITE_DIR?>js/jquery.form.min.js"></script>
        <script src="<?=SITE_DIR?>js/top.js"></script>
        <script src="<?=SITE_DIR?>js/app.js"></script>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter28783926 = new Ya.Metrika({id:28783926,
							webvisor:true,
							clickmap:true,
							trackLinks:true,
							accurateTrackBounce:true});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
		</script>
		<noscript><div><img src="//mc.yandex.ru/watch/28783926" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
    </body>
</html>   