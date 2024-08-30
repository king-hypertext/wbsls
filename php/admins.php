<?php
session_start();

include("connection.php");

// Check if delete action is triggered
if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    // Perform delete operation
    $delete_query = "DELETE FROM admin WHERE id = $id";
    $delete_result = mysqli_query($con, $delete_query);
    if($delete_result) {
        // Redirect to same page after successful deletion
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error deleting user.";
    }
}

// Fetch users data
$query = "SELECT * FROM admin";
$result = mysqli_query($con, $query);

// Check if query execution was successful
if(!$result) {
    die("Query failed: " . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        table, th, td {
            border: 1px solid black;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: lightgray;
        }

        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="header">
    <a href="mainpage.php"><<<--Dashboard</a>
    <h2>Admin List</h2>
    <div></div> <!-- You can adjust the placement of this div as per your design -->
</div>
<div style="margin: 20px;">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Username</th>
            <th>Action</th> <!-- New column for delete action -->
        </tr>
        <?php
        // Check if there are rows returned
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['contact'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td><a href=\"".$_SERVER['PHP_SELF']."?action=delete&id=".$row['id']."\" onclick=\"return confirm('Are you sure you want to delete this user?');\">Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No users found</td></tr>";
        }
        ?>
    </table>
</div>
</body>
</html>