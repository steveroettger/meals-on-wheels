<?php $title = "Eligibility"; ?>

<?php include '../includes/header.php'; ?>

<div class="page-wrap">
	<div class="interior-container">
		<div id="interior-sidebar">
			<ul>
				<li><a style="position: relative; top: 11px;" href="<?php echo SITE_ROOT; ?>/meals/eligibility.php">Eligibility</a></li>
				<li><a href="<?php echo SITE_ROOT; ?>/meals/locations.php">Dining Room<br/>Locations</a></li>
				<li><a style="position: relative; top: 11px;" href="<?php echo SITE_ROOT; ?>/meals/meal-types.php">Meal Types</a></li>
				<li><a href="<?php echo SITE_ROOT; ?>/meals/get-meals.php">Get Meals<br/>on Wheels</a></li>
				<li><a href="<?php echo SITE_ROOT; ?>/meals/suggested-donation.php">Suggested<br/>Donation</a></li>
			</ul>
		</div><!-- END #interior-sidebar -->
		
		<div id="interior-content">
			<h1>Eligibility</h1>
			
			<div id="mow-box">
				<h2>Meals on Wheels</h2>
				<p>To be eligible to receive Meals on Wheels you must be age 60 or over and be confined to the home because of lack of mobility, illness or disability. If you meet these requirements and would like to begin the referral and assessment process, please call our office at</p>
				<h3>302-421-3734</h3>
			</div><!-- END #mow-box -->
			
			<div id="locations-box">
				<h2>Locations</h2>
				<p>If you are not considered homebound, but you would like to enjoy a freshly prepared meal, visit a City Fare dining room location.</p>
				<h3><a href="<?php echo SITE_ROOT; ?>/meals/locations.php">Dining Room<br/>Locations</a></h3>
			</div><!-- END #locations-box -->
			
			<div class="clear"></div><!-- END .clear -->
			
			<div id="interior-slider" class="flexslider">
				<ul class="slides">
					<li><img src="/images/int-slide-img1.jpg" /></li>
					<li><img src="/images/int-slide-img2.jpg" /></li>
					<li><img src="/images/int-slide-img3.jpg" /></li>
				</ul>
			</div><!-- END #interior-slider -->
		</div><!-- END #interior-content -->
			
		<div class="clear"></div><!-- END .clear -->
	</div><!-- END .interior-container -->
		
	<div class="push"></div><!-- END .push -->
</div><!-- END .page-wrap -->

<script type="text/javascript">
	// HOMEPAGE FEATURE SLIDER
	$(window).load(function() {
	  $('#interior-slider').flexslider({
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

	
<?php include '../includes/footer.php'; ?>
