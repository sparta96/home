<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$phonenumber = $password = "";
$phonenumber_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["phonenumber"]))){
        $phonenumber_err = "Please enter phonenumber.";
    } else{
        $phonenumber = trim($_POST["phonenumber"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($phonenumber_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, phonenumber, password FROM users WHERE phonenumber = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_phonenumber);
            
            // Set parameters
            $param_phonenumber = $phonenumber;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $phonenumber, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["phonenumber"] = $phonenumber;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid phonenumber or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid phonenumber or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      	 body{ font: 30px sans-serif;
				 background-image: url("backs.jpg");
			background-position:auto;
		-webkit-background-size: cover;
		-o-background-size: cover;
			 }
				.wrapper{ width: 640px; padding: 20px;
					 } 
      
		}
		p{
			border-radius: px;
			padding: 0px; 5px;
			 text-align:left;
			  display: inline-block;
        text-decoration: none;
		   overflow: hidden;
		}
		form {
		border-radius: 0px;
		 text-align:left;
		background-color: #f2f2f2;
		padding: 14px;
		width: 150%;
		margin: auto;
		height: auto;
		}
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
		
         h2 {
		   border-radius: px;
			padding: 0px; 5px;
			 text-align:left;
			  display: inline-block;
        text-decoration: none;
		   overflow: hidden;
		   white-space: nowrap;
	   }
	
	   .main-div{
  width: 50%;
  height: 40px;
}
input {
  width: 250px;
  padding: 15px 12px;
  font-size:22px;
}
.fa{
  color:blue;
  font-size:27px;
  margin-left:8px;
}
#validation-txt{
  color:red;
  font-size:18px;
  width: 300px;
}
#password-3{
  -webkit-text-security: disc;
    -moz-text-security:circle;
     text-security:circle;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

    </style>
</head>
<body>
    <div class="wrapper">
		<marquee><h1>SKOOLPP-NETWORK</h1></marquee>
        <h2 style ="font-weight: 900;">LOGIN</h2><br>
        <p style ="color: #b7950b;font-weight: 900; white-space: nowrap;">Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label> <span class="ng-tns-c7-5" matprefix="">07-</span>Phone Number <span class="mat-placeholder-required mat-form-field-required-marker ng-tns-c9-6 ng-star-inserted" aria-hidden="true">*</span></label>
                <input type="phonenumber" name="phonenumber" class="form-control <?php echo (!empty($phonenumber_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phonenumber;?>">
                <span class="invalid-feedback"><?php echo $phonenumber_err; ?></span>
                </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="index.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html> 
