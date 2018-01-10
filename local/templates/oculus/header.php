<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?><?
$rsSites = CSite::GetByID(SITE_ID);
$arSite = $rsSites->Fetch();
$curPage = $APPLICATION->GetCurPage(false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet">
    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/bootstrap/css/bootstrap.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/bootstrap/css/bootstrap-theme.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/owl-carousel/owl.carousel.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/owl-carousel/owl.theme.css');

    
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-3.2.1.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/bootstrap/js/bootstrap.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/owl-carousel/owl.carousel.js');
    ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <? $APPLICATION->ShowHead(); ?>	
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>

<div id="header">
 <section class="small blue color-white">
    <div class="container">
        <div class="row hidden-xs hidden-sm">
            <div class="col-xs-6 size-12 weight-4">
                 г. Липецк, ул. Липовская, д.1а Пн-Пт 8:00-20:00, Сб 9:00-14:00, Вс - выходной
            </div>
            <div class="col-xs-6 all-right">
 <a class="color-white hover-ser" href="#"><span class="glyphicon glyphicon-print"></span></a>
            </div>
        </div>
        <div class="row hidden-lg hidden-md">
            <div class="col-xs-12 size-12 weight-4">
                 г. Липецк, ул. Липовская, д.1а Пн-Пт 8:00-20:00, Сб 9:00-14:00, Вс - выходной
            </div>
        </div>
    </div>
 </section> <section class="white medium blueseparator">
    <div class="container">
        <div class="row">
            <div class="col-xs-5">
                <div class="logo hidden-md hidden-lg">
 <a href="/"><img width="150%" src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png"></a>
                </div>
                <div class="logo hidden-xs hidden-sm">
 <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png"></a>
                </div>
            </div>
            <div class="col-xs-2 all-center hidden-sm hidden-xs">
                <div class="specs all-center">
 <span> <img src="<?= SITE_TEMPLATE_PATH ?>/img/specs.png"> </span>
                </div>
                <div class="all-center specs-txt">
 <a class="color-black" href="#">Версия для слабовидящих</a>
                </div>
            </div>
            <div class="col-xs-5">
                <div class="row">
                    <div class="hamburger hidden-md hidden-lg all-right">
 <input type="checkbox" id="hmt" class="hidden-menu-ticker"> <label id="label" class="btn-menu" for="hmt" style="display: none;"> <span class="first"></span> <span class="second"></span> <span class="third"></span> </label>
                        <div>
 <span class="menu-on glyphicon glyphicon-align-justify"></span>
                        </div>
                        <ul class="hidden-menu all-center">
                            <div class="logo all-left margin-top-5">
                                <div class="row">
                                    <div class="col-xs-6">
 <img width="100%" src="img/logo.png">
                                    </div>
                                    <div class="col-xs-6 all-center">
                                        <div>
 <span class="menu-off glyphicon glyphicon-plus"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="margin-top-4">
                            </div>
                            <li><a href="">О нас</a></li>
                            <li><a href="">Заболевания</a></li>
                            <li><a href="">Диагностика</a></li>
                            <li><a href="">Операции</a></li>
                            <li><a href="">Оборудывание</a></li>
                            <li><a href="">Наши врачи</a></li>
                            <li><a href="">Пациентам</a></li>
                            <li><a href="">Детское отделение</a></li>
                            <li><a href="">Ортокератолоия</a></li>
                            <div class="footer">
                                 г. Липецк, ул. Липовская
                            </div>
                            <div>
                                 4742 47 03 03
                            </div>
                            <div>
                                 4742 37 04 04
                            </div>
                        </ul>
                    </div>
                    <div class="col-xs-6 all-center hidden-sm hidden-xs">
                        <div class="phone-number">
 <span class="color-ser">4742</span> <span class="color-blue">47 03 03</span>
                        </div>
                        <div class="phone-number margin-top-05">
 <span class="color-ser">4742</span> <span class="color-blue">37 04 04</span>
                        </div>
                    </div>
                    <div class="col-xs-6 all-center hidden-sm hidden-xs">
                        <div>
 <a class="button1" data-toggle="modal" data-target="#myModal" style="cursor:pointer;">Запись на прием</a>
                        </div>
                        <div class="margin-top-1">
 <a href="#">Обратная связь</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
    <script type="text/javascript">
            document.querySelector('.menu-on').addEventListener('click', function(){
                mobileMenu();
            },false);
            document.querySelector('.menu-off').addEventListener('click', function(){
                mobileMenu();
            },false);
            document.querySelector('.menu-on').addEventListener('touchmove', function(){
                mobileMenu();
            },false);
            document.querySelector('.menu-off').addEventListener('touchmove', function(){
                mobileMenu();
            },false);

            function mobileMenu()
            {
                var chekbox = document.querySelector('#hmt');
                if(chekbox.checked == true)
                {
                    chekbox.checked = false;
                }
                else if(chekbox.checked == false)
                {
                    chekbox.checked = true;
                }
            }
        </script> <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top-menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top",
		"COMPONENT_TEMPLATE" => "top-menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	),
	false
);?>
</div>