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
    <!-- Resume Section -->
    <section id="resume" class="resume section">
        {{-- @dd($persyaratan) --}}
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample" data-aos="fade-up" data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        @foreach ($persyaratan as $key => $syarat)
                            <div class="accordion-item m-3">
                                <h2 class="accordion-header">
                                    <button class="collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $key }}" aria-expanded="false"
                                        aria-controls="collapse{{ $key }}">
                                        {{ $syarat }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $key }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item’s accordion body.</strong> It is shown by default,
                                        until
                                        the collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes control the overall appearance, as well as the showing and hiding via
                                        CSS
                                        transitions. You can modify any of this with custom CSS or overriding our default
                                        variables. It’s also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>



            </div>

        </div>

    </section><!-- /Resume Section -->
@endsection
