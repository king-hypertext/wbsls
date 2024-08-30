<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Log Form</title>
<style>
.container {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  grid-gap: 20px;
}

/* Use media queries to apply different styles for different screen sizes */
@media screen and (max-width: 767px) {
  /* Change the layout for smaller screens */
  .container {
    grid-template-columns: repeat(4, 1fr);
  }
  
  /* Hide certain elements that are not necessary on mobile devices */
  .sidebar {
    display: none;
  }
}

form {display:flex;
      flex-direction:column;
      align-otems:center;
      border:0px solid black;
      padding:20px;
      margin:0 auto;
      width:60%;
      background-color:black;
           
}
body{
background-color:black;
background-size:158px 150px;
}
header {
   display: flex;
   justify-content: space-between;
   align-items: center;
   background-color: black;
   color: #fff;
   padding: 1px;
  }
  header a {
   color: #fff;
   text-decoration: none;
   margin-right: 10px;
  }
form{border: 5px solid #888;}
label{color:white;}
</style>
</head>
<body>
<header style="text-align:left; font-size:16px">
  <a href="../php/index.php">Home</a>
   </header><br>
	 
         
	<form action= 'logrecs.php' method="POST">
		<h2 style="text-align:center;color:white;">Log Form</h2>
                <label for="date">Date:</label></td>
		<input type="date" id="date" name="date"><br><br>
		<label for="circuit">Name of Circuit:</label>
		<input type="text" id="circuit" name="circuit"><br><br>
		<label for="school">Name of School:</label>
		<input type="text" id="school" name="school"><br><br>
		<label for="purpose">Purpose:</label>
		<input type="text" id="purpose" name="purpose"><br><br>
		<label for="observation">Observation:</label>
		<textarea id="observation" name="observation"></textarea><br><br>
		<label for="action">Action:</label>
		<textarea id="action" name="action"></textarea><br><br>
		<label for="signed">Signed:</label>
		<input type="text" id="signed" name="signed"><br><br>
		<label for="position">Position:</label>
		<input type="text" id="position" name="position"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
