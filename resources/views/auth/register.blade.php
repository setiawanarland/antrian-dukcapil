@extends('layouts.app')

@section('auth')
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <div class="col-lg-12 text-center">
                            <img src="{{ asset('dashboardAssets/img/Logo_Jeneponto.png') }}" alt=""
                                style="width: 20%; height: 20%; object-fit: contain; align-self: center;">
                        </div>
                        <div class="text-center">
                            <h3 class="h4 text-gray-900 mt-2 mb-2 pb-2 pb-md-0 mb-md-2">Buat Akun Sistem Antrian Dukcapil
                            </h3>
                            <hr>
                        </div>
                        <form action="{{ route('register') }}" class="user" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-2">

                                    <div class="form-group">
                                        <input type="number" onKeyPress="if(this.value.length==16) return false;"
                                            class="form-control @error('nik')is-invalid @enderror" id="nik"
                                            name="nik" placeholder="16 Digit NIK Anda ...">
                                        @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 mb-2">

                                    <div class="form-group">
                                        <input type="name" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" placeholder="Nama Lengkap Anda ...">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <input type="tempat_lahir"
                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                            id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir Anda ...">
                                        @error('tempat_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">

                                    <div class="form-group">
                                        <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir Anda ...">
                                        @error('tanggal_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki"
                                            value="laki-laki" checked />
                                        <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                            value="perempuan" />
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                            id="alamat" name="alamat" placeholder="Alamat Anda ...">
                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <select
                                            class="form-control selectpicker show-tick show-menu-arrow  @error('kecamatan') is-invalid @enderror"
                                            id="kecamatan" name="kecamatan" data-live-search="true"
                                            title="Kecamatan Anda ..." data-size="5">
                                        </select>
                                        @error('kecamatan')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <select
                                            class="form-control selectpicker show-tick show-menu-arrow  @error('desa_kel') is-invalid @enderror"
                                            id="desa_kel" name="desa_kel" data-live-search="true" title="Desa Anda ..."
                                            data-size="5">
                                        </select>
                                        @error('desa_kel')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan"
                                            name="pekerjaan" placeholder="Pekerjaan Anda ...">
                                        @error('pekerjaan')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" placeholder="Alamat Email ...">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            name="password" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="password_confirmation" name="password_confirmation"
                                            placeholder="Ulangi Password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-2">
                                <button type="submit" class="btn btn-danger btn-user btn-block">Daftar</button>
                                <a class="btn btn-primary btn-user btn-block" href="/login" role="button">Sudah Punya
                                    Akun,
                                    Masuk !</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
