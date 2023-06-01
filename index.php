<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["phonenumber"]))){
        $username_err = "Please enter a phonenumber.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["phonenumber"]))){
        $username_err = "phonenumber can only contain numbers.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE phonenumber = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_phonenumber);
            
            // Set parameters
            $param_username = trim($_POST["phonenumber"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This phonenumber is already taken.";
                } else{
                    $username = trim($_POST["phonenumber"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($phonenumber_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (phonenumber, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_phonenumber = $phonenumber;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
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
    <meta content ="width=device-width, initial-scale=1" name ="viewpoint">
    <title>Sign Up</title>
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
		  
		           
    </style>
</head>
<body>
	
	 <div class="header-transparent">
		   <div class="xs-top-bar">
			   
			   <div class="container">
				   <div class="row"><div class="col-md-6">
					   </div>
								   <div class="col-md-6">
									   <ul class="top-menu">
	  <a class="btn btn-secondary prelaoder-btn" onclick =" location.href='packages.php'"
	  style="color:#3498DB;
	   border-radius: 25px;
	  padding: 14px 16px;
	margin-bottom: 0px">			
											   INTERNET PLANS
												     <i class="fa fa-wifi" aria-hidden="true"></i>
												   </a>
										</div>
			</div>
			</div>
	   </div>
	   <br>
    <div class="wrapper">
        <h2 style ="font-weight: 1000;">CREATE ACCOUNT</h2>
  <p style ="color: #b7950b;font-weight: 1000; white-space: nowrap;">Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label> <span class="ng-tns-c7-5" matprefix="">07-</span>Phone Number <span class="mat-placeholder-required mat-form-field-required-marker ng-tns-c9-6 ng-star-inserted" aria-hidden="true">*</span></label>
                <input type="phonenumber" name="phonenumber" class="form-control <?php echo (!empty($phonenumber_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phonenumber;?>">
               
                <span class="invalid-feedback"><?php echo $phonenumber_err; ?></span>
                
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                               <span class="invalid-feedback"><?php echo $password_err; ?></span>
              
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>   
    <script type="text/javascript"> //<![CDATA[
  var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
  document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]></script>
<script language="JavaScript" type="text/javascript">
  TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_sm_124x32.png", "POSDV", "none");
</script>
</body>
</html>
