<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password) && !is_numeric($username)) {

        //read from database
        $query = "select * from admin where username = '$username' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['username'] = $user_data['username'];
                    header("Location: mainpage.php");
                    die;
                }
            }
        }

        echo "wrong username or password!";
    } else {
        echo "wrong username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<style>
.rectangular-box {
    display: inline-block;
    color: white;
    text-align: center;
    background-color: black;
    padding: 10px 20px;
    border: 5px solid white;
    border-radius: 20px;
}
.container {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-gap: 20px;
}

@media screen and (max-width: 767px) {
    .container {
        grid-template-columns: repeat(4, 1fr);
    }
    .sidebar {
        display: none;
    }
}

body {
    font-size: 1em;
    background-color: black;
    background-size: 170px 190px;
    width: 100%;
    height: 30%;
    margin: auto;
    font-family: Arial, Helvetica, sans-serif;
}

img {
    max-width: 100%;
    height: auto;
}

header {
    background-color: none;
    padding: 10px;
    text-align: right;
    font-size: 12px;
    color: black;
}

footer {
    background-color: black;
    padding: 5px;
    text-align: center;
    color: white;
}

label {
    color: black;
}

.my-element {
    margin-top: 20px;
    margin-bottom: 20px;
}

.menu-container {
    position: fixed;
    top: 0;
    left: -250px;
    width: 250px;
    height: 100%;
    background-color: #333;
    padding-top: 20px;
    transition: left 0.3s;
}

.menu-container a {
    display: block;
    color: white;
    padding: 10px;
    text-align: left;
    text-decoration: none;
}

#menu-toggle {
    position: fixed;
    top: 20px;
    left: 20px;
    color: white;
    font-size: 24px;
    cursor: pointer;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 5px solid #888;
    width: 60%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>

<div id="menu-toggle">&#9776;</div>

<div class="menu-container">
    <a href="index.php">Home</a>
    <a href="#myModal">Admin</a>
    <a href="u_login.php">Login</a>
    <a href="u_contact.php">Contact</a>
    <a href="u_about.php">About</a>
</div>

<h1 style="text-align:center;color:white;">Welcome</h1>

<div style="background-color: black; text-align: center;">
    <img src="../img/coa.png" alt="The Ghana Coat of Arm" width="100" height="100"><br><br>
    <div class="rectangular-box">
        <h1>MOBILE REPORTING APP</h1>
    </div><br><br>
    <img src="../img/ges.png" alt="The Ghana Education Service" width="100" height="100">
</div>

<footer>
    <p>&copy; 2024<br>Project By:<br>ITE G Group 3</p>
</footer>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2 style="color:red; text-align:center;">Login</h2>
        <form method="POST" action="" style="text-align:center;">
            <input id="text" type="text" name="username" placeholder="Enter your Username"><br><br>
            <input id="text" type="password" name="password" placeholder="Enter your Password"><br><br>
            <input id="button" type="submit" value="Login"><br><br>
        </form>
    </div>
</div>

<script>
var modal = document.getElementById("myModal");

document.querySelector("a[href='#myModal']").addEventListener("click", function(e) {
    e.preventDefault();
    modal.style.display = "block";
});

function closeModal() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

const menuToggle = document.getElementById('menu-toggle');
const menuContainer = document.querySelector('.menu-container');

menuToggle.addEventListener('click', () => {
    if (menuContainer.style.left === '-250px') {
        menuContainer.style.left = '0';
    } else {
        menuContainer.style.left = '-250px';
    }
});
</script>
</body>
</html>