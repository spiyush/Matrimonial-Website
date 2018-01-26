
<html class="no-js">
<head>
  <!-- basic page needs-->
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>myprofile | Matrimonial Website</title>

  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
 
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




 <div class="clearfix">
  <a href="user_profile.php"> 
   <div class="col-md-6">
    <div class="panel panel-default" >
      <div class="panel-heading">
        <h3 class="panel-title"><i aria-hidden="true" class="glyphicon glyphicon-zoom-in"></i> &nbsp;My Profile  </h3>
      </div>
      <div class="panel-body">

        <div class="listing-header margin-30">
          <h2>BASIC INFO</h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-8">

            <form >
              <div class="form-group has-success">
                <input type="text" class="form-control" name="fname" placeholder="full name" required>
              </div>
              <div class="form-group has-success">
                <input type="text" class="form-control" name="address" placeholder=" Permanent Address" required>
              </div>

              <table>
                <tr>
                 <td>
                   <div class="form-group has-success">
                    <input type="text" class="form-control" name="country" placeholder="country" required>
                  </div>
                </div></td>

                <td style="padding-left:90px;">
                 <div class="form-group has-success">
                  <input type="text" class="form-control" name="state" placeholder="state" required>
                </div>
              </div>
            </td>
          </tr>

        </table>
        <table>
          <tr>
           <td>

            <div class="form-group has-success">
              <input type="text" class="form-control" name="city" placeholder="city" required>
            </div>
          </div></td>

          <td style="padding-left:90px;">
            <div class="form-group has-success">
              <input type="text" class="form-control" name="age" placeholder="age" required>
            </div>
          </div>
        </td>
      </tr>

    </table>
  </form>
</div>
<div class="form-group has-success" style="width:30%" >
  <input type="text" class="form-control" name="phone" placeholder="phone" required>
</div>
<div class="form-group has-success" style="width:30%">
  <input type="text" class="form-control" name="date" placeholder="date of birth" required>
</div>

</form>

</div>
</div>
</div>
</div>
</div> 
</div>
</a>
</div>

    <!-- End Body Content -->
    <!-- Start site footer -->
    <?php include 'footer.php';?>
    <!-- End site footer -->
 
<script src="js/bootstrap.js"></script> <!-- ui -->


</body>
</html>