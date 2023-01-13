<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IDCHECK  || Home </title>
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
		rel="stylesheet">
	<!-- favicons Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="/assets4/images/favicons/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="/assets4/images/favicons/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="/assets4/images/favicons/favicon-16x16.png" />
	<link rel="manifest" href="/assets4/images/favicons/site.webmanifest" />
	<!-- plugins css -->
	<link rel="stylesheet" href="/assets4/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets4/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="/assets4/vendors/jarallax/jarallax.css">
	<link rel="stylesheet" href="/assets4/vendors/animate/animate.min.css">
	<link rel="stylesheet" href="/assets4/vendors/owl-carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets4/vendors/owl-carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="/assets4/vendors/cretech-icons/style.css">
	<link rel="stylesheet" href="/assets4/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">
	<!-- templates css -->
	<link rel="stylesheet" href="/assets4/css/cretech.css">
</head>

<body class="custom-cursor">

	<div class="custom-cursor__cursor"></div>
	<div class="custom-cursor__cursor-two"></div>

	<div class="preloader">
		<div class="preloader__circle"></div>
	</div>

	<div class="page-wrapper">
		<header class="header-two">
			<div class="topbar-two">
				<div class="container">
					<div class="topbar-two__inner">
						<div class="topbar-two__logo">
							<a href="#">
								<img src="/logo.png" width="98" height="33" alt="Idcheck">
							</a>
						</div><!-- /.topbar-two__logo -->
						<ul class="topbar-two__list">
							<li class="topbar-two__list__item">
								<div class="topbar-two__list__icon">
									<i class="fa fa-envelope"></i>
								</div><!-- /.topbar-two__list__icon -->
								<div class="topbar-two__list__content">
									<span>Send Email</span>
									<a href="mailto:idcheck200@gmail.com" target="_blank">idcheck200@gmail.com</a>
								</div><!-- /.topbar-two__list__content -->
							</li>
							<li class="topbar-two__list__item">
								<div class="topbar-two__list__icon">
									<i class="fa fa-map-marker"></i>
								</div><!-- /.topbar-two__list__icon -->
								<div class="topbar-two__list__content">
									<span>Address</span>
									NTA junction CHOBA University Portharcourt
								</div><!-- /.topbar-two__list__content -->
							</li>
						</ul><!-- /.topbar-two__list -->
						<div class="topbar-two__btns">
							@if(Auth::check())
								<a href="/dashboard" class="thm-btn topbar-two__btn"><span>Dashboard</span></a>

							@else

								<a href="/login" class="thm-btn topbar-two__btn"><span>Login</span></a>
							@endif
							<!-- /.thm-btn topbar-two__btn -->
						</div><!-- /.topbar-two__btns -->
					</div><!-- /.topbar-two__inner -->
				</div><!-- /.container -->
			</div><!-- /.topbar-two -->
			<nav class="main-menu sticky-header">
				<div class="container">
					<div class="main-menu__inner">
						<div class="main-menu__logo">
							<a href="/">
								<img src="/logo.png" width="98" height="33" alt="Idcheck">
							</a>
						</div><!-- /.main-menu__logo -->

						<ul class="main-menu__list">
							<li class="menu-item-has-children">
								<a href="#">Home</a>

							</li>

							<li class="menu-item-has-children">
								<a href="#">Services</a>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Benefits</a>
								<ul></ul>
							</li>

							<li><a href="mailto:idcheck200@gmail.com" target="_blank">Contact</a></li>
						</ul><!-- /.main-menu__list -->

						<div class="main-menu__right">
							<a href="#" class="mobile-nav__toggler">
								<span></span>
								<span></span>
								<span></span>
							</a>
							<a href="tel:+2348139990000" class="main-menu__cta">
								<i class="fa fa-phone-alt"></i>
								<span class="main-menu__cta__text">
									<b>+234 813 999 0000</b>
								</span><!-- /.main-menu__cta__text -->
							</a><!-- /.main-menu__cta -->
							<!-- /.search-toggler -->
						</div><!-- /.main-menu__right -->
					</div><!-- /.main-menu__inner -->
				</div><!-- /.container -->
			</nav><!-- /.main-menu -->
		</header><!-- /.header-two -->

		<div class="slider-one slider-two">
			<ul class="slider-two__social">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul><!-- /.topbar__social -->
			<div class="slider-one__carousel owl-carousel owl-theme thm-owl__carousel"
				data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>
				<div class="item slider-one__slide-1">
					<div class="slider-one__bg" style="background-image: url('assets4/images/background/slider-2-1.jpg');">
					</div><!-- /.slider-one__bg -->
					<div class="slider-one__shape-1"></div><!-- /.slider-one__shape-1 -->
					<div class="container">
						<div class="slider-one__content ">
							<div class="slider-one__title-wrapper">
								<h2 class="slider-one__title">Verification Solutions <br>
									to Grow <span>Your</span> <br>
									Business</h2><!-- /.slider-one__title -->
							</div><!-- /.slider-one__title-wrapper -->
							<div class="slider-one__btns">
								<a href="#" class="thm-btn slider-one__btn"><span>Learn More</span></a>
								<!-- /.thm-btn slider-one__btn -->
							</div><!-- /.slider-one__btns -->
						</div><!-- /.slider-one__content -->
					</div><!-- /.container -->
				</div><!-- /.item -->
				<div class="item slider-one__slide-2">
					<div class="slider-one__bg" style="background-image: url('assets4/images/background/slider-2-2.jpg');">
					</div><!-- /.slider-one__bg -->
					<div class="slider-one__shape-1"></div><!-- /.slider-one__shape-1 -->
					<div class="container">
						<div class="slider-one__content ">
							<div class="slider-one__title-wrapper">
								<h2 class="slider-one__title">Smart Services <br>
									at <span>Your</span> <br>
									Finger tips</h2><!-- /.slider-one__title -->
							</div><!-- /.slider-one__title-wrapper -->
							<div class="slider-one__btns">
								<a href="about.html" class="thm-btn slider-one__btn"><span>Learn More</span></a>
								<!-- /.thm-btn slider-one__btn -->
							</div><!-- /.slider-one__btns -->
						</div><!-- /.slider-one__content -->
					</div><!-- /.container -->
				</div><!-- /.item -->
			</div><!-- /.slider-one__carousel -->
		</div><!-- /.slider-one -->

		<section
			class="section-padding--top section-padding-xl--bottom section-has-bottom-margin background-repeat-no background-size-cover gray-bg about-seven"
			style="background-image: url('assets/images/shapes/about-seven-bg-1-1.png');">
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-lg-5">
						<div class="about-seven__content">
							<div class="section-title">
								<p class="section-title__text">HOW CAN HELP YOU</p><!-- /.section-title__text -->
								<h2 class="section-title__title">Our Services <br> include the following </h2>
								<!-- /.section-title__title -->
							</div><!-- /.section-title -->
							<div class="about-seven__text">We offer a variety of verification services to help you in knowing your customers, our serices are seamless and available 24/7</div><!-- /.about-seven__text -->
							<div class="about-seven__btns">
								<a href="#" class="thm-btn about-seven__btn"><span>Learn More</span></a>
								<!-- /.thm-btn about-seven__btn -->
							</div><!-- /.about-seven__btns -->

						</div><!-- /.about-seven__content -->
					</div><!-- /.col-lg-5 -->
					<div class="col-lg-7">
						<ul class="about-seven__list">
							<li class="about-seven__list__item text-center wow fadeInLeft" data-wow-duration="1500ms"
								data-wow-delay="000ms">
								<i class="about-seven__list__icon icon-dashboard"></i>
								<h3 class="about-seven__list__title">
									<a href="#">Phone number <br>
										Verification</a>
								</h3>
							</li>
							<li class="about-seven__list__item text-center wow fadeInLeft" data-wow-duration="1500ms"
								data-wow-delay="100ms">
								<i class="about-seven__list__icon icon-system"></i>
								<h3 class="about-seven__list__title">
									<a href="#">NIN verification <br>
										Services</a>
								</h3>
							</li>
							<li class="about-seven__list__item text-center wow fadeInLeft" data-wow-duration="1500ms"
								data-wow-delay="200ms">
								<i class="about-seven__list__icon icon-cloud-data"></i>
								<h3 class="about-seven__list__title">
									<a href="#">Demo data <br>
										Verification</a>
								</h3>
							</li>
							<li class="about-seven__list__item text-center wow fadeInLeft" data-wow-duration="1500ms"
								data-wow-delay="300ms">
								<i class="about-seven__list__icon icon-data-visualization"></i>
								<h3 class="about-seven__list__title">
									<a href="#">Virtual NIN <br>
										verification</a>
								</h3>
							</li>
							<li class="about-seven__list__item text-center wow fadeInLeft" data-wow-duration="1500ms"
								data-wow-delay="400ms">
								<i class="about-seven__list__icon icon-software-engineer"></i>
								<h3 class="about-seven__list__title">
									<a href="#">NIN  <br>
										Validation</a>
								</h3>
							</li>
							<li class="about-seven__list__item text-center wow fadeInLeft" data-wow-duration="1500ms"
								data-wow-delay="500ms">
								<i class="about-seven__list__icon icon-web-design"></i>
								<h3 class="about-seven__list__title">
									<a href="#">NIN premium <br>
										Slip</a>
								</h3>
							</li>
						</ul><!-- /.about-seven__list -->
					</div><!-- /.col-lg-7 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>

		<section class="cta-one cta-one--home-three">
			<div class="container">
				<div class="cta-one__inner  wow fadeInUp" data-wow-duration="1500ms">
					<div class="cta-one__circle"></div><!-- /.cta-one__circle -->
					<div class="section-title ">
						<h2 class="section-title__title section-title__title--light">Have your own system? <br>
							integrate using our APIs </h2>
						<!-- /.section-title__title -->
					</div><!-- /.section-title -->
					<div class="cta-one--home-three__btns">
						<a href="/contact" class="thm-btn thm-btn--light cta-one__btn"><span>Get in touch</span></a>
					</div><!-- /.cta-one--home-three__btns -->
					<!-- /.thm-btn thm-btn--light cta-one__btn -->
				</div><!-- /.cta-one__inner -->
			</div><!-- /.container -->
		</section><!-- /.cta-one -->


		<section class="section-padding--bottom section-padding--top">
			<div class="container">
				<div class="section-title text-center">
					<p class="section-title__text">Company Benefits</p><!-- /.section-title__text -->
					<h2 class="section-title__title">We Provide Best kyc Solutions For Business <br>our clients are always satisfied
						</h2>
					<!-- /.section-title__title -->
				</div><!-- /.section-title -->
				<div class="row gutter-y-30">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="service-card-two gray-bg">
							<h3 class="service-card-two__title"><a href="#">Quality Service</a></h3>
							<!-- /.service-card-two__title -->
							<p class="service-card-two__text">Our service are 24/7, fast and seamless without downtimes
							</p><!-- /.service-card-two__text -->
							<div class="service-card-two__icon">
								<i class="icon-smart-tv"></i>
							</div><!-- /.service-card-two__icon -->
						</div><!-- /.service-card-two -->
					</div><!-- /.col-lg-3 -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="service-card-two gray-bg">
							<h3 class="service-card-two__title"><a href="#">Expert Team</a></h3>
							<!-- /.service-card-two__title -->
							<p class="service-card-two__text">Our team of experts work tirelessly to give you the best services
							</p><!-- /.service-card-two__text -->
							<div class="service-card-two__icon">
								<i class="icon-link"></i>
							</div><!-- /.service-card-two__icon -->
						</div><!-- /.service-card-two -->
					</div><!-- /.col-lg-3 -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="service-card-two gray-bg">
							<h3 class="service-card-two__title"><a href="#">Excellent Support</a></h3>
							<!-- /.service-card-two__title -->
							<p class="service-card-two__text">We offer every of our clients round the clock support
							</p><!-- /.service-card-two__text -->
							<div class="service-card-two__icon">
								<i class="icon-technical-support"></i>
							</div><!-- /.service-card-two__icon -->
						</div><!-- /.service-card-two -->
					</div><!-- /.col-lg-3 -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="service-card-two gray-bg">
							<h3 class="service-card-two__title"><a href="#">Uptime</a></h3>
							<!-- /.service-card-two__title -->
							<p class="service-card-two__text">Our services are always online, so you never have to go offline
							</p><!-- /.service-card-two__text -->
							<div class="service-card-two__icon">
								<i class="icon-cctv"></i>
							</div><!-- /.service-card-two__icon -->
						</div><!-- /.service-card-two -->
					</div><!-- /.col-lg-3 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>




		<div class="footer-main section-padding--bottom section-padding--top">
			<div class="container">
				<div class="row gutter-y-30">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--about">
							<a href="#" class="footer-widget__logo">
								<img src="/logo.png" width="119" height="40" alt="Idcheck">
							</a>
							<p class="footer-widget__text">We work with a passion of taking challenges and creating new
								ones in kyc sector.</p><!-- /.footer-widget__text -->
							<ul class="footer-widget__social">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul><!-- /.footer-widget__social -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--links">
							<h3 class="footer-widget__title">Services</h3><!-- /.footer-widget__title -->
							<ul class="footer-widget__links">
								<li>
									<a href="#">NIN Verification</a>
								</li>
								<li>
									<a href="#">Phone number verification</a>
								</li>
								<li>
									<a href="#">Demo data verification</a>
								</li>
								<li>
									<a href="#">VNIN Verification</a>
								</li>
								<li>
									<a href="#">Print Nin Premium Slip</a>
								</li>
							</ul><!-- /.footer-widget__links -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--newsletter">
							<h3 class="footer-widget__title">Subscribe</h3><!-- /.footer-widget__title -->
							<p class="footer-widget__text">Sign up to receive the latest articles</p>
							<!-- /.footer-widget__text -->
							<form action="#" class="footer-widget__newsletter mc-form"
								data-url="ADD_YOUR_MAILCHIMP_FORM_URL_HERE">
								<input type="email" name="EMAIL" placeholder="Enter Your Email">
								<button class="thm-btn footer-widget__newsletter__btn"><span>Register</span></button>
							</form>
							<div class="mc-form__response"></div><!-- /.mc-form__response -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget footer-widget--contact">
							<h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
							<ul class="footer-widget__contact">
								<li>
									<i class="fa fa-phone"></i>
									<a href="tel:+2348139990000">+234 813 999 0000</a>
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<a href="mailto:idcheck200@gmail.com">idcheck200@gmail.com</a>
								</li>
								<li>
									<i class="fa fa-map-marker-alt"></i>
									NTA junction CHOBA University  <br> Portharcourt. Nigeria
								</li>
							</ul><!-- /.footer-widget__contact -->
						</div><!-- /.footer-widget -->
					</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.footer-main -->
		<div class="footer-bottom">
			<div class="container">
				<p>&copy; All Copyright <span class="dynamic-year"></span> by idcheck</p>
			</div><!-- /.container -->
		</div><!-- /.footer-bottom -->
	</div><!-- /.page-wrapper -->


	<div class="mobile-nav__wrapper">
		<div class="mobile-nav__overlay mobile-nav__toggler"></div>
		<!-- /.mobile-nav__overlay -->
		<div class="mobile-nav__content">
			<a href="#" class="mobile-nav__close mobile-nav__toggler">
				<span></span>
				<span></span>
			</a>

			<div class="logo-box">
				<a href="/" aria-label="logo image"><img src="/logo.png" width="98"
						height="33" alt="idcheck"></a>
			</div>
			<!-- /.logo-box -->
			<div class="mobile-nav__container"></div>
			<!-- /.mobile-nav__container -->

			<ul class="mobile-nav__contact list-unstyled">
				<li>
					<i class="fa fa-phone"></i>
					<a href="tel:+2348139990000">+234 813 999 0000</a>
				</li>
				<li>
					<i class="fa fa-envelope"></i>
					<a href="mailto:idcheck200@gmail.com">idcheck200@gmail.com</a>
				</li>
				<li>
					<i class="fa fa-map-marker-alt"></i>
					NTA junction CHOBA University  <br> Portharcourt. Nigeria
				</li>
			</ul><!-- /.mobile-nav__contact -->
			<ul class="mobile-nav__social">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul><!-- /.mobile-nav__social -->



		</div>
		<!-- /.mobile-nav__content -->
	</div>
	<!-- /.mobile-nav__wrapper -->

	<div class="search-popup">
		<div class="search-popup__overlay search-toggler"></div>
		<!-- /.search-popup__overlay -->
		<div class="search-popup__content">
			<form action="#">
				<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
				<input type="text" id="search" placeholder="Search Here..." />
				<button type="submit" aria-label="search submit" class="thm-btn">
					<span><i class="icon-magnifying-glass"></i></span>
				</button>
			</form>
		</div>
		<!-- /.search-popup__content -->
	</div>
	<!-- /.search-popup -->

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

	<!-- plugins js -->
	<script src="/assets4/vendors/jquery/jquery-3.6.0.min.js"></script>
	<script src="/assets4/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/assets4/vendors/jquery-validation/jquery.validate.min.js"></script>
	<script src="/assets4/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="/assets4/vendors/wow/wow.js"></script>
	<script src="/assets4/vendors/jarallax/jarallax.min.js"></script>
	<script src="/assets4/vendors/jquery-appear/jquery.appear.min.js"></script>
	<script src="/assets4/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
	<script src="/assets4/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
	<script src="/assets4/vendors/circle-progress/circle-progress.min.js"></script>
	<!-- template js -->
	<script src="/assets4/js/cretech.js"></script>

</body>

</html>