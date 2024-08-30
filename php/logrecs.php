<?php
include_once 'log_connection.php';
#get form data
$date = $_POST['date'];
$circuit = $_POST['circuit'];
$school = $_POST['school'];
$purpose = $_POST['purpose'];
$observation = $_POST['observation'];
$action = $_POST['action'];
$signed = $_POST['signed'];
$position = $_POST['position'];

// prepare SQL statement
$sql = "INSERT INTO logrecs (date, circuit, school, purpose, observation, action, signed, position)
		VALUES ('$date', '$circuit', '$school', '$purpose', '$observation', '$action', '$signed', '$position')";

// execute SQL statement
if (mysqli_query($conn, $sql)) {
	echo "";
} 

else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//header("Location: logform.php?sturecords=success");

?>
<doctype html>
<head>
</head>
<body>
<a href="../php/index.php">Home</a> 
<a href="../php/logform.php">Submit Another Log</a>
<a href="../php/logout.php">Submit Another Log</a>
</body>
</html>