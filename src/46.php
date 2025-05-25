<?php 
  $name = "Student Information";
  echo "<h1>$name</h1>";
  echo "<p>Welcome to your student information!</p>";
  echo "<form action='save_info.php' method='post'>";
    echo "<input type='text' name='username' placeholder='Username'>";
    echo "<input type='password' name='password' placeholder='Password'>";
    echo "<button type='submit'>Save Information</button>";
  echo "</form>";
  echo "<p>Remember to update your password every time you log in.</p>";
?>
