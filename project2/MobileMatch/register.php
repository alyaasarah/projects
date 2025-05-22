<?php
include 'masterpage.php';

// Define variables
$username = '';
$email = '';
$error_message = '';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form values
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate form inputs
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = "Please fill out all fields.";
    } elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } else {
        // Check if the user already exists
        $users_file = 'json/user.json';

        if (file_exists($users_file) && filesize($users_file) > 0) {
            $users_data = file_get_contents($users_file);
            $users = json_decode($users_data, true);
        } else {
            $users = [];
        }

        if (count($users) > 0) {
            $last_user_id = end($users)['userid'];
            $new_user_id = 'U' . str_pad(substr($last_user_id, 1) + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $new_user_id = 'U0001';
        }

        foreach ($users as $user) {
            if ($user['email'] == $email) {
                $error_message = "An account with this email already exists.";
                break;
            }
        }

        // If the user does not exist, create a new account
        if (empty($error_message)) {
            $new_user = array(
                'userid' => $new_user_id,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'favourite' => ''
            );
            $users[] = $new_user;
            file_put_contents($users_file, json_encode($users, JSON_PRETTY_PRINT));
            // Redirect to login page
            header("Location: account.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign up now! | MobileMatch</title>
<link rel="stylesheet" type="text/css" href="css/account.css">
</head>
<body>
	<main>
    	<?php if ($error_message): ?>
		<div class="error-message"><?= $error_message ?></div>
		<?php endif; ?>

		
		<div class="register">
			<h2>CREATE AN ACCOUNT</h2>
		</div>

		<form method="post">
			<div class="container">
				<input class="username" type="text" placeholder="Username"
					name="username" value="<?= htmlspecialchars($username) ?>" required>
				<input class="su-email" type="email" placeholder="Email"
					name="email" value="<?= htmlspecialchars($email) ?>" required> <input
					class="su-psw" type="password" placeholder="Password"
					name="password" required> <input class="confirm" type="password"
					placeholder="Password Confirmation" name="confirm_password"
					required>
			</div>

			<div class="register-button">
				<button type="submit">Register</button>
			</div>
		</form>
	</main>

</body>
</html>