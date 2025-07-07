@extends('home.mainHome')

@section('container')
    <header id="header" class="header-tops">

        <div class="container">
            <h2 style="color:#fff"><span class="typing" style="color:#ffbf00"></span></h2>

            <div class="social-links" data-aos="fade-up" data-aos-delay="100">
                <a href="mailto:rajaprerak@gmail.com" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.github.com/rajaprerak" target="_blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/rajaprerak" target="_blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="mailto:rajaprerak@gmail.com" target="_blank" class="tiktok"><i class="bi bi-tiktok"></i></a>
            </div>

        </div>
    </header>
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
