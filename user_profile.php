<html class="no-js">
<head>
  <!-- basic page needs-->
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>user profile| Matrimonial Website</title>

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
  <div class="main" role="main">
    <div id="content" class="content full dashboard-pages">
      <div class="container">

        <div class="modal-dialog modal-sm" style="width:55%" >
          <div class="modal-content">
            <div class="modal-header" >

              <div class="container" >
                <header class="header clearfix">

                  <h3  class="text-muted">User Profile  </h3>
                </header>


                <div class="col-md-7 col-sm-12 col-xs-12" style="padding-left:40px;">


                  <div class="col-md-6">   



                    <div class="form-group has-success">
                      <input type="text" class="form-control"name="name" placeholder="name" required>
                    </div>

                    <div class="form-group has-success">
                      <input type="text" class="form-control"name="email" placeholder="email" required>
                    </div>
                    <div class="input-group">
                      <p><font size="4">Gender</font></p>
                         <input type="radio" value="male" id="male" name="gender" checked><font size="4">    Male</font> &nbsp;
                      <input type="radio" value="female" id="female" name="gender"><font size="4" >    Female</font>
                      </div>

                       <br>
                       <div class="form-group clearfix">

                        <a href="dashboard.php"type="submit" class="btn btn-primary">Update</a>

                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>





<?php include 'footer.php';?>
      <script src="js/bootstrap.js"></script> <!-- ui -->


    </body>
    </html>