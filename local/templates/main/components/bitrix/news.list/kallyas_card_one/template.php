<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!-- first-info -->
<div class="first-info">
  <div class="container">
    <div class="first-info__inner">
      <?foreach($arResult["ITEMS"] as $arItem):?>

      <div class="first-info__item">
        <div class="first-info__image">
          <img class="first-info__icon" src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt="">
        </div>
        <div class="first-info__text-content">
          <h2 class="first-info__title"><?=$arItem['NAME']?></h2>
          <div class="first-info__text">
            <?=$arItem['DETAIL_TEXT']?>
          </div>
        </div>
      </div>

      <?endforeach;?>
    </div>
  </div>
</div>