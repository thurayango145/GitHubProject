<?php 
// Initialize session
if (!isset($_SESSION)) {
    session_start();
}
// Set session variable
$_SESSION['session_variable'] = "Hello, $_SESSION['session_variable']!";

echo "Hello, $_SESSION['session_variable']!";
?>
