<?php $title = "Volunteer Application"; ?>

<?php include '../includes/header.php'; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#volunteer").validate({
            submitHandler:function(form) {
                SubmittingForm();
            },
            rules: {
                vName: "required",
                birthday: {                
                    required: true,
                    date: true
                },
                vEmail: {                
                    required: true,
                    email: true
                },
                hPhone: {
                    required: true,
                    digits: true
                },
                address: {
                    required: true
                },
                city: {
                    required: true
                },
                state: {
                    required: true
                },
                employment: {
                    required: true
                },
                felony: {
                    required: true
                },
                emName: {
                    required: true
                },
                emAddress: {
                    required: true
                },
                emPhone: {
                    required: true,
                    digits: true
                },
                emRelationship: {
                    required: true
                },
                license: {
                    required: true
                },
                lState: {
                    required: true
                },
                lNumber: {
                    required: true
                },
                expDate: {
                    required: true
                },
                vehicle: {
                    required: true
                },
                insurance: {
                    required: true
                },
                iCompany: {
                    required: true
                },
                iNumber: {
                    required: true
                },
                geoArea: {
                    required: true
                },
                availability: {
                    required: true
                },
                rNameOne: {
                    required: true
                },
                rPhoneOne: {
                    required: true, 
                    digits: true
                },
                rKnownOne: {
                    required: true
                },
                rCapacityOne: {
                    required: true
                },
                rNameTwo: {
                    required: true
                },
                rPhoneTwo: {
                    required: true, 
                    digits: true
                },
                rKnownTwo: {
                    required: true
                },
                rCapacityTwo: {
                    required: true
                }
                
            },
            messages: {
                vName: "Please enter your name.",
                birthday: "Please select a date.",
                vEmail: "Please enter valid email address.",
                hPhone: "Please enter your home phone number.",
                address: "Please enter an address.",
                city: "Please enter a city.",
                state: "Please select a state.",
                employment: "This is a required field.",
                felony: "This is a required field.",
                emName: "Please enter a name.",
                emAddress: "Please enter an address.",
                emPhone: "Please enter a phone number.",
                emRelationship: "This is a required field.",
                license: "This is a required field.",
                lState: "Please select a state.",
                lNumber: "This is a required field.",
                expDate: "Please select a date.",
                vehicle: "This is a required field.",
                insurance: "This is a required field.",
                iCompany: "This is a required field.",
                iNumber: "This is a required field.",
                geoArea: "This is a required field.",
                availability: "This is a required field.",
                rNameOne: "Please enter a name.",
                rPhoneOne: "Please enter a phone number.",
                rKnownOne: "This is a required field.",
                rCapacityOne: "This is a required field.",
                rNameTwo: "Please enter a name.",
                rPhoneTwo: "Please enter a phone number.",
                rKnownTwo: "This is a required field.",
                rCapacityTwo: "This is a required field."
            }
        });
    });
</script>

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
			<h1>Volunteer with City Fare</h1>
			
			<form action="process-application.php" method="POST" id="volunteer">
				
				<div class="field">
					<label for="vName">Name *</label><br/>
					<input type="text" name="vName" id="vName" />
				</div>
				
				<div class="field">
					<label for="birthday">Date of Birth *</label><br/>
					<input type="date" name="birthday" id="birthday" />
				</div>
				
				<div class="field">
					<label for="vEmail">Email *</label><br/>
					<input type="text" name="vEmail" id="vEmail" />
				</div>
				
				<div class="field">
					<label for="hPhone">Home Phone *</label><br/>
					<input type="text" name="hPhone" id="hPhone" />
				</div>
				
				<div class="field">
					<label for="wPhone">Work Phone</label><br/>
					<input type="text" name="wPhone" id="wPhone" />
				</div>
				
				<div class="field">
					<label for="cPhone">Cell Phone</label><br/>
					<input type="text" name="cPhone" id="cPhone" />
				</div>
				
				<div class="field">
					<label for="address">Street Address *</label><br/>
					<input type="text" name="address" id="address" />
				</div>
				
				<div class="field">
					<label for="city">City *</label><br/>
					<input type="text" name="city" id="city" />
				</div>
				
				<div class="field">
					<label for="state">State *</label><br/>
					<select name="state" id="state">
						<option></option>
						<option value="AL">AL</option>
						<option value="AK">AK</option>
						<option value="AZ">AZ</option>
						<option value="AR">AR</option>
						<option value="CA">CA</option>
						<option value="CO">CO</option>
						<option value="CT">CT</option>
						<option value="DE">DE</option>
						<option value="DC">DC</option>
						<option value="FL">FL</option>
						<option value="GA">GA</option>
						<option value="HI">HI</option>
						<option value="ID">ID</option>
						<option value="IL">IL</option>
						<option value="IN">IN</option>
						<option value="IA">IA</option>
						<option value="KS">KS</option>
						<option value="KY">KY</option>
						<option value="LA">LA</option>
						<option value="ME">ME</option>
						<option value="MD">MD</option>
						<option value="MA">MA</option>
						<option value="MI">MI</option>
						<option value="MN">MN</option>
						<option value="MS">MS</option>
						<option value="MO">MO</option>
						<option value="MT">MT</option>
						<option value="NE">NE</option>
						<option value="NV">NV</option>
						<option value="NH">NH</option>
						<option value="NJ">NJ</option>
						<option value="NM">NM</option>
						<option value="NY">NY</option>
						<option value="NC">NC</option>
						<option value="ND">ND</option>
						<option value="OH">OH</option>
						<option value="OK">OK</option>
						<option value="OR">OR</option>
						<option value="PA">PA</option>
						<option value="RI">RI</option>
						<option value="SC">SC</option>
						<option value="SD">SD</option>
						<option value="TN">TN</option>
						<option value="TX">TX</option>
						<option value="UT">UT</option>
						<option value="VT">VT</option>
						<option value="VA">VA</option>
						<option value="WA">WA</option>
						<option value="WV">WV</option>
						<option value="WI">WI</option>
						<option value="WY">WY</option>
					</select>
				</div>
								
				<div class="field">
					<label for="employment">Are you employed? *</label><br/>
					<select name="employment" id="employment">
						<option></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				
				<div class="field">
					<label for="company">If yes, where?</label><br/>
					<textarea name="company" id="company" /></textarea>
				</div>
				
				<div class="field">
					<label for="felony">Have you ever been convicted of a felony? *</label><br/>
					<select name="felony" id="felony">
						<option></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				
				<h3>In case of emergency, contact:</h3>
				<div class="field">
					<label for="emName">Name *</label><br/>
					<input type="text" name="emName" id="emName" />
				</div>
				
				<div class="field">
					<label for="emAddress">Address *</label><br/>
					<textarea name="emAddress" id="emAddress" /></textarea>
				</div>
				
				<div class="field">
					<label for="emPhone">Phone *</label><br/>
					<input type="text" name="emPhone" id="emPhone" />
				</div>
				
				<div class="field">
					<label for="emRelationship">Relationship *</label><br/>
					<input type="text" name="emRelationship" id="emRelationship" />
				</div>
				
				<h3>Driver's License Information</h3>		
				<div class="field">
					<label for="license">Do you have a valid driver's license? *</label>
					<select name="license" id="license">
						<option></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				
				<div class="field">
					<label for="lState">Issuing State *</label><br/>
					<select name="lState" id="lState">
						<option></option>
						<option value="AL">AL</option>
						<option value="AK">AK</option>
						<option value="AZ">AZ</option>
						<option value="AR">AR</option>
						<option value="CA">CA</option>
						<option value="CO">CO</option>
						<option value="CT">CT</option>
						<option value="DE">DE</option>
						<option value="DC">DC</option>
						<option value="FL">FL</option>
						<option value="GA">GA</option>
						<option value="HI">HI</option>
						<option value="ID">ID</option>
						<option value="IL">IL</option>
						<option value="IN">IN</option>
						<option value="IA">IA</option>
						<option value="KS">KS</option>
						<option value="KY">KY</option>
						<option value="LA">LA</option>
						<option value="ME">ME</option>
						<option value="MD">MD</option>
						<option value="MA">MA</option>
						<option value="MI">MI</option>
						<option value="MN">MN</option>
						<option value="MS">MS</option>
						<option value="MO">MO</option>
						<option value="MT">MT</option>
						<option value="NE">NE</option>
						<option value="NV">NV</option>
						<option value="NH">NH</option>
						<option value="NJ">NJ</option>
						<option value="NM">NM</option>
						<option value="NY">NY</option>
						<option value="NC">NC</option>
						<option value="ND">ND</option>
						<option value="OH">OH</option>
						<option value="OK">OK</option>
						<option value="OR">OR</option>
						<option value="PA">PA</option>
						<option value="RI">RI</option>
						<option value="SC">SC</option>
						<option value="SD">SD</option>
						<option value="TN">TN</option>
						<option value="TX">TX</option>
						<option value="UT">UT</option>
						<option value="VT">VT</option>
						<option value="VA">VA</option>
						<option value="WA">WA</option>
						<option value="WV">WV</option>
						<option value="WI">WI</option>
						<option value="WY">WY</option>
					</select>
				</div>
				
				<div class="field">
					<label for="lNumber">License Number *</label><br/>
					<input type="text" name="lNumber" id="lNumber" />
				</div>
				
				<div class="field">
					<label for="expDate">Expiration Date *</label><br/>
					<input type="date" name="expDate" id="expDate" />
				</div>
				
				<h3>Vehicle Information</h3>
				<div class="field">
					<label for="vehicle">Do you have use of a reliable vehicle? *</label>
					<select name="vehicle" id="vehicle">
						<option></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				
				<div class="field">
					<label for="insurance">Do you have proof of insurance? *</label>
					<select name="insurance" id="insurance">
						<option></option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				
				<div class="field">
					<label for="iCompany">If yes, what carrier?</label><br/>
					<input type="text" name="iCompany" id="iCompany" />
				</div>
				
				<div class="field">
					<label for="iNumber">Policy Number</label><br/>
					<input type="text" name="iNumber" id="iNumber" />
				</div>
				
				 <h3>Volunteer Preferences</h3>
				<div class="field">
					<label for="geoArea">Geographic area preferred *</label><br/>
					<textarea name="geoArea" id="geoArea" /></textarea>
				</div>
				
				<div class="field">
					<label for="availability">Availability *</label><br/>
					<textarea name="availability" id="availability" /></textarea>
				</div>
				
				<h3>Personal References:</h3>
				<p style="margin-bottom: 5px;font-style: italic;">List below two people not related to you, whom you have known for at least 1 year:</p>
				<h5>Reference One:</h5>
				<div class="field">
					<label for="rNameOne">Name *</label><br/>
					<input type="text" name="rNameOne" id="rNameOne" />
				</div>
				
				<div class="field">
					<label for="rPhoneOne">Phone Number *</label><br/>
					<input type="text" name="rPhoneOne" id="rPhoneOne" />
				</div>
				
				<div class="field">
					<label for="rKnownOne">How long have you known this person? *</label><br/>
					<input type="text" name="rKnownOne" id="rKnownOne" />
				</div>
				
				<div class="field">
					<label for="rCapacityOne">In what capacity? *</label><br/>
					<textarea name="rCapacityOne" id="rCapacityOne" /></textarea>
				</div>

				<h5>Reference Two:</h5>
				<div class="field">
					<label for="rNameTwo">Name *</label><br/>
					<input type="text" name="rNameTwo" id="rNameTwo" />
				</div>
				
				<div class="field">
					<label for="rPhoneTwo">Phone Number *</label><br/>
					<input type="text" name="rPhoneTwo" id="rPhoneTwo" />
				</div>
				
				<div class="field">
					<label for="rKnownTwo">How long have you known this person? *</label><br/>
					<input type="text" name="rKnownTwo" id="rKnownTwo" />
				</div>
				
				<div class="field">
					<label for="rCapacityTwo">In what capacity? *</label><br/>
					<textarea name="rCapacityTwo" id="rCapacityTwo" /></textarea>
				</div>
						
				<div class="submit">
					<input type="submit" value="" id="vol-form-btn" />
				</div>
			</form><!-- END #volunteer -->		
		</div><!-- END #interior-content -->
			
		<div class="clear"></div><!-- END .clear -->
	</div><!-- END .interior-container -->
		
	<div class="push"></div><!-- END .push -->
</div><!-- END .page-wrap -->
	
<?php include '../includes/footer.php'; ?>