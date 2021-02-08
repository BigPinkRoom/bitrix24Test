<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<footer class="footer">
  <div class="container">

    <div class="footer__inner">

      <div class="footer__header">

        <div class="logo logo--footer">Kallyas<span class="logo-dot">.</span></div>
        <div class="footer__description">Contact</div>
        <div class="footer__address">
          <p>758 E. Beechwood Lane Bay Shore, NY 11706</p>
          <p>youremail@address.com, +1-202-555-0158</p>
        </div>
        <div class="footer__social">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/footer/footer_1.png" alt="" class="footer__image">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/footer/footer_2.png" alt="" class="footer__image">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/footer/footer_3.png" alt="" class="footer__image">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/footer/footer_4.png" alt="" class="footer__image">
        </div>

      </div>

      <div class="footer-content">

        <div class="footer-content__menu">
          <ul class="footer-content__ul">
            <li class="footer-content__li"><a class="footer-content__link">Home</a></li>
            <li class="footer-content__li"><a class="footer-content__link">Services</a></li>
            <li class="footer-content__li"><a class="footer-content__link">Works</a></li>
            <li class="footer-content__li"><a class="footer-content__link">About us</a></li>
            <li class="footer-content__li"><a class="footer-content__link">Features</a></li>
            <li class="footer-content__li"><a class="footer-content__link">Contact</a></li>
          </ul>
        </div>

        <div class="footer-content__description">Subscribe to newsletter</div>
        <form action="/" method="POST" class="footer-content__form">
          <input type="text" placeholder="Your e-mail address:" class="footer-content__input">
          <button type="submit" name="name" class="footer-content__button">Submit</button>
        </form>
        <div class="footer-content__copyright">© 2019. All rights reserved. Buy Kallyas Wordpress Theme.</div>

      </div>

    </div>

  </div>
</footer>
</body>

</html>