<html class="no-js">
<head>
  <!-- basic page needs-->
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Login | Matrimonial Website</title>

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

  <?php include 'config.php';?>

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
        <h4>Login to your account</h4>
      </div>
      <div class="modal-body">
        <form action="" method="POST" >
          <main role="main">



            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Remember Me
                </label>
              </div>
              <a href="dashboard.php"type="submit" class="btn btn-primary">Login</a>
            </form>

          </main>
        </form>


        <a href="register.php">Register new member</a>
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







