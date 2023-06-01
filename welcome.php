<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content ="width=device-width, initial-scale=1" name ="viewpoint">
    <title>SKOOLPP-NETWORK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <style>
        body{ font: 40px sans-serif;
			 text-align: center; 
			 background-image: url("backs1.jpg");
		background-position: calc(100% - 150px);
		background-display: calc(50% - 50px);
		background-size:2300px 1500px;
		background-content: '';
		background-top: calc(50% - 50px);
		height: 1500px;
		font-family: "Karla", sans-serif;
		float: calc(50% - 50px);
		text-align:left;
		background-color: #f2f2f2;
		padding: 20px;
		margin: auto;
		height:calc(10% - 10px);
				}
    </style>
   </head>
<body>


   <div class ="container" style ="max-width:720px;">
   <div class ="no print">
   <section id ="logo-section" class ="text-center">
   <div class ="container" style ="max-width:720px;">
   <div class ="row">
   <div class ="col-md-12">
   <div class ="logo text-center">
	   <style>
	  h1 {
		   font-family: "Karla", sans-serif;
		   float: left;
		   display: block;
		   text-left;
		   padding: 10px 14px;
		   text-decoration: none;
		   background-color:#BDC3C7;
		   overflow: hidden;
		   border-radius: 25px;
	   }
	   span {
		   float: center;
		   display: block;
		   text-align: center;
		   padding: 14px 16px;
		   text-decoration: none;
		   background-color:#FFD700;
		   overflow: hidden;
	   }
	.float{
	position:fixed;
	width:80px;
	height:80px;
	bottom:60px;
	right:60px;
	background-color:#4a4a4a;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:40px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:20px;
}
	   </style>
 <marquee><h1>SKOOLPP-NETWORK</h1></marquee>
  <br>
   <span style ="color:skyblue; font-size:20px; font-weight:bold">SKOOLPP-NETWORK FAST, RELIABLE AND AFFORDABLE</span>
  <br>
   </div>
   </div>
   </div>
   </div>
   </section>
   <div class="row no-gutters"  style ="font-weight: 900;">
	   <!---->
	   <div class="row">
		   <!---->
<div class="pricing-matrix-item col-md-6 ng-tns-c8-18 ng-star-inserted" style ="color: #030303;  padding: 14px 50px; text-decoration: none; background-color:#8B8970">
			   <div class="pricing-feature-group" style="height: 150%;">
				   <h4 class="xs-title">8 HOURS CONNECTION</h4>
				   <div class="pricing-body">
					   <p class="ng-tns-c8-18">8 HOURS 3GB ACCESS</p>
					   <div class="pricing-price">
						   <h2 class="ng-tns-c8-18">
							   <sup class="ng-tns-c8-18">KES </sup>
							   <br>
							   50
							   <br class="ng-tns-c8-18"></h2>
							   </div>
							   <a class="btn btn-secondary prelaoder-btn" onclick =" location.href='stk.php'" style="color:#D8BFD8; margin-bottom: 20px">
								   SELECT
							   <i class="fa fa-wifi" aria-hidden="true"></i>

							   </a>
							   </div>
							   </div>
							   </div>
							   <div class="pricing-matrix-item col-md-6 ng-tns-c8-18 ng-star-inserted" style ="color: #030303;  padding: 14px 50px; text-decoration: none; background-color:#8B8970">
								   <div class="pricing-feature-group" style="height: 150%;">
								   <h4 class="xs-title"> 3 HOURS CONNECTION</h4>
								   <div class="pricing-body">
									   <p class="ng-tns-c8-18">3 HOURS FOR 1GB ACCESS</p>
									   <div class="pricing-price">
										   <h2 class="ng-tns-c8-18">
											   <sup class="ng-tns-c8-18">KES </sup>
											   <br>
											   20<br class="ng-tns-c8-18">
											   </h2>
											   </div>
											   <a class="btn btn-secondary prelaoder-btn" onclick =" location.href='stk1.php'" style="color:#D8BFD8; margin-bottom: 20px">
												   SELECT 
												   <i class="fa fa-wifi" aria-hidden="true"></i>

												   </a>
												   </div>
												   </div>
												   </div>
								<div class="pricing-matrix-item col-md-6 ng-tns-c8-18 ng-star-inserted" style ="color: #030303;  padding: 14px 50px; text-decoration: none; background-color:#8B8970">
									<div class="pricing-feature-group" style="height: 150%;">
										<h4 class="xs-title">3 HOURS CONNECTION</h4>
										
			<div class="pricing-body">
				<p class="ng-tns-c8-18">3 HOURS FOR 3GB ACCESS </p>
				<div class="pricing-price">
					<h2 class="ng-tns-c8-18">
						<sup class="ng-tns-c8-18">KES </sup>
						<br>
						30
						<br class="ng-tns-c8-18">
						</h2>
						</div>
						<a class="btn btn-secondary prelaoder-btn" onclick =" location.href='stk2.php'" style="color:#D8BFD8; margin-bottom: 20px"> SELECT
						<i class="fa fa-wifi" aria-hidden="true"></i>

							</a>
							</div>
							</div>
							</div>
							<br>
							<div class="pricing-matrix-item col-md-6 ng-tns-c8-18 ng-star-inserted" style ="color: #030303;  padding: 14px 50px; text-decoration: none; background-color:#8B8970">
								<div class="pricing-feature-group" style="height: 150%;">
									
									<h4 class="xs-title">00:00 TO 6:00 AM</h4>
									<div class="pricing-body">
										<p class="ng-tns-c8-18">12 HOURS 3GB ACCESS </p>
										<div class="pricing-price">
											<h2 class="ng-tns-c8-18">
											<sup class="ng-tns-c8-18">KES </sup>
											<br>
											20
											<br class="ng-tns-c8-18"> 
											</h2>
											</div>
											<a class="btn btn-secondary prelaoder-btn" onclick =" location.href='stk3.php'" style="color:#D8BFD8; margin-bottom: 20px">
												SELECT 
											<i class="fa fa-wifi" aria-hidden="true"></i>
</a>
 </div>
												</div>
												</div>
												<br>
									<div class="pricing-matrix-item col-md-6 ng-tns-c8-18 ng-star-inserted" style ="color: #030303;  padding: 14px 50px; text-decoration: none; background-color:#8B8970">
										<div class="pricing-feature-group" style="height: 150%;">
											<h4 class="xs-title">1 HOURLY CONNECTION</h4>
							<div class="pricing-body">
												<p class="ng-tns-c8-18">HOURLY UNLIMITED ACCESS</p>
							<div class="pricing-price">
													<h2 class="ng-tns-c8-18">
														<sup class="ng-tns-c8-18">KES </sup>
														<br>
														80
														<br class="ng-tns-c8-18">
														</h2>
														</div>
			<a class="btn btn-secondary prelaoder-btn" onclick =" location.href='stk4.php'" style="color:#D8BFD8; margin-bottom: 20px">
							SELECT
							<i class="fa fa-wifi" aria-hidden="true"></i>

							</a>
							</div>
							</div>
							</div>
							</div>
							</div>
							<br><br>
       <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <a href="https://api.whatsapp.com/send?phone=254717373802&text= Hi,Thanks for accessing my internet subscription, fast, reliable and affordable." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
     </p>
</body>

</html>
