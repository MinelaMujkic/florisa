<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Florisa | cvjetniShop</title>
    
    <!-- Font awesome -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="/css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="/css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              {{-- <div class="aa-header-top-left"> --}}

                <!-- start language -->
                {{-- <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="img/flag/english.jpg" alt="english flag">ENGLISH
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="img/flag/french.jpg" alt="">FRENCH</a></li>
                      <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div> --}}

                <!-- / language -->

                <!-- start currency -->

                {{-- <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>USD
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                      <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                    </ul>
                  </div>
                </div> --}}

                <!-- / currency -->
                <!-- start cellphone -->

                {{-- <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>035/123-456</p>
                </div> --}}

                <!-- / cellphone -->
              {{-- </div> --}}
              <!-- / header top left -->
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
               
                  
                  <p><a href="florisa_logo.png"><img src="/florisa_logo.png" alt="florisa_logo.png"></a><br><strong>cvijetni Shop</strong> <span>Vaš Online Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="florisa_logo.png"><img src="florisa_logo.png" alt="florisa_logo.png"></a> --> 
              </div>
              <!-- / logo  -->

               <!-- cart box -->

              {{-- <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">Moja košarica</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Naziv proizvoda</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="#" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Naziv proizvoda</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Ukupno
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Pogledaj</a>
                </div>
              </div> --}}
              <!-- / cart box -->

              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Pretraga ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box --> 
            </div>
          </div>

          <div class="col-md-2">
            <!-- Login -->
            <ul class="nav navbar-nav">
              <li><a href="{{route('home')}}"><strong>Odjavi se<strong></a></li>
            </ul>
            <!-- / Login -->
          </div>
          
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{url("admin/unesiPonudu")}}">Unesi novu ponudu</a></li>
              {{-- <li><a href="#">Shop <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="{{route('cvijetniAranzmani')}}">Cvijetni aranžmani</a></li>
                  <li><a href="{{route('kucnoCvijece')}}">Kućno cvijeće</a></li>
                </ul>
              </li>
                         
              <li><a href="blog-archive.html">Blog <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="{{route('blog')}}">Novosti u cvjećarstvu</a></li>                
                </ul>
              </li>
              <li><a href="{{route('kontakt')}}">Kontakt</a></li>
            </ul> --}}
            

          </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>

  @yield('content')
 

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Glavni meni</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="{{route('home')}}">Početna</a></li>
                    <li><a href="{{route('cvijetniAranzmani')}}">Cvijetni aranžmani</a></li>
                    <li><a href="{{route('kucnoCvijece')}}">Kućno cvijeće</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('kontakt')}}">Kontakt</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <!--<p><strong>Sva prava zadržana</strong></p>-->
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Kontaktirajte nas</h3>
                    <address>
                      <p> Oktobarska bb, 75000 Tuzla</p>
                      <p><span class="fa fa-phone"></span>+387 35 123 456</p>
                      <p><span class="fa fa-envelope"></span>florisa@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
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
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Sva prava zadržana <strong>Florisa</strong></a> 2020</p>
            <div class="aa-footer-payment">
              
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- Login Modal  nije uključio-->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Prijava ili registracija</h4>
          <form class="aa-login-form" action="">
            <label for="">Korisničko ime ili email adresa<span>*</span></label>
            <input type="text" placeholder="Korisničko ime ili email adresa">
            <label for="">Lozinka<span>*</span></label>
            <input type="password" placeholder="Lozinka">
            <button class="aa-browse-btn" type="submit">Prijava</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Zapamti me </label>
            <p class="aa-lost-password"><a href="#">Da li ste zaboravili lozinku?</a></p>
            <div class="aa-register-now">
              Nemate račun<a href="account.html">Registrujte se!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>    

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="/js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="/js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="/js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="/js/sequence.js"></script>
  <script src="/js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="/js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="/js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="/js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="/js/custom.js"></script> 

  </body>
</html>