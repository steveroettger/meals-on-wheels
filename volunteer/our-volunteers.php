<?php $title = "Our Volunteers"; ?>

<?php include '../includes/header.php'; ?>

<div class="page-wrap">
	<div class="interior-container">
		<div id="interior-sidebar">
			<ul>
				<li><a href="<?php echo SITE_ROOT; ?>/volunteer/become-volunteer.php">Become a<br/>Volunteer</a></li>
				<li><a href="<?php echo SITE_ROOT; ?>/volunteer/adopt-route.php">Adopt a<br/>Route</a></li>
				<li><a href="<?php echo SITE_ROOT; ?>/volunteer/why-volunteer.php">Why<br/>Volunteer?</a></li>
				<li><a href="<?php echo SITE_ROOT; ?>/volunteer/becoming-volunteer.php">Becoming a<br/>Volunteer FAQs</a></li>
				<li><a href="<?php echo SITE_ROOT; ?>/volunteer/existing-volunteer.php">Existing<br/>Voluteer FAQs</a></li>
				<li><a href="<?php echo SITE_ROOT; ?>/volunteer/our-volunteers.php">Hear from<br/>Our Volunteers</a></li>
			</ul>
		</div><!-- END #interior-sidebar -->
				
		<div id="interior-content">
			<h1>Hear what our<br/>Volunteers are saying</h1>
			
			<div id="interior-slider" class="flexslider">
				<ul class="slides">
					<li><img src="/images/int-slide-img1.jpg" /></li>
					<li><img src="/images/int-slide-img2.jpg" /></li>
					<li><img src="/images/int-slide-img3.jpg" /></li>
				</ul>
			</div><!-- END #interior-slider -->
			
			<div class="quote-item">
				<p>“I believe in giving back, and Meals on Wheels offers a gratifying means of doing that. I’ve done some volunteer work before, but often the effect you’re having is not apparent – immediately or ever, for that matter. With MOW, you get instant validation of your efforts, through both the thanks you receive from clients and through the knowledge that you are bringing them nourishment, and not incidentally a friendly presence – perhaps the only one they will experience that day.”</p>
				<span class="quote-signature">&ndash; Bob Y.</span>
			</div><!-- END .quote-item -->
			
			<div class="quote-item">
				<p>“I've been doing this for a few years now and it was the best decision I ever made. I never consider it work and most of my customers are always happy to see me. It's a sure "win - win" situation. I look forward to it every day I come in. I wish all my "jobs" were this much fun!”</p>
				<span class="quote-signature">&ndash; Dan W.</span>
			</div><!-- END .quote-item -->
			
			<div class="quote-item">
				<p>"It’s a gratifying hour or so that I spend each month knowing I’m making just a small difference in a number of peoples’ live. It is much more than delivering a meal or two. I’m very thankful to be a part of MOW.”</p>
				<span class="quote-signature">&ndash; Phil F.</span>
			</div><!-- END .quote-item -->
			
			<div class="quote-item">
				<p>“I've delivered meals in North Carolina, California and Delaware and made some dear friends along the way. There is a lot of work behind the scenes; meal planning, cooking, packaging, scheduling, transporting, yet I feel like the beneficiary of all that work. I see the smiling faces and touch the grateful hands. I love "my folks" and look forward to seeing them even if our visits last just a few minutes. They have taught me the importance of maintaining a sense of humor as THEY brighten MY day and leave me with a smile. I am truly blessed to have this opportunity.”</p>
				<span class="quote-signature">&ndash; Gracie M.</span>
			</div><!-- END .quote-item -->
			
			<div class="quote-item">
				<p>“Volunteering for MOW in Middletown has truly been an enriching experience. I wish I had started earlier. And I would encourage any one to give it a try. It doesn't take that much time and the people you meet are so appreciative. One gentleman I have struck up quite a friendship with is housebound but told me years ago he delivered Meals on Wheels. I try to have a few words with each person I deliver to as many of them live alone. I am thankful I still have the health and strength to help out and intend to keep on as long as God gives me the energy.”</p>
				<span class="quote-signature">&ndash; Wayne S.</span>
			</div><!-- END .quote-item -->
			
			<div class="quote-item">
				<p>“I love being a Meals on Wheels volunteer! The clients that I have met over the past year have brought such light and joy to my life. They are so appreciative and happy to see us when we arrive.  One gentleman, every time we meet at the door, thanks me “very, very much” and wishes me safe travels. What a treasure! I carry a fondness for all of the clients with me throughout the month, and think of them often as I pass their neighborhoods in my daily commute. The simple act of bringing someone in need a hot meal was a value taught to me as a child, and I am so blessed to be able to now teach that virtue to my children. Meals on Wheels is a life giving ministry that brings immense grace to those in need AND to willing volunteers.“</p>
				<span class="quote-signature">&ndash; Cory Z.</span>
			</div><!-- END .quote-item -->
			
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