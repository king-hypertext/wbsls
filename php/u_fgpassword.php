<?php 
session_start();

include("connection.php");
include("functions.php");

$error_msg = '';

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // something was posted
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if(!empty($name) && !empty($contact) && !empty($email) && !empty($new_password) && ($new_password == $confirm_password))
    {
        // check if user details are correct
        $query = "select * from users where name='$name' and contact='$contact' and email='$email' limit 1";
        $result = mysqli_query($con, $query);

        if($result && mysqli_num_rows($result) > 0)
        {
            // update the password
            $query = "update users set password='$new_password' where name='$name' and contact='$contact' and email='$email'";
            mysqli_query($con, $query);

            header("Location: mainpage.php");
            die;
        }
        else
        {
            $error_msg = "Password Cannot Be Changed. Incorrect details provided!";
        }
    }
    else
    {
        if ($new_password != $confirm_password) {
            $error_msg = "Password and Confirm Password do not match!";
        } else {
            $error_msg = "Please enter all the required information!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Forgot Password</title>
</head>
<style type="text/css">
    #text{
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid;
        width: 100%;
    }

    #button{
        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    #box{
        background-color: black;
        margin: auto;
        width: 300px;
        padding: 50px;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: black;
        color: #fff;
        padding: 0.5px;
    }

    header a {
        color: #fff;
        text-decoration: none;
        margin-right: 10px;
    }

    body{
        background-color: black;
        background-size: 158px 160px;
        height: 600px;
    }

    input {
        text-align: center;
    }

    #button {
        display: block;
        margin: 0 auto;
    }

    .container {
        display: flex;
        justify-content: center;
    }   

    #text::placeholder {
        text-align: left;
    }

    form {
        border: none;
    }
</style>
<body>
<header style="text-align:left; font-size:16px">
    <a href="mainpage.php">Home</a>
</header><br><br><br><br>
<div id="box">
    <form method="post">
        <div style="text-align: center;">
            <img src="../img/img/user.png" alt="User Icon" width="100" height="100" />
        </div>
        <div style="font-size: 20px; margin: 10px; color: red; text-align:center;">Forgot Password</div>
        <?php
            if(!empty($error_msg)){
                echo '<div style="color: red; text-align: center;">'.$error_msg.'</div><br>';
            }
        ?>
        <input id="text" type="text" name="name" placeholder="Enter your name"><br><br>
        <input id="text" type="number" name="contact" placeholder="Enter your contact"><br><br>
        <input id="text" type="text" name="email" placeholder="Enter your email"><br><br>
        <input id="text" type="password" name="new_password" placeholder="Enter new password"><br><br>
        <input id="text" type="password" name="confirm_password" placeholder="Confirm new password"><br><br>
        <input id="button" type="submit" value="Reset Password"><br><br>
    </form>
</div><br><br><br><br>
</body>
</html>