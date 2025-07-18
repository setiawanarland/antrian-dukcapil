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
    @foreach ($antrianList as $antrian)
        <div class="modal fade bd-example-modal-lg" id="modalPilihLayanan{{ $antrian->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Layanan {{ $antrian->nama_antrian }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('store.antrian') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="accordion" id="accordionExample">
                                <input type="hidden" name="antrian_id" id="antrian_id{{ $antrian->id }}"
                                    value="{{ $antrian->id }}">
                                @foreach ($antrian->layanan as $layanan)
                                    <div class="accordion-item mt-3">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $layanan->id }}"
                                                aria-expanded="false" aria-controls="collapse{{ $layanan->id }}">
                                                {{ $layanan->nama_layanan }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $layanan->id }}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <input type="hidden" name="layanan_id" id="layanan_id{{ $layanan->id }}"
                                                    value="{{ $layanan->id }}">
                                                <h6>Dokumen Persyaratan:</h6>
                                                <ul class="list-group">
                                                    @foreach ($layanan->persyaratan as $peryaratan)
                                                        <ul class="list-group-item">{{ $peryaratan->persyaratan }}</ul>
                                                    @endforeach
                                                </ul>
                                                <button id="btnSimpan" type="submit"
                                                    class="btn btn-primary mt-2">Pilih</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endforeach


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
                    <div class="col-md-3 mt-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">

                            <div class="icon"><i class="bx bx-link-external"></i></div>
                            <h4>{{ $antrian->nama_antrian }}</h4>

                            <!-- Mengecek Apakah User Sudah Login Atau Belum -->
                            <div class="mt-3">
                                @auth
                                    {{-- @dd($user->ambilantrians) --}}
                                    <!-- Jika Kondisi Belum Login, Maka Menampilkan Alert Anda harus Login Dahulu -->
                                    @if ($user->ambilantrians->contains('user_id', Auth::id()))
                                        <button type="button" class="btn btn-danger containsButton"
                                            id="containsButton{{ $key }}" data-id="{{ $antrian->id }}">
                                            Ambil Antrian
                                        </button>

                                        <!-- Jika Kondisi Sudah Login, Maka Menampilkan Modal Tambah Antrian-->
                                    @else
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-id="{{ $antrian->id }}"
                                            data-bs-target="#modalPilihLayanan{{ $antrian->id }}">
                                            Ambil Antrian
                                        </button>
                                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-id="{{ $antrian->id }}" data-bs-target="#exampleModal">
                                            Ambil Antrian
                                        </button> --}}
                                    @endif
                                    <!-- Jika Kondisi Sudah Pernah Mengambil Antrian Di Layanan Yang Sama, Maka Muncul Alert Anda Sudah Mengambil Antrian ini -->
                                @else
                                    <button type="button" class="btn btn-secondary" id="liveAlertBtn{{ $key }}"
                                        data-id="{{ $key }}">Ambil Antrian</button>
                                @endauth
                                <div id="containsButtonlivePlaceholder"></div>
                            </div>
                        </div>
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
                    const auth = {{ auth()->check() ? 'true' : 'false' }};
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

        const containTriggers = document.querySelectorAll('[id^="containsButton"]')
        containTriggers.forEach(containTrigger => {
            containTrigger.addEventListener('click', () => {
                appendAlert(
                    'Anda sudah mengambil antrian, silakan selesaikan terlebih dahulu antrian Anda! <a href="/antrian/detail" class="alert-link">Cek Detail</a>',
                    'danger')
            })
        })
    </script>
@endsection
