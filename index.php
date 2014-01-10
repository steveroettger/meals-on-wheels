<?php $title = "Welcome"; ?>

<?php include 'includes/header.php'; ?>

<script type="text/javascript">
	$( document ).ready(function() {
	    $("ul#slider-nav li:nth-child(3n)").css( "margin-right", "0" );
	});
</script>

<div class="page-wrap">
	<div class="interior-container">
		<div id="feature-slider" class="flexslider">
			<span id="slider-headline"></span>
			<ul id="slider-nav">
				<li><a href="<?php echo SITE_ROOT; ?>/meals/eligibility.php"><img src="/images/slider-get-btn.png" /></a></li>
				<li><a href="<?php echo SITE_ROOT; ?>/site/donate.php"><img src="/images/slider-give-btn.png" /></a></li>
				<li><a href="<?php echo SITE_ROOT; ?>/volunteer/volunteer-application.php"><img src="/images/slider-deliver-btn.png" /></a></li>
			</ul>
			<ul class="slides">
				<li><img src="/images/slider-img1.jpg" /></li>
				<li><img src="/images/slider-img2.jpg" /></li>
			</ul>
		</div><!-- END #feature-slider -->
		
		<div id="home-container">
			<div id="home-headline"></div>
			<div class="main-content">
				<p>City Fare Meals on Wheels, a program of Saint Anthony’s Community Center, has operated in Wilmington since 1986. We provide hot, nourishing meals to homebound elderly and disabled persons in New Castle County who are unable to prepare meals for themselves and who have no one to do so for them. We also provide professional case management to every client. The meals, daily contact by caring volunteers, and staff who coordinate other services as needed allow frail, otherwise forgotten, homebound persons to remain living independently in their own homes.</p>
				<div class="fb-activity" data-site="developers.facebook.com" data-action="likes, recommends" data-width="500" data-height="150" data-colorscheme="light" data-header="true"></div>
			</div><!-- END .main-content -->
		</div><!-- END #home-container -->
		
		<div id="home-sidebar">
			<div id="sidebar-video"><img src="/images/sidebar-video.jpg" /></div>
			<div id="sidebar-headline"></div>
			<div id="sidebar-content">
				<p>Mrs. Davis is proud to say she made it to the age of 90.</p>
				<p>“If you hit 90, you tell. Before that, well….”</p>
				<p>She has many fond memories of Mother’s Days she spent with her mother and her own children. “My parents lived in Atlantic City. I’d dress up my kids and we’d go on a parade on the Boardwalk. These are the things that stay with you.”</p>
				<p>She encourages her own grandchildren to pass along those special memories. “I’ll say to them, when you’re a grandmom, tell them stories about your past.”</p>
			</div>
		</div><!-- END #home-sidebar -->
		
		<div class="clear"></div>
	</div><!-- END .interior-container -->
	
	<div class="push"></div><!-- END .push -->
</div><!-- END .page-wrap -->

<script type="text/javascript">
	// HOMEPAGE FEATURE SLIDER
	$(window).load(function() {
	  $('.flexslider').flexslider({
      	animation: "fade",
      	animationLoop: true,
      	slideshowSpeed: 5000,
      	animationSpeed: 600,
      	touch: true, 
      	controlNav: false,
      	directionNav: false
      	
	  });
	});
</script>

<?php include 'includes/footer.php'; ?>