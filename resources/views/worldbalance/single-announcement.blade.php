<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>World Balance</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('css/templatemo-hexashop.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{route('home.index')}}" class="logo">
                            <img src="{{asset('images/World_balance_logo.png')}}" style="height: 80px">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{route('home.index')}}" >Home</a></li>
                            <li class="scroll-to-section"><a href="{{route('home.index')}}">Men's</a></li>
                            <li class="scroll-to-section"><a href="{{route('home.index')}}">Women's</a></li>
                            <li class="scroll-to-section"><a href="{{route('home.index')}}">Kid's</a></li>
                            {{-- <li class="submenu">
                                <a href="javascript:;">Products</a>
                                <ul>
                                    <li><a href="{{route('about.index')}}">About Us</a></li>
                                    <li><a href="{{route('product.index')}}">Products</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="{{route('contact.index')}}">Contact Us</a></li>
                                </ul>
                            </li> --}}
                            <li class="scroll-to-section"><a href="{{route('product.index')}}">Products</a></li>
                            {{-- <li class="submenu">
                                <a href="javascript:;">Contact Us</a>
                                <ul>
                                    <li><a href="{{route('announcement.index')}}">Announcements</a></li>
                                </ul>
                            </li> --}}
                            <li class="scroll-to-section"><a href="{{route('contact.index')}}">Contact Us</a></li>
                            <li class="scroll-to-section"><a href="{{route('about.index')}}">About Us</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Our Latest Announcements</h2>
                        <span>Welcome to our announcement page, where you will find all the latest and important information from our company or organization. Keep checking back regularly for updates on new products, services, promotions, events and other relevant news.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="{{asset($announcement->imagePath)}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>{{$announcement->title}}</h4>
                        <span>{{$announcement->description}}</span>
                        {{-- <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod kon tempor incididunt ut labore.</p>
                        </div> --}}
                        <p>{!!$announcement->body!!}</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

    

   

   

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="first-item">
                        <div class="logo">
                            <img src="{{asset('images/worlbalance_white_logo.png')}}" style="height: 80px"  alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Shopping</a></li>
                        <li><a href="#">Women’s Shopping</a></li>
                        <li><a href="#">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                {{-- <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div> --}}
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                            <br>Log here <a href="{{route('login')}}">to log in</a></p>
                            <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('js/owl-carousel.js')}}"></script>
    <script src="{{asset('js/accordions.js')}}"></script>
    <script src="{{asset('js/datepicker.js')}}"></script>
    <script src="{{asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imgfix.min.js')}}"></script> 
    <script src="{{asset('js/slick.js')}}"></script> 
    <script src="{{asset('js/lightbox.js')}}"></script> 
    <script src="{{asset('js/isotope.js')}}"></script> 
    
    <!-- Global Init -->
    <script src="{{asset('js/custom.js')}}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
