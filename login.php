<?php  
require('test.php');

if (isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM User WHERE username='$username' and pass='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "Login Credentials verified";
        // Redirect to home page
        header("Location: home.html");
        exit();
    } else {
        echo "Invalid Login Credentials";
    }
}
?>
