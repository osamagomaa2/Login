<?php
include("db.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">  
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST"> 
            <label>username: </label>
            <input type="text" id="user" name="user"></br></br>

            <label>password</label>
            <input type="password" id="pass" name="pass"></br></br>
            
            <label>Submit</label>
            <input type="submit" id="btn" value="Login" name="submit"/> 
        </form>

    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.for.pass.value;
            if(user.length=="" && pass.length==""){
                alert("Username and Password filed are empty!!!");
                return false
            }
            else{
                if(user.length==""){
                alert("Username  empty!!!");
                return false
                }

                if(pass.length==""){
                alert("Username  empty!!!");
                return false
                }
            }
        }
    </script>
</body>
</html>