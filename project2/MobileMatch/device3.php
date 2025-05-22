<?php include 'masterpage.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Asus | MobileMatch</title>
<link rel="stylesheet" type="text/css" href="css/device.css" />
<link rel="stylesheet"
	href="https://fontawesome.com/icons/heart?f=classic&s=solid&pc=%23ff0000">
</head>
<body>
	<main>
		<h1>Asus ROG Phone 6</h1>

		<div class="device-info">
			<img src="img/asus.jpg">
			<div class="device-container">
				<button class="fav-btn">
					<i class="fa fa-heart" style="color: #ff0000;"></i>
				</button>
				<h3>9.5 out of 10</h3>
				<p>Best gaming phone with excellent battery lasting power.Hardcore
					gamers will be pleased to hear that you can map out 14 customisable
					touch points on the screen simultaneously across the 6.78-inch
					screen.</p>
				<p class="score">9.7/10</p>
			</div>
		</div>

		<h2>Specifications</h2>

		<div class="device-specification">
			<script src="js/device3.js"></script>
		</div>
		<br>
		<hr>

		<h2>Retailer</h2>
		<div class="retailer-container">
			<div class="retailer1">
				<img src="img/asus-r1.png">
				<p>Asus Malaysia</p>
				<a href="https://shop.asus.com/my/rog-phone-6.html">Buy now</a>
			</div>

			<div class="retailer2">
				<img src="img/asus-r2.jpg">
				<p>Lazada Malaysia</p>
				<a
					href="https://www.lazada.com.my/products/asus-rog-phone-6-5g-gaming-smartphone-12gb-ram-256gb-rom-16gb-ram-512gb-rom-snapdragon-8-gen-1-5g-mobile-678-amoled-display-i3081060278-s15380042046.html?from_gmc=1&exlaz=d_1:mm_150050845_51350205_2010350205::12:19330051338!!!!!c!!15380042046!472872381&gclid=EAIaIQobChMI5vL8tIO5_gIVi7yWCh2eOA63EAQYASABEgJLLfD_BwE">Buy
					now</a>
			</div>

			<div class="retailer3">
				<img src="img/asus-r3.jpg">
				<p>Shopee Malaysia</p>
				<a href="https://shopee.com.my/product/349178841/4285461715">Buy now</a>
			</div>
		</div>

		<hr>

		<h2>External Reviews</h2>
		<div class="review-container" id="review-container">

			<div class="review1">
				<img src="img/asus-e1.jpg"><a
					href="https://www.gsmarena.com/asus_rog_phone_6-reviews-11647.php">Click
					here for more</a>
			</div>

			<div class="review2">
				<img src="img/asus-e2.jpg"><a
					href="https://www.techadvisor.com/article/1418170/asus-rog-phone-6-review.html">Click
					here for more</a>
			</div>

			<div class="review3">
				<img src="img/asus-e3.jpg"><a
					href="https://www.androidpolice.com/asus-rog-phone-6-pro-review/">Click
					here for more</a>
			</div>
		</div>

		<hr>

		<h2>User Reviews</h2>

		<form id="comment">
			<h3>Write review</h3>
			<div id="reviews">
				<label for="user">Name:</label> <input type="text" id="user"
					name="user"> <label for="device">Device:</label> <select
					id="device" name="device">
					<option value="X11NE">Xiaomi Lite 5G NE</option>
					<option value="SGAA54">Samsung Galaxy A54</option>
					<option value="AROG6">Asus ROG Phone 6</option>
				</select><br> <label for="rating">Rating:</label> <select
					id="rating" name="rating">
					<option value="10">10 Stars</option>
					<option value="9">9 Stars</option>
					<option value="8">8 Stars</option>
					<option value="7">7 Star</option>
					<option value="6">6 Stars</option>
					<option value="5">5 Stars</option>
					<option value="4">4 Stars</option>
					<option value="3">3 Stars</option>
					<option value="2">2 Stars</option>
					<option value="1">1 Star</option>
				</select> <label for="comment">Comment:</label>
				<textarea id="comment-text" name="comment"></textarea>

				<button type="submit" id="submit">Submit</button>
			</div>
		</form>

		<div id="review-container"></div>
		<script src="js/review.js"></script>

	</main>
</body>
</html>