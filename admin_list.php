<?php
      require_once("includes/connection.php"); 

     if(isset($_POST['create'])){
	     // Clean up the form data before putting it in the database
           
	      $username = $_POST['username'];
          $password = $_POST['password'];
	       $id='';
    
         
         $query=("INSERT INTO `members`(`id`, `username`, `password`)
                                    
                                    VALUES (
                                            '{$id}', '{$username}', '{$password}'
                                            )");
         
             $result = mysqli_query($connection, $query);
	     // test to see if the creation occured
              if($result){
                // Success!
               $message = "Parcel Added";
                  header('location:admin_list.php');
              }else{
	       //Failed
                 $message = "Parcel Failed. <br />";
                  header('location:admin_list.php');
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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="admin.php">
                  <h1><span>PARCEL SYSTEM</span></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="admin.php">Home</a>
                  </li>
                  <li class="dropdown active">
                            <a href="#" class="dropdown-toggle page-scroll" data-toggle="dropdown"> Parcel <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="background-color:darkslateblue;color:white;width:100%">
                                <li><a href="admin_add_parcel.php"> Adding new </a></li>
                                <li><a href="process_parcel.php"> Processing</a></li>
                                <li><a href="delivered_parcel.php"> Delivered </a></li>
                            </ul>
                        </li>
                  <li>
                    <a class="page-scroll" href="admin_list.php">Admins</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="login.php">Logout</a>
                  </li>
                
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
    
 
 
  <!-- Start About area --><br/><br/>
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text">
            <h3>Admins</h3>
          </div>
        </div>
      
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="section-headline text">
            <h4>Admin list(s)</h4>
          </div>
        <form method="post" enctype="multipart/form-data"> 
            <table class="table">
                <thead>
                    <th>S/N</th>
                    <th>Name</th> 
                    
                </thead>
                <tbody>
                    <?php
                        $query =("SELECT * FROM members ORDER by id DESC");
                        $result_set = mysqli_query($connection, $query);
                        for($i=1; $result = mysqli_fetch_array($result_set); $i++){
                                   
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $result['username']; ?></td>
                    </tr>
                    <?php
                            
                                }
                    ?>
                    
                </tbody>
            
            </table>
        </form>
            </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="section-headline text">
            <h4>Adding Admin</h4>
          </div>
        <form method="post" enctype="multipart/form-data"> 
            <div class="form-group">
                <h5>Username</h5>
                <input type="text" autocomplete="off" name="username" class="form-control" placeholder="Enter username" required/>
            </div>
            <div class="form-group">
                <h5>Password</h5>
                <input type="text" autocomplete="off" name="password" class="form-control" placeholder="Enter password" required />
            </div>
            <div class="form-group">
                <input type="submit" value="Create account" name="create" class="form-control" placeholder="Enter password"/>
            </div>
        </form>
            </div>
    </div>
  </div>
  <!-- End About area -->
  <!-- Start Footer bottom Area -->
  <footer style="margin-top:250px">
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Parcel System</span></h2>
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
