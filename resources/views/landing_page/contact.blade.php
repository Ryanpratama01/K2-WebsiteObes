<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Contact</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('assets\user\css\responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('assets/user/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('assets\user\css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="{{asset('assets/user/images/logo.png')}}"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="models.html">Models</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <!-- Actual search box -->
                     <div class="form-group has-search">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="fa fa-search form-control-feedback"></span>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Get In Touch</h1>
               </div>
            </div>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <form action="">
                        <div class="mail_section_1">
                           <input type="text" class="mail_text" placeholder="Name" name="Name">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                           <input type="text" class="mail_text" placeholder="Email" name="Email">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                           <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div class="map_main">
                        <div class="map-responsive">
                           <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="368" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_main">
               <div class="location_text">
                  <ul>
                     <li>
                        <a href="#">
                        <img src="{{asset('assets/user/images/map-icon.png')}}"><span class="padding_left_10">Address : Loram Ipusm</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <img src="{{asset('assets/user/images/call-icon.png')}}"><span class="padding_left_10">Call : +01 1234567890</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <img src="{{asset('assets/user/images/mail-icon.png')}}"><span class="padding_left_10">Email : demo@gmail.com</span>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="quote_bt"><a href="#">Get A Quote</a></div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div></p>
         </div>
      </div>
      <!-- copyright section end -->
      <script src="{{asset('assets/user/js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/user/js/popper.min.js')}}"></script>
      <script src="{{asset('assets/user/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/user/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('assets/user/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('assets/user/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('assets/user/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{asset('assets/user/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
   </body>
</html>