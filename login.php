<?php
       require_once("includes/connection.php");
       
       if(!empty($_POST)){
       if( $_POST['type'] == 'in'){
	
	 $required_fields = array('user', 'password');
         foreach($required_fields as $fieldname){
             if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]))){
                 $errors[] = $fieldname;  
             } 
         }
	 
	 // Clean up the form data before putting it in the database
         $username = trim($_POST['user']);
         $password = trim($_POST['password']);
	 
	 if(empty($errors)){
	    
	  // Check database to see if username and hashed password exist there.
            $query = "SELECT * FROM `members` WHERE username = '{$username}' AND password = '{$password}' LIMIT 1 ";
            $result_set = mysqli_query($connection, $query);
            //confirm_query($result_set);
	    
	    if(mysqli_num_rows($result_set) == 1){
	        // username / password is authenticated
                // and only 1 match
                session_regenerate_id();
                $found_user = mysqli_fetch_array($result_set);
                $_SESSION['x_id'] = $found_user['id'];
                $_SESSION['x_username'] = $found_user['username'];
                $_SESSION['x_type'] = $found_user['type'];
                session_write_close();
            
                header("location:admin.php");
	    }else{
		// username / password combo was not found in the database
                $message = "Invalid login"; 
	    }
	  
	 }
	 
	 }if( $_POST['type'] == 'in'){
	
	 $required_fields = array('user', 'password');
         foreach($required_fields as $fieldname){
         if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]))){
         $errors[] = $fieldname;  } 
         }
	 
	 // Clean up the form data before putting it in the database
         $username = trim($_POST['user']);
         $password = trim($_POST['password']);
	 
	 if(empty($errors)){
	    
	    // Check database to see if username and hashed password exist there.
            $query = "SELECT id, username FROM `members` WHERE username = '{$username}' AND password = '{$password}' LIMIT 1 ";
            $result_set = mysqli_query($connection, $query);
            //confirm_query($result_set);  
	    
	    if(mysqli_num_rows($result_set) == 1){
	        // username / password is authenticated
                // and only 1 match
                $found_user = mysqli_fetch_array($result_set);
                $_SESSION['id'] = $found_user['id'];
                $_SESSION['username'] = $found_user['username'];
                redirect_to("admin.php");
	    }else{
		// username / password combo was not found in the database
                $message = "Invalid login"; 
	    }
	     
            }
       
       }
       
       }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PARCEL SYSTEM</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Online Parcel Tracking System
    Author: ssabo84@gmail.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
    
    
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1><span>PARCEL SYSTEM</span></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end --><br/><br/>

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Login</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="img/slider/4.jpg" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
       
          <div class="col-md-6 col-sm-6 col-xs-12">
	     <form method="post" >
	     <?php if(!empty($message)){echo "<font size=\"message\" color=\"red\">" . $message . "</p></font>";} ?>
             <div class="form-group">
                 <h3>Username</h3>
                 <input type="text" class="form-control" name="user" value="" id="form-text" placeholder="Enter username" required />
             </div>
             <div class="form-group">
                 <h3>Password</h3>
                <input autocomplete="off" type="password" name="password" value="" class="form-control" id="form-text" placeholder="Enter password" required/>
             </div>
             <div class="form-group">
                <input name="type" type="hidden" value="in" />
                 <input type="submit" name="lo" value="Login" class="form-control btn btn-primary" autocomplete="off"/>
             </div>
	    
	     </form>
	    
          </div>
          
          
          
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->
 <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4>Intra -  City</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4>Intra - State</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4>Intra - Region</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
    <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>PARCEL SYSTEM</span></h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Social Media</h4>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Parcel System</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="#">Z Maishanu</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <!-- Uncomment below if you want to use dynamic Google Maps -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>
    
</html>
