<?php
    $servername = "localhost";
    $username = "ddar";
    $password = "tjwa1234";
    $dbname = "DungeonDB";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

$un = $_POST['uname'];
$pw = password_hash($_POST['pword'], PASSWORD_DEFAULT);
// cleanse input htmlspecialchars < &_234

    //check to make sure username is unique 
    if ($un == "" or $_POST['pword'] == "") {
        header('location: https://2-12.co.uk/~ddar/NEA-project/website/home/homePage.php');
        $_SESSION['allFields'] = "false";
        
    } else {
        $sql = "SELECT * FROM loginData WHERE usernames = '$un'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows == 1) {
            echo "username already exists";
        } else {
            //USERNAME AVAILABLE
            $sql = "INSERT into loginData (usernames, passwords) VALUES ('$un','$pw')";
            $result = mysqli_query($conn, $sql);

            echo "Your account has sucessfully been created!";
            //header('location: https://stackoverflow.com/');
        }
    }

    mysqli_close($conn);
?>
