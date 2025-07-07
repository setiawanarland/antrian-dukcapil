@extends('layouts.main')

@section('container')
    @include('antrian.create')

    <!-- Modal SKM -->
    {{-- <div class="modal fade" id="modalSKM" tabindex="-1" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>

            </div>
        </div>
    </div> --}}

    <!-- ======= Modal Pilih Layanan ======= -->
    <div class="modal fade bd-example-modal-lg" id="modalPilihLayanan" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                    data-bs-animation="ease">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item’s accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and hiding
                                    via CSS transitions. You can modify any of this with custom CSS or overriding our
                                    default variables. It’s also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item’s accordion body.</strong> It is hidden by default, until
                                    the collapse plugin adds the appropriate classes that we use to style each element.
                                    These classes control the overall appearance, as well as the showing and hiding via CSS
                                    transitions. You can modify any of this with custom CSS or overriding our default
                                    variables. It’s also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- ======= View Antrian Depan / Frontend ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Antrian</h2>
                <p>Ambil Antrian Online</p>
            </div>

            <div class="row">

                <!-- Alert Sukses -->
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Alert Error -->
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div id="liveAlertPlaceholder"></div>

                <!-- Menampilkan Data Antrian -->
                @foreach ($antrianList as $key => $antrian)
                    <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">

                            <div class="icon"><i class="bx bx-link-external"></i></div>
                            <h4>{{ $antrian->nama_layanan }}</h4>
                            {{-- <p>{{ $antrian->syarat }}</p> --}}

                            <!-- Mengecek Apakah User Sudah Login Atau Belum -->
                            <div class="mt-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-id="{{ $antrian->id }}" data-bs-target="#modalPilihLayanan">
                                    Ambil Antrian
                                </button>
                                <!-- @auth -->
                                    <!-- Jika Kondisi Belum Login, Maka Menampilkan Alert Anda harus Login Dahulu -->
                                    <!-- @if ($antrian->ambilantrians->contains('user_id', Auth::id()))
        <button type="button" class="btn btn-primary" id="containsButton">Ambil Antrian</button> -->
                                    <!-- Jika Kondisi Sudah Login, Maka Menampilkan Modal Tambah Antrian-->
                                    <!--
    @else
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-id="{{ $antrian->id }}" data-bs-target="#exampleModal">
                                                                                                                                                                                                                                                                                  Ambil Antrian
                                                                                                                                                                                                                                                                                </button>
        @endif -->
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-id="{{ $antrian->id }}" data-bs-target="#exampleModal">
                                                                                                                                                                                                                                                                                  Ambil Antrian
                                                                                                                                                                                                                                                                                </button> -->
                                    <!-- Jika Kondisi Sudah Pernah Mengambil Antrian Di Layanan Yang Sama, Maka Muncul Alert Anda Sudah Mengambil Antrian ini -->
                                    <!--
    @else
        -->
                                    <!-- <button type="button" class="btn btn-primary" id="liveAlertBtn{{ $key }}" data-id="{{ $key }}">Ambil Antrian</button> -->
                                <!-- @endauth -->
                                <div id="containsButtonlivePlaceholder"></div>
                            </div>
                        </div>

                        <!-- Menampilkan Accordion Yang Berisi Informasi & Persyaratan layanan -->
                        {{-- <div class="accordion" id="accordionExample{{ $key }}">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="modal"
                                        data-id="{{ $antrian->id }}" data-bs-target="#exampleModal">
                                        Detail Layanan
                                    </button>
                                </h2>
                                <div id="collapse{{ $key }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample{{ $key }}">
                                    <div class="accordion-body">
                                        {{ $antrian->persyaratan }}
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Modal SM -->
    <script type="text/javascript">
        window.onload = () => {
            $('#modalSKM').modal('show');
        }
    </script>
    <!-- Menampilkan Modal Tambah Antrian -->
    <script>
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button yang men-trigger modal
            var slug = button.data('id') // Extract info dari data-* attributes
            var modal = $(this)
            modal.find('.modal-title').text('Pengambilan Nomor Antrian')
            modal.find('.modal-body #antrian_id').val(slug)
        })
    </script>

    <!-- Alert Jika User Belum Login Dan ingin Mengambil Antrian, Maka Akan Muncul Alert Ini -->
    <script>
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        const appendAlert = (message, type) => {
            const wrapper = document.createElement('div')
            wrapper.innerHTML = [
                `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                `   <div>${message}</div>`,
                '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                '</div>'
            ].join('')
            alertPlaceholder.append(wrapper)
        }

        const alertTriggers = document.querySelectorAll('[id^="liveAlertBtn"]')
        if (alertTriggers.length > 0) {
            alertTriggers.forEach(alertTrigger => {
                alertTrigger.addEventListener('click', () => {
                    const auth = {
                        {
                            auth() - > check() ? 'true' : 'false'
                        }
                    };
                    if (!auth) {
                        appendAlert('Anda harus login terlebih dahulu', 'warning')
                    }
                })
            })
        }
    </script>

    <!-- Alert Jika User sudah pernah mengambil antrian di layanan yang sama -->
    <script>
        const alertPlaceholder2 = document.getElementById('containsButtonlivePlaceholder')
        const appendAlert2 = (message, type) => {
            const wrapper = document.createElement('div')
            wrapper.innerHTML = [
                `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                `   <div>${message}</div>`,
                '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                '</div>'
            ].join('')

            alertPlaceholder2.append(wrapper)
        }

        const alertTrigger = document.getElementById('containsButton')
        if (alertTrigger) {
            alertTrigger.addEventListener('click', () => {
                appendAlert(
                    'Anda sudah mengambil antrian ini, <a href="/antrian/detail" class="alert-link">Cek Detail</a>',
                    'danger')
            })
        }
    </script>
@endsection
