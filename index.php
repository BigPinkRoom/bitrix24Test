<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>




<!-- first-info -->
<div class="first-info">
  <div class="container">

    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"kallyas_card_one", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "firstInfo",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
		"PARENT_SECTION" => "1",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "kallyas_card_one"
	),
	false
);?>
  </div>
</div>


<!-- services -->
<section class="section" id="services">
  <div class="container">

    <div class="services">

      <div class="services__header">
        <h3 class="services__suptitle">Services</h3>
        <h2 class="services__title">Best services for <span class="services__title--highlight">Visual Perfection</span>
        </h2>
        <div class="services__subtitle">Cras sed felis eget velit aliquet sagittis id consectetur. Lectus sit amet est
          placerat in egestas erat imperdiet sed. Amet nisl purus in mollis nunc sed id semper risus.</div>
      </div>

      <div class="services__content">

        <div class="services-item services-item--first">
          <div class="services-item__image">
            <img class="services-item__icon" src="<?=SITE_TEMPLATE_PATH?>/images/services/services_1.png" alt="">
          </div>
          <h3 class="services-item__title">Strategy</h3>
          <div class="services-item__text">
            <p>Ullamcorper dignissim cras tincidunt vet lobortis feugiat vivamus. Sed euismod nisi porta lorem mollis
              turpis dui amet.</p>
          </div>
        </div>

        <div class="services-item services-item--first">
          <div class="services-item__image">
            <img class="services-item__icon" src="<?=SITE_TEMPLATE_PATH?>/images/services/services_2.png" alt="">
          </div>
          <h3 class="services-item__title">Marketing</h3>
          <div class="services-item__text">
            <p>Duis at consectetur lorem donec massa sapien faucibus et. Et malesuada fames ac turpis egestas maecenas
              pharetra.</p>
          </div>
        </div>

        <div class="services-item services-item--first">
          <div class="services-item__image">
            <img class="services-item__icon" src="<?=SITE_TEMPLATE_PATH?>/images/services/services_3.png" alt="">
          </div>
          <h3 class="services-item__title">Technology</h3>
          <div class="services-item__text">
            <p>Viverra nibh cras pulvinar mattis nunc sed blandit libero. Lorem ipsum dolor sit amet consectetur
              adipiscing.</p>
          </div>
        </div>

        <div class="services-item">
          <div class="services-item__image">
            <img class="services-item__icon" src="<?=SITE_TEMPLATE_PATH?>/images/services/services_4.png" alt="">
          </div>
          <h3 class="services-item__title">Ecommerce</h3>
          <div class="services-item__text">
            <p>Malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Aliquam ut porttitor a
              sollicitudin.</p>
          </div>
        </div>

        <div class="services-item">
          <div class="services-item__image">
            <img class="services-item__icon" src="<?=SITE_TEMPLATE_PATH?>/images/services/services_5.png" alt="">
          </div>
          <h3 class="services-item__title">Branding</h3>
          <div class="services-item__text">
            <p>Orci a scelerisque purus semper eget. Ac ut consequat semper viverra nam libero justo lectus arcu
              bibendum at laoreet sit.</p>
          </div>
        </div>

        <div class="services-item">
          <div class="services-item__image">
            <img class="services-item__icon" src="<?=SITE_TEMPLATE_PATH?>/images/services/services_6.png" alt="">
          </div>
          <h3 class="services-item__title">SEO Identity</h3>
          <div class="services-item__text">
            <p>Etiam sit amet nisl purus in mollis nunc. Orci a scelerisque purus semper. Eget dolor diam quam nulla
              morbi non arcu.</p>
          </div>
        </div>

      </div>

    </div>
    <!--/.services-->

  </div>
</section>


<!-- features dark (businnss plan) -->
<section class="section section--dark">
  <div class="container">


    <div class="features features--dark">

      <div class="features__header">
        <h2 class="features__title">
          Detailed business plans & the most effective results
        </h2>
        <div class="features__text">
          <p>Pellentesque habitant morbi tristique senectus et netus et. Accumsan lacus vel facilisis volutpat est velit
            egestas. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. At varius vel pharetra vel
            turpis nunc eget.</p>
        </div>
        <a href="" class="button button--features-dark">Start Now</a>
      </div>

      <div class="features-twice-image__wrapper">
        <div class="features-twice-image__item">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/features-business-plans/features-business-plans_1.jpg" alt=""
            class="features-twice-image__photo">
        </div>
        <div class="features-twice-image__item">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/features-business-plans/features-business-plans_2.jpg" alt=""
            class="features-twice-image__photo">
        </div>
      </div>

    </div>

  </div>
</section>


<!-- features gray -->
<section class="section section--gray" id="features">
  <div class="container">

    <div class="features features--gray">

      <div class="features-list">

        <div class="features-list__item">
          <h3 class="features-list__title">01. Elegant / unique design</h3>
          <div class="features-list__text">
            <p>Malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Aliquam ut porttitor a
              sollicitudin.</p>
          </div>
        </div>

        <div class="features-list__item">
          <h3 class="features-list__title">02. True responsiveness</h3>
          <div class="features-list__text">
            <p> At risus viverra adipiscing at in tellus. Nec tincidunt praesent semper feugiat nibh. Nunc scelerisque
              viverra.</p>
          </div>
        </div>

        <div class="features-list__item">
          <h3 class="features-list__title">03. Different layout type</h3>
          <div class="features-list__text">
            <p>Sed arcu non odio euismod lacinia at quis risus. Turpis in eu mi bibendum neque egestas congue quisque.
            </p>
          </div>
        </div>

        <div class="features-list__item">
          <h3 class="features-list__title">04. Make it simple</h3>
          <div class="features-list__text">
            <p>Imperdiet proin fermentum leo vel orci. Aenean pharetra magna ac placerat vestibulum lectus mauris
              ultrices.</p>
          </div>
        </div>

      </div>

      <div class="features__header">
        <div class="features__title">We provide high quality and
          cost effective services.</div>
        <div class="features__text">
          <p>Massa ultricies mi quis hendrerit dolor magna eget est lorem. Amet risus nullam eget felis eget. Orci
            dapibus ultrices in iaculis nunc sed augue lacus viverra. Blandit volutpat maecenas volutpat blandit aliquam
            etiam erat velit scelerisque.</p>
          <p>Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Urna nunc id cursus metus aliquam
            eleifend. Imperdiet proin fermentum leo vel orci.</p>
        </div>
      </div>

    </div>

  </div>
</section>


<!-- gallery -->
<div class="section section--gallery" id="gallery">

  <div class="gallery">

    <div class="gallery__menu">
      <ul class="gallery__ul">
        <li class="gallery__li">
          <button class="gallery__button" type="button">All</button>
        </li>
        <li class="gallery__li">
          <button class="gallery__button" type="button">Web</button>
        </li>
        <li class="gallery__li">
          <button class="gallery__button" type="button">Advertising</button>
        </li>
        <li class="gallery__li">
          <button class="gallery__button" type="button">Branding</button>
        </li>
        <li class="gallery__li">
          <button class="gallery__button" type="button">Design</button>
        </li>
        <li class="gallery__li">
          <button class="gallery__button" type="button">Photography</button>
        </li>
      </ul>
    </div>

    <div class="gallery__wrapper" id="gallery__wrapper">
      <div class="gallery__item">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/gallery/gallery_1.jpg" alt="" data-category="web"
          class="gallery__image">
      </div>
      <div class="gallery__item">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/gallery/gallery_2.jpg" alt="" data-category="advertising"
          class="gallery__image">
      </div>
      <div class="gallery__item">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/gallery/gallery_3.jpg" alt="" data-category="branding"
          class="gallery__image">
      </div>
      <div class="gallery__item">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/gallery/gallery_4.jpg" alt="" data-category="design"
          class="gallery__image">
      </div>
      <div class="gallery__item">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/gallery/gallery_5.jpg" alt="" data-category="photography"
          class="gallery__image">
      </div>
      <div class="gallery__item">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/gallery/gallery_6.jpg" alt="" data-category="web"
          class="gallery__image">
      </div>
      <div class="gallery__item">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/gallery/gallery_7.jpg" alt="" data-category="advertising"
          class="gallery__image">
      </div>
      <div class="gallery__item">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/gallery/gallery_8.jpg" alt="" data-category="branding"
          class="gallery__image">
      </div>
    </div>

  </div>
</div>


<!-- features white -->
<section class="section section--white" id="about-us">
  <div class="container">

    <div class="features features--video">

      <div class="features__header">
        <h2 class="features__title">We are trusted by more than
          3600+ clients.</h2>
        <div class="features__text">
          <p>Pellentesque habitant morbi tristique senectus et netus et. Accumsan lacus vel facilisis volutpat est velit
            egestas. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. At varius vel pharetra vel
            turpis nunc eget.</p>
        </div>
        <a href="" class="button button--features-white">Learn More</a>
      </div>

      <div class="features-video">
        <div class="features-video__wrapper">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/features-video/features-video_bg.jpg" alt=""
            class="features-video__movie">
          <div class="features-video__overlay">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/features-video/features-video_play-button.png" alt=""
              class="features-video__play">
          </div>
        </div>
      </div>

    </div>

  </div>
</section>


<!-- features clients -->
<section class="section section--dark">
  <div class="container">
    <div class="features features--dark features--logo">

      <div class="features-logo">
        <div class="features-logo__item">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/features-clients/features-clients_1.png" alt=""
            class="features-logo__image">
        </div>
        <div class="features-logo__item">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/features-clients/features-clients_2.png" alt=""
            class="features-logo__image">
        </div>
        <div class="features-logo__item">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/features-clients/features-clients_3.png" alt=""
            class="features-logo__image">
        </div>
        <div class="features-logo__item">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/features-clients/features-clients_4.png" alt=""
            class="features-logo__image">
        </div>
      </div>

      <div class="features__header features__header--logo">
        <h2 class="features__title">Clients with projects proudly
          crafted by our agency.</h2>
        <div class="features__text">
          <p>Aenean sed adipiscing diam donec. Est placerat in egestas erat. Cras fermentum odio eu feugiat pretium nibh
            ipsum consequat. Enim eu turpis egestas pretium aenean pharetra magna ac placerat. Lacus luctus accumsan
            tortor posuere.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- features designs -->
<section class="section section--designs">
  <div class="container">

    <div class="features features--designs">

      <div class="features__header">

        <h2 class="features__title">Beautifully handcrafted
          designs for your website</h2>
        <div class="features__text">
          <p>Enim ut tellus elementum sagittis vitae et leo duis. Feugiat sed lectus vestibulum mattis ullamcorper.
            Aenean et tortor at risus viverra adipiscing at. Neque aliquam vestibulum morbi blandit cursus risus at.</p>
        </div>

        <div class="features-info">

          <div class="features-info__item">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/features-designs/features-designs_1.png" alt=""
              class="features-info__icon">
            <div class="features-info__title">Secured Database</div>
            <div class="features-info__text">Ullamcorper dignissim cras tincidunt vet lobortis feugiat vivamus. Sed
              euismod nisi porta lorem mollis turpis.</div>
          </div>

          <div class="features-info__item">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/features-designs/features-designs_2.png" alt=""
              class="features-info__icon">
            <div class="features-info__title">Modern Framework</div>
            <div class="features-info__text">Pharetra massa massa ultricies mi quis hendrerit. Interdum consectetur
              libero nisl tincidunt eget.</div>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>


<!-- contacts -->
<section class="section" id="contact">
  <div class="container">

    <div class="contacts">

      <div class="contacts__header">
        <h2 class="contacts__title">Want to have a
          proffesional project?
          Let’s talk about it.</h2>
        <div class="contacts__text">
          <p>Est ultricies integer quis auctor elit sed vulputate mi. Lectus nulla at volutpat diam ut. Justo donec enim
            diam vulputate ut pharetra sit amet aliquam. Parturient montes nascetur ridiculus mus mauris vitae.</p>
          <p>Vel fringilla est ullamcorper eget nulla. Urna duis convallis convallis tellus id interdum velit laoreet
            id. Donec adipiscing tristique risus nec feugiat. Egestas dui id ornare arcu odio ut sem nulla</p>
        </div>
      </div>

      <form class="contacts__form">
        <div class="contacts__item">
          <input type="text" placeholder="Your name*" class="contacts__input">
        </div>
        <div class="contacts__item contacts__item--twice">
          <input type="text" placeholder="Company name*" class="contacts__input contacts__input--twice">
          <input type="email" placeholder="Email address*" class="contacts__input contacts__input--twice">
        </div>
        <div class="contacts__item">
          <select class="contacts__input contacts__input--select">
            <option disabled selected>Select service</option>
          </select>
        </div>
        <div class="contacts__item">
          <textarea placeholder="Describe your project*" class="contacts__textarea"></textarea>
        </div>
      </form>

    </div>

    <button type="submit" name="name" class="contacts__button">Submit</button>

  </div>
</section>



<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>