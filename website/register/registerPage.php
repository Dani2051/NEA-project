<!DOCTYPE html>
<html>



<head>

<link rel="stylesheet" href="../websiteCSS.css"> 

<style>
 
body {
    font-family: Arial, Helvetica, sans-serif;
}

.form {
    display: flex;
    align-items: flex-end;
    justify-content: center;
    box-sizing: border-box;
}

</style>

</head>

<body>
   
<div id="p">
<p>
    Already have an account? <a href="..\login\loginPage.php">Sign in</a>
</p>
</div>

<div class="form">
    <form action="registerProcess.php" method="POST">
        <input type="text" name="uname" placeholder="Enter Username" required><br>
        <input type="password" name="pword" placeholder="Enter Password" required><br>
        <input id="button" type="submit" value="Register">
    </form>
</div>

</body>


</html>