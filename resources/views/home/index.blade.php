@extends('home.mainHome')

@section('container')
<header id="header" class="header-tops">

  <div class="container">
    <h2 style="color:#fff"><span class="typing" style="color:#ffbf00"></span></h2>

    <div class="social-links">
      <a href="mailto:rajaprerak@gmail.com" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="https://www.github.com/rajaprerak" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://www.linkedin.com/in/rajaprerak" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="mailto:rajaprerak@gmail.com" target="_blank" class="tiktok"><i class="bi bi-tiktok"></i></a>
    </div>

  </div>
</header><!-- End Header -->


<!-- ======= About Section ======= -->
<section id="about" class="about">

  <!-- ======= Interests ======= -->
  <div class="interests container">

    <div class="section-title">
      <h2>Interests</h2>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4">
        <a href="" class="icon-box">
          <i class="ri-customer-service-fill"></i>
          <h3>Layanan Konsultasi</h3>
        </a>
        <!-- <div class="icon-box">
            <i class="ri-global-line" style="color: #ffbb2c;"></i>
            <h3 class=""><a href="">Layanan Konsultasi</a></h3>
          </div> -->
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <a href="" class="icon-box">
          <i class="ri-chat-voice-fill"></i>
          <h3>Layanan Online</h3>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <a href="/antrian" class="icon-box">
          <i class="ri-walk-fill"></i>
          <h3>Antrian</h3>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <a href="/persyaratan" class="icon-box">
          <i class="ri-todo-fill"></i>
          <h3>Persyaratan</h3>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <a href="/formulir" class="icon-box">
          <i class="ri-file-copy-2-fill"></i>
          <h3>Formulir</h3>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <a href="/web" class="icon-box">
          <i class="ri-global-line"></i>
          <h3>Website Disdukcapil</h3>
        </a>
      </div>

    </div>

  </div><!-- End Interests -->
</section><!-- End About Section -->
@endsection