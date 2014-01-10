<?php $title = "Meal Types"; ?>

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
			<h1>Meal Types</h1>
			<p>Whether in a community dining room or delivered to a client's home, City Fare offers several meal options from which a client can choose.</p>
			
			<div style="text-align: center;">
				<h3>Sample Menu</h3>
				<p style="font-size: 13px !important;">Note: Salad Bar Meals are not available for delivery</p>
			</div>
			
			<table id="menu">
				<tr>
					<td class="day-label">Monday</td>
					<td class="day-label">Tuesday</td>
					<td class="day-label">Wednesday</td>
					<td class="day-label">Thursday</td>
					<td class="day-label">Friday</td>
				</tr>
				<!-- HOT MEAL OPTION -->
				<tr>
					<td class="option-label">Hot Meal Option</td>
					<td class="option-label">Hot Meal Option</td>
					<td class="option-label">Hot Meal Option</td>
					<td class="option-label">Hot Meal Option</td>
					<td class="option-label">Hot Meal Option</td>
				</tr>
				<tr>
					<td>Herbed Tilapia<br/>Macaroni &amp; Cheese<br/>Stewed Tomatoes<br/>Pears<br/>Double Fiber Bread</td>
					<td>Salisbury Steak with Gravy<br/>Mashed Potatoes<br/>Brussel Sprouts<br/>Fruit Mix<br/>Wheat Bread</td>
					<td>Fire Braised Chicken Stew<br/>Mixed Green Salad<br/>Peach Cobbler<br/>Split Top Wheat Roll</td>
					<td>Pot Roast with Au Jus<br/>Baked Potato<br/>Broccoli<br/>Wheat Bread<br/>Pineapple Tidbits<br/>Sour Cream</td>
					<td>Stuffed Shells in Spaghetti Sauce<br/>Green Beans<br/>Mixed Greens Salad<br/>Applesauce<br/>Ultimate Grain Bread</td>
				</tr>
				<tr style="height: 25px;"></tr>
				<!-- BAG SUPPER OPTION -->
				<tr>
					<td class="option-label">Bag Supper<br/>Option</td>
					<td class="option-label">Bag Supper<br/>Option</td>
					<td class="option-label">Bag Supper<br/>Option</td>
					<td class="option-label">Bag Supper<br/>Option</td>
					<td class="option-label">Bag Supper<br/>Option</td>
				</tr>
				<tr>
					<td>Ham &amp; Swiss with Lettuce, Tomato &amp; Onion on Kaiser Roll<br/>Fresh Pear<br/>Yogurt<br/>Mayonnaise Packet</td>
					<td>Grilled Chicken Breast with Lettuce &amp; Tomato on Multi Grain Bun<br/>Green Bean Salad<br/>Apple<br/>Mayonnaise Packet</td>
					<td>Roasted Pork with Lettuce, Tomato &amp; Onion on Double Fiber Bread<br/>Carrot Raisin Salad<br/>Orange Juice<br/>Mustard Packet</td>
					<td>Swiss &amp; Cheddar Cheese with Lettuce &amp; Tomato on Double Fiber Bread<br/>Fruit Mix<br/>Orange Juice<br/>Mustard Packet</td>
					<td>Chicken Salad with Lettuce &amp; Tomato on Whole Grain Bread<br/>Cucumber Salad<br/>Orange</td>
				</tr>
				<tr style="height: 25px;"></tr>
				<!-- SALAD BAR OPTION -->
				<tr>
					<td class="option-label">Salad Bar Option</td>
					<td class="option-label">Salad Bar Option</td>
					<td class="option-label">Salad Bar Option</td>
					<td class="option-label">Salad Bar Option</td>
					<td class="option-label">Salad Bar Option</td>
				</tr>
				<tr>
					<td>Chicken Salad<br/>Salad Mix with Tomato<br/>Cucumber Salad<br/>Orange Juice<br/>Chocolate Chip Cookies<br/>Double Fiber Bread</td>
					<td>Salomon Fillet<br/>Salad Mix<br/>Tomato &amp; Cucumber Slices<br/>Banana<br/>Rice Pudding<br/>Wheat Roll</td>
					<td>Turkey Breast &amp; Cheese<br/>Swiss Cheese<br/>Salad Mix<br/>Tomato &amp; Onion<br/>Fresh Apple<br/>Chocolate Pudding<br/>12 Grain Bread</td>
					<td>Tuna Salad<br/>Salad Mix with Tomato<br/>Lemon Green Bean Salad<br/>Fresh Orange<br/>Oatmeal Cookies<br/>Whole Grain Bread</td>
					<td>Fire Braised Chicken Breast<br/>Salad Mix<br/>Garbanzo Beans<br/>Tomato, Onion, Peppers<br/>Applesauce<br/>Goldfish Graham<br/>Double Fiber Bread</td>
				</tr>
			</table>
		</div><!-- END #interior-content -->
			
		<div class="clear"></div><!-- END .clear -->
	</div><!-- END .interior-container -->
		
	<div class="push"></div><!-- END .push -->
</div><!-- END .page-wrap -->
	
<?php include '../includes/footer.php'; ?>
