<?php

?>
<!DOCTYPE html>
<html>
  <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About</title>
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
<a style="font-size:16px;"href="mainpage.php"><<<--Dashboard</a>
   <!-- Modal content -->
   <div class="modal-content">
          <h2 style="color:red; text-align:center;">About</h2>
                      Mission and Purpose: Explain the purpose and goals of the web system. Describe what problem it aims to solve or what service it provides.
<br><br>
History: Provide a brief history of the website or application, including when it was founded or launched.
<br><br>
Team or Organization: Introduce the team or organization behind the web system. Include information about key team members, their roles, and expertise.
<br><br>
Contact Information: Offer contact details, such as an email address or a contact form, for users who want to get in touch with questions or feedback.
<br><br>
FAQs: Address frequently asked questions about the web system, its features, or its policies.
<br><br>
Privacy Policy and Terms of Service: Link to the privacy policy and terms of service documents if applicable. Users may want to know how their data is handled and the rules they need to follow while using the web system.
<br><br>
Updates and News: Share updates, news, or blog posts related to the web system. This can help users stay informed about changes or improvements.
<br><br>
Testimonials or User Stories: Include testimonials from satisfied users or case studies that highlight how the web system has benefited users.
<br><br>
Technical Information: If relevant, provide technical details about the system, such as the technology stack used, server information, or API documentation.
<br><br>
Social Media Links: If the web system has social media profiles, include links to them so users can follow for updates.
<br><br>
Community and Support: Mention if there is a user community, forum, or support resources where users can seek help or connect with other users.
<br><br>
Acknowledgments or Credits: Give credit to any third-party tools, libraries, or resources used in the development of the web system.
<br><br>
Legal Information: Include any necessary legal information, such as copyright notices, trademarks, or licensing details.


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

