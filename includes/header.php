<?php define('SITE_ROOT', 'http://cityfare.org'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<title><?php echo $title ?> | City Fare</title>
	<!--[if lt IE 10]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	 <![endif]-->
	
	<link rel="icon" type="image/png" href="/images/favicon.png">

	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>	

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
	<link rel="stylesheet" type="text/css" href="/css/flexslider.css">
	
	<!-- JAVASCRIPTS -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/js/site.js"></script>

</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=461550273890419";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="header">
	<div id="top-shadow"></div><!-- END #top-shadow -->
	<div class="container">
		<ul id="top-buttons">
			<li><a href="/site/donate.php" id="donate-btn"></a></li>
			<li><a href="/volunteer/become-volunteer.php" id="volunteer-btn"></a></li>
		</ul>
		
		<a href="/" id="logo"></a>
		
	</div><!-- END .container -->
	
	<div class="clear" style="height: 20px;"></div>
	
	<div id="main-nav">
		<div id="navbar-top"></div>
		
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="<?php echo SITE_ROOT; ?>/about/what-is-cityfare.php">About</a></li>
			<li><a href="<?php echo SITE_ROOT; ?>/recognition/corporate-sponsors.php">Recognition</a></li>
			<li><a href="<?php echo SITE_ROOT; ?>/site/resources.php">Resources</a></li>
			<li><a href="<?php echo SITE_ROOT; ?>/site/contact.php">Contact</a></li>
		</ul>
		
	</div><!-- END #main-nav -->
</div><!-- END #header -->