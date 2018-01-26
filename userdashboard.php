

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
            
      <div class="header-right">
                    <div class="user-logout-panel">
        <a href="index.php" ><input type="submit" name="signup" class="btn btn-primary btn-lg btn-block" value="Logout"></a>
                     </div>
      </div>
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
                        
                            <!-- SIDEBAR -->
                           
                       <div class="col-md-5 col-sm-12 col-xs-12" style="padding-left:25px;">
                       <div class="panel">    
                 <h3>My Profile</h3>
              <form role="form" action="userprofile.php" method="post" enctype="multipart/form-data">
                                             

                            <div class="grid-content">
        <div class="image-upload">
                <label for="Imgup">
        <div>

                <img src="" class="img-square" id="pimage" name="pimage" title="Browse Profile Image" height="150px"  width="300px" />
              </div>
             </label>
         <input id="Imgup" type="file" name="myfile" onchange="PreviewImage();" />
         </div>
        
</div>
  </div> 
</div>
</div>
</div>
</div>
  

      <script type="text/javascript">
function PreviewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("Imgup").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("pimage").src = oFREvent.target.result;
            };
        };
</script>
















   
   

    <div class="main" role="main"  >
      <div id="content" class="content full">
          <div class="container" style="padding-height:0px;">

              <div class="listing-header margin-30">
                  <h2>BASIC INFO</h2>
                </div>
              <div class="row">
                  <div class="col-md-6 col-sm-8">
                    
              <form>
                         <div class="form-group" style="width:100%">
                         
                                        <input type="text" id="fname" name="Full Name"  class="form-control input-lg" placeholder="Full Name">
                                    </div>

                                    <div class="form-group">
                                        <textarea cols="8" rows="2"  name="Loacal Address" class="form-control input-lg" placeholder="Loacal Address"></textarea>
                                       
                                    </div>
                                     <div class="form-group">
                                        <textarea cols="8" rows="2"  name="PermanentAddress" class="form-control input-lg" placeholder="PermanentAddress"></textarea>
                                       
                                    </div>
 <table>

      <tr>
       <td>
           <div class="form-group" style="width:130%">
            
       
       
               <input type="text" class="form-control" name="Country"  placeholder="Country" >
         </div>
            </div></td>

      <td style="padding-left:90px;">
            <div class="form-group" style="width:130%">
            
        
               <input type="text" class="form-control" name="State"  placeholder="State">
         </div>
            </div>
       </td>
    </tr>

  </table>

   <table>

      <tr>
       <td>
           <div class="form-group" style="width:130%">
            
       
       
               <input type="text" class="form-control" name="City"  placeholder="City" >
         </div>
            </div></td>

      <td style="padding-left:90px;">
            <div class="form-group" style="width:130%">
            
        
               <input type="text" class="form-control" name="Age"  placeholder="Age">
         </div>
            </div>
       </td>
    </tr>

  </table>
  

                                   
                                  </form>
                    </div>
                 


                                <div class="col-md-6 col-sm-8">
                                    <form>
                          <div class="row">
                            <div class="input-group">
             <p><font size="4">Gender</font></p>
             <label class="checkbox-inline registeredv">
       <input type="radio" value="male" id="male" name="trip" checked><font size="4">    Male</label></font>
             <label class="checkbox-inline noregisteredv">

       <input type="radio" value="female" id="female" name="trip"><font size="4">    Female</label></font>
         </div><br><br>
                                
                                   <div class="header-main-block clearfix">
      <p><font size="4" color="black">Date Of Birth</font></p> 
     <div class="form-group has-success">
        <div class="col-md-6">
              
         <p> <input type="text" class="form-control" name="ddate" id="datepicker" required></p>
            </div>
     
    </div>

    </div>
    
                                     <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                                    </div>
                                    <div class="form-group" style="padding-left:20px;">
                                        <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email">
                                    </div>
                                   

                                </div>

                    </form>
                        <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Update!">
                    </div>
                </div>
          </div>
        </div>
  </div>

<div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">

              <div class="listing-header margin-20">
                  <h2>EDUCATION / ABOUT ME</h2>
                </div>
              <div class="row">
                  <div class="col-md-6 col-sm-8">
                    
              <form>
                <div class="form-group">
                                        <input type="email" id="Sname" name="School Name"  class="form-control input-lg" placeholder="School name">
                                    </div>
                               <div class="form-group">
                                        <input type="text" id="Cname" name="College Name"  class="form-control input-lg" placeholder="College Name">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" id="Gname" name="Graduate In"  class="form-control input-lg" placeholder="Graduate In">
                                    </div>
                                   <table>

      <tr>
       <td>
           <div class="form-group" style="width:145%">
           <input type="text" class="form-control" name="Job Name"  placeholder="Job Name" >
         </div>
            </div></td>

      <td style="padding-left:128px;">
            <div class="form-group" style="width:135%">
            
        
               <input type="text" class="form-control" name="Salary"  placeholder="Salary">
         </div>
            </div>
       </td>
       
                              
  
    </tr>

  </table>
   <div class="form-group col-md-4">
      <label for="inputState"><font size="4">Job Type</font></label>
      <select id="inputState" class="form-control">
        <option selected>...</option>
        <option>Goverment</option>
        <option>Private</option>
      </select>
    </div>
         

                                </div>
                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea cols="6" rows="8" id="comments" name="comments" class="form-control input-lg" placeholder="About Me"></textarea>
                                    </div>
                                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Update!">
                                </div>
                            </div>

                    </form>
                    </div>

                    </div>
                </div>
          </div>
        </div>
  </div>



  <div class="main" role="main" style="height:90%">
      <div id="content" class="content full">
          <div class="container">

              <div class="listing-header margin-20">
                  <h2>PERSONAL INFO</h2>
                </div>
              <div class="row">
                  <div class="col-md-6 col-sm-8">
                    
              <form><font size="4">Family Member</font>
<div class="row">
  <div class="col-lg-8">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" aria-label="Checkbox for following text input">
      </span>
      <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Name of Son">
    </div>
    <br>
     <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" aria-label="Checkbox for following text input">
      </span>
      <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Name of Daughter">
    </div>
    <br>
     <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" aria-label="Checkbox for following text input">
      </span>
      <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Name of Mother">
    </div>
    <br>
     <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" aria-label="Checkbox for following text input">
      </span>
      <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Name of Father">
    </div>

  </div>
 
</div>
        
        </div>            <div class="col-md-6 col-sm-8">
                        <form><font size="4">Closing Relationship</font>
                          <div class="row">
                                <div class="col-md-6 col-sm-5">
                                 
                                    <div class="form-group"  style="width:150%">
                                      <input type="text" class="form-control" name=""  >
                                    </div>
                                 

                                    <div class="form-group"  style="width:150%">
                                        <input type="text" class="form-control" name="">
                                    </div>
                                    <div class="form-group"  style="width:150%">
                                       <input type="text" class="form-control" name="" >
                                    </div>
                                    <div class="form-group"  style="width:150%">
                                       <input type="text" class="form-control" name="" >
                                    </div>

                                </div>
                                

                    </form>
                         
                    </div>
                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Update!">
                </div>
          </div>
        </div>
  </div>


    <div class="main" role="main" style="height:45%">
      <div id="content" class="content full">
          <div class="container">

              <div class="listing-header margin-40">
                  <h2>Marital Status/Physical Atrribute</h2>
                </div>
              <div class="row">
                  <div class="col-md-6 col-sm-8">
                    
              <form>
<div class="row">
  <div class="col-lg-8">
    <div class="input-group">
    
               <div>
                  
                  <label class="checkbox-inline registeredv">
       <input type="radio" value="male" id="male" name="trip" checked><font size="4">    Unmarried</label></font><br><br>
             <label class="checkbox-inline noregisteredv">

       <input type="radio" value="female" id="female" name="trip"><font size="4">    Widow/Widower</label></font><br><br>
       <label class="checkbox-inline registeredv">
      
       <input type="radio" value="male" id="male" name="trip" checked><font size="4">    Divorce</label></font><br><br>
             <label class="checkbox-inline noregisteredv">
 
      <input type="radio" value="female" id="female" name="trip"><font size="4">          Seperate</label></font>
         </div> </div>
    <br>
     

  </div>
 
</div>
        
        </div>            <div class="col-md-6 col-sm-8">
                                         <table>

      <tr>
       <td>
           <div class="form-group" style="width:140%">
           <input type="text" class="form-control" name="Height"  placeholder="Height" >
         </div>
            </div></td>

      <td style="padding-left:100px;">
            <div class="form-group" style="width:140%">
            
        
               <input type="text" class="form-control" name="Weight"  placeholder="Weight">
         </div>
            </div>
       </td>
       
                              
  
    </tr>

  </table>
                         <table>

      <tr>
       <td>
           <div class="form-group" style="width:140%">
           <input type="text" class="form-control" name="Eye color"  placeholder="Eye Color" >
         </div>
            </div></td>

      <td style="padding-left:100px;">
            <div class="form-group" style="width:140%">
            
        
               <input type="text" class="form-control" name="Skin Color"  placeholder="Skin Color">
         </div>
            </div>
       </td>
       
                              
  
    </tr>

  </table>
  <h3>Handicap:</h3>
                                 <label class="checkbox-inline registeredv">
                                 <input type="radio" value="male" id="male" name="trip" checked><font size="4">    Yes</label></font>
                                    <label class="checkbox-inline noregisteredv">
                               <input type="radio" value="male" id="male" name="trip" checked><font size="4">    no</label></font>
                                    </div></label></label>
                                
 <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Update!">
                 
                        
                    </div>
                </div>
          </div>
        </div>
  </div>

<div class="main" role="main" style="height:30%">
      <div id="content" class="content full">
          <div class="container">

              <div class="listing-header margin-20">
                  <h2>Religion/Social Religious Attributes</h2>
                </div>
              <div class="row">
                  <div class="col-md-6 col-sm-8">
                    
            
                                   <table>

      <tr>
       <td >
                     <div class="form-group col-md-4" style="width:140%">
      <label for="inputState"><font size="4">Caste</font></label>
      <select id="inputState" class="form-control">
        <option selected>...</option>
        <option>OBC</option>
        <option>OPEN</option>
         <option>ST</option>
        <option>SC</option>
         <option>OTHER</option>
        <option>NT</option>
         <option>SBC</option>
 </select>
</div></td>
<td style="padding-left:100px;">
               <div class="form-group col-md-4" style="width:140%">
      <label for="inputState"><font size="4">Sub-Caste</font></label>
      <select id="inputState" class="form-control">
        <option selected>...</option>
        <option>Teli</option>
        <option>Buddhishta</option>
         <option>Kunabi</option>
        <option>Muslim</option>
         <option>Gond</option>
        <option>Pradhan</option>
         <option>mahar</option>
      <option>sindhi</option>
        <option>christian</option>
         <option>panjabi</option>
 </select>
</div>
            </div>
       </td>
    </tr>
</table>
  
         

                                </div>
                                <br>
                                   <table>

      <tr>
       <td>
           <div class="form-group" style="width:140%">
           <input type="text" class="form-control" name="Horoscope"  placeholder="Horoscope" >
         </div>
            </div></td>

      <td style="padding-left:100px;">
            <div class="form-group" style="width:140%">
            
        
               <input type="text" class="form-control" name="Moonsign"  placeholder="Moonsign">
         </div>
            </div>
       </td>
       
                              
  
    </tr>

  </table>
                                       
                                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Update!">
                                </div>
                            </div>

                    </form>
                    </div>
                   
                      
                    </div>
                </div>
          </div>
        </div>
  </div>

  <div class="main" role="main"  >
      <div id="content" class="content full"  >
          <div class="container" >
         <div class="listing-header margin-20">
                <h2>Other Detail</h2>
                </div>
              <div class="row">
                  <div class="col-md-6 col-sm-8">
                    
              
                 <h3>Horos Match</h3>
                                 <label class="checkbox-inline registeredv">
                                 <input type="radio" value="male" id="male" name="trip" checked><font size="4">    Yes</label></font>
                                    <label class="checkbox-inline noregisteredv">
                               <input type="radio" value="male" id="male" name="trip" checked><font size="4">    no</label></font>
                                    </div></label></label>
                                   <table>

      <tr>
       <td>
           <div class="form-group" style="width:150%">
           <input type="text" class="form-control" name="Place Of Birth"  placeholder="Place Of Birth" >
         </div>
            </div></td>

      <td style="padding-left:100px;">
            <div class="form-group" style="width:135%">
            
        
               <input type="text" class="form-control" name="Time Of Birth"  placeholder="Time Of Birth ">
         </div>
            </div>
       </td>
       
                              
  
    </tr>

  </table>
 <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Update!">
           </div>
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