<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
 
      <link rel="shortcut icon" href="{{ url('images/favicon.png') }}" type="">
      <title>TrendyWear</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ url('css\bootstrap.css') }}" />
      <!-- font awesome style -->
      <link href="{{ url('}css/font-awesome.min.css') }}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ url('css/style.css') }}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ url('css/responsive.css') }}" rel="stylesheet" />
      <style>
                 body{
            /* background-color: rgba(0,0,0,0.5)	; */

            /* background-image:url('') */
            /* color:white; */
                 }
                 *{
                    /* color:white; */
                 }

                 li{
                    color:white;
                 }
        }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section" style="color:white;">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html">🆃🆁🅴🅽🅳🆈🆆🅴🅰🆁</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product">Products</a>
                        </li>
                        
                        <li class="nav-item">
                           <a class="nav-link" href="contact">Contact</a>
                        </li>
                        @if(Session::has('success'))
                           <li class="nav-item">
                              <a class="nav-link" href="login">
                              user
                              </a>
                           </li>
                           <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif

                        @if(Session::has('fail'))
                           <li class="nav-item">
                              <a class="nav-link" href="login">Login</a>
                           </li>

                           <li class="nav-item">
                              <a class="nav-link" href="signup">Signup</a>
                           </li>
                           <div class="alert alert-danger" style="color:white !important;">{{Session::get('fail')}}</div>
                        @endif
                        
                        
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
         <!-- slider section -->
         @yield('content')

         <!-- end slider section -->
      </div>

      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://www.linkedin.com/in/palakbhushan/"> palak</a><br>
         
         
         </p>
      </div>
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>