
<?php

// Get the name of the current user from the environment variable "USER"
$currentUser = getenv("USER");

// Check if the current user is an administrator
if (isAdmin($currentUser)) {
    // Display a message indicating that the user is an administrator
    echo "You are an administrator!";
} else {
    // Display a message indicating that the user is not an administrator
    echo "You are not an administrator.";
}

// Function to check if a user is an administrator
function isAdmin($user) {
    // Check if the user's name ends with "-admin"
    return substr($user, -strlen("-admin")) === "-admin";
}

?>