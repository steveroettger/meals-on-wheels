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
				<li><img src="/images/slider-img2-2.jpg" /></li>
                <li><img src="/images/slider-img3.jpg" /></li>
				<li><img src="/images/slider-img4.jpg" /></li>
				<li><img src="/images/slider-img5.jpg" /></li>
                <li><img src="/images/slider-img6.jpg" /></li>
			</ul>
		</div><!-- END #feature-slider -->
		
		<div id="home-container">
			<div id="home-headline"></div>
			<div class="main-content">
				<p>City Fare Meals on Wheels, a program of Saint Anthony’s Community Center, has operated in Wilmington since 1986. We provide hot, nourishing meals to homebound elderly and disabled persons in New Castle County who are unable to prepare meals for themselves and who have no one to do so for them. We also provide professional case management to every client. The meals, daily contact by caring volunteers, and staff who coordinate other services as needed allow frail, otherwise forgotten, homebound persons to remain living independently in their own homes.</p>
				<div class="fb-like-box" data-href="http://www.facebook.com/CityFareMOW" data-width="500" data-height="200" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="true"></div>
			</div><!-- END .main-content -->
		</div><!-- END #home-container -->
		
		<div id="home-sidebar" class="flexslider">
			<ul class="slides">
				<li>
					<div class="sidebar-video">
						<a href="https://www.youtube.com/watch?v=jaVC3YqIXIo" target="_blank">			
						<img src="/images/sidebar-video.jpg" border="0" /></a>
					</div><!-- END .sidebar-video -->
					<div class="sidebar-headline"></div>
					<div class="sidebar-content">
						<p>Mrs. Davis is proud to say she made it to the age of 90.</p>
						<p>“If you hit 90, you tell. Before that, well….”</p>
						<p>She has many fond memories of Mother’s Days she spent with her mother and her own children. “My parents lived in Atlantic City. I’d dress up my kids and we’d go on a parade on the Boardwalk. These are the things that stay with you.”</p>
						<p>She encourages her own grandchildren to pass along those special memories. “I’ll say to them, when you’re a grandmom, tell them stories about your past.”</p>
					</div><!-- END #sidebar-content -->
				</li>
				
				<li>
					<div class="sidebar-video">
						<a href="http://www.youtube.com/watch?v=zsoHFVRH4t4" target="_blank">			
						<img src="/images/sidebar-video2.jpg" border="0" /></a>
					</div><!-- END .sidebar-video -->
					<div class="sidebar-headline"></div>
					<div class="sidebar-content">
						<p>Mr. Mitchell tells his story of serving in the Navy during World War Two and his now experience with friendly Meals on Wheels volunteers. He has been a client for Meals on Wheels for three years.</p>
					</div><!-- END #sidebar-content -->
				</li>
			</ul>
		</div><!-- END #home-sidebar -->
		
		<div class="clear"></div>
	</div><!-- END .interior-container -->
	
	<div class="push"></div><!-- END .push -->
</div><!-- END .page-wrap -->

<script type="text/javascript">
	// HOMEPAGE FEATURE SLIDER
	$(window).load(function() {
	  $('#feature-slider').flexslider({
      	animation: "fade",
      	animationLoop: true,
      	slideshowSpeed: 5000,
      	animationSpeed: 600,
      	touch: true, 
      	controlNav: false,
      	directionNav: false
      	
	  });
	});
	
	// HOMEPAGE SIDEBAR SLIDER
	$(window).load(function() {
	  $('#home-sidebar').flexslider({
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