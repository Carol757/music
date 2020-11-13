<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Musica - Music Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>

        .mm{
        
        
            font-size: 34px;
          text-transform: uppercase;
          letter-spacing: 5px;
          font-weight: 600;
          color:white(146, 11, 11);
          border: 1px solid black;
        }
        
        .z {
          
          width: 1000px;
          height: 800px;
          border: 1px soli black;
          text-align: center;
        }
        
        
        
        .crosshair {cursor:pointer;
           
            
        }
        
        @keyframes myfirst {
          0%   {background: red; left: 0px; top: 0px;}
          10%  {background: red; left: 0px; top: 500px;}
          20%  {background: red; left: 0px; top: 200px;}
          30%  {background:red; left: 0px; top: 600px;}
          60%  {background: red; left: 0px; top: 300px;}
          70% {background: red; left: 0px; top: 400px;}
          80% {background: red; left: 0px; top: 100px;}
          90% {background: red; left: 0px; top: 800px;}
          100% {background: red; left: 0px; top: 700px;}
        }
        
        
        @keyframes mfirst {
          0%   {background: red; left: 800px; top: 0px;}
          20%  {background:red; left: 200px; top: 0px;}
          30%  {background: red; left: 500px; top: 0px;}
          40%  {background:red; left: 700px; top: 0px;}
          50%  {background: red; left: 300px; top: 0px;}
          60% {background: red; left: 300px; top: 0px;}
          70% {background: red; left: 100px; top: 0px;}
          80% {background: red; left: 900px; top: 0px;}
          90% {background: red; left: 250px; top: 0px;}
          100% {background: red; left: 450px; top: 0px;}
        }
        
        
        
        
        
        
        
        .world1{
          
        
        font-size: 14px;
        
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        color:red;
        -webkit-font-smoothing: antialiased!important;
        box-sizing: border-box;
        user-select: none;
        -webkit-user-drag:none;
        width: 340%;
        height: 4px;
        left: 100;
        border-left: 1px solid #db1212;
        border-right:1px solid #db1212;
        
        position: absolute;
        background:red;
        animation-name: myfirst;
        animation-duration: 50s;
          animation-iteration-count: infinite;
        top: 64.9711%;
        
        }
        
        
        .world2{
          
         
          -webkit-tap-highlight-color: rgba(0,0,0,0);
            width: 75%;
        font-size: 14px;
        line-height: 24px;
        font-family: Open Sans,Lucida Grande,Helvetica Neue,Helvetica,Arial,Sans-serif;
        color: #b6c0bf;
        -webkit-font-smoothing: antialiased!important;
        font-weight: 400;
        box-sizing: border-box;
        user-select: none;
        -webkit-user-drag: none;
        display: block;
        position: absolute;
        width: 3px;
        height: 63%;
        top: 0;
        background: #a2a2a2;
        border-left: 1px solid #db1212;
        border-right: 1px solid #e21212;
        left: 39.985%;
        animation-name: mfirst;
        animation-duration: 50s;
          animation-iteration-count: infinite;
        }
        
        
        
        
        
        </style>
</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="img/core-img/compact-disc.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="musicaNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="concert-tours.html">Gallery</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                                <!-- Social Button -->
                                <div class="top-social-info">
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Artist Bio</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-5">
                    <div class="about-thumbnail mb-100">
                        <br>
                        <br>
                        <br>
                       <h4>this going on around the world</h4>
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-7">
                    <div class="about--content mb-100">
                        <body background="img3.jpg" text="white" >
  
                            <h1>AROUND THE WORLD</h1>
                           <section>
                            <div onmousemove="showCoords(event)"  class="crosshair" class="stop-animation" class="z"><p id="demo"></p><img src="dot.jpg" width="100%"></img>
                            
                                <img class="world2"></img>
                            <img  class="world1"></img>
                            
                        <br>
                        <br>
                        <br>
                        <div id="changethewords" class="mm" align="left">
            
                            <span data-id="1" >MY FUTURE<br> BELLIE ELISH</span>
                            <span data-id="2" >BAILANDO  <br>SPAIN</span>
                            <span data-id="3" >DARU DESI<br>SUNIDI</span>
                            <span data-id="4" >THANK U NEXT <br>ARIANA GRANDE</span>
                            <span data-id="5" >NOT FOUND</span>
                           
                            </div>
                       
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                          
                          <script src="jquery.changethewords.js"></script>
                          <script type="text/javascript">
                            $(function() {
                              $("#changethewords").changeWords({
                                time: 4500,
                                animate:"m",
                                selector: "span",
                                repeat:true
                              });
                            });
                          </script>
                          
                          </div>
                        </section>
                          
                          
                          
                          
                          <script>
                          function showCoords(event) {
                            var cX = event.clientX;
                            var sX = event.screenX;
                            var cY = event.clientY;
                            var sY = event.screenY;
                             var x="india"
                            var coords1 = "client - X: " + cX + ", Y coords: " + cY;
                            var coords2 = "screen - X: " + sX + ", Y coords: " + sY;
                           
                            
                            
                            if (cX == 775) {
                              
                              x="Sri lanka AVICCI -SOS"
                            } 
                            else if (cX > 88 && cX <241 ) {
                            x = "USA BELLIE ELLISH - MY FUTURE";
                          } else {
                            x = "NOT FOUND";
                          }
                          
                            document.getElementById("demo").innerHTML = coords1 + "<br>" + coords2 + "<br>"+ "<h1>"+x;
                          }
                         
                      
                      </script>
                      
                        </div>
                    

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="timeline-btn text-center mt-100">
                        <a href="#" class="btn musica-btn">Load More</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Side Thumbs -->
        <div class="first-img">
            <img src="img/bg-img/man.png" alt="">
        </div>
        <div class="second-img">
            <img src="img/bg-img/microphone.png" alt="">
        </div>
    </div>
    <!-- ##### Career Timeline Area End ##### -->

    <!-- ##### Discography Area Start ##### -->
    <div class="discography-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark">
                        <h2></h2>
                        <h6></h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Discography Slides -->
                    <div class="discography-slides owl-carousel">
                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d1.jpg" alt=""></a>
                        </div>

                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d2.jpg" alt=""></a>
                        </div>

                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d3.jpg" alt=""></a>
                        </div>

                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d4.jpg" alt=""></a>
                        </div>

                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d5.jpg" alt=""></a>
                        </div>

                        <!-- Single Discography -->
                        <div class="single-discography">
                            <a href="#"><img src="img/bg-img/d6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Discography Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(img/bg-img/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content">
                        <div class="cta-text">
                            <span>Unique Way to see a</span>
                            <h2>Music Concert</h2>
                            <h4>Search for the best music</h4>
                        </div>
                        <div class="cta-btn mt-30">
                            <a href="#" class="btn musica-btn">elements</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>About</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Links</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Social</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Snapchat</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Subscribe</h4>
                        </div>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->

    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>