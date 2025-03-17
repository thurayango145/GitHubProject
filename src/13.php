
<?php
// Connect to the database
$conn = mysqli_connect("localhost", "db_user", "db_password", "database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the input from the user
$input = $_POST["input"];

// Sanitize the input
$input = htmlspecialchars($input);

// Check if the input is a number
if (is_numeric($input)) {
    // Convert the input to an integer
    $input = intval($input);
} else {
    // If the input is not a number, set it to 0
    $input = 0;
}

// Get the current balance from the database
$query = "SELECT balance FROM accounts WHERE account_number = '$input'";
$result = mysqli_query($conn, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $balance = $row["balance"];
} else {
    // If the query failed, set the balance to 0
    $balance = 0;
}

// Close the database connection
mysqli_close($conn);

// Output the current balance
echo "Your current balance is: $balance";
?>