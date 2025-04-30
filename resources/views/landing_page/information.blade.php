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
   <title>Obesity Check</title>
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
   <link href="assets/user/images/LogoObes.png" rel="icon">
   <link href="assets/user/images/logoObes.png" rel="LogoObes">

   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{asset('assets\user\css/jquery.mCustomScrollbar.min.css')}}">

   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

   <!-- jQuery (Bootstrap's JavaScript plugins require jQuery) -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- Bootstrap JS -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

   <!-- Link untuk font dari Google Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>


<body>
      <!-- header section start -->
      <div class="header_section" style="color: white;">
      <a class="navbar-brand"href="index.html" style="position: absolute; top: 0px; left: 20px;">
         <img src="{{asset('assets/user/images/LogoObes.png')}}" alt="Logo Obesitaas" style="height: 70px;"></a>
         <div class="container-fluid" style="background-color: white;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light bg-amber-50">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: aquamarine">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html" style="color: #20B2AA">Home</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="information.html" style="color: #20B2AA">Information</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html" style="color: #20B2AA">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html" style="color: #20B2AA">Contact Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="information.html" style="color: #20B2AA">Login</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   <!-- header section end -->

   <!-- banner section start -->
   <div class="banner_section layout_padding" style="">
      <div class="container">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">BUILD YOUR BODY</h1>
                        <p class="banner_text">Obesitas adalah kondisi di mana tubuh memiliki kelebihan lemak yang berlebihan, biasanya ditandai dengan berat badan yang jauh di atas normal. Kondisi ini bukan sekadar soal penampilan, tetapi bisa berdampak serius pada kesehatan. Menjaga tubuh agar tidak mengalami obesitas penting untuk mengurangi risiko penyakit seperti diabetes, jantung, dan tekanan darah tinggi. Selain itu, berat badan ideal membantu meningkatkan energi, kualitas tidur, serta kesehatan mental. Hidup sehat juga membuat kita lebih percaya diri dan bisa menjadi contoh positif bagi orang-orang di sekitar.</p>
                        <div class="started_text"><a href="#">Contact Us</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- banner section end -->

   <!-- informasi -->
   <body>
   <div class="information-page">  
      <div class="container">
         <h1>Informasi Tentang Obesitas</h1>
         <p style="max-width: 700px; margin: 0 auto 30px; font-size: 16px; color: #444;">
            Obesitas adalah kondisi medis yang ditandai dengan penumpukan lemak tubuh yang berlebihan. Kondisi ini dapat meningkatkan risiko berbagai penyakit serius seperti diabetes tipe 2, tekanan darah tinggi, penyakit jantung, dan masalah kesehatan lainnya.
         </p>
         <section class="info-section">
            <div class="info-card">
               <h2>Penyebab Obesitas</h2>
               <p>
                  Obesitas dapat disebabkan oleh pola makan tinggi kalori, kurangnya aktivitas fisik, faktor genetik, gangguan hormonal, serta stres dan kurang tidur. Kebiasaan mengonsumsi makanan cepat saji dan minuman manis juga memperbesar risiko.
               </p>
            </div>
            <div class="info-card">
               <h2>Pencegahan Obesitas</h2>
               <p>
                  Pencegahan dilakukan melalui gaya hidup sehat seperti makan makanan seimbang, aktif bergerak minimal 30 menit per hari, mengurangi konsumsi gula dan lemak jenuh, serta menjaga waktu tidur yang cukup dan teratur.
               </p>
            </div>
            <div class="info-card">
               <h2>Pengobatan Obesitas</h2>
               <p>
                  Pengobatan meliputi perubahan gaya hidup, diet terkontrol, aktivitas fisik rutin, dan dalam beberapa kasus memerlukan obat atau tindakan medis seperti operasi bariatrik. Konsultasi dengan ahli gizi atau dokter sangat dianjurkan.
               </p>
            </div>
         </section>
      </div>
   </div>
</body>


   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="about_taital">About</div>
               <p class="about_text">Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,</p>
               <div class="read_bt"><a href="#">Read More</a></div>
            </div>
            <div class="col-md-6">
               <div class="about_img"><img src="{{asset('assets/user/images/about-img.png')}}"></div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->

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
                  <div class="mail_section_1">
                     <input type="text" class="mail_text" placeholder="Name" name="Name">
                     <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                     <input type="text" class="mail_text" placeholder="Email" name="Email">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                     <div class="send_bt"><a href="#">SEND</a></div>
                  </div>
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

   <!-- footer section end -->
   <footer id="footer" class="footer position-relative light-background">
      <div class="container footer-top">
         <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
               <a href="#" class="logo d-flex align-items-center">
                  <span class="sitename">Mentor</span>
               </a>
               <div class="footer-contact pt-3">
                  <p>Jalan Mastrip, Kec. Sumbersari</p>
                  <p>Politeknik Negeri Jember</p>
                  <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                  <p><strong>Email:</strong> <span>info@example.com</span></p>
               </div>
               <div class="social-links d-flex mt-4">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
               </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
               <h4>Useful Links</h4>
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Login</a></li>
               </ul>
            </div>
         </div>
      </div>

      <div class="container copyright text-center mt-4">
         <p>© <span>Copyright</span> <strong class="px-1 sitename">ObesityCheck Team</strong> <span>All Rights Reserved</span></p>
      </div>
   </footer>
</body>

</html>