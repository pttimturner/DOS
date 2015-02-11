<?php
$str = strtolower($_POST['secureCheck']);
function spamcheck($field)
{
//filter_var() sanitizes the e-mail
//address using FILTER_SANITIZE_EMAIL
$field=filter_var($field, FILTER_SANITIZE_EMAIL);
//filter_var() validates the e-mail
//address using FILTER_VALIDATE_EMAIL
if(filter_var($field, FILTER_VALIDATE_EMAIL))
{
return TRUE;
}
else
{
return FALSE;
}
}
$mailcheck = spamcheck($_POST['email']);
if($mailcheck == TRUE){
if(sha1($str) == $_POST['checkSecure']){	
if(($_POST['name'] != "Name:" && $_POST['name'] != "") && ($_POST['number'] != "Number:" && $_POST['number'] != "") && ($_POST['email'] != "E-mail:" && $_POST['email'] != "") && ($_POST['comments'] != "Message:" && $_POST['comments'] != "")){
$message = "Name:&nbsp;&nbsp;&nbsp;&nbsp;" .$_POST['name'] ."<br>" . "E-Mail:&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['email']."<br>Message:<br>".$_POST['comments'];	 
mail("tturner@digitalsc.com", "Contact Us From SpartanCopy.com", $message, "From: " . $_POST['email'] . "\nMIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1");
$var = 1;
}
else
{
$var = 3;
}
}
else{
$var = 2;
}
}
else
{
$var = 4;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Title here -->
    <title>Digital Office Solutions</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="Digital Office Solutions" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <!-- Parallax slider -->
    <link rel="stylesheet" href="css/slider.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Font awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Colors - Orange, Purple, Light Blue (lblue), Red, Green and Blue -->
    <link href="css/lblue.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
</head>

<body>

    <!-- Header Starts -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="logo">
                        <h1><a href="#"><img src="img/logo/logo.png"> Digital <span class="color"> Office Solutions</span></a></h1>
                        <div class="hmeta">The Document Management Company</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation bar starts -->

    <div class="navbar bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
                        <!--
                         <ul class="dropdown-menu">
                           <li><a href="index.html">Revolution Slider</a></li>
                           <li><a href="index1.html">Flex Slider</a></li>
                           <li><a href="index2.html">Parallax Slider</a></li>
                         </ul>
-->
                    </li>
                    <!-- Refer Bootstrap navbar doc -->
                    <li class="dropdown">
                        <a href="aboutus-1.html" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="landing-page.html">Meet out Team</a>
                            </li>
                            <li><a href="careers.html">Careers</a>
                            </li>
                            <!--
                       <li><a href="service-3.html">Service</a></li>
                       <li><a href="support.html">Support</a></li>
                       <li><a href="sitemap.html">Sitemap</a></li>
                       <li><a href="timeline.html">Timeline</a></li>
                       <li><a href="404.html">404</a></li>
                       <li><a href="faq.html">FAQ</a></li>
                       <li><a href="register1.html">Register</a></li>
                       <li><a href="login1.html">Login</a></li>
-->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="coming-soon.html">Canon</a>
                            </li>
                            <li><a href="features-4.html">Lexmark</a>
                            </li>
                            <li><a href="statement.html">Lanier</a>
                            </li>
                            <li><a href="tasks.html">Mureatec</a>
                            </li>
                            <li><a href="resume.html">MBM</a>
                            </li>
                            <li><a href="projects.html">Drivers</a>
                            </li>
                            <!--
                       <li><a href="make-post.html">Make Post</a></li>
                       <li><a href="events.html">Events</a></li>
                       <li><a href="error-log.html">Error Log</a></li>
-->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="aboutus.html">Solutions</a>
                            </li>
                            <li><a href="aboutus.html">Meter Readings</a>
                            </li>
                            <li><a href="aboutus.html">Supply Orders</a>
                            </li>
                        </ul>
                    </li>
                    <!--
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                       <li><a href="blog-2.html">Blog #1</a></li>
                       <li><a href="blog-4.html">Blog #1</a></li>
                       <li><a href="blog-single.html">Blog Single</a></li>
                     </ul>
                   </li>
-->

                    <!--                  <li><a href="portfolio.html">Portfolio</a></li>-->
                    <li><a href="//contactus.html">Contact</a>
                    </li>
                    <li><a href="//contactus.html">Help Desk</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Navigation bar ends -->

    <div class="content">
        <div class="container">

            <h2>Contact Us</h2>
            <p class="big grey">Feel free to contact us.</p>
            <hr />
            <p class="left">Spartan Business Systems, Inc. is an authorized business solutions dealer and has over 80 years of combined experience in providing organizations “best practices” and the right solutions for all businesses. Since 1992, Spartan Business Systems, Inc. has provided leading solutions to over 3,300 companies in the Upstate of South Carolina. Our commitment to our customers is that we are dedicated to providing the highest quality equipment while exceeding customer expectations by providing the best possible service. Spartan Business Systems, Inc is currently authorized to provide products and services in the Upstate, SC and more specifically Greenville, Spartanburg, Union, Gaffney and Asheville, NC areas.</p>
            <br />

            <div class="contact">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Google maps -->
                        <div class="gmap">
                            <!-- Google Maps. Replace the below iframe with your Google Maps embed code -->
                            <iframe height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.560256687399!2d-81.91871500000003!3d34.99267800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8857745259d966f7%3A0xadd07f34b5b66aa4!2s184+Bryant+Rd%2C+Spartanburg%2C+SC+29303!5e0!3m2!1sen!2sus!4v1420660379896" width="600" height="450" frameborder="0" style="border:0"></iframe>
                            </iframe>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="cwell">
                            <!-- Contact form -->
                            <h5>Contact Form</h5>
                            <div class="form">
                                <!-- Contact form (not working)-->
                                <form class="form-horizontal">
                                    <!-- Name -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="name">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="email">Email</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <!-- Website -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="website">Number</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="website">
                                        </div>
                                    </div>
                                    <!-- Comment -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="comment">Comment</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="comment" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <!-- Buttons -->
                                    <div class="form-group">
                                        <!-- Buttons -->
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="cwell">
                            <!-- Address section -->
                            <h5>Address:</h5>
                            <div class="address">
                                <address>
                                              <!-- Company name -->
                                              <h6>Digital Office Solutions</h6>
                                              <!-- Address -->
                                              184 Bryant rd. <br>
                                              Spartanburg, SC 29303<br>
                                               <hr />
                                               <h5>Phone:</h5>
                                              <!-- Phone number -->
                                              <abbr title="Phone">Phone: </abbr>  (864) 593-1300 - Toll-Free<br />
                                              <abbr title="Phone">Office: </abbr>  (864) 585-1013 - Office<br />
                                              <abbr title="Phone">Fax: </abbr>  (864) 585-2818 - Fax
                                               <hr />

                                              
                                           </address>

                                <address>
                                              <!-- Name -->
                                              <h6>Email:</h6>
                                              <!-- Email -->
                                               <a href="mailto:#">info@spartancopy.com</a><br />
                                               <a href="mailto:#">service@spartancopy.com</a><br />
                                               <a href="mailto:#">sales@spartancopy.com</a><br />
                                               <a href="mailto:#">meterreads@spartancopy.com</a>
                                           </address>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        
        <div class="border"></div>

            <!-- Product & links starts -->
            <div class="prod">
                <div class="row">
                    <div class="col-md-4">
                        <div class="home-links">
                            <div class="col-l">
                                <h5>Downloads</h5>
                                <ul>
                                    <li><a href="#">Canon</a>
                                    </li>
                                    <li><a href="#">Lexmark</a>
                                    </li>
                                    <li><a href="#">Lanier</a>
                                    </li>
                                    <li><a href="#">Muratech </a>
                                    </li>
                                    <li><a href="#">MBM  </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-r">
                                <h5>Support</h5>
                                <ul>
                                    <li><a href="#">Help Desk</a>
                                    </li>
                                    <li><a href="#">Contact</a>
                                    </li>
                                    <li><a href="#">Drivers</a>
                                    </li>
                                    <!--
                              <li><a href="#">Google Search</a></li>
                              <li><a href="#">Linux Phone</a></li>
-->
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="home-product">
                            <div class="home-prod-img" id="s1">
                                <img src="img/photos/s1.jpg" class="img-responsive" alt="" />
                                <img src="img/photos/s2.jpg" class="img-responsive" alt="" />
                                <img src="img/photos/s3.jpg" class="img-responsive" alt="" />
                            </div>
                            <h3>News</h3>
                            <p>Aliquam ut feugiat ante. Curabitur justo aliquam. Maecenas turpis urna, eleifend et venenatis eget, ultricies quis urna. Aliquam ut feugiat ante. Curabitur justo aliquam. Aliquam ut feugiat ante. Curabitur justo aliquam.</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product & links ends -->

        </div>
    </div>
    <!--/ Content End -->

    <!-- Social -->

    <div class="social-links">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="big"><span>Follow Us On</span>  <a href="#"><i class="fa fa-facebook"></i>Facebook</a>  <a href="#"><i class="fa fa-twitter"></i>Twitter</a>  <a href="#"><i class="fa fa-google-plus"></i>Google Plus</a>  <a href="#"><i class="fa fa-linkedin"></i>LinkedIn</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copy">
                        <h6>Vision <span class="color"> 2 Design</span></h6>
                        <p>Copyright &copy; <a href="#">Vision2design.org</a> - <a href="index.html">Home</a> | <a href="aboutus.html">About Us</a> | <a href="faq.html">FAQ</a> | <a href="contactus.html">Contact Us</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </footer>

    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Isotope for gallery -->
    <script src="js/jquery.isotope.js"></script>
    <!-- prettyPhoto for images -->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- Parallax slider -->
    <script src="js/jquery.cslider.js"></script>
    <script src="js/modernizr.custom.28468.js"></script>
    <!-- Filter for support page -->
    <script src="js/filter.js"></script>
    <!-- Cycle slider -->
    <script src="js/cycle.js"></script>
    <!-- Flex slider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Easing -->
    <script src="js/easing.js"></script>
    <!-- Respond JS for IE8 -->
    <script src="js/respond.min.js"></script>
    <!-- HTML5 Support for IE -->
    <script src="js/html5shiv.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
</body>

</html>