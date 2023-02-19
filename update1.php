<?php
      require_once("includes/connection.php"); 

     if(isset($_POST['update'])){

         $x=$_POST['n_status'];
         $y=$_POST['shipe_code'];
         $cal = date('d:m:y');
         
         $query=("UPDATE `delivery` SET `status`='$x',`date`='$cal' WHERE shipe_code='$y'");
         
             $result = mysqli_query($connection, $query);
	     // test to see if the creation occured
              if($result){
                // Success!
                  header('location:process_parcel.php');
              }else{
	       //Failed
                 $message = "Parcel Failed. <br />";
                  header('location:admin_add_parcel.php');
		 }   
       }

?>

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
          <div class="section-headline text-center">
            <h2>Updating Parcel Status</h2>
          </div>
        </div>
      </div>
        <form method="post" enctype="multipart/form-data"> 
      <div class="row">
        <!-- single-well start-->
          <div class="col-md-12 col-sm-12 col-xs-12">  
                   <div class="row">
                    
                       <?php
                        $s_id=$_GET['s_id'];
                        $query =("SELECT * FROM delivery WHERE shipe_code='$s_id'");
                        $result_set = mysqli_query($connection, $query);
                        if($result = mysqli_fetch_array($result_set)){
                    ?>
             
                   
                   <div class="col-md-2">
                    </div>
                       <div class="col-md-4">
                        <div class="form-group">
                            <h5>Parcel ID</h5>
                            <input type="text" name="shipe_code" class="form-control" value="<?php echo $result['shipe_code']; ?>" placeholder="Sender phone number" readonly />
                        </div>
                    </div>
                       <div class="col-md-4">
                        <div class="form-group">
                            <h5>Status</h5>
                            <select class="form-control" name="n_status" required>
                                <option><?php echo $result['status']; ?></option>
                                <option>Delivered</option>
                            </select>
                        </div>
                    </div>
                       <div class="col-md-2">
                            <div class="form-group"><br/><br/>
                            <input type="Submit" name="update" class="form-control btn btn-primary" value="Update" placeholder="Update" readonly />
                        </div>
                    </div>
                          <?php
                        }?>
                </div>       
        </div>
          
        <!-- End col-->
      </div>
        </form>
    </div>
  </div>
  <!-- End About area -->
  <!-- Start Footer bottom Area -->
  <footer style="margin-top:200px">
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
