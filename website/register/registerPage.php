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

input[type=text], input[type=password] {
    width: 100%;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    position: relative;
    left: 0%;
    padding: 12px 20px;
    margin: 0px 0;
    display: inline-block;
    border: 1px solid rgb(0, 0, 0);
    background-color: #e8f0fe;
    border-radius: 4px;
    box-sizing: border-box;
}


#p {
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

#button {
    width: 100%;
    cursor: pointer;
    margin: 10px 0;
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