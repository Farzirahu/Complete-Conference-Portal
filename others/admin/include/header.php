		<?php 
	//session_start(); 
	error_reporting(0);
	?>

		<meta property="og:title" content="International Conference on Health, Environment and Industrial Biotechnology - Bio Sangam 2016" />
<meta property="og:type" content="website" data-page-subject="true"  />
<meta property="og:image" content="https://m.ak.fbcdn.net/sphotos-g.ak/hphotos-ak-xaf1/v/t1.0-9/995835_380063842100080_999711474_n.png?oh=373704b47e90149847b4ac8dbb4ae61c&oe=560D2FB6&__gda__=1440313959_9aff7f025a3a99ce308893fcaed42397" />
<meta charset="utf-8" />
		<meta name="description" http-equiv="description" content="Bio Sangam - International Conference on Health, Environment and Industrial Biotechnology  to be held in 'Kumbh Nagari' Allahabad. The conference is being organized by Department of Biotechnology, Motilal Nehru National Institute of Technology (MNNIT) Allahabad. The conference will be an interactive and scientifically vibrant programme. The conference consists of various sessions including keynote, plenary and parallel sessions. " />
<meta name="keywords" http-equiv="keywords" content="Biosangam, biotechnology, international conference, health, environment, industrial biotechnology, MNNIT Allahabad, NIT allahabad, Department of biotechnology MNNIT, research, allahabad" />
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/logo.jpg">
		
		<!-- Stylesheets -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/fontello.css" rel="stylesheet" type="text/css">
		<link href="css/flexslider.css" rel="stylesheet" type="text/css">
		<link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="css/responsive-calendar.css" rel="stylesheet" type="text/css">
		<link href="css/chosen.css" rel="stylesheet" type="text/css">
		<link href="jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />
		<link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />
		<link href="css/colorpicker.css" rel="stylesheet" type="text/css">
		<!--<link href="css/style.css" rel="stylesheet" type="text/css">-->

		
		<!--[if IE 9]>
			<link rel="stylesheet" href="css/ie9.css">
		<![endif]-->
		
		<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link href="css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		
		<!--[if gt IE 8]>
			<link href="css/jackbox-ie9.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
		
		
		<style type="text/css">
		
		.sum{
			display: inline-block !important;
	font-weight: bolder !important;
	font-size: 20px !important;
	width: 50px !important;
	text-align: center !important;
}
.captcha{
	font-weight: bolder !important;
	font-size: 20px !important;
	width: 50px !important;
	text-align: center !important;
}
			.no-fouc {display:none;}
	  	</style>
			
		
		<!-- jQuery -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery-ui-1.10.4.min.js"></script>
		
		<!-- Preloader -->
		<script src="js/jquery.queryloader2.min.js"></script>
		
		<script type="text/javascript">
		$('html').addClass('no-fouc');
		
		$(document).ready(function(){
			
			$('html').show();
			
			var window_w = $(window).width();
			var window_h = $(window).height();
			var window_s = $(window).scrollTop();
			
			$("body").queryLoader2({
				backgroundColor: '#f2f4f9',
				barColor: '#63b2f5',
				barHeight: 4,
				percentage:false,
				deepSearch:true,
				minimumTime:1000,
				onComplete: function(){
					
					$('.animate-onscroll').filter(function(index){
					
						return this.offsetTop < (window_s + window_h);
						
					}).each(function(index, value){
						
						var el = $(this);
						var el_y = $(this).offset().top;
						
						if((window_s) > el_y){
							$(el).addClass('animated fadeInDown').removeClass('animate-onscroll');
							setTimeout(function(){
								$(el).css('opacity','1').removeClass('animated fadeInDown');
							},2000);
						}
						
					});
					
				}
			});
			
		});
		</script>
		
	</head>
	
	<body class="sticky-header-on tablet-sticky-header">

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=812211218838754";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		
		<!-- Container -->
		<div class="container">