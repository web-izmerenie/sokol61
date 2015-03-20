<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
?>
<p>
	 Строительная компания «Сокол» ведет работу в нашем регионе уже более 8 лет. За это время мы завершили более 120 успешных проектов и более 800 объектов, завоевав доверие наших клиентов.
</p>
<p>
	 В своей работе мы используем только качественные материалы проверенных партнеров – поликарбонат «Polygal», «Novattro»и «Okteko», краски «КВИЛ», «Tikkurila», «Caparol», сталь компании «Донсталь» и «Сталь-Инвест», профнастил компании «Кровля +» и «Кровля Южный Регион» - официальных дилеров завода «Металл Профиль».
</p>
<p>
	 Среди наших работ – навесы, козырьки и заборы из поликарбоната и металлопрофиля, быстровозводимые ангары, склады, зернохранилища, кованые решетки, беседки и вольеры. Мы не только возводим прочные и эстетичные конструкции, но и проводим их техобслуживание, а также реконструкцию поврежденных объектов.
</p>
<h3>Сроки возведения и цены</h3>
<table>
<tbody>
<tr>
	<th>
		 Конструкция
	</th>
	<th>
		 Сроки работ
	</th>
	<th>
		 Цена
	</th>
</tr>
<tr>
	<td>
		 Навес односкатный с облегченной фермой
	</td>
	<td>
		 5-30 раб./дней
	</td>
	<td>
		 от 2 300 руб./м²
	</td>
</tr>
<tr>
	<td>
		 Навес двухскатный, дуговой, облегченный
	</td>
	<td>
		 5-30 раб./дней
	</td>
	<td>
		 от 2 500 руб./м²
	</td>
</tr>
<tr>
	<td>
		 Прямой навес, пролет от 9 до 12 м
	</td>
	<td>
		 5-30 раб./дней
	</td>
	<td>
		 от 2 300 руб./м²
	</td>
</tr>
</tbody>
</table>
<p>
	 Наш специалист выедет к вам на объект, произведет замеры и предложит проект подходящей вам конструкции. Мы просчитаем вес конструкции, необходимую толщину стенок опор и другие технические моменты, которые позволят вашему навесу прослужить долго и остаться нерушимым в «суровых» Ростовских климатических условиях.
</p>
<h3>Сервисные услуги</h3>
<p>
	 В компании «Сокол» вы можете не только купить навесы из поликарбоната, но и заказать техобслуживание вашей конструкции, которую мы рекомендуем проводить не реже 1 раз в год. Наши мастера: проверят или в случае необходимости заменят термошайбы, продуют и прочистят соты, заменят гермоленту, восстановят лакокрасочные покрытия.
</p>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"special2",
	Array(
		"IBLOCK_TYPE" => "-",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "1",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "NAME",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DETAIL_TEXT",4=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"undefined",2=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>