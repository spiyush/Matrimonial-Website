

<html class="no-js">
<head>
<!-- basic page needs-->
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>search route</title>
 
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
 <link rel="stylesheet" href="css/jquery.timepicker.css">
<link href="vendor/prettyphoto/css/prettyphoto.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="narrow-jumbotron.css" rel="stylesheet">
<!-- color style -->
<link class="alt" href="colors/color1.css" rel="stylesheet" type="text/css">

<link href="style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
<!-- scripts -->
<script src="js/modernizr.js"></script>
<script src="js/jquery.js"></script>

  
  <script src="js/jquery.timepicker.js"></script>
  <link class="alt" href="css/jquery-ui.css" rel="stylesheet" type="text/css">
  <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  $(function() {
    $( "#datepicker2" ).datepicker();
  });
</script>

</head>
<body class="home" onload="initialize()">
    <!-- start site header -->
       

  <div class="jumbotron">
  <h1 class="display-3">Matrimonial Website</h1>
  <p class="lead">Be happy together....</p>
  </div>

 
 
  
    
  <div class="navbar">
            
               
                <div class="panel-heading">
            
                    <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                  <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                        <li><a href="searchlo.php">Home</a> </li>
                        <li><a href="aboutus.php">About Us</a> </li>
                        <li><a href="successstory.php">Success Story</a> </li>
                        <li><a href="register.php">Registration</a> </li>
                        
                       <li><a href="search.php">Search</a> </li>

                       <li><a href="help.php">Help</a></li>
                        

        </nav>
            </div>
        </div>
    </div>

    <!-- Start Body Content -->
    <div class="main" role="main">
      <div id="content" class="content full dashboard-pages">
          <div class="container">
              <div class="dashboard-wrapper">
                    <div class="row">
                         <div class="col-md-3 col-sm4">
                            <!-- SIDEBAR -->
                            <div class="users-sidebar tbssticky">
                              <input type="submit" name="signup" class="btn btn-primary btn-lg btn-block" value="User Profile" style="width:100%"><br>
                                <ul class="list-group">
                    <li class="list-group-item"> <a href="userdashboard.php"><i class="fa fa-user"></i>User Dashboard</a></li>
                                   
                                    <li class="list-group-item"> <a href="search.php"><i class="fa fa-user"></i>Search</a></li>
                                    <li class="list-group-item"><a href="chatbox.php"><i class="fa fa-user"></i>Message Box</a></li>
                                    <li class="list-group-item active"> <a href="index.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                       
                          <div class="col-md-5 col-sm-12 col-xs-12" style="padding-left:25px;">
                            <div class="panel">    
 
                             <h3>My Profile</h3>
                           <div class="card" style="width: 20rem;">
                              <img class="card-img-top" src="..." alt="">
                      <div class="card-body">
                              <p class="card-text">
                                  </div>
                                        </div>
                             <form role="form" action="userprofile.php" method="post" enctype="multipart/form-data">
        
                                  <input id="Imgup" type="file" name="myfile" onchange="PreviewImage();" />
                                   </div>
                               <div class="form-group has-feedback">
                                       <form>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                             <input type="text" class="form-control"  placeholder="Enter name">
    
                                         </div>
                                   <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
                                      </div>
                                      <div class="form-group">
                                       <label for="exampleInputPassword1">Password</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                       </div>
                                        <!-- /.col -->
                                     <div class="col-xs-6">
                                         <button type="submit" name="savepass" class="btn btn-primary btn-block btn-flat">Change Password</button>
                                           </div>
                                    <!-- /.col -->

        </form>

  </div> 

  </div>

  </div>

    </div>

    </div>  
   

    
                               

</div>
             
    <!-- Start site footer -->
     <footer class="site-footer">
        <div class="site-footer-top">
          
        <div class="site-footer-bottom">
          <div class="container">
                <div class="row">
                  <div class="col-md-6 col-sm-6 copyrights-left">
                      <p>Copryright 2017 Matrimonial Website</p>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- End site footer -->
  </div>
 </div>
 







<script src="js/bootstrap.js"></script> <!-- ui -->


</body>
</html>