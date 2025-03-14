 <?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

// send email using mail() function
mail("your_email@example.com", "New Form Submission", $message, "From: $name <$email>");

echo "Thank you for your message!";
?>