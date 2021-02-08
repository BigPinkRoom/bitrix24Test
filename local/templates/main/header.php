<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<? 
use Bitrix\Main\Page\Asset;
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?$APPLICATION->ShowHead();?>
  <title>
    <?$APPLICATION->ShowTitle();?>
  </title>

  <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css')?>
  <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/app.js')?>
  <? Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">')?>
  <? Asset::getInstance()->addString('<link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
    rel="stylesheet">')?>

</head>

<body>
  <!-- control panel -->
  <div id="panel">
    <?$APPLICATION->ShowPanel();?>
  </div>

  <!-- header -->
  <header class="header" id="header">
    <div class="container">

      <div class="header__inner">

        <div class="logo">Kallyas<span class="logo-dot">.</span></div>

        <nav class="nav">
          <ul class="nav__ul">
            <li class="nav__li"><a class="nav__link" data-scroll="intro">Home</a></li>
            <li class="nav__li"><a class="nav__link" data-scroll="services">Services</a></li>
            <li class="nav__li"><a class="nav__link" data-scroll="gallery">Works</a></li>
            <li class="nav__li"><a class="nav__link" data-scroll="about-us">About us</a></li>
            <li class="nav__li"><a class="nav__link" data-scroll="features">Features</a></li>
            <li class="nav__li"><a class="nav__link" data-scroll="contact">Contact</a></li>
          </ul>
        </nav>

        <button class="nav-toggle" id="nav-toggle">
          <span class="nav-toggle__item">Menu</span>
        </button>

      </div>

    </div>
  </header>


  <!-- intro -->
  <section class="intro" id="intro">
    <div class="container">

      <div class="intro__inner">
        <h1 class="intro__title">Helping Business And Companies Innovate Transform And Lead</h1>
        <h2 class="intro__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
          maecenas accumsan lacus vel facilisis. </h2>
      </div>

      <div class="intro__buttons">
        <a href="" class="button button--intro">Start Now</a>
        <a href="./services.html" class="button button--intro">Our Services</a>
      </div>

    </div>
  </section>