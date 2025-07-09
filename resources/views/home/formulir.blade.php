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
    <section id="experience" class="services">
        <div class="container">
            <div class="row">
                @foreach ($formulir as $key => $val)
                    <div class="col-md-4" data-aos="fade-up" data-aos-offset="50" data-aos-easing="ease-in-sine">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250 icon-box">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h4 class="d-inline-block mb-2">{{ $val }}</h4>
                                <a class="icon strong" role="button" href="http://www.jquery2dotnet.com/">Download</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
