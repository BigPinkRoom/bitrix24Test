<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="nav">
  <ul class="nav__ul">
    <?foreach($arResult as $arItem):?>

    <?if ($arItem["PERMISSION"] > "D"):?>
    <li class="nav__li"><a class="nav__link" data-scroll="<?=$arItem["PARAMS"]["DATA-SCROLL"]?>">
        <?=$arItem["TEXT"]?>
      </a></li>
    <?endif?>

    <?endforeach?>

  </ul>
</nav>
<div class="menu-clear-left"></div>
<?endif?>