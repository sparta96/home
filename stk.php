
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<style>
		 body{ font: 30px sans-serif;
			 text-align: center; 
			 background-image: url("backs.jpg");
		background-position:auto  auto;
		background-repeat: no-repeat center center fixed;
		-webkit-background-size: cover;
		-o-background-size: cover;
		font-family: "Karla", sans-serif;
		float: center;
				}
		 h1 {
		   font-family: "Karla", sans-serif;
		   float: left;
		   display: block;
		   text-left;
		   padding: 10px 10px;
		   text-decoration: none;
		   background-color:#BDC3C7;
		   overflow: hidden;
		   border-radius: 25px;
	   }
	   span {
		   float: center;
		   display: block;
		   text-align: center;
		   padding: 14px 10px;
		   text-decoration: none;
		   background-color:#FFD700;
		   overflow: hidden;
	   }
	.form {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
		width: 40%;
		margin: auto;
		height: auto;
		}
		
		#username:valid + .name-label::after{
			color: dodgerblue;
			content: "phone number";
			cursor: default;
			top: 21%;
			left: 10%;
			font-size: 14px;
		}
		#password:focus + .pass-label::after{
			top: 44%;
			left: 10%;
			color: #ddd;
			cursor: default;
			font-size: 14px;
		}
		
		#password:valid + .pass-label::after{
			color: dodgerblue;
			content: "Amount";
			cursor: default;
			top: 44%;
			left: 10%;
			font-size: 14px;
		}
		
		.info{
			max-width: 350px;
			border-radius: 5px;
			height: 50px;
			margin: 20px auto;
			background: #38a836;
			position: fixed;
			top:0px;
			left:200%;
			right: 0px;
			display:flex;
			justify-content: center;
			user-select: none;
			align-items: center;
			font-weight: bolder;
			color: #ececec;
			font-size: 18px;
		}
		.info a{
			position: absolute;
			right: 5px;
			top: 0px;
			transform: rotate(-45deg);
			font-size: 22px;
			cursor: pointer;
			color: #3333;
		}
		.info a:hover;{
			color:#fff;
		}
		 .floating{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
       font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

		</style>

<head>
	<title>SKOOLPP-NETWORK</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta content ="width=device-width, initial-scale=1" name ="viewpoint">
	<meta name="generator" content="Geany 1.37.1" />
</head>

<body>
	<div class ="form">
<marquee>	<h1>SKOOLPP-NETWORK</h1></marquee>
	<div class ="mesg">
	</div>
		    <span style ="color:skyblue; font-size:20px; font-weight:bold">SKOOLPP-NETWORK FAST, RELIABLE AND AFFORDABLE</span>
		    <br>
		   <div class="pricing-matrix-item col-md-4 ng-tns-c8-18 ng-star-inserted" style ="color: #030303;  padding: 14px 16px; text-decoration: none; background-color:#8B8970">
			   <div class="pricing-feature-group" style="height: 100%;">
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
							    </div>
							   </div>
							   </div>
							   	   <h4 class ="xs-title" style ="color: #599d3c;">
		PAY WITH</h4>
		<img src ="M-Pesa-01.jpg" style ="width: 200px">
		<br>
	<form action ="stk_initiate.php" method ="POST" id ="paymentForm">
		<?php
		if(isset($_GET['info'])){
			echo $_GET ['info'];
		}
		?>
	<input name ="phonenumber" title ="" pattern =".*[^ ].*" autocomplete ="off" required type ="phonenumber" id ="username">
	<br>
	<label for ="username" class ="name-label">PHONENUMBER</label>
	<br>
	<input name ="amount" title="" required type ="number" id="password">
	<br>
	<label for ="password" class ="pass-label">AMOUNT</label>
	<br>
	<button type ="submit" name ="pay" style ="color: #030303;  padding: 14px 50px; border-radius: 25px; background-color:#3498DB">MAKE PAYMENT</button>
	</form>
	</div>
</body>
<script>

</script>

</html>
