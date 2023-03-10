<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rosedesign</title>
    <link rel="icon" href="/img/devchallenges.png" />
    <link rel="shortcut icon" type="image/x-icon" href="https://rosedesign.rhodevelope.tech" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ThisIsDallas-Simple-Grid-8c736aa/simplegrid.css') }}">
</head>

<body class="bg-whiteBlue">
    

    <header>

        {{-- logo --}}
        <a href="#" class="logo">
            <img src="{{ asset('/assets/img/logo-white.jpg') }}" alt="">
        </a>

        {{-- menu items --}}
        <nav id="nav">
          <ul>
            <li><a href="#" class="nav__link active open" id="item__1">Home</a></li>
            <li><a href="#" class="nav__link">About Us</a></li>
            <li><a href="#" class="nav__link">FemAcademy</a></li>
            <li><a href="#" class="nav__link">FemReach</a></li>
            <li><a href="#" class="nav__link">FAQs</a></li>
            <li class="cta-style"><a href="#" class="nav__link">Contact Us</a></li>
          </ul>
        </nav>
        <div class="menu-toggle" onclick="showMenuBar();"><i id="menu-icon" class="fas fa-bars"></i></div>
    
    
    
    
    
      </header>
    


    @yield('content')


     
    
    <footer class="footer-area" style="background-image: url(assets/img/footer-bg-02.png);">
      
        <div class="footer-top home-three">
          <div class="container">
            <div class="footer-top-border home-three">
              <div class="row">
               
                <div class="col-1-4 mobile-col-6-12 tab-col-6-12 s-mobile-col-1-1 footer-pad-1">
                  <div class="footer-widget widget">
                    <div class="about_us_widget wow animate__animated animate__fadeInUp">
                      <a href="index.html" class="footer-logo"> <img src="{{ asset('/assets/img/logo-white.jpg') }}" alt="footer logo"></a>
                      
                        <ul class="logo-list">
                          <li><a href="#">Get In Touch</a></li>
                          <li><a href="#">+234 901 7434 810</a></li>
                          <li><a href="#">femcodeafrica@gmail.com</a></li>
                          <li><a href="#">@femcodeafrica.org</a></li>
                        </ul>
                        <div class="social-links">
                            <div class="row social-title">Connect With Us</div>
                          <a class="social-i-one" href="#"><img src="{{ asset('/assets/img/facebook-logo.png') }}" alt=""></a>
                          <a href="#"><img src="{{ asset('/assets/img/linkedin-logo.png') }}" alt=""></i></a>
                          <a href="#"><img src="{{ asset('/assets/img/twitter-logo.png') }}" alt=""></a>
                          
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-1-4 mobile-col-6-12 tab-col-6-12 s-mobile-col-1-1 footer-pad-2">
                  <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                    <h4 class="widget-title">
                      
                      <span class="line">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot style-02"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                      </span>
                    </h4>
                    <ul class="contact_info_list style-01">
                      <li><a href="#">FemCode Africa</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Achievements</a></li>
                        <li><a href="#">Join The Community</a></li>
                        <li><a href="#">Our Services</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-1-4 mobile-col-6-12 tab-col-6-12 s-mobile-col-1-1 footer-pad-2 footer-pad-3">
                  <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                    <h4 class="widget-title">
                      
                      <span class="line">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot style-02"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                      </span>
                    </h4>
                    <ul>
                      <li><a href="#">FemAcademy</a></li>
                      <li><a href="#">Our Courses</a></li>
                      <li><a href="#">Tuition Fee</a></li>
                      <li><a href="#">Our Classes</a></li>
                      <li><a href="#">E-Learning</a></li>
                      <li><a href="#">Join the Waiting List</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-1-4 mobile-col-6-12 tab-col-6-12 s-mobile-col-1-1 footer-pad-2 footer-pad-3">
                  <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                    <h4 class="widget-title">
                     
                      <span class="line">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot style-02"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                      </span>
                    </h4>
                    <ul>
                      <li><a href="#">FemReach</a></li>
                      <li><a href="#">Sponsor</a></li>
                      <li><a href="#">Donate</a></li>
                      <li><a href="#">FAQs</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </footer>
      <!-- footer area end -->
    
    

    

    {{-- <script src="/public/js/main.js"></script> --}}
    <script src="{{ asset('js/main.js')}}"></script>
   

    

    @stack('scripts')
    {{-- @yield('script') --}}

    
</body>

</html>
