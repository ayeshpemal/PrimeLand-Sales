<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/loginPage.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <h1>PrimeLand</h1>
            <form action="loginPage.php" method="post">
                <div class="form-group">
                    <label>Username</label><br>
                    <input id="uName" type="text" name="username" placeholder="🧑 Enter Username"><br>
                </div>
                <div class="form-group">
                    <label>Password</label><br>
                    <input id="pwd" type="password" name="password" placeholder="🔒 Enter Password">
                </div>
                <div class="form-group button-group">
                    <input class="btn" type="submit" value="Login" name="submit">
                </div>
                <div class="form-group button-group">
                    <input class="btn" type="reset" value="Clear" onclick="clearBtn()">
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if( empty($username)){
            echo "<script>document.getElementById('uName').value='Please Enter Username'</script>";
        }
        if( empty($password)){
            echo "<script>alert('Please Enter Password');</script>";
        }
        if( !empty($username) && !empty($password)){
            if($username!="admin" || $password!="admin123"){
                echo "<script>alert('Invalid Username or Password');</script>";
            }else{
                echo "<script>window.location.replace('homePage.php');</script>";
            }           
        }
    }
?>