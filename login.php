<?php  
require('connect.php');

if (isset($_POST['email']) and isset($_POST['Password'])) {
    $Username = $_POST['email'];
    $Password = $_POST['Password'];

    $query = "SELECT * FROM users WHERE Username='$Username' and Password='$Password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Redirect to home page
        header("Location: home.html");
        exit();
    } else {
        echo "Invalid Login Credentials";
    }
}
?>


