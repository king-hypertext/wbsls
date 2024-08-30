<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Print Record</title>
 <style>
   body {
     display: flex;
     justify-content: center;
     align-items: center;
     height: 100vh;
     margin: 0;
   }
   .content {
     border: 2px solid black;
     padding: 20px;
     text-align: left;
     position: relative; /* Ensure relative positioning for absolute child */
   }
   h2 {
     text-align: center;
   }
   .back-link {
     position: absolute;
     top: 10px;
     left: 10px;
   }
 </style>
</head>
<body>
<div class="content">
  <a href="report.php" class="back-link">Back to Records</a>
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

  // Check if ID is provided in the URL
  if (isset($_GET['id']) && !empty($_GET['id'])) {
      $id = $_GET['id'];
      
      // Retrieve the specific record from the database
      $sql = "SELECT * FROM logrecs WHERE id = $id";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          
          // Display the details of the selected record for printing
          echo "<h2>Record Details</h2>";
          echo "<p>ID: " . $row["id"] . "</p>";
          echo "<p>Date: " . $row["date"] . "</p>";
          echo "<p>Circuit: " . $row["circuit"] . "</p>";
          echo "<p>School: " . $row["school"] . "</p>";
          echo "<p>Purpose: " . $row["purpose"] . "</p>";
          echo "<p>Observation: " . $row["observation"] . "</p>";
          echo "<p>Action: " . $row["action"] . "</p>";
          echo "<p>Signed: " . $row["signed"] . "</p>";
          echo "<p>Position: " . $row["position"] . "</p>";

          // Add a print button to print the specific record
          echo "<button onclick='window.print()'>Print</button>";
      } else {
          echo "Record not found.";
      }
  } else {
      echo "Invalid request.";
  }

  // Close database connection
  $conn->close();
  ?>
</div>
</body>
</html>