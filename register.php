<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM user WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO user (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<html class="no-js">
<head>
  <!-- basic page needs-->
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Register | Matrimonial Website</title>

  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <!-- mobile specific metas-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- css -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="vendor/prettyphoto/css/prettyphoto.css" rel="stylesheet" type="text/css">
  <link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
  <link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
  <link href="css/custom.css" rel="stylesheet" type="text/css">
  <!-- color style -->
  <link class="alt" href="colors/color1.css" rel="stylesheet" type="text/css">

  <link href="style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">


</head>

<body class="home">
  <!-- start site header -->
  <?php include 'header.php';?>

  

  <div class="jumbotron"  >
    <div class="dark-bg parallax parallax2" style="background-image:url(img/iages1.jpg);">
      <div class="overlay-transparent padding-tb75">
        <div class="container" >
          <!-- Recently Listed Vehicles -->

          <div class="text-align-center">
            <h1>Matrimonial Website</h1>
            <p class="lead">Be happy together....</p>
          </div>
        </div>
      </div>
    </div>



  </div>


  <!-- End of the header -->
  <!-- Start Body Content -->

  <div class="modal-dialog modal-sm" style="width:40%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Sign up </h4>
      </div>
      <div class="modal-body">
        <form action="" method="POST" >
          <main role="main">



              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password:<sup>*</sup></label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>

          </main>
        </form>

   
      </div>
    </div>
  </div>


  <?php include 'footer.php';?>

</div>
</div>





<script src="vendor/prettyphoto/js/prettyphoto.js"></script> <!-- prettyphoto plugin -->
<script src="js/ui-plugins.js"></script> <!-- ui plugins -->
<script src="js/helper-plugins.js"></script> <!-- helper plugins -->
<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- owl carousel -->
<script src="vendor/password-checker.js"></script> <!-- password checker -->
<script src="js/bootstrap.js"></script> <!-- ui -->
<script src="js/init.js"></script> <!-- all scripts -->
<script src="vendor/flexslider/js/jquery.flexslider.js"></script> <!-- flexslider -->
<script src="style-switcher/js/jquery_cookie.js"></script>
<script src="style-switcher/js/script.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
</body>
</html>







