<?php include 'masterpage.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Samsung | MobileMatch</title>
<link rel="stylesheet" type="text/css" href="css/device.css" />
<link rel="stylesheet"
	href="https://fontawesome.com/icons/heart?f=classic&s=solid&pc=%23ff0000">
</head>
<body>
	<main>
		<h1>Samsung Galaxy A54</h1>

		<div class="device-info">
			<img src="img/samsung.jpg">
			<div class="device-container">
				<button class="fav-btn">
					<i class="fa fa-heart" style="color: #ff0000;"></i>
				</button>
				<h3>7.8 out of 10</h3>
				<p>The Samsung Galaxy A54 is a solid mid-ranger that ticks most
					boxes. It has a great display, premium build, a decent camera setup
					and a large battery but slight performance niggles and inconsistent
					battery life stop it from being an instant recommendation.</p>
				<p class="score">8/10</p>
			</div>
		</div>

		<h2>Specifications</h2>

		<div class="device-specification">
			<script src="js/device2.js"></script>
		</div>
		<br>
		<hr>

		<h2>Retailer</h2>
		<div class="retailer-container">
			<div class="retailer1">
				<img src="img/samsung-r1.jpg">
				<p>Samsung Malaysia</p>
				<a
					href="https://www.samsung.com/my/smartphones/galaxy-a/galaxy-a54-5g-awesome-violet-256gb-sm-a546elvdxme/buy/">Buy
					now</a>
			</div>

			<div class="retailer2">
				<img src="img/samsung-r2.jpg">
				<p>Lazada Malaysia</p>
				<a
					href="https://www.lazada.com.my/products/samsung-galaxy-a54-5g-smartphone-8gb-ram-256gb-rom-awesome-lime-violet-white-graphite-i2067369304-s19392125201.html?channelLpJumpArgs=&clickTrackInfo=query%253Asamsung%252Bgalaxy%252Ba54%253Bnid%253A2067369304%253Bsrc%253ALazadaMainSrp%253Brn%253A518bbc8869f7b8076e093b29b1c46420%253Bregion%253Amy%253Bsku%253A2067369304_MY%253Bprice%253A1899%253Bclient%253Adesktop%253Bsupplier_id%253A47%253Bpromotion_biz%253A%253Basc_category_id%253A3%253Bitem_id%253A2067369304%253Bsku_id%253A19392125201%253Bshop_id%253A642&fastshipping=0&freeshipping=0&fs_ab=2&fuse_fs=0&lang=en&location=Wp%20Kuala%20Lumpur&price=1899&priceCompare=&ratingscore=4.4&request_id=518bbc8869f7b8076e093b29b1c46420&review=11&sale=56&search=1&source=search&spm=a2o4k.searchlist.list.i40.821261af2nc9ZW&stock=1">Buy
					now</a>
			</div>

			<div class="retailer3">
				<img src="img/samsung-r3.jpg">
				<p>Harvey Norman Malaysia</p>
				<a
					href="https://www.harveynorman.com.my/smart-tech-and-phones/phones-and-phablets-en/mobile-phones/samsung-galaxy-a54-5g-8gb-256gb-awesome-lime-sm-a546elgdxme.html?gclid=EAIaIQobChMIm_6W3oK5_gIVh1cPAh0YYQm4EAYYAyABEgJCafD_BwE">Buy
					now</a>
			</div>
		</div>

		<hr>

		<h2>External Reviews</h2>
		<div class="review-container" id="review-container">

			<div class="review1">
				<img src="img/samsung-e1.jpg"><a
					href="https://www.gsmarena.com/samsung_galaxy_a54-reviews-12070.php">Click
					here for more</a>
			</div>

			<div class="review2">
				<img src="img/samsung-e2.jpg"><a
					href="https://www.androidpolice.com/samsung-galaxy-a54-5g-review/">Click
					here for more</a>
			</div>

			<div class="review3">
				<img src="img/samsung-e3.jpg"><a
					href="https://www.trustedreviews.com/reviews/samsung-galaxy-a54-5g">Click
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