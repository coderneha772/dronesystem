<?php
include("header3.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width", initial-scale="1.0">
<title> Contact Us  </title>
<link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" 
integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" 
crossorigin="anonymous">

    
<link rel="stylesheet" type="text/css" href="contactus.css">
</head>

     <section class="contact">
	       <div class="content">
		   <h2><b>Contact Us </b></h2>
		   <p><b>Looking for detailed assistance ? Feel free to schedule a meeting with our team.</b></p>
		   </div>
		   <div class="container"> 
               <div class="contactInfo">
			        <div class="box">
					     <div class="icon">
						 
						 <!--<span class="glyphicon glyphicon-map-marker"></span>-->
						 <img src="img/3.png" height="40" width="38">
						 
						 </div>
						 <div class="text">
						     <h3><b> Address </b></h3>
							 <p> techlive, 8 phase,<br> Mohali,Chandigarh,<br>160022 </p>
						 </div>
					</div>
					<div class="box">
					     <div class="icon">
						 <!--<span class="glyphicon glyphicon-earphone">-->
                          <img src="img/2.jpeg" height="42" width="38">

						 </div>
						 <div class="text">
						     <h3><b> Phone </b></h3>
							 <p> 9646458789 </p>
						 </div>
					</div>
					<div class="box">
					     <div class="icon">
						 <!--<span class="glyphicon glyphicon-envelope"></i>-->

                          <img src="img/email.png" height="35" width="30">						

						  </div>
						 <div class="text">
						     <h3><b> Email</b></h3>
							 <p>tarunbathnotra12@gmail.com</p>
						 </div>
					</div>
			   </div>
			   <div class="contactform">
			         <form action="contact2.php" method="post" class="row g-3">
					      <h2><b>Send Message</b></h2>
						  <div class="inputbox"> 
						      <input type="text" name="fname" required="required">
							  <span> Full Name </span>
						  </div>
						  <div class="inputbox"> 
						      <input type="text" name="email" required="required">
							  <span> Email </span>
						  </div>
						  <div class="inputbox"> 

						      <input type="text" name="mes" required="required">
							  <span> Type your Message... </span>
						  </div>
						  <div class="inputbox"> 
						      <input type="submit" name="" value="Send">
						  </div>
					 </form>
			   </div>
		   </div>
	 </section>
	 
	 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
	 <?php 
include("footer.php");
?>