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

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body class="bg-whiteBlue">
    {{-- <nav class="fixed top-0 w-full p-2 bg-cta mb-4">
        relative
        <!-- Flex container -->
        <div class="flex items-center container mx-auto justify-between ">
            <!-- Logo -->
            <div class="pt-2">
                <li class="flex items-center">
                    <a href="" class="text-white">
                      <img src="{{ asset('/assets/img/logo-white.jpg') }}" alt="">
                      <img src="{{ url('storage/img/logo-white.jpg') }}" alt="Example image">
                    </a>
                </li>
            </div>
            <!-- Menu Items -->
            
          
            <div class="hidden space-x-6 md:flex">
               
                    <ul class="flex items-center justify-around w-56">
                        <li class="w-6/12 ">
                            <a href="#features" class="hover:text-darkBlue">Features</a>
                        </li>
                        <li class="w-4/12">
                            <a href="#features" class="hover:text-darkBlue">Features</a>
                        </li>
                        <li class="w-4/12">
                            <a href="#features" class="hover:text-darkBlue">Features</a>
                        </li>
                        <li class="w-4/12">
                            <a href="#features" class="hover:text-darkBlue">Features</a>
                        </li>
                        <li class="w-4/12">
                            <a href="#features" class="hover:text-darkBlue">Features</a>
                        </li>
                        <li class="w-4/12">
                            <a href="#features" class="hover:text-darkBlue">Features</a>
                        </li>
                    </ul>
               
            </div>






            <!-- Hamburger Icon -->
            <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>
        </div>

  
            
       
        <!-- Mobile Menu -->
        
        
    </nav>  --}}

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


     
    
        <footer id="footer" class="relative z-50 bg-gray-200">
          
           
        </footer>
    
    

    

    {{-- <script src="/public/js/main.js"></script> --}}
    <script src="{{ asset('js/main.js')}}"></script>
   

    

    @stack('scripts')
    {{-- @yield('script') --}}

    
</body>

</html>
