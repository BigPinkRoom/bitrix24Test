<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?> <? 
use Bitrix\Main\Page\Asset;
 ?> <?$APPLICATION->ShowHead();?> <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css')?>
 <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/app.js')?> 
 <? Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">')?>
 <? Asset::getInstance()->addString('<link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
    rel="stylesheet">')?> 
<!-- control panel -->
<div id="panel">
	 <?$APPLICATION->ShowPanel();?>
</div>
 <!-- header -->
<div class="header" id="header">
	<div class="container">
		<div class="header__inner">
			<div class="logo">
				 Kallyas<span class="logo-dot">.</span>
			</div>
			 <?$APPLICATION->IncludeComponent("bitrix:menu", "kallyas_menu_local", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?> <button class="nav-toggle" id="nav-toggle"> <span class="nav-toggle__item">Menu</span> </button>
		</div>
	</div>
</div>
 <!-- intro --> <section class="intro" id="intro">
<div class="container">
	<div class="intro__inner">
		<div>
		</div>
		<h1 class="intro__title">
		<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/main/include/inc_header_title.php"
	)
);?> </h1>
		<h2 class="intro__subtitle">
		<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/main/include/inc_header_subtitle.php"
	)
);?> </h2>
	</div>
	<div class="intro__buttons">
 <a href="" class="button button--intro">Start Now</a> <a href="./services.html" class="button button--intro">Our Services</a>
	</div>
</div>
 </section>