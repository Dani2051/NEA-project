<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" href="../websiteCSS.css">

    <script>

    function processForm() {

        un = document.getElementById("uname");
        pw = document.getElementById("pword");

        unValue = un.value;
        pwValue = pw.value;

        if (unValue.length < 3) {
            errorMessage = document.getElementById("message");
            errorMessage.innerHTML = "Username too short";

            inputField = document.getElementById("uname");
            inputField.style.borderColor = 'red'
        
        } else {
            return true;
        }
    }

    </script>

</head>

<body>
    <nav>
    <ul>
        <li><a href="..\register\registerPage.php">Register</a></li>
        <li><a href="..\login\loginPage.php">Login</a></li>
        <li><a href="#contact">Contact</a></li>
        <li style="float:right"><a class="active" href="#Play">Play</a></li>
    </ul>
    </nav>

    <h1>Login</h1>

    <p> Don’t have an account? Create one <a href="..\register\registerPage.php">here.</a> </p>

    <p id="message"></p>

    <form onsubmit="processForm()" id="loginForm" action="loginProcess.php" method="POST">
        <label for="uname">Enter username: </label><br>
        <input type="text" id="uname" name="uname" ><br>
        <label for="pword">Enter password: </label><br>
        <input type="text" id="pword" name="pword" ><br><br>
        <input type="submit" value="Login"><br>
    </form>


    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event){
            event.preventDefault()
        });
    </script>
    
</body>

</html>