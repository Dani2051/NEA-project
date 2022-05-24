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

function loggedin() {
    $_SESSION['loggedin'] = "true";
    echo "logged in";
    //header('location: https://2-12.co.uk/~ddar/NEA-project/game/game.html');
}

$un = $_POST['uname'];
$pw = $_POST['pword'];

if ($un == "" or $_POST['pword'] == "") {
    echo "please fill all fields";
    
} else {
    $sql = "SELECT passwords FROM loginData WHERE usernames = '$un'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            $storedpass = $row["passwords"];
        }
        $verified = password_verify($pw, $storedpass);

        if (($verified) == 1) {
            loggedin();

        } else {
            echo "incorrect password";
        }

    } else {
        echo "no user with that username";
    }
}

mysqli_close($conn);
?>