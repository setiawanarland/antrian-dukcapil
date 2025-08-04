@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Persyaratan</h6>
                    <a class="btn btn-secondary float-end" href="/dashboard/persyaratan" role="button">Kembali</a>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="/dashboard/persyaratan/{{ $persyaratan->id }}" method="POST">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="persyaratan" class="form-label">Nama Persyaratan</label>
                            <input type="text" class="form-control @error('persyaratan') is-invalid @enderror"
                                id="persyaratan" name="persyaratan"
                                value="{{ old('persyaratan', $persyaratan->persyaratan) }}">
                            @error('persyaratan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary float-end">Simpan</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
