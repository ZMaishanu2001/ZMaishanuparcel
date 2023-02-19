<?php
      require_once("includes/connection.php");
        require_once("includes/connection.php");
            $x='';
           $y='';
           $z='';

            $x1='';
            $y1='';
        
       if(isset($_POST['sea'])){
           $x='';
           $y='';
           $z='';
           
           $result;
           $destination = $_POST['destination'];
             $weight = $_POST['weight'];
	     
	     if(empty($errors)){
	     $query = "SELECT *
                       FROM `calculator`
		       WHERE destination = '{$destination}'
		       AND weight = '{$weight}'
		       ";
             $query = mysqli_query($connection, $query);
	       $num_rows = mysqli_num_rows($query);
	     while($result = mysqli_fetch_array($query)){
		  if($num_rows > 0){
              $x=$result["result"];
              $y=$result["destination"];
              $z=$result["weight"];
          }
         }
         }
       } 


    if(isset($_POST['ser_ps'])){
        $x1='';
        $y1='';
           $dr = $_POST['ser_cd'];
	     
	     if(empty($errors)){
	     $query = "SELECT *
                       FROM `delivery`
		       WHERE shipe_code = '{$dr}'
		       ";
             $query = mysqli_query($connection, $query);
	       $num_rows = mysqli_num_rows($query);
	     while($result = mysqli_fetch_array($query)){
		  if($num_rows > 0){
              $x1=$result["shipe_code"];
              $y1=$result["status"];
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
                  <li class="active">
                    <a class="page-scroll" href="admin.php">Home</a>
                  </li>
                  <li class="dropdown">
                            <a href="#" class="dropdown-toggle page-scroll" data-toggle="dropdown"> Parcel <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="background-color:darkslateblue;color:white;width:100%;">
                                <li><a href="admin_add_parcel.php"> Adding new </a></li>
                                <li><a href="process_parcel.php"> Processing</a></li>
                                <li><a href="delivered_parcel.php"> Delivered </a></li>
                            </ul>
                    </li>
                    <li>
                    <a class="page-scroll" href="admin_list.php">Admin</a>
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
    
    
    
    
    
    
    
    
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area" style="height:100%">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">WE MOVE LIKE LIGHT </h2>
                </div>
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">OUR DELIVERY IS SUPER FAST</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow" data-wow-duration="2s" data-wow-delay=".2s">
                    
<div class="container">
        <!-- section-heading end -->
        <div class="row">
          <div class="skill-text">
            
            
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-6 col-md-6 text-center">
              <div class="single-skill">
                  <h3 class="progress-h4">TRACKING PARCEL</h3>
                  <div class="alert alert-success" id="well1" >
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p><?php
                                if($x1!=''){
                                    echo '<strong>Parcel with this <a href="individual_parcel.php?s_id='.$x1.'">'.$x1.'</a> code was '.$y1.'</strong>';
                                }
                          ?>
                        </p>
                </div>
                  <div class="single-blog-page">
              <!-- search option start -->
              <form method="post">
                <div class="search-option" style="background-color: whitesmoke;color:black">
                  <input type="text" placeholder="Search by Parcel ID" name="ser_cd" autocomplete="off">
                  <button class="button" type="submit" name="ser_ps">
                    <i class="fa fa-search" ></i>
                </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
              </div>
            </div>
            <!-- single-skill end -->
          <!-- single-skill start -->
            <div class="col-xs-12 col-sm-6 col-md-6 text-center">
             
                
            
	      <h3 class="progress-h4">SHIPPING PRICE</h3>
                <div class="alert alert-success" id="well1" >
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p><?php
                                if($x!=''){
                                    echo '<strong>'.$y.' Shipping, Weighted : '.$z;
                                    echo '<br/>Will cost N'.$x.'</strong>';
                                }
                          ?>
                        </p>
                </div>
               <form method="post" enctype="multipart/form-data"> 
                   <div class="row">
                    <div class="col-md-6">
                        <div class="search-option" style="background-color: whitesmoke">
                            <select name="destination" id="form-text" class="destination form-control">
                              <option>Select Type</option>
                              <option>Intra - Region</option>
                              <option>Intra - State</option>
                              <option>Intra - City</option>
                            </select>
                  
                        </div>
                    </div>
                       <div class="col-md-6">
                            <div class="search-option" style="background-color: whitesmoke">
                               <select name="weight" class="weight form-control">
                                      <option>Select Weight</option>
                                      <option>0.5kg</option>
                                      <option>1.0kg</option>
                                      <option>1.5kg</option>
                                      <option>2.0kg</option>
                                      <option>2.5kg</option>
                                      <option>3.0kg</option>
                                      <option>3.5kg</option>
                                      <option>4.0kg</option>
                                      <option>4.5kg</option>
                                      <option>5.0kg</option>
                                 </select>
                            </div>
                       </div>
                </div>
                   <div class="form-group">
               <input type="submit" id="btn-c" value="CALCULATE PRICE" name="sea" class="searching form-control btn btn-primary" />
                   </div>
	      </form>
                
            </div>
            <!-- single-skill end -->
          </div>
        </div>
      </div>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

 

  <!-- Start Footer bottom Area -->
  <footer>
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
