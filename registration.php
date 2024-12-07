<?php

require('connect.php');

// Variables
$username = "";
$password = "";


// Assigning POST values to variables.
if (isset($_POST['sign up'])) {
    if ($_POST['psw'] === $_POST['psw-repeat']) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        

        $sql = "INSERT INTO User (username, password) VALUES ('$username', '$password')";

        // Check
        if (mysqli_query($conn, $sql)) {
            echo "<br>" . "New record created successfully";
            // Redirect to another page
            header("Location: login.html");
            exit(); // Terminate script after redirection
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "<script type='text/javascript'>alert('Please enter the right password');</script>";
    }
}
?>
