
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Kyle Mayne - User Experience Designer</title>
	<meta name="description" content="The online story of Kyle Mayne, a User Experience Designer living in the UK">
	<meta name="author" content="Kyle Mayne">
	
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- CSS Files
	* cssreset-min.css 			- CSS reset
	* grid.css					- Responsive grid system based on "Skeleton" by Dave Gamache (http://www.getskeleton.com/)
	* alpha_background.css		- Classes for applying an alpha black or white background
	* style.css					- Main CSS file
	* responsive_custom			- CSS override for responsive layout
	* print.css 				- CSS for printer-friendly presentation
	================================================== -->
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.8.0/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/alpha_background.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive_custom.css">
	<link rel="stylesheet" href="css/print.css">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	
	<!-- Google Web Fonts
	================================================== -->
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
</head>

<body data-spy="scroll" data-target="#section-topbar" data-offset="60">

	<!-- Google Analytics
	================================================== -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-39346498-1']);
	  _gaq.push(['_setDomainName', 'kylemayne.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<!-- Topbar: fixed + datascroll

	* the attribute data-scrollspy is for automatically updating nav targets based on scroll position
	* scroll the area below the navbar and watch the active class change
	================================================== -->
	<div id="section-topbar">
		<div id="topbar-inner">
			<div class="container">
				<div class="sixteen columns">
					<div class="dropdown">
						<ul id="nav" class="nav">
							<li class="menu-item"><a href="#section-intro" title="About"><img src="images/icons/icon_profile.png" alt="Profile" /></a></li>
							<li class="menu-item"><a href="#section-resume" title="Resume"><img src="images/icons/icon_resume.png" alt="Resume" /></a></li>
							<li class="menu-item"><a href="#section-works" title="Works"><img src="images/icons/icon_works.png" alt="Works" /></a></li>
							<li class="menu-item"><a href="#section-contact" title="Contact"><img src="images/icons/icon_testimonials.png" alt="Contact" /></a></li>
						</ul><!-- // uL#nav -->
					</div><!-- // .dropdown -->

					<div class="clear"></div>
				</div><!-- // .sixteen -->
			</div><!-- // .container -->

			<div class="clear"></div>
		</div><!-- // #topbar-inner -->
	</div><!-- // #section-topbar -->