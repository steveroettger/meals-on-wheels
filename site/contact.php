<?php $title = "Contact Us"; ?>

<?php include '../includes/header.php'; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#contact").validate({
            submitHandler:function(form) {
                SubmittingForm();
            },
            rules: {
                name: "required",
                email: {                
                    required: true,
                    email: true
                },
                subject: {
                    required: true
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: "Please enter your name.",
                email: "Please enter valid email address.",
                subject: "Please enter a subject.",
                message: "Please enter a message."
            }
        });
    });
</script>

<div class="page-wrap">
	<div class="interior-container">
		<div style="padding:15px 0 10px 0;">
			<iframe width="730" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1703+West+10th+Street,+Wilmington,+DE&amp;aq=0&amp;oq=1703+west+10th+s&amp;sll=39.145251,-75.386656&amp;sspn=2.969088,5.696411&amp;ie=UTF8&amp;hq=&amp;hnear=1703+W+10th+St,+Wilmington,+Delaware+19805&amp;t=m&amp;ll=39.752931,-75.565939&amp;spn=0.018476,0.062656&amp;z=14&amp;iwloc=A&amp;&output=embed&amp;iwloc=near"></iframe>
		</div>
		
		<h1 class="form-header">Contact Us</h1>
		
		<form action="process-contact-form.php" method="post" id="contact" name="contact">
				
			<div class="name">
				<label for="name">Name *</label>
				<input type="text" name="name" id="name" />
			</div>
			
			<div class="email">
				<label for="email">Email *</label>
				<input type="text" name="email" id="email" />
			</div>
			
			<div class="phone">
				<label for="phone">Phone</label>
				<input type="text" name="phone" id="phone" />
			</div>
			
			<div class="subject">
				<label for="subject">Subject *</label>
				<input type="text" name="subject" id="subject" />
			</div>		
		
			<div class="message">
				<label for="message">Message *</label>
				<textarea name="message" id="message" /></textarea>
			</div>
			
			<div class="submit">
				<input type="submit" name="submit" value="" id="contact-form-btn" />
			</div>
		</form><!-- END #contact -->
		
		<ul id="contact-nav">
			<li style="margin-bottom: 25px;"><img src="/images/address-icon-black.png" align="left" />1703 West 10th Street<br/>Wilmington, DE 19805</li>
			<li style="margin-bottom: 35px;"><img src="/images/phone-icon-black.png" align="left" /><span style="position: relative; top: 8px;">(302) 421-3734</span></li>
			<li style="margin-bottom: 30px;"><img src="/images/email-icon-black.png" align="left" /><a href="mailto:admin@cityfare.org" style="position: relative; top: 10px;">admin@cityfare.org</a></li>
		</ul>
		
		<div class="clear"></div>
		
	</div><!-- END .interior-container -->
		
	<div class="push"></div><!-- END .push -->
</div><!-- END .page-wrap -->

<?php include '../includes/footer.php'; ?>