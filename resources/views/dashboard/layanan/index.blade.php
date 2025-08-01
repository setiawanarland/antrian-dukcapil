@extends('dashboard.layouts.main')

@section('container')
    @include('dashboard.layanan.create')


    <div class="row">
        <div class="col-xl">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Layanan Disdukcapil</h6>
                    <!-- Button Tambah / Modal Tambah -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-layanan">
                        <i class="bi bi-plus-square"></i> Tambah Layanan Baru
                    </button>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Antrian</th>
                                    <th>Nama Layanan</th>
                                    <th>Persyaratan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!-- Menampilkan List Data Antrian Yang Tersedia -->
                            <tbody>
                                <!-- Menampilkan semua data layanan -->
                                @foreach ($antrians as $antrian)
                                    <tr>
                                        <td rowspan="{{ count($antrian->layanan) }}">{{ $loop->iteration }}</td>
                                        <td rowspan="{{ count($antrian->layanan) }}">{{ $antrian->nama_antrian }}
                                        </td>

                                        @if (count($antrian->layanan))
                                            @for ($i = 0; $i < count($antrian->layanan); $i++)
                                                <td>{{ $antrian->layanan[$i]->nama_layanan }}</td>
                                                <td>
                                                    <ol class="list-group list-group-numbered">
                                                        @foreach ($antrian->layanan[$i]->persyaratan as $peryaratan)
                                                            <li class="">{{ $peryaratan->persyaratan }}</li>
                                                        @endforeach
                                                    </ol>
                                                </td>
                                                <td>
                                                    <!-- Button untuk mengedit layanan -->
                                                    <a href="/dashboard/layanan/{{ $antrian->layanan[$i]->id }}/edit"
                                                        class="btn btn-warning btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </span>
                                                        <span class="text">Edit</span>
                                                    </a>

                                                    <!-- Button untuk menghapus Layanan -->
                                                    <form id="{{ $antrian->layanan[$i]->id }}"
                                                        action="/dashboard/layanan/{{ $antrian->layanan[$i]->id }}"
                                                        method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <div class="btn-danger btn-icon-split mb-2 swal-confirm"
                                                            data-form="{{ $antrian->layanan[$i]->id }}">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                            <span class="text">Hapus</span>
                                                        </div>
                                                    </form>
                                                </td>
                                    </tr>
                                @endfor
                                @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
