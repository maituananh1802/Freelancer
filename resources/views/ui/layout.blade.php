<!DOCTYPE html>
<html>

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Cộng đồng freelancer Việt">
		<meta name="author" content="Ngô Hùng Phúc">
		<title>Freelancer</title>
		<link rel="shortcut icon" href="/images/favicon.png">
		<link href="/css/style.css" rel="stylesheet">
		<link href="/valid/css/formValidation.min.css" rel="stylesheet">
	</head>
	<body id="home">

		<!-- ============ PAGE LOADER START ============ -->

		<div id="loader">
			<i class="fa fa-cog fa-4x fa-spin"></i>
		</div>

		<!-- ============ PAGE LOADER END ============ -->

		<!-- ============ NAVBAR START ============ -->
						@include('ui.menu')
		<!-- ============ NAVBAR END ============ -->

		<!-- ============ NAVBAR START ============ -->
					    @yield('content')
		<!-- ============ NAVBAR START ============ -->

		<!-- ============ FOOTER START ============ -->
					    @include('ui.footer')
		<!-- ============ FOOTER END ============ -->
		
	
		<script src="/js/modernizr.custom.79639.js"></script>
		<script src="/js/jquery-1.11.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/retina.min.js"></script>
		<script src="/js/scrollReveal.min.js"></script>
		<script src="/js/jquery.flexmenu.js"></script>
		<script src="/js/pagi.js"></script>
		<script src="/js/jquery.ba-cond.min.js"></script>
		<script src="/js/jquery.slitslider.js"></script>
		<script src="/js/owl.carousel.min.js"></script>
		<script src="/js/parallax.js"></script>
		<script src="/js/jquery.counterup.min.js"></script>
		<script src="/js/waypoints.min.js"></script>
		<script src="/js/jquery.nouislider.all.min.js"></script>
		<script src="/js/bootstrap-wysiwyg.js"></script>
		<script src="/js/jquery.hotkeys.js"></script>
		<script src="/js/jflickrfeed.min.js"></script>
		<script src="/js/fancybox.pack.js"></script>
		<script src="/js/magic.js"></script>
		<script src="/js/settings.js"></script>
		<script src="/js/angular.min.js"></script>
		<script src="/js/val.js"></script>
		<script src="/js/user.js"></script>
		<script src="/valid/js/formValidation.min.js"></script>
        <script src="/valid/js/bootstrap.min.js"></script>
	</body>

</html>