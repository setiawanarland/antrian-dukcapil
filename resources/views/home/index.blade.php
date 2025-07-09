@extends('home.mainHome')

@section('container')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div id="header" class="page-caption">
                        <img src="dashboardAssets/img/Logo_Jeneponto.png" alt="" width="100px">
                        <h2 class="page-title"><span class="typing" style="color:#ffbf00"></span></h2>
                        <div class="social-links">
                            <a href="mailto:rajaprerak@gmail.com" target="_blank" class="twitter"><i
                                    class="bi bi-twitter-x"></i></a>
                            <a href="https://www.github.com/rajaprerak" target="_blank" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/rajaprerak" target="_blank" class="facebook"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="mailto:rajaprerak@gmail.com" target="_blank" class="tiktok"><i
                                    class="bi bi-tiktok"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= Interests ======= -->
        <div class="interests container d-flex justify-content-center">
            <div action="" class="form">
                <a href="" class="icon-box oauthButton mt-1" data-aos="fade-up" data-aos-offset="50"
                    data-aos-easing="ease-in-sine">
                    <i class="ri-customer-service-fill"></i>
                    <h3>Layanan Konsultasi</h3>
                </a>

                <a href="" class="icon-box oauthButton mt-1" data-aos="fade-up" data-aos-offset="50"
                    data-aos-easing="ease-in-sine">
                    <i class="ri-chat-voice-fill"></i>
                    <h3>Layanan Online</h3>
                </a>

                <a href="/antrian" class="icon-box oauthButton mt-1" data-aos="fade-up" data-aos-offset="50"
                    data-aos-easing="ease-in-sine">
                    <i class="ri-walk-fill"></i>
                    <h3>Antrian</h3>
                </a>

                <a href="/persyaratan" class="icon-box oauthButton mt-1" data-aos="fade-up" data-aos-offset="50"
                    data-aos-easing="ease-in-sine">
                    <i class="ri-todo-fill"></i>
                    <h3>Persyaratan</h3>
                </a>
                <a href="/formulir" class="icon-box oauthButton mt-1" data-aos="fade-up" data-aos-offset="50"
                    data-aos-easing="ease-in-sine">
                    <i class="ri-file-copy-2-fill"></i>
                    <h3>Formulir</h3>
                </a>
                <a href="/web" class="icon-box oauthButton mt-1" data-aos="fade-up" data-aos-offset="50"
                    data-aos-easing="ease-in-sine">
                    <i class="ri-global-line"></i>
                    <h3>Website Disdukcapil</h3>
                </a>
            </div>
        </div><!-- End Interests -->
    </section><!-- End About Section -->
@endsection
