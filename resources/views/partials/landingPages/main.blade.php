<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Dentist</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="/assets/css/linearicons.css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/assets/css/nice-select.css">							
        <link rel="stylesheet" href="/assets/css/animate.min.css">
        <link rel="stylesheet" href="/assets/css/jquery-ui.css">			
        <link rel="stylesheet" href="/assets/css/owl.carousel.css">
        <link rel="stylesheet" href="/assets/css/main.css">
    </head>
    <body>	

        @include('partials.landingPages.navbar')
        {{-- <header id="header" id="home">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                          <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>			
                        </div>
                        <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                          <a class="btns" href="tel:+953 012 3654 896">+953 012 3654 896</a>
                            <a class="btns" href="mailto:support@colorlib.com">support@colorlib.com</a>		
                            <a class="icons" href="tel:+953 012 3654 896">
                                <span class="lnr lnr-phone-handset"></span>
                            </a>
                            <a class="icons" href="mailto:support@colorlib.com">
                                <span class="lnr lnr-envelope"></span>
                            </a>		
                        </div>
                    </div>			  					
                </div>
          </div>
          <div class="container main-menu">
              <div class="row align-items-center justify-content-between d-flex">
                <nav id="nav-menu-container">
                  <ul class="nav-menu">
                    <li class="menu-active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="opening-hour.html">Opening Hour </a></li>
                    <li class="menu-has-children"><a href="">Blog</a>
                      <ul>
                        <li><a href="blog-home.html">Blog Home</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li class="menu-has-children"><a href="">Level 2</a>
                          <ul>
                            <li><a href="#">Item One</a></li>
                            <li><a href="#">Item Two</a></li>
                          </ul>
                        </li>					              
                      </ul>
                    </li>	
                    <li><a href="pricing.html">Pricing</a></li>				          	          
                    <li><a href="elements.html">Elements</a></li>				          	          
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </nav><!-- #nav-menu-container -->
                <div class="menu-social-icons">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-behance"></i></a>
              </div>	    		
              </div>
          </div>
        </header> --}}
        <!-- #header -->

			@yield('content')

        <!-- start footer Area -->		
 
        @include('partials.landingPages.footer')

        <!-- End footer Area -->

        <script src="/assets/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="/assets/js/vendor/bootstrap.min.js"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
          <script src="/assets/js/easing.min.js"></script>			
        <script src="/assets/js/hoverIntent.js"></script>
        <script src="/assets/js/superfish.min.js"></script>	
        <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>	
         <script src="/assets/js/jquery-ui.js"></script>			
        <script src="/assets/js/owl.carousel.min.js"></script>						
        <script src="/assets/js/jquery.nice-select.min.js"></script>							
        <script src="/assets/js/mail-script.js"></script>	
        <script src="/assets/js/main.js"></script>	
    </body>
</html>