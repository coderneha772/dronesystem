<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scalee=1">
      <title> Buy Now Detail  </title>
      <link rel="stylesheet" type="text/css" href="buy now.css">	  
</head>
<body>
<header>

         <div class="container"> 
		 <div class="left"> 
		    <h3> BILLING ADDRESS  </h3>
		     <form action="process.php" method="post"> 
			    Full name
				<input type="text" name="fullname" placeholder="Enter name" >
				
				Email
				<input type="text" name="email" placeholder="Enter email" >
				
				Address
				<input type="text" name="address" placeholder="Enter address" >
				
				City
				<input type="text" name="city" placeholder="Enter city" >
			      <div id="zip">
				        <label>
						    State
							<select name="state">
							     <option>Choose State..</option>
								 <option>Andhra Pradesh</option>
								 <option>Arunachal Pradesh</option>
								 <option>Assam</option>
								 <option>Bihar</option>
								 <option>Chhattisgarh</option>
								 <option>Goa</option>
								 <option>Gujarat</option>
								 <option>Haryana</option>
								 <option>Himachal Pradesh</option>
								 <option>Jharkhand</option>
								 <option>Karnataka</option>
								 <option>Kerala</option>
								 <option>Madhya Pradesh</option>
								 <option>Maharashtra</option>
								 <option>Manipur</option>
								 <option>Meghalaya</option>
								 <option>Mizoram</option>
								 <option>Nagaland</option>
								 <option>Odisha</option>
								 <option>Punjab</option>
								 <option>Rajasthan</option>
								 <option>Sikkim</option>
								 <option>Tamil Nadu</option>
								 <option>Telangana</option>
								 <option>Tripura</option>
								 <option>Uttar Pradesh</option>
								 <option>Uttarakhand</option>
								 <option>West Bengal</option>
							</select>
						</label>
						      <label>
							     Pin code
								 <input type="number" name="pincode" placeholder="Pin code" >
							  </label>
							  
							  
				  </div>
				  <input type="submit" name="save" value="submit">
			</form>

		 </div>
		 <div class="right">
		      <h3> PAYMENT </h3>
		 <form>  <pre>
Account Number :- 36925610737
				
				
IFSC Code :- SBIN0003930
				
				
Send Screen shot on what's app
<img src="img/whatsapp.webp" width="50"><p>9646458789</p>
				</pre>
				
		 </form>
		      
		 </div>
		 
		 </div>


</header>
</body>
</html>
	