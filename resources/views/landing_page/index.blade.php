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
      <link href="assets/user/images/LogoObes.png" rel="LogoObes">

      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('assets\user\css/jquery.mCustomScrollbar.min.css')}}">
      
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      
      <!-- Check List-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

      
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
                        <a class="nav-link" href="/home" style="color: #20B2AA">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/home#information" style="color: #20B2AA">Informasi</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/home#about" style="color: #20B2AA">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/home#contact" style="color: #20B2AA">Contact Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/login" style="color: #20B2AA">Login</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start --> 
      <div id="home" class="banner_section layout_padding" style="">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <h1 class="banner_taital">BUILD YOUR BODY</h1>
                           <p class="banner_text">Obesitas adalah kondisi di mana tubuh memiliki kelebihan lemak yang berlebihan, biasanya ditandai dengan berat badan yang jauh di atas normal. Kondisi ini bukan sekadar soal penampilan, tetapi bisa berdampak serius pada kesehatan. Menjaga tubuh agar tidak mengalami obesitas penting untuk mengurangi risiko penyakit seperti diabetes, jantung, dan tekanan darah tinggi. Selain itu, berat badan ideal membantu meningkatkan energi, kualitas tidur, serta kesehatan mental. Hidup sehat juga membuat kita lebih percaya diri dan bisa menjadi contoh positif bagi orang-orang di sekitar.</p>
                           <div class="started_text"><a href="home#information">More</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->

      <!-- information section start -->
      <div id="information" class="information_section layout_padding" style="">
         <div class="container">
         <h2 class="section-title">INFORMATION</h2>
         <p class="section-subtitle">Obesitas adalah kondisi yang terjadi saat seseorang memiliki berat badan berlebih. Ada beberapa faktor yang bisa menjadi penyebab kondisi ini, mulai dari gaya hidup, faktor keturunan atau genetik, hingga riwayat penyakit tertentu. Lantas, bagaimana cara mengenali obesitas? Apa saja cara penanganan yang bisa dilakukan? </p>

         <div class="card-scroll-wrapper">
            <!-- Card 1 -->
            <div class="info-card">
               <div class="card-icon">
                  <img src="assets/user/images/sebab-icon.png" alt="icon"/>
               </div>
               <h4 class="card-title">PENYEBAB OBESITAS</h4>
               <div class="card-body">
               <p>Ketika kadar kalori masuk lebih banyak dari yang dibutuhkan oleh tubuh<br>hal tersebut menyebabkan energi menjadi berlebihan, <br>sehingga diubah menjadi cadangan dalam bentuk lemak.</p>
               <p>Jarang beraktivitas serta pola makan dan kebiasaan makan yang<br>tidak sehat</p>
               <p>Pengaruh genetik, perilaku dan hormonal pada berat badan juga<br>menjadi salah satu penyebab obesitas.</p>
               <p class="source">Sumber: <em>halodoc</em></p>
               </div>
            </div>

            <!-- Card 2 -->
            <div class="info-card">
               <div class="card-icon">
                  <img src="assets/user/images/solusi-icon.png" alt="icon"/>
               </div>
               <h4 class="card-title">PENGOBATAN OBESITAS</h4>
               <div class="card-body">
               <p><strong>Latihan dan aktivitas:</strong> Orang dengan obesitas perlu melakukan setidaknya<br>150 menit seminggu aktivitas fisik intensitas sedang untuk mencegah<br>penambahan berat badan lebih lanjut.</p>
               <p><strong>Konseling:</strong> Membantu memahami mengapa kamu bisa makan berlebihan...</p>
               <p>Memotong kalori. Kunci untuk menurunkan berat badan adalah<br> mengurangi kalori yang dikonsumsi. Normalnya wanita butuh<br> 1.200 hingga 1.500 kalori dan pria butuh 1.500 hingga 1.800 kalori</p>
               <p class="source">Sumber: <em>halodoc</em></p>
               </div>
            </div>

            <!-- Card 3 -->
            <div class="info-card">
               <div class="card-icon">
                  <img src="assets/user/images/cegah-icon.png" alt="icon"/>
               </div>
               <h4 class="card-title">PENCEGAHAN OBESITAS</h4>
               <div class="card-body">
               <p>Berolahraga secara teratur berupa aktivitas intensitas sedang<br>selama 150 hingga 300 menit seminggu untuk mencegah penambahan berat badan.</p>
               <p>Ikuti rencana makan sehat, dengan fokus pada makanan rendah<br>kalori, makanan padat nutrisi, seperti buah-buahan,<br>sayur-sayuran dan biji-bijian</p>
               <p>Hindari lemak jenuh dan batasi permen dan alkohol</p>
               <p>Memiliki pola pikir bahwa gaya hidup sehat harus dilakukan terus-menerus<br>bila berat badan menurun itu adalah bonus dari tubuh yang sehat.</p>
               <p class="source">Sumber: <em>halodoc</em></p>
               </div>
            </div>
         </div>
         </div>
      </div>
      <!-- information section end -->

      <!-- about section start -->
      <div id="about" class="about_section layout_padding">
         <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 align-items-center justify-content-between">
               <!-- Kolom Kiri: Teks -->
               <div class="col-xl-6" data-aos="fade-up" data-aos-delay="200">
                  <span class="about-meta">ABOUT</span>
                  <h2 class="about-title">Berat Badan Ideal Untuk Kesehatan</h2>
                  <p class="about-description">
                     Aplikasi Cek Obesitas adalah alat bantu digital yang dirancang untuk 
                     membantu pengguna mengetahui status berat badan mereka berdasarkan 
                     indeks massa tubuh (IMT/BMI). Aplikasi ini cocok digunakan oleh siapa saja 
                     yang ingin memantau kondisi tubuhnya secara mandiri dan cepat. Selain 
                     hasil perhitungan, aplikasi juga menyediakan saran umum terkait gaya 
                     hidup sehat dan pentingnya menjaga berat badan ideal untuk mengurangi 
                     risiko penyakit kronis seperti diabetes, tekanan darah tinggi, 
                     dan gangguan jantung.
                  </p>
                  <div class="row feature-list-wrapper">
                     <div class="col-md-6">
                        <ul class="feature-list">
                           <li><i class="bi bi-check-circle-fill"></i> Checking IMT</li>
                           <li><i class="bi bi-check-circle-fill"></i> Rekomendasi Hasil IMT/BMI</li>
                           <li><i class="bi bi-check-circle-fill"></i> Statistik Perkembangan BB</li>
                        </ul>
                     </div>
                     <div class="col-md-6">
                        <ul class="feature-list">
                           <li><i class="bi bi-check-circle-fill"></i> History Perkembangan</li>
                           <li><i class="bi bi-check-circle-fill"></i> Dapat diakses siapa saja</li>
                        </ul>
                     </div>
                  </div>
               </div>

               <!-- Kolom Kanan: Gambar -->
               <div class="col-xl-5" data-aos="fade-up" data-aos-delay="300">
                  <div class="image-wrapper">
                     <div class="images position-relative" data-aos="zoom-out" data-aos-delay="700">
                        <img src="assets/user/images/about1.jpg" alt="Pelatihan Workshop" class="img-fluid main-image rounded-4">
                        <img src="assets/user/images/about2.jpeg" alt="Diskusi Grup" class="img-fluid small-image rounded-4">
                     </div>
                     <div class="experience-badge floating">
                        <h3>Akurat</h3>
                        <p>Seluruh informasi berasal dari halodoc</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      
      <!-- contact section start -->
      <div id="contact" class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">CONTACT US</h1>
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
                           <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Politeknik+Negeri+Jember" width="600" height="368" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->

      <!-- footer section end -->
      <footer id="footer" class="footer position-relative light-background py-5">
         <div class="container">
            <div class="row justify-content-between">
               
               <!-- Kolom Kiri: Info Kontak -->
               <div class="col-md-6 col-lg-3 text-start">
               <h5 class="footer-title">OBESITY CHECK</h5>
               <p class="footer-text fw-bold mb-1">Jalan Mastrip, Kec. Sumbersari</p>
               <p class="footer-text fw-bold mb-3">Politeknik Negeri Jember</p>
               <p class="footer-text mb-1"><strong>Telepon:</strong> +62 8965-8765-98768</p>
               <p class="footer-text mb-3"><strong>Email:</strong> fbsjvfasbck@gmail.com</p>
               <div class="d-flex gap-3">
                  <a href="#" class="footer-icon"><i class="bi bi-linkedin"></i></a>
                  <a href="#" class="footer-icon"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="footer-icon"><i class="bi bi-twitter"></i></a>
               </div>
               </div>

               <!-- Kolom Kanan: Tautan Cepat -->
               <div class="col-md-6 col-lg-3 text-start">
               <h5 class="footer-title">Tautan Cepat</h5>
               <ul class="list-unstyled">
                  <li><a href="/home" class="footer-link">Home</a></li>
                  <li><a href="/home#information" class="footer-link">Informasi</a></li>
                  <li><a href="/home#about" class="footer-link">About Us</a></li>
                  <li><a href="/home#contact" class="footer-link">Contact</a></li>
                  <li><a href="/login" class="footer-link">Login</a></li>
               </ul>
               </div>
            </div>
            <!-- Copyright -->
            <div class="text-center mt-4">
               <p class="footer-copy mb-0">© <strong>ObesityCheck Team</strong> All Rights Reserved</p>
            </div>
         </div>
         </footer>

   </body>
</html>