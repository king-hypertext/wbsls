<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <title>Log Records</title>
 <style>
 form {
   display: flex;
   flex-direction: column;
   align-items: center;
   border: 2px solid black;
   padding: 20px;
   margin: 0 auto;
   width: 40%;
   background-color: black;
 }
 footer {
   background-color: none;
   padding: 40px;
   text-align: center;
   color: black;
 }
 </style>
</head>
<body>
<header>
<a style="text-align:right;" href="mainpage.php" ><<<--Dashboard</a>
  <form method="GET">
  <label for="search">Search:</label>
  <input type="text" name="search" id="search">
  <button type="submit">Search</button>
 </form>
</header>
<h1 style="text-align:center;">LOG RECORDS</h1>

<?php
// Function to establish database connection
function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wbsls_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Establish database connection
$conn = connect();

// Check if search keyword is provided
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM logrecs WHERE school LIKE '%$search%' OR circuit LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM logrecs";
}

// Execute SQL query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display records table
    echo "<table border='1' style='margin:0 auto;'>";
    echo "<tr>
         <th>Id</th>
         <th>Date</th>
         <th>Circuit</th>
         <th>School</th>
         <th>Purpose</th>
         <th>Observation</th>
         <th>Action</th>
         <th>Signed</th>
         <th>Position</th>
         </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["date"] . "</td>
            <td>" . $row["circuit"] . "</td>
            <td>" . $row["school"] . "</td>
            <td>" . $row["purpose"] . "</td>
            <td>" . $row["observation"] . "</td>
            <td>" . $row["action"] . "</td>
            <td>" . $row["signed"] . "</td>
            <td>" . $row["position"] . "</td>
            <td><a href='print_record.php?id=" . $row["id"] . "' target='_blank'>Print</a></td>

          </tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Close database connection
$conn->close();
?>

<footer>
<br><br><br>
<p> &copy; 2024<br>Project By:<br>ITE G Group 3</p><br>
</footer>
</body>
</html>
