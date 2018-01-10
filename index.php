<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?><div id="content">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"big-slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "big-slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "-",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"SLIDER_TITLE",1=>"SLIDER_BUTTON",2=>"SLIDER_NEW_PRICE",3=>"SLIDER_DESC",4=>"SLIDER_OLD_PRICE",5=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?> <section id="uslugi" class="white unique blueseparator">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="caption">Наши услуги</h2>
				<div>
					 У нас вы можете пройти медицинское обследование, получить консультацию терапевта или узкого специалиста – детского офтальмолога.
				</div>
				<div class="margin-top-2">
					 Запишитесь на прием онлайн или по телефону, мы всегда рады помочь!
				</div>
				<div class="margin-top-4 call hidden-xs hidden-sm">
					<div class="phone">
						<div class="size-18">
							 Звоните:
						</div>
						<div class="phone-number margin-top-1">
 <span class="color-ser">4742</span> <span class="color-blue">47 03 03</span>
						</div>
						<div class="phone-number margin-top-05">
 <span class="color-ser">4742</span> <span class="color-blue">37 04 04</span>
						</div>
						<div class="margin-top-3">
 <a data-toggle="modal" data-target="#myModal" style="cursor:pointer;" class="button1">Запись онлайн</a>
						</div>
					</div>
					<div class="image">
 <img src="/local/templates/oculus/img/vr1.png"><br>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"uslugi-main",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "slider",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	)
);?>
			</div>
		</div>
	</div>
 </section> <section id="akcii" class="white big">
	<div class="container">
		<div class="row">
			<h2 class="caption">Акции и спецпредложения</h2>
			<div class="margin-top-3">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"akcii-main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("DETAIL_PICTURE",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "service",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
				<div class="clearfix">
				</div>
			</div>
			<div class="all-center margin-top-4">
 <a href="#">Все акции</a>
			</div>
		</div>
	</div>
 </section> <section id="priem" class="white unique blueseparator">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 hidden-lg hidden-md">
				<div class="title-m all-center hidden-lg hidden-md">
                    <span>Запись на прием</span>
                </div>
				<div class="form-m margin-top-2 hidden-lg hidden-md">
					<form>
						<div>
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
						</div>
						<div class="margin-top-4">
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
						</div>
						<div class="margin-top-4">
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
						</div>
						<div class="margin-top-4">
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
						</div>
						<div class="all-center margin-top-4">
 <input type="submit" class="button1" value="Отправить" name="">
						</div>
					</form>
				</div>
			</div>
			<div class="col-xs-offset-1 col-xs-10 hidden-sm hidden-xs">
				<div class="title all-center hidden-sm hidden-xs">
					<span>Запись на прием</span>
				</div>
				<div class="form hidden-sm hidden-xs">
					<form>
						<div>
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
						</div>
						<div class="margin-top-4">
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
						</div>
						<div class="margin-top-4">
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
						</div>
						<div class="margin-top-4">
 <input class="zapis" type="text" name="" placeholder="Ваше имя">
						</div>
						<div class="all-center margin-top-4">
 <input type="submit" class="button1" value="Отправить" name="">
						</div>
					</form>
				</div>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>
	<div class="image hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 all-right">
 <img src="<?= SITE_TEMPLATE_PATH ?>/img/vr2.png">
				</div>
			</div>
		</div>
	</div>
 </section> <section id="personal" class="white big">
	<div class="container">
		<div class="row">
			<h2 class="caption">Наши врачи</h2>
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"doctors-main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "doctors-main",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "service",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"DOCTOR_CATEGORIES",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
			<div class="clearfix">
			</div>
			<div class="all-center margin-top-4">
 <a href="/doctor">Все врачи</a>
			</div>
		</div>
	</div>
 </section> <section id="news" class="white big blueseparator">
	<div class="container">
		<div class="row">
			<h2 class="caption">Новости клиники</h2>
			<div class="margin-top-10">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"news-main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "news-main",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "service",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>
 </section> <section id="podpiska" class="white medium blueseparator">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="title">
					 Подпишитесь на новости и будьте в курсе -
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-group">
 <input placeholder="Введите e-mail" type="text" class="form-control"> <span class="input-group-addon">
					<div>
 <input class="button1" type="submit" value="Получать новости" name="">
					</div>
 </span>
				</div>
			</div>
		</div>
	</div>
 </section> <section id="about" class="white big">
	<div class="container">
		<div class="row">
 <section class="white medium">
			<div class="col-md-6">
				<h2 class="caption">О нас</h2>
				<div class="text">
					 Разнообразный и богатый опыт консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации. Задача организации, в особенности же реализация намеченных плановых заданий представляет собой интересный эксперимент проверки новых предложений.
				</div>
			</div>
			<div class="col-md-6 all-center">
 <img width="100%" src="img/vr3.png">
			</div>
			<div class="clearfix">
			</div>
 </section>
		</div>
	</div>
 </section> <section id="cart" class="white big">
	<div class="info">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="title margin-top-4">
						 Контактная информация
					</div>
					<div class="desc">
						<div class="name">
							 Центр микрохирургии глаза «Окулюс»
						</div>
						<div class="adress margin-top-1">
							 г. Липецк, ул. Липовская, д.1а
						</div>
						<div class="phone margin-top-3">
							<div>
								 8 4742 47 03 03
							</div>
							<div>
								 8 4742 37 04 04
							</div>
						</div>
						<div class="graphic margin-top-3">
							<div>
								 График работы:
							</div>
							<div>
								 понедельник - пятница: с 8:00 до 20:00
							</div>
							<div>
								 суббота: с 9:00 до 14:00
							</div>
							<div>
								 воскресенье: выходной
							</div>
						</div>
						<div class="margin-top-3">
							<div class="row">
								<div class="col-xs-6">
 <a href="malto:info@oculus48.ru">info@oculus48.ru</a>
								</div>
								<div class="col-xs-6 all-right">
 <a class="button1" data-toggle="modal" data-target="#myModal" style="cursor:pointer;">Записаться на прием</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A80f513680b558ed1b23e481bbe3b1285ce63bea4bdb1e3a5ef811793431c648c&amp;width=100%&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script> </section>
</div>
 <script type="text/javascript">
	function autoMaxHeight(array_object)
	{
		var maxHeight = 0;
		for(i=0;i<array_object.length;i++)
		{
			if(array_object[i].clientHeight > maxHeight)
			{
				maxHeight = array_object[i].clientHeight;
			}
		}
		for(i=0;i<array_object.length;i++)
		{
			array_object[i].style.height = maxHeight + 'px';
		}
	}
	autoMaxHeight(document.querySelectorAll('#uslugi .item'));
</script> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>