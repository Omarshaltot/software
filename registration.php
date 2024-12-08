<?php

require('connect.php');

// Variables
$Username = "";
$Password = "";
$FirstName = "";
$LastName = "";

// Assigning POST values to variables.
if (isset($_POST['sign-up'])) {
    if ($_POST['password'] === $_POST['confirm-password']) {
        
        $LastName = $_POST['last-name'];
        $FirstName = $_POST['first-name'];
        $Username = $_POST['email'];
        $Password = $_POST['password'];
        $sql = "INSERT INTO users (UserID, Username, Password, Role) VALUES (NULL, '$Username', '$Password', 'Parent')";
        // Check
        if (mysqli_query($conn, $sql)) {
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
