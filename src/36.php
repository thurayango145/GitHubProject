<?php
    // Connect to database
    $db = new mysqli("localhost", "username", "password", "database_name");

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Get user input for the project name and tags
    $project_name = $_POST['project_name'];
    $tags = array($_POST['tags']);

    // Generate random number between 10,000 and 20,000
    $random_number = mt_rand(10000, 20000);

    // Insert project name into database
    $sql = "INSERT INTO projects (name, tags, random_id) VALUES ('$project_name', '$tags', '$random_number')";

    if ($db->query($sql) === TRUE) {
        echo "Project added successfully!";
    } else {
        echo "Error adding project: " . $db->error;
    }

    // Close database connection
    $db->close();
?>
