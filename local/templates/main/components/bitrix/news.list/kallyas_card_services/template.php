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

<!-- services -->
<section class="section" id="services">
  <div class="container">

    <div class="services">

      <?$arFilter = Array('IBLOCK_ID' => 1, 'ID'=> 2, 'ACTIVE' => 'Y', 'GLOBAL_ACTIVE' => 'Y', 'SECTION_ACTIVE' => 'Y');?>

      <?$arSelect = Array('UF_INFO_BLOCK_TITLE_FIRST_PART', 'UF_INFO_BLOCK_TITLE_SECOND_PART');?>

      <? $dbItems =  CIBlockSection::GetList(
        false,
        $arFilter,
        false,
        $arSelect
      );?>
      <? $fieldsSections = $dbItems->Fetch()?>

      <div class="services__header">
        <h3 class="services__suptitle"><?=$arResult['SECTION']["PATH"][0]["NAME"]?></h3>
        <h2 class="services__title"><?=$fieldsSections['UF_INFO_BLOCK_TITLE_FIRST_PART'];?>
          <span class="services__title--highlight">
            <?=$fieldsSections['UF_INFO_BLOCK_TITLE_SECOND_PART'];?>
          </span>
        </h2>
        <div class="services__subtitle">Cras sed felis eget velit aliquet sagittis id consectetur. Lectus sit amet est
          placerat in egestas erat imperdiet sed. Amet nisl purus in mollis nunc sed id semper risus.</div>
      </div>

      <div class="services__content">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="services-item">

          <div class="services-item__image">
            <img class="services-item__icon" src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt="">
          </div>
          <h3 class="services-item__title"><?=$arItem['NAME']?></h3>
          <div class="services-item__text">
            <p><?=$arItem['DETAIL_TEXT']?></p>
          </div>

        </div>
        <?endforeach;?>
      </div>

    </div>
    <!--/.services-->

  </div>
</section>