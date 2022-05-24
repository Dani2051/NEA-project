<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>

    <meta charset="utf-8">

<link rel="stylesheet" href="../websiteCSS.css"> 

<style>

button[type=submit] {
    width: 49.5%;
    border-radius: 2px;
    border-color: black;
}

#loginForm {
    width: 40vw;
}

.container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

</style>

</head>

<body>


<div class="container">
<h1>Login</h1>
    <div id="loginForm">
        <form action="signinProcess.php" method="POST">
            <input type="text" name="uname" placeholder="Enter Username" required><br>
            <input type="password" name="pword" placeholder="Enter Password" required><br>
            
            <div id="formButton">
                <button type="submit">Sign in</button>
                <button type="submit" formaction="registerProcess.php">Register</button>
            </div>
        </form>
    </div>
</div>

</body>


</html>