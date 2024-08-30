<?php

?>
<!DOCTYPE html>
<html>
  <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us</title>
    <style>
      /* Style the modal */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }
      
      /* Style the modal content */
      .modal-content {
        background-color: #fefefe;
        margin: 5% auto; /* 5% from the top and centered */
        padding: 20px;
        border: 5px solid #888;
        width: 60%; /* Could be more or less, depending on screen size */
      }
      
      /* Style the close button */
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
body{
background-color:black;
background-size:158px 150px;
}
.paragraph-container
{position:relative;
qidth:300px;
height:150;margin:200px;
}
.text-container{
position:absolute;
top:0;
left:0;
width:100;
height:100;
overflow:hidden;
}
#myParagraph{
margin-right:20px;
padding-right:10px;
box-size:border-size;
}
.scrollbar{
position:absolute;
top:0;
right:0;
width:5px;
heght:100%;
background-color:#ccc;
border-radius:5px;
}
.paragraph-container::-webkit-scrollbar{
width:0;}
.paragraph-container:hover::-webkit-scrollbar{
width:5px;}
.paragraph-container::-webkit-scrollbar-thumb{
background-color:#aaa;
border-radius:5px;}
    </style>
  </head>
  <body>
        
    <!-- The modal -->
<div id="myModal" class="modal">
<a style="font-size:16px;"href="index.php">Home</a>
   <!-- Modal content -->
   <div class="modal-content">
          <h2 style="color:red; text-align:center;">Contact Us</h2>
        Contact Information:
<br><br>Location Map:
<br><br>Social Media Links:


</div>
<div class="Scrollbar"></div></div>
        
            
 <script>
      // Get the modal
      var modal = document.getElementById("myModal");
      
      // Get the close button
      var closeBtn = document.getElementsByClassName("close")[0];
      
      // When the user clicks the button, open the modal 
      modal.style.display = "block";
      
      // When the user clicks on <span> (x), close the modal
      closeBtn.onclick = function() {
        modal.style.display = "none";
      }
     
</script>   
</body>
</html>

