<?php

include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicare</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="FirstPageAssets/img/favicon.png" rel="icon">
  <link href="FirstPageAssets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="FirstPageAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="FirstPageAssets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="FirstPageAssets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="FirstPageAssets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="FirstPageAssets/css/style.css" rel="stylesheet">


<style>


/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #777;
}

a {
  color: #43aea0;
}

a:hover {
  color: #00d3b8;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6, .font-primary {
  font-family: "Lato", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  display: none;
  width: 40px;
  height: 40px;
  border-radius: 3px;
  right: 15px;
  bottom: 15px;
  background: #70b9b0;
  color: #fff;
  transition: display 0.5s ease-in-out;
  z-index: 99999;
}

.back-to-top i {
  font-size: 24px;
  position: absolute;
  top: 8px;
  left: 8px;
}

.back-to-top:hover {
  color: #fff;
  background: #8bc6bf;
  transition: background 0.2s ease-in-out;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  padding: 20px 0;
  background: #2d6760;
}

#header.header-scrolled {
  background: #1d443f;
  height: 60px;
  padding: 10px 0;
}

#header .logo h1 {
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 1px;
}

#header .logo h1 a, #header .logo h1 a:hover {
  color: #fff;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}

@media (max-width: 768px) {
  #header .logo h1 {
    font-size: 28px;
    padding: 8px 0;
  }
}

#main {
  margin-top: 80px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  float: left;
}

.nav-menu a {
  display: block;
  position: relative;
  color: #d2ece9;
  padding: 10px 15px;
  transition: 0.3s;
  font-size: 14px;
  font-family: "Open Sans", sans-serif;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #fff;
  text-decoration: none;
}

.nav-menu .drop-down ul {
  display: block;
  position: absolute;
  left: 0;
  top: calc(100% - 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
}

.nav-menu .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.nav-menu .drop-down li {
  min-width: 180px;
  position: relative;
}

.nav-menu .drop-down ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: #25564f;
}

.nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
  color: #70b9b0;
}

.nav-menu .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 5px;
}

.nav-menu .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.nav-menu .drop-down .drop-down > a {
  padding-right: 35px;
}

.nav-menu .drop-down .drop-down > a:after {
  content: "\eaa0";
  font-family: IcoFont;
  position: absolute;
  right: 15px;
}

@media (max-width: 1366px) {
  .nav-menu .drop-down .drop-down ul {
    left: -90%;
  }
  .nav-menu .drop-down .drop-down:hover > ul {
    left: -100%;
  }
  .nav-menu .drop-down .drop-down > a:after {
    content: "\ea9d";
  }
}

/* Mobile Navigation */
.mobile-nav {
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: 9999;
  overflow-y: auto;
  left: -260px;
  width: 260px;
  padding-top: 18px;
  background: #01292a;
  transition: 0.4s;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #d2ece9;
  padding: 10px 20px;
  font-weight: 500;
}

.mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
  color: #9cd5ce;
  text-decoration: none;
}

.mobile-nav .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  content: "\eaa0";
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  color: #fff;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(1, 41, 42, 0.9);
  overflow: hidden;
  display: none;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  left: 0;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 75vh;
  background: url("../img/hero-background.jpg") top center;
  background-size: cover;
  position: relative;
  margin-bottom: -80px;
}

#hero:before {
  content: "";
  background: rgba(112, 185, 176, 0.85);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .hero-container {
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  padding-top: 80px;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 300;
  line-height: 56px;
  color: #fff;
}

#hero h2 {
  color: #eee;
  margin-bottom: 50px;
  font-size: 20px;
  font-weight: 300;
}

#hero .btn-get-started {
  font-family: "Lato", sans-serif;
  font-weight: 400;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px 10px 28px;
  border-radius: 50px;
  transition: 0.5s;
  border: 1px solid #fff;
  color: #fff;
}

#hero .btn-get-started:hover {
  background: #fff;
  color: #70b9b0;
  border: 1px solid #70b9b0;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
}

.section-bg {
  background-color: #f2f9f8;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: 300;
  margin-bottom: 20px;
  padding-bottom: 0;
  color: #555;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 20px 0;
  background-color: #f6fafa;
  min-height: 40px;
  margin-top: 80px;
}

.breadcrumbs h2 {
  font-size: 24px;
  font-weight: 300;
  margin: 0;
}

@media (max-width: 992px) {
  .breadcrumbs h2 {
    margin: 0 0 10px 0;
  }
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 14px;
}

.breadcrumbs ol li + li {
  padding-left: 10px;
}

.breadcrumbs ol li + li::before {
  display: inline-block;
  padding-right: 10px;
  color: #6c757d;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }
  .breadcrumbs ol {
    display: block;
  }
  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# About Us
--------------------------------------------------------------*/
.about h3 {
  font-weight: 400;
  font-size: 26px;
}

.about ul {
  list-style: none;
  padding: 0;
}

.about ul li {
  padding-bottom: 10px;
}

.about ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #70b9b0;
}

.about p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
  margin-bottom: 20px;
  text-align: center;
}

.services .icon {
  display: flex;
  justify-content: center;
  margin-bottom: 15px;
}

.services .icon i {
  color: #70b9b0;
  font-size: 42px;
}

.services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
  text-transform: uppercase;
}

.services .title a {
  color: #343a40;
  transition: 0.3s;
}

.services .icon-box:hover .title a {
  color: #70b9b0;
}

.services .description {
  line-height: 24px;
  font-size: 14px;
}

/*--------------------------------------------------------------
# Call To Action
--------------------------------------------------------------*/
.call-to-action {
  background: linear-gradient(rgba(1, 41, 42, 0.5), rgba(7, 56, 57, 0.5)), url("../img/call-to-action-bg.jpg") fixed center center;
  background-size: cover;
  padding: 60px 0;
}

.call-to-action h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

.call-to-action p {
  color: #fff;
}

.call-to-action .cta-btn {
  font-family: "Lato", sans-serif;
  font-weight: 400;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px;
  border-radius: 25px;
  transition: 0.5s;
  margin-top: 10px;
  border: 2px solid #fff;
  color: #fff;
}

.call-to-action .cta-btn:hover {
  background: #70b9b0;
  border: 2px solid #70b9b0;
}



/*--------------------------------------------------------------
# Our Team
--------------------------------------------------------------*/
.team .member {
  text-align: center;
  margin-bottom: 20px;
  box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
  padding: 30px 20px;
  background: #fff;
}

.team .member img {
  max-width: 60%;
  border-radius: 50%;
  margin: 0 0 30px 0;
}

.team .member h4 {
  font-weight: 700;
  margin-bottom: 2px;
  font-size: 18px;
}

.team .member span {
  font-style: italic;
  display: block;
  font-size: 13px;
}

.team .member p {
  padding-top: 10px;
  font-size: 14px;
  font-style: italic;
  color: #aaaaaa;
}

.team .member .social {
  margin-top: 15px;
}

.team .member .social a {
  color: #92cac3;
  transition: 0.3s;
}

.team .member .social a:hover {
  color: #3c8b81;
}

.team .member .social i {
  font-size: 18px;
  margin: 0 2px;
}

/*--------------------------------------------------------------
# Contact Us
--------------------------------------------------------------*/
.contact .contact-about h3 {
  font-size: 36px;
  margin: 0 0 10px 0;
  padding: 0;
  line-height: 1;
  font-weight: 500;
  letter-spacing: 1px;
  color: #70b9b0;
}

.contact .contact-about p {
  font-size: 14px;
  line-height: 24px;
  font-family: "Lato", sans-serif;
  color: #888;
}

.contact .social-links {
  padding-bottom: 20px;
}

.contact .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #fff;
  color: #70b9b0;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  border: 1px solid #70b9b0;
}

.contact .social-links a:hover {
  background: #70b9b0;
  color: #fff;
}

.contact .info {
  color: #777;
}

.contact .info i {
  font-size: 32px;
  color: #70b9b0;
  float: left;
  line-height: 1;
}

.contact .info p {
  padding: 0 0 10px 42px;
  line-height: 28px;
  font-size: 14px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;php?id=<br%20/><b>Notice</b>:%20%20Undefined%20index:%20id%20in%20<b>/opt/lampp/htdocs/FirstPage/display.php</b>%20on%20line%20<b>45</b><br%20/>
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form button[type="submit"] {
  background: #70b9b0;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #92cac3;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="http://localhost/index.php"><span>Medicare</span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="http://localhost/index.php">Home</a></li>
          <li><a href="#Recommendation">Get Recommendation</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to Medicare</h1>
      <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </h2>
      <a href="#Recommendation" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">
    <!-- ======= Recommendation Section ======= -->
    <section id ="Recommendation" class="Recommendation">
      <div class="container">


        <div class="text-center">
          <h3>Get Recommendation</h3>
          <div>
            <form action="" class="main-form needs-validation" novalidate>
              <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" id="firstname" class="form-control is-invalid">
                        <div class="invalid-feedback">Looks good!</div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" id="lastname" class="form-control">
                        <small class="form-text text-muted">
                            This should be your last name.
                        </small>
                    </div>
                </div>
            </div>
            <div class="form-group">
              <label for="gender">Disease</label>
              <select name="gender" id="gender" class="form-control">
                  <option value="Dengue">Dengue</option>
                  <option value="Pneumonia">Pneumonia</option>
                  <option value="Fractures">Fractures</option>
              </select>
          </div>
          <div class="form-group">
            <label for="agegroup">Age Group</label>
            <select name="agegroup" id="agegroup" class="form-control">
                <option value="childhood">Childhood</option>
                <option value="teenagers">Teenagers</option>
                <option value="adults">Adult</option>
                <option value="old-age">Old Age</option>
            </select>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <select name="city" id="city" class="form-control">
                <option value="childhood">Nashik</option>
                <option value="teenagers">Akola</option>
                <option value="adults">Ahmednagar</option>
            </select>
        </div>
            <div class="form-check">
              <input type="checkbox" id="accept-terms" class="form-check-input">
              <label for="accept-terms" class="form-check-label">Accept Terms &amp; Conditions</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <?php
          	if(isset($_POST['submit'])){
          	$fname = $_POST['firstname'];
          	$lname = $_POST['lastname'];
        	if($fname!='' && $lname!='')
        	{
        		//  To redirect form on a particular page
				header("Location:http://FirstPage/display.php");
        	}
			else
			{
				?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span><?php 
			}  
			}        
         ?>
      </form>
  
          </div>
        </div>

      </div>
    </section> <!-- End of Recommendation System -->
    

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Our Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="FirstPageAssets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="contact-about">
              <h3>Medicare</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info">
              <div>
                <i class="icofont-google-map"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="icofont-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="icofont-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="FirstPageAssets/vendor/jquery/jquery.min.js"></script>
  <script src="FirstPageAssets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="FirstPageAssets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="FirstPageAssets/vendor/php-email-form/validate.js"></script>
  <script src="FirstPageAssets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="FirstPageAssets/vendor/venobox/venobox.min.js"></script>
  <script src="FirstPageAssets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="FirstPageAssets/js/main.js"></script>

</body>

</html>
