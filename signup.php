<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
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
    .card .box{
        position: relative;
        padding: 10px;
    }

    .card .box i{
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
    <form action="signup.php" method="post">
    <div class="card">
        <div class="box" id="Name">
            <i class="fa-solid fa-at"></i>
            <input style="padding-left:20px;" type="text" name="Name" placeholder="Name">
        </div>
        <div class="box" id="Mobile">
            <i class="fa-solid fa-at"></i>
            <input style="padding-left:20px;" type="text" name="Mobile" placeholder="Mobile">
        </div>
        <div class="box" id="mailid">
            <i class="fa-solid fa-at"></i>
            <input style="padding-left:20px;" type="email" name="email" placeholder="Email" required>
        </div>
        <div class="box" id="password">
        <i class="fa-solid fa-lock"></i>
            <input style="padding-left:20px;" type="password" name="password" placeholder="Password" required>
        </div>
        <div class="loginButton">
            <button class="btn" type="submit">Signup</button>
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
        $mob=$_POST['Mobile'];
        $name=$_POST['Name'];
        $searchQuery="SELECT * FROM `customers` where Email='$mail';";

        $result=mysqli_query($conn,$searchQuery);
        if($result->num_rows == 0){
        $insertQuery="INSERT INTO `customers` (Name,Mobile,Email,Password) VALUES ('$name','$mob','$mail','$pass');";

        if(mysqli_query($conn,$insertQuery)){
            header('Location:index.php');
        }
        else{
            echo 'Not inserted';
        }}
        else{
            echo 'Already Present';
        }


    }
?>