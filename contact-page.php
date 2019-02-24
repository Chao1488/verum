
<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
<div class="contacts-page">
  <div class="container">
    <h6 class="pre-headline"><?php the_field('contact_pre_headline'); ?></h6>
    <h1 class="page-headline ta-c"><?php the_field('contact_page_headline'); ?></h1>
    <div class="flex-block">
      <div class="flex-left">
        <div class="contacts-wrapper">
          <div class="contact-item"><span><?php the_field('contact_contact_item'); ?></span><a href="tel:+12248175916">+1(224) 817-59-16 </a></div>
          <div class="contact-item"><span>WhatsApp</span><a href="https://api.whatsapp.com/send?phone=12248175906">+1(224) 817-59-16 </a></div>
          <div class="contact-item"><span>Telegram</span><a href="tg://resolve?domain=VerumTrade1">+1(224) 817-59-16 </a></div>
        </div>
      </div>
      <div class="flex-right">
        <form class="form">
          <div class="form-row">
            <div class="form-group col-sm-6 col-xs-12">
              <input class="form-control" type="text" name="name" placeholder="<?php the_field('contact_form_control'); ?>" value="" required id="your-name">
              <div class="error-input" style="opacity: 0;"></div>
            </div>
            <div class="form-group col-sm-6 col-xs-12">
              <input class="form-control" type="email" name="email" placeholder="<?php the_field('contact_form_control1'); ?>" value="" required id="your-mail">
              <div class="error-input" style="opacity: 0;"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" placeholder="<?php the_field('contact_form_control2'); ?>" value="" required id="your-message"></textarea>
            <div class="error-textarea" style="opacity: 0;"></div>
          </div>
          <button class="custom-btn" type="submit" role="button" id="form-submit"><span><?php the_field('contact_form_btn'); ?></span>
            <svg id="submit" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
              <g>
                <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
              </g>
            </svg>
          </button>
        </form>
      </div>
    </div>
    <div class="map-wrapper"><img src="<?php bloginfo ('template_directory')?>/assets/images/map.png" alt="Map"></div>
  </div>
</div>
<footer class="top-footer">
  <div class="container">
    <div class="row footer-menu">
      <div class="col-lg-2 footer-menu-col footer-menu-col-1"><a href="/"><img src="<?php bloginfo ('template_directory')?>/assets/images/logo.png" alt="logo" style="width: 40px; height: 40px;"></a></div>
      <div class="col-lg-3 col-sm-6 footer-menu-col footer-menu-col-2">
        <p class="footer-menu-title">Меню</p>
        <ul class="footer-menu-list">
          <li><a href="/">Главная страница</a></li>
          <li><a href="company.html">О VerumTrade</a></li>
          <li><a href="faq.html">Часто задаваемые вопросы</a></li>
          <li><a href="contacts.html">Контакты</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-sm-6 footer-menu-col footer-menu-col-3">
        <p class="footer-menu-title">Инфоцентр</p>
        <ul class="footer-menu-list">
          <li><a href="event.html">События</a></li>
          <li><a href="javascript:void(0);">Новости</a></li>
          <li><a href="javascript:void(0);">Отзывы</a></li>
          <li><a href="gallery.html">Галерея</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-sm-6 footer-menu-col footer-menu-col-4">
        <p class="footer-menu-title">Контакты</p>
        <ul class="footer-menu-list">
          <li>
            <p>Dublin, Ireland</p>
          </li>
          <li>
            <p>110, Upper Tulse Hill</p>
          </li>
          <li>
            <p>
              Тел. <a href="tel:+12248175906">+1 (224) 817-59-06</a></p>
          </li>
          <li><a href="mailto:support@verumtrade.com">support@verumtrade.com</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-sm-6 footer-menu-col footer-menu-col-5">
        <p class="footer-menu-title">Соцсети</p>
        <ul class="footer-menu-list">
          <li><a class="facebook-icon" href="https://www.facebook.com/profile.php?id=100018532218598" target="_blank">
              <div class="icon-wrapper"><i class="zmdi zmdi-facebook"></i></div><span>Facebook</span></a></li>
          <li><a class="twitter-icon" href="https://twitter.com/Verumtrade" target="_blank">
              <div class="icon-wrapper"><i class="zmdi zmdi-twitter"></i></div><span>Twitter</span></a></li>
          <li><a class="youtube-icon" href="http://www.youtube.com/channel/UCueR6-HaSgC2Ee1h4r61cKQ" target="blank">
              <div class="icon-wrapper"><i class="zmdi zmdi-youtube"></i></div><span>Youtube</span></a></li>
          <li><a class="instagram-icon" href="http://www.instagram.com/verum_trade/" target="_blank">
              <div class="icon-wrapper"><i class="zmdi zmdi-instagram"></i></div><span>Instagram</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<footer class="bottom-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-4">
        <p><?php the_field('contact_footer_right'); ?></p>
      </div>
      <div class="col-lg-2 col-md-4 text-center" id="scroll-top-wrapper"><a href="javascript:void(0);" id="scrollTop"><?php the_field('contact_footer_up'); ?> <i class="zmdi zmdi-chevron-up scroll-top-icon"></i></a></div>
      <div class="col-lg-5 col-md-4 text-right"><a href="javascript:void(0);"><?php the_field('contact_footer_politica'); ?></a></div>
    </div>
    <div class="row">
      <div class="col text-center footer-lang-switcher"><a href="javascript:void(0);">RUS</a><a href="javascript:void(0);">ENG</a></div>
    </div>
  </div>
</footer>
<div class="mobile-menu" id="mobile-menu">
  <button class="hamburger hamburger--spin closebtn is-active" type="button" onclick="closeMobileMenu()"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
  <div class="overlay-content"><a href="/">Главная</a><a href="company.html">О компании</a><a href="faq.html">FAQ</a><a href="contacts.html">Контакты</a><a href="https://backoffice.verumtrade.com/sign_in">Войти</a><a href="https://backoffice.verumtrade.com/sign_up">Регистрация</a></div>
</div>
<link rel="stylesheet" href="<?php bloginfo ('template_directory')?>/assets/css/main.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://tympanus.net/Development/ProximityFeedback/js/TweenMax.min.js"></script>
<script src="https://tympanus.net/Development/ProximityFeedback/js/nearby.js"></script>
<script src="https://tympanus.net/Development/ProximityFeedback/js/charming.min.js"></script>
<script>
  const form = document.querySelector('.form');
  const submitBttn = form.querySelector('#form-submit');
  const requiredElems = Array.from(form.querySelectorAll('input[required], textarea'));
  const opacityInterval = {from: 0, to: 1};

  new Nearby(submitBttn, {
    onProgress: (distance) => {
      const o = lineEq(opacityInterval.from, opacityInterval.to, distanceThreshold.max, distanceThreshold.min, distance);

      requiredElems.forEach((el) => {
        const inputErrorEl = el.nextElementSibling;
        if ( !el.value || el.type === 'email' && !validateEmail(el.value) ) {
          TweenMax.to(inputErrorEl, .3, {
            opacity: Math.max(o,opacityInterval.from)
          });
        }
        else if ( el.value ) {
          inputErrorEl.style.opacity = opacityInterval.from;
        }
      });
    }
  });

</script>
<script src="<?php bloginfo ('template_directory')?>/assets/js/common.js"></script>
</body>
</html>
