<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#40844D">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#40844D">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#40844D">
		<title>Duncan Investment</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="/homeassets/images/duncafavicon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="/homeassets/css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="/homeassets/css/responsive.css">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader">
					<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
					<span class="sr-only">Loading...</span>
					</div>
				</div>
			</div>

			
			<!-- Main Header-->
			@include('home.layout.header')
				<!--End Main Header -->

			@yield('content')
			<!--
			=====================================================
				Footer
			=====================================================
			-->
			@include('home.layout.footer')
			
			<!-- /.theme-footer-two -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="/homeassets/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="/homeassets/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="/homeassets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src='/homeassets/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='/homeassets/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='/homeassets/vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="/homeassets/vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- WOW js -->
		<script src="/homeassets/vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="/homeassets/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="/homeassets/vendor/jquery.appear.js"></script>
		<script src="/homeassets/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="/homeassets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- Language Stitcher -->
		<script src="/homeassets/vendor/language-switcher/jquery.polyglot.language.switcher.js"></script>
		<!-- Google map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjQLCCbRKFhsr8BY78g2PQ0_bTyrm_YXU"></script>
		<script src="vendor/sanzzy-map/dist/snazzy-info-window.min.js"></script>

		<!-- Theme js -->
		<script src="/homeassets/js/theme.js"></script>
		<!-- <script src="/homeassets/js/map-script.js"></script> -->
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>