<?php include 'masterpage.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Xiaomi | MobileMatch</title>
<link rel="stylesheet" type="text/css" href="css/device.css" />
<link rel="stylesheet"
	href="https://fontawesome.com/icons/heart?f=classic&s=solid&pc=%23ff0000">
</head>
<body>
	<main>
		<h1>Xiaomi Lite 5G NE</h1>

		<div class="device-info">
			<img src="img/xiaomi.jpg">
			<div class="device-container">
				<button class="fav-btn">
					<i class="fa fa-heart" style="color: #ff0000;"></i>
				</button>
				<h3>9 out of 10</h3>
				<p>The Xiaomi 11 Lite 5G NE is an incredibly inexpensive smartphone
					that's surprisingly good at capturing images and it looks pretty
					slim too. It's a good mid-range smartphone but it does have plenty
					of competition at this price point so does face a challenge when
					looking for buyers.</p>
				<p class="score">9/10</p>
			</div>
		</div>

		<h2>Specifications</h2>

		<div class="device-specification">
			<script src="js/device1.js"></script>
		</div>
		<br>
		<hr>

		<h2>Retailer</h2>
		<div class="retailer-container">
			<div class="retailer1">
				<img src="img/xiaomi-r1.jpg">
				<p>Expansys</p>
				<a
					href="https://www.expansys.my/xiaomi-11-lite-5g-ne-dual-sm-8gb-256gb-peach-pink-366725/">Buy
					now</a>
			</div>

			<div class="retailer2">
				<img src="img/xiaomi-r2.jpg">
				<p>Lazada Malaysia</p>
				<a
					href="https://www.lazada.com.my/products/xiaomi-11-lite-5g-ne-mi-11-lite-5g-ne-8gb-ram-256gb-rom-xiaomi-malaysia-warranty-i3011255889-s14863215623.html?from_gmc=1&exlaz=d_1:mm_150050845_51350205_2010350205::12:19330051338!!!!!c!!14863215623!569324806&gclid=EAIaIQobChMI74mzmIO5_gIVQ6aWCh2IhgXmEAQYBCABEgJH4PD_BwE">Buy
					now</a>
			</div>

			<div class="retailer3">
				<img src="img/xiaomi-r3.jpg">
				<p>Shopee Malaysia</p>
				<a
					href="https://shopee.com.my/XIAOMI-11-LITE-5G-NE%F0%9F%92%A58GB-256GB%F0%9F%92%A5%F0%9F%8E%81FREE-GIFT%F0%9F%8E%81-XIAOMI-MALAYSIA-i.308187487.3467746851?sp_atk=5128f214-4d3f-4c61-aa17-17c5d6c46cfb&xptdk=5128f214-4d3f-4c61-aa17-17c5d6c46cfb">Buy
					now</a>
			</div>
		</div>

		<hr>

		<h2>External Reviews</h2>
		<div class="review-container" id="review-container">

			<div class="review1">
				<img src="img/xiaomi-e1.jpg"><a
					href="https://www.gsmarena.com/xiaomi_11_lite_5g_ne-review-2320.php">Click
					here for more</a>
			</div>

			<div class="review2">
				<img src="img/xiaomi-e2.jpg"><a
					href="https://nasilemaktech.com/review-xiaomi-11-lite-5g-ne/">Click
					here for more</a>
			</div>

			<div class="review3">
				<img src="img/xiaomi-e3.jpg"><a
					href="https://www.ephotozine.com/article/xiaomi-11-lite-5g-ne-smartphone-review-35855">Click
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