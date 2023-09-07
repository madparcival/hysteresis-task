<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<style>
    body{
        text-align: center;
    }
    .card{
        display: inline-block;
        line-height: 40px;
        border: 2px solid;
        padding: 10px 10px 10px 10px;
        background-color: rgb(255, 214, 51);
    }
    .card .mailid{
        position: relative;
        padding: 10px;
    }

    .card .mailid i{
        position: absolute;
        left: 12px;
        top: 22px;
    }
    .card .password{
        position: relative;
        padding: 10px;
    }
    .card .password i{
        position: absolute;
        left: 12px;
        top: 22px;
    }
    .card a{
        float: right;
    }
    .loginButton .btn{
        padding: 10px;
        background-color: yellow;
    }
</style>
<body>
    <form action="login.php" method="post">
    <div class="card">
        <div class="mailid">
            <i class="fa-solid fa-at"></i>
            <input style="padding-left:20px;" type="email" name="email" placeholder="Email" required>
        </div>
        <div class="password">
        <i class="fa-solid fa-lock"></i>
            <input style="padding-left:20px;" type="password" name="password" placeholder="Password" required>
        </div>
        <a href="#">Forgot password</a>
        <div class="loginButton">
            <button class="btn" type="submit">Login</button>
        </div>
    </div>
</form> 
</body>
<script src="https://kit.fontawesome.com/d6f56984f1.js" crossorigin="anonymous"></script>
</html>

<?php
    include('connection.php');

    if(isset($_POST['email']) && isset($_POST['password'])){
        $mail=$_POST['email'];
        $pass=$_POST['password'];
        
        $searchQuery="SELECT * FROM `customers` where Email='$mail';";
        $result=mysqli_query($conn,$searchQuery);
        

        if($result->num_rows != 0){
            $data=$result->fetch_assoc();
            if($data['Password']==$pass){
                header('Location:index.php');
            }
            else{
                Print('Wrong Password! Try Again');
            }
        }
        else{
            header('Location:signup.php');
        }

    }
    
?>