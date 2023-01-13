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
							<li class="topbar-two__list__item">
								<div class="topbar-two__list__icon">
									<i class="fa fa-map-marker"></i>
								</div><!-- /.topbar-two__list__icon -->
								<div class="topbar-two__list__content">
									@if(Auth::check())
										<a href="/dashboard" class="thm-btn"><span>Dashboard</span></a>

									@else

										<a href="/login" class="thm-btn topbar-s"><span>Login</span></a>
									@endif
								</div><!-- /.topbar-two__list__content -->
							</li>
						</ul><!-- /.topbar-two__list -->
						<div class="topbar-two__btns">

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
								<a href="/#">Home</a>

							</li>

							<li class="menu-item-has-children">
								<a href="/#">Services</a>
							</li>
							<li class="menu-item-has-children">
								<a href="/#">Benefits</a>
								<ul></ul>
							</li>

							<li class="menu-item-has-children">
								<a href="/contact">Contact</a>
							</li>

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



		<div class="page-header"></div><!-- /.page-header -->

		<section class="contact-one section-padding--top section-padding--bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div action="" class="contact-one__form contact-form-validated">
							<div class="section-title">
								<p class="section-title__text">Contact with us</p><!-- /.section-title__text -->
								<h2 class="section-title__title">Join Us To Get seamsless KYC services
									</h2><!-- /.section-title__title -->
							</div><!-- /.section-title -->
							<div class="row "></div><!-- /.row -->
						</div><!-- /.contact-one__form -->
						<div class="result"></div><!-- / -->
					</div><!-- /.col-lg-8 -->
					<div class="col-lg-6">
						<div class="contact-one__info wow fadeInRight" data-wow-duration="1500ms"
							 style="background-image: url('assets/images/background/contact-one-bg-1-1.png');">
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Address</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text">NTA junction CHOBA University<br>
									Portharcourt, Nigeria</p><!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Phone</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text">Local: <br>
									Mobile: <a href="tel:2348139990000">234 813  999 0000</a></p>
								<!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Email</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text"><a
											href="mailto:idcheck200@gmail.com">idcheck200@gmail.com</a><br>

								</p>
								<!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<ul class="contact-one__social">
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul><!-- /.contact-one__social -->
							</div><!-- /.contact-one__item -->
						</div><!-- /.contact-one__info -->
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.contact-one -->











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