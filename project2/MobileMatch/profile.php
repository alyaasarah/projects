<?php
include 'masterpage.php';

session_start();

if (isset($_SESSION['userid'])) {
    // Load user data from JSON file
    $userData = json_decode(file_get_contents('json/user.json'), true);
    
    // Find the current user's data based on their ID
    $currentUser = null;
    foreach ($userData as $user) {
        if ($user['userid'] === $_SESSION['userid']) {
            $currentUser = $user;
            break;
        }
    }
    
    // Display the user's favourite devices
    if ($currentUser && isset($currentUser['favourite'])) {
        $favourites = json_decode($currentUser['favourite'], true);
        echo '<h1>Favourites</h1>';
        echo '<div id="fav">';
        foreach ($favourites as $favourite) {
            echo '<div class="device">';
            echo '<img src="' . $favourite['image'] . '" alt="' . $favourite['name'] . '">';
            echo '<h3>' . $favourite['name'] . '</h3>';
            echo '</div>';
        }
        echo '</div>';
    }
} else {
    // Redirect to login page if user is not logged in
    header('Location: account.php');
    exit;
}
?>
