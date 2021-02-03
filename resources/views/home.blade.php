<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>vitrine_pharmaceutique</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
     
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-2 col-md-2 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo" style="margin-left:0%"><a href="#"><i class="fas fa-first-aid"></i>  vitrine </a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="index.html"><i class="fa fa-home"></i>Home</a> </li>
                              <li> <a href="#about"><i class="fas fa-info-circle"></i>About</a> </li>
                              @can('manage')
                              <li> <a href="{{ route('products.index') }} ">Manage Products</a> </li>
                              @endcan
                              @can('manage')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.users.index') }}">Manage Users</a>
                        </li>
                        @endcan
                              @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class='fa fa-user'style='font-size:24px;margin-right:6px'>  </i>{{  Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="{{ asset('images/banner2.png') }}" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>A propos de nous !</h1>
                        <p>Achetez vos produits de parapharmacie au Maroc sur vitrine.ma. Notre société vous offre le plus grand choix de produits de parapharmacie au Maroc et aux meilleurs prix du marché. Vous pouvez commander vos produits en ligne sur notre site. Pour le paiement, vous avez le choix entre le paiement en espèce à la livraison ou le paiement électronique en utilisant votre carte bancaire. Les livraisons des produits de parapharmacie sur Casablanca, Rabat, Salé, Témara et Kénitra sont opérées par nos propres livreurs. </p>
                        <a  href="#">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner2.png" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Contactez nous !</h1>
                        <p>Appelez-nous et recevez les conseils de nos docteurs en pharmacie. </p>
                        <a  href="#">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/offre.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Beaucoup d'offres speciaux</h1>
                        <p>Vitrine.ma vous offre des remises exceptionnelles sur une sélection de produits de parapharmacie chaque semaine valable dans la limite du stock.Vous trouverez tous les offres speciaux au dessous de la page. N'hesitez pas de les voir ! </p>
                        <a  href="#">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
      <!-- about  -->
      <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>About Informations</h2>
                     <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="img-box">
                     <figure><img src="images/about.png" alt="img"/></figure>
                     <a href="#">read more</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end abouts -->
      <!-- service --> 
      <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Services </h2>
                     <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of <br>using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="container margin-r-l">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/1.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/1.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="{{url('/anti-covid')}}" class="fancybox" rel="ligthbox">Anti-Covid</a>
                        </span>  
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/2.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/2.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/1.jpg" class="fancybox" rel="ligthbox">Fashion</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/3.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/3.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/3.jpg" class="fancybox" rel="ligthbox">Beauté et visage</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/4.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/4.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/4.jpg" class="fancybox" rel="ligthbox">Soins solaires</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/5.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">Maman bébé</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <figure>
                        <a href="images/6.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/6.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/6.jpg" class="fancybox" rel="ligthbox">Cheveux</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/5.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">Maman bébé</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/5.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">Maman bébé</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/5.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">Maman bébé</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/5.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">Maman bébé</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/5.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">Maman bébé</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/5.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">Maman bébé</a>
                        </span> 
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->
      <!-- Download -->
      <div id="download" class="download">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Download  And  Use  For  Free  </h2>
                     <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of <br>using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active"> <img class="first-slide" src="images/banner.png" alt="First slide"> </div>
                        <div class="carousel-item"> <img class="second-slide" src="images/banner.png" alt="Second slide"> </div>
                        <div class="carousel-item"> <img class="third-slide" src="images/banner.png" alt="Third slide"> </div>
                     </div>
                     <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i class='fa fa-angle-left'></i></a> <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"> <i class='fa fa-angle-right'></i></a> 
                  </div>
                  <div class="read-more">
                     <a href="#">download now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Download -->
      <!-- Testimonial -->
      <div id="testimonial" class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h3>Testimonial</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div id="testimonial_slider" class="carousel slide banner-bg" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide" src="images/testimonial-img.png">
                           <div class="container">
                              <div class="carousel-caption relat">
                                 <h3>Luka due</h3>
                                 <span><i class="fa fa-quote-left"></i> ( foundery )<i class="fa fa-quote-right"></i></span>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  </p>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide" src="images/testimonial-img.png">
                           <div class="container">
                              <div class="carousel-caption relat">
                                 <h3>Luka due</h3>
                                 <span><i class="fa fa-quote-left"></i> ( foundery )<i class="fa fa-quote-right"></i></span>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  </p>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="images/testimonial-img.png">
                           <div class="container">
                              <div class="carousel-caption relat">
                                 <h3>Luka due</h3>
                                 <span><i class="fa fa-quote-left"></i> ( foundery )<i class="fa fa-quote-right"></i></span>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#testimonial_slider" role="button" data-slide="prev"> <i class='fa fa-angle-right'></i></a> <a class="carousel-control-next" href="#testimonial_slider" role="button" data-slide="next"> <i class='fa fa-angle-left'></i></a> 
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>Contact Us</h3>
                     <form>
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Name" type="text" name="Name">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Phone" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Email" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                           </div>
                           <div class="col-sm-12">
                              <button class="send">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Testimonial --> 
      <!--  footer --> 
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Address</h3>
                        <i><img src="icon/3.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Menus</h3>
                        <i><img src="icon/2.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Useful Linkes</h3>
                        <i><img src="icon/1.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Social Media </h3>
                        <ul class="contant_icon">
                           <li><img src="icon/fb.png" alt="icon"/></li>
                           <li><img src="icon/tw.png" alt="icon"/></li>
                           <li><img src="icon/lin (2).png" alt="icon"/></li>
                           <li><img src="icon/instagram.png" alt="icon"/></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 width">
                     <div class="address">
                        <h3>Newsletter </h3>
                        <input class="form-control" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit-btn">Subscribe</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="{{ asset('js/jquery.min.js') }}"></script> 
      <script src="{{ asset('js/popper.min.js') }}"></script> 
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> 
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script> 
      <script src="{{ asset('js/plugin.js') }}"></script> 
      <!-- sidebar --> 
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script> 
      <script src="{{ asset('js/custom.js') }}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>