
<?php
/*
Template Name: Events
*/
?>
<?php get_header(); ?>
		<div class="events-page">
			<div class="container">
				<h6 class="pre-headline"><?php the_field('events_pre_headline'); ?></h6>
				<h1 class="page-headline ta-c"><?php the_field('events_page_headline'); ?></h1>
				<div class="event-item">
					<div class="photo-block"><img src="<?php bloginfo ('template_directory')?>/assets/images/event-photo.png" alt="Event photo"></div>
					<div class="info-block">
						<div class="line-1"><span class="event-type"><?php the_field('events_event-type'); ?></span><span class="is-free"><?php the_field('events_is-free'); ?></span></div>
						<div class="line-2">
							<div class="date"><i class="zmdi zmdi-calendar-note"></i><span>28.04.2018</span></div>
							<div class="time"><i class="zmdi zmdi-time"></i><span>16:00</span></div>
						</div>
						<div class="line-3">
							<div class="headline"><?php the_field('events_headline'); ?></div>
						</div>
						<div class="line-4">
							<div class="address"><i class="zmdi zmdi-pin"></i><span><?php the_field('events_address'); ?></span></div>
						</div>
						<div class="line-5"><a class="photo-btn" href="#lightbox1" data-toggle="modal"><i class="zmdi zmdi-camera"></i><span><?php the_field('events_btn_blue'); ?></span></a><a class="video-btn" href="#lightbox2" data-toggle="modal"><i class="zmdi zmdi-videocam"></i>
              <span><?php the_field('events_btn_green'); ?></span></a></div>
					</div>
				</div>
				<div class="event-item">
					<div class="photo-block"><img src="<?php bloginfo ('template_directory')?>/assets/images/event-photo.png" alt="Event photo"></div>
					<div class="info-block">
						<div class="line-1"><span class="event-type"><?php the_field('events_event-type'); ?></span><span class="is-free"><?php the_field('events_is-free'); ?></span></div>
						<div class="line-2">
							<div class="date"><i class="zmdi zmdi-calendar-note"></i><span>28.04.2018</span></div>
							<div class="time"><i class="zmdi zmdi-time"></i><span>16:00</span></div>
						</div>
						<div class="line-3">
							<div class="headline"><?php the_field('events_headline'); ?></div>
						</div>
						<div class="line-4">
							<div class="address"><i class="zmdi zmdi-pin"></i><span><?php the_field('events_address'); ?></span></div>
						</div>
						<div class="line-5"><a class="photo-btn" href="#lightbox3" data-toggle="modal"><i class="zmdi zmdi-camera"></i><span><?php the_field('events_btn_blue'); ?></span></a><a class="video-btn" href="#lightbox4" data-toggle="modal"><i class="zmdi zmdi-videocam"></i>
              <span><?php the_field('events_btn_green'); ?></span></a></div>
					</div>
				</div>
        <div class="event-item">
          <div class="photo-block"><img src="<?php bloginfo ('template_directory')?>/assets/images/event-photo.png" alt="Event photo"></div>
          <div class="info-block">
            <div class="line-1"><span class="event-type"><?php the_field('events_event-type'); ?></span><span class="is-free"><?php the_field('events_is-free'); ?></span></div>
            <div class="line-2">
              <div class="date"><i class="zmdi zmdi-calendar-note"></i><span>28.04.2018</span></div>
              <div class="time"><i class="zmdi zmdi-time"></i><span>16:00</span></div>
            </div>
            <div class="line-3">
              <div class="headline"><?php the_field('events_headline'); ?></div>
            </div>
            <div class="line-4">
              <div class="address"><i class="zmdi zmdi-pin"></i><span><?php the_field('events_address'); ?></span></div>
            </div>
            <div class="line-5"><a class="photo-btn" href="#lightbox3" data-toggle="modal"><i class="zmdi zmdi-camera"></i><span><?php the_field('events_btn_blue'); ?></span></a><a class="video-btn" href="#lightbox4" data-toggle="modal"><i class="zmdi zmdi-videocam"></i>
              <span><?php the_field('events_btn_green'); ?></span></a></div>
          </div>
        </div>
			<div class="modal fade photo-video-modal" id="lightbox1">
				<div class="modal-dialog window">
					<button class="close-modal" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-content">
						<div class="carousel slide" id="carousel1" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=1" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=2" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=3" alt="..."></div>
							</div><a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"><span class="zmdi zmdi-chevron-left"></span></a><a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"><span class="zmdi zmdi-chevron-right"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade photo-video-modal" id="lightbox2">
				<div class="modal-dialog window">
					<button class="close-modal" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-content">
						<div class="carousel slide" id="carousel2" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=4" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=5" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=6" alt="..."></div>
							</div><a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev"><span class="zmdi zmdi-chevron-left"></span></a><a class="carousel-control-next" href="#carousel2" role="button" data-slide="next"><span class="zmdi zmdi-chevron-right"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade photo-video-modal" id="lightbox3">
				<div class="modal-dialog window">
					<button class="close-modal" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-content">
						<div class="carousel slide" id="carousel3" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=7" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=8" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=9" alt="..."></div>
							</div><a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev"><span class="zmdi zmdi-chevron-left"></span></a><a class="carousel-control-next" href="#carousel3" role="button" data-slide="next"><span class="zmdi zmdi-chevron-right"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade photo-video-modal" id="lightbox4">
				<div class="modal-dialog window">
					<button class="close-modal" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-content">
						<div class="carousel slide" id="carousel4" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=10" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=11" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=12" alt="..."></div>
							</div><a class="carousel-control-prev" href="#carousel4" role="button" data-slide="prev"><span class="zmdi zmdi-chevron-left"></span></a><a class="carousel-control-next" href="#carousel4" role="button" data-slide="next"><span class="zmdi zmdi-chevron-right"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade photo-video-modal" id="lightbox5">
				<div class="modal-dialog window">
					<button class="close-modal" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-content">
						<div class="carousel slide" id="carousel5" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=13" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=14" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=15" alt="..."></div>
							</div><a class="carousel-control-prev" href="#carousel5" role="button" data-slide="prev"><span class="zmdi zmdi-chevron-left"></span></a><a class="carousel-control-next" href="#carousel5" role="button" data-slide="next"><span class="zmdi zmdi-chevron-right"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade photo-video-modal" id="lightbox6">
				<div class="modal-dialog window">
					<button class="close-modal" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-content">
						<div class="carousel slide" id="carousel6" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=16" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=17" alt="..."></div>
								<div class="carousel-item"><img class="img-responsive" src="http://placehold.it/673x376/eaeaea/000&amp;text=18" alt="..."></div>
							</div><a class="carousel-control-prev" href="#carousel6" role="button" data-slide="prev"><span class="zmdi zmdi-chevron-left"></span></a><a class="carousel-control-next" href="#carousel6" role="button" data-slide="next"><span class="zmdi zmdi-chevron-right"></span></a>
						</div>
					</div>
				</div>
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
						<p>Все права защищены &copy; VerumTrade - 2018</p>
					</div>
					<div class="col-lg-2 col-md-4 text-center" id="scroll-top-wrapper"><a href="javascript:void(0);" id="scrollTop">Вверх сайта  <i class="zmdi zmdi-chevron-up scroll-top-icon"></i></a></div>
					<div class="col-lg-5 col-md-4 text-right"><a href="javascript:void(0);">Политика конфиденциальности</a></div>
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

		<script src="<?php bloginfo ('template_directory')?>/assets/js/common.js"></script>
	</body>
</html>
