@extends('dashboard.layouts.main')

@section('container')
    @include('dashboard.persyaratan.create')


    <div class="row">
        <div class="col-xl">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Persyaratan Disdukcapil</h6>
                    <!-- Button Tambah / Modal Tambah -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-persyaratan">
                        <i class="bi bi-plus-square"></i> Tambah Persyaratan Baru
                    </button>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Layanan</th>
                                    <th>Persyaratan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!-- Menampilkan List Data Antrian Yang Tersedia -->
                            <tbody>
                                <!-- Menampilkan semua data layanan -->
                                @foreach ($layanans as $layanan)
                                    @if (count($layanan->persyaratan))
                                        <tr>
                                            <td rowspan="{{ count($layanan->persyaratan) }}">{{ $loop->iteration }}</td>
                                            <td rowspan="{{ count($layanan->persyaratan) }}">{{ $layanan->nama_layanan }}
                                            </td>

                                            @foreach ($layanan->persyaratan as $persyaratan)
                                                <td>{{ $persyaratan->persyaratan }}</td>
                                                <td>
                                                    <!-- Button untuk mengedit layanan -->
                                                    <a href="/dashboard/persyaratan/{{ $persyaratan->id }}/edit"
                                                        class="btn btn-warning btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </span>
                                                        <span class="text">Edit</span>
                                                    </a>

                                                    <!-- Button untuk menghapus Layanan -->
                                                    <form id="{{ $persyaratan->id }}"
                                                        action="/dashboard/persyaratan/{{ $persyaratan->id }}"
                                                        method="POST" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <div class="btn-danger btn-icon-split mb-2 swal-confirm"
                                                            data-form="{{ $persyaratan->id }}">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                            <span class="text">Hapus</span>
                                                        </div>
                                                    </form>
                                                </td>
                                        </tr>
                                    @endforeach
                                    </tr>
                                @endif
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
