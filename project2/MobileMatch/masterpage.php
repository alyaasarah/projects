<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
</head>
<body>
	<header class="header">
			<img src="img/logo.png" alt="MobileMatch" />
			<a href="home.php">MOBILEMATCH</a>

		<div class="topnav" id="myTopnav">
            <?php
            $page = basename($_SERVER['PHP_SELF']);
            ?>
            <a href="home.php" class=" <?php if ($page == 'home.php') echo 'active'; ?>">Home</a>
    		<a href="ranking.php" class="<?php if ($page == 'ranking.php') echo 'active'; ?>">Ranking</a>
    		<a href="about.php" class="<?php if ($page == 'about.php') echo 'active'; ?>">About Android</a>
    		<div class="dropdown">
    			<button class="dropbtn <?php if ($page == 'account.php') echo 'active'; ?>">My Account</button>
    			<div class="dropdown-content">
      				<a href="register.php">Register</a>
      				<a href="account.php">Sign In / Sign Out</a>
      				<a href="profile.php">Profile</a>
    			</div>
  			 </div>
    		<a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa fa-bars"></i></a>
		</div>

		<script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
     	</script>
	</header>
	<main></main>
	<footer>Copyright &copy; MobileMatch. All Rights Reserved.</footer>
</body>
</html>