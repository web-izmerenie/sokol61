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
                    <div class="row row-container">
                        <div class="col-md-3">
                            <div class="dev">Разработано в <a href="http://www.web-izmerenie.ru/" target="_blank">Web Izmerenie</a></div>
                        </div>
                        <div class="col-md-8 col-md-offset-1">
                            <div class="copy">                                
                                <?$APPLICATION->IncludeFile(SITE_DIR.'include/footer/copy.php');?>
                            </div>
                            <div class="phone">
                                <?$APPLICATION->IncludeFile(SITE_DIR.'include/footer/phone.php');?>
                                <div class="sub"><?$APPLICATION->IncludeFile(SITE_DIR.'include/footer/phone_sub.php');?></div>
                                <div class="icon phone-footer" title="Заказать обратный звонок"></div>
                            </div>
                        </div>
                    </div>                                                           
                </div>
            </div>
        </footer>
        <a href="#top" class="cd-top">Top</a>
		<div class="cd-top-indicator"></div>
        <script src="<?=SITE_DIR?>js/jquery.scrollTo-min.js"></script>
        <script src="<?=SITE_DIR?>js/jquery.formstyler.js"></script>
        <script src="<?=SITE_DIR?>js/jquery-ui.js"></script>
        <script src="<?=SITE_DIR?>js/jquery.flexslider.js"></script>
        <script src="<?=SITE_DIR?>js/jquery.fancybox.js"></script>
        <script src="<?=SITE_DIR?>js/jquery.form.min.js"></script>
        <script src="<?=SITE_DIR?>js/top.js?v=2"></script>
        <script src="<?=SITE_DIR?>js/app.js?v=2"></script>
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