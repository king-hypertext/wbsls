<?php 
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
        //save to database
        $admin_id = random_num(20);
        $query = "insert into admin (id,name,contact,email,username,password) values ('$id','$name','$contact','$email','$username','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    }
    else
    {
        echo "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Signup</title>
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
    <a href="mainpage.php"><<<--Dashboard</a>
</header><br><br><br><br>
<div id="box">
    <form method="post">
        <div style="text-align: center;">
            <img src="../img/img/admin.png" alt="User Icon" width="100" height="100" />
        </div>
        <div style="font-size: 20px; margin: 10px; color: red; text-align:center;">Signup</div>
        <input id="text" type="text" name="name" placeholder="Enter a name"><br><br>
        <input id="text" type="number" name="contact" placeholder="Enter a contact"><br><br>
        <input id="text" type="text" name="email" placeholder="Enter Email"><br><br>
        <input id="text" type="text" name="username" placeholder="Enter a Username"><br><br>
        <input id="text" type="password" name="password" placeholder="Enter a Password"><br><br>
        <input id="button" type="submit" value="Signup"><br><br>
    </form>
</div><br><br><br><br>
</body>
</html>