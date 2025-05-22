<?php
session_start();
include ('masterpage.php');

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    // Set the session variables
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
} else {
    // Set the session variables to empty values
    $user_id = '';
    $username = '';
}

if (isset($_POST['logout'])) {
    // Log out the user
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    // Display a success message
    $success_message = 'You have been successfully logged out.';
}

$email = '';
$password = '';
$error_message = '';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get the email and password values from the form if they exist
    $email = isset($_POST['unname']) ? $_POST['unname'] : '';
    $password = isset($_POST['psw']) ? $_POST['psw'] : '';

    // Read the user data from the JSON file
    $users_data = file_get_contents('json/user.json');
    $users = json_decode($users_data, true);

    $user_found = false;
    foreach ($users as $user) {
        $user_email = $user['email'];
        $user_password = $user['password'];

        if ($email == $user_email && $password == $user_password) {
            // Email and password match, so set the session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            // redirect to the home page or any other page after successful login
            header('Location: home.php');
            exit();
        } elseif ($email == $user_email) {
            // Display an error message if the password is incorrect
            $error_message = 'Invalid password. Please try again.';
            $user_found = true;
            break;
        }
    }
    // Display an error message if the email is not found in the file
    if (! $user_found) {
        $error_message = 'The email you entered is not registered. <a href="register.php">Sign up</a> now to create an account.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome back! | MobileMatch</title>
<link rel="stylesheet" type="text/css" href="css/account.css">

</head>
<body>
	<main>
		
    	<?php if ($error_message): ?>
    		<div class="error-message"><?= $error_message ?></div>
    	<?php endif; ?>
    	
    	<?php if (isset($success_message)): ?>
    		<div class="success-message"><?= $success_message ?></div>
    	<?php endif; ?>
    	
		<div class="signin">
			<h2>WELCOME BACK</h2>
		</div>

		<form id="logout-form"
			action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
			method="post">
			<input type="hidden" name="logout" value="1">
		</form>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
			method="post">
			<div class="container">
				<input class="si-email" type="email" placeholder="Email"
					name="unname" required value="<?= htmlspecialchars($email) ?>"> <input
					class="si-psw" type="password" placeholder="Password" name="psw"
					required>
			</div>
			<div class="signin-button">
				<button type="submit">Sign In</button>
				<div class="register-button">
					<a href="register.php"><button type="button">Register</button></a>
				</div>
			</div>
		</form>
		<script>
		function confirmLogout() {
			var result = confirm("Are you sure you want to log out?");
			if (result) {
				return true;
			} else {
				return false;
			}
		}

		// Add event listener to the logout button
		document.getElementById("logout-button").addEventListener("click", function(event) {
			event.preventDefault(); // Prevent form submission
			if (confirmLogout()) {
				document.getElementById('logout-form').submit();
			}
		});

		window.onload = function() {
			if (<?= json_encode($success_message) ?>) {
				alert(<?= json_encode($success_message) ?>);
			}
		};
	</script>

</body>
</html>
</main>