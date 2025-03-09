<?php
// Get the user input from the form
$name = $_POST['name'];
// Check if the name is valid
if (!empty($name)) {
    // If the name is valid, display a success message
    echo "Hello $name! You have entered a valid name.";
} else {
    // If the name is not valid, display an error message
    echo "Please enter your name.";
}
?>