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
                            <img src="{{asset('images/World_balance_logo.png')}}" style="height: 60px">
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

    <br>
    <br>
    <br>
    

    <!-- ***** Announcement Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Latest Announcements</h2>
                        <span>Explore our new products with great deals.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            @foreach ($announcements as $announcement)
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{route('announcement.show', $announcement)}}"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{asset($announcement->imagePath)}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>{{$announcement->title}}</h4>
                                    <span>{{$announcement->description}}</span>
                                    
                                </div>
                            </div>
                                
                            @endforeach

                            <!-- *****<div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{asset('images/women-01.jpg')}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>New Green Jacket</h4>
                                    <span>$75.00</span>
                                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{asset('images/women-02.jpg')}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Classic Dress</h4>
                                    <span>$45.00</span>
                                   
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{asset('images/women-03.jpg')}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Spring Collection</h4>
                                    <span>$130.00</span>
                                   
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{asset('images/women-01.jpg')}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Classic Spring</h4>
                                    <span>$120.00</span>
                                </div>***** -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- ***** Announcement Area Ends ***** -->

    

   
    
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
                            <li><a href="#">Butuan City, Agusan Del Norte, Philippines</a></li>
                            <li><a href="#">http://bitly.ws/nxW9</a></li>
                            <li><a href="#">0956-798-6263</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="{{route('home.index')}}">Men’s Shopping</a></li>
                        <li><a href="{{route('home.index')}}">Women’s Shopping</a></li>
                        <li><a href="{{route('home.index')}}">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{route('home.index')}}">Homepage</a></li>
                        <li><a href="{{route('about.index')}}">About Us</a></li>
                        <li><a href="{{route('product.index')}}">Products</a></li>
                        <li><a href="{{route('contact.index')}}">Contact Us</a></li>
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