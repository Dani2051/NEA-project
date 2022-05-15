<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="loginCSS.css">

<h1>Login</h1>

<style>
a {
    text-decoration: none;
    color: rgb(68, 0, 255);
    font-weight: 900;
}
</style>


<p>
    Don’t have an account? Create one <a href="..\register\registerPage.php">here.</a>
</p>

<form action="loginProcess.php" method="POST">
    <label for="uname">Enter username: </label><br>
    <input type="text" id="uname" name="uname" ><br>
    <label for="pword">Enter password: </label><br>
    <input type="text" id="pword" name="pword" ><br><br>
    <input type="submit" value="Login"><br>
</form>

</head>

<body>
    
</body>


</html>