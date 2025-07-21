@extends('layouts.app')

@section('auth')
    {{-- <div class="card o-hidden border-0 shadow-lg my-5"> --}}
    {{-- <div class="card-body p-0"> --}}
    <!-- Nested Row within Card Body -->
    {{-- <div class="row"> --}}
    {{-- <div class="col-lg-5 d-none d-lg-block">
                    <img src="{{ asset('dashboardAssets/img/Logo_Jeneponto.png') }}" alt=""
                        style="width: 100%; height: 100%; object-fit: contain; align-self: center;">
                </div> --}}
    {{-- <div class="col-lg-12">
                    <div class="p-2">
                        <div class="col-lg-12 text-center">
                            <img src="{{ asset('dashboardAssets/img/Logo_Jeneponto.png') }}" alt=""
                                style="width: 20%; height: 20%; object-fit: contain; align-self: center;">
                        </div>
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun Sistem Antrian Dukcapil </h1>
                        </div>
                        <form action="{{ route('register') }}" class="user" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="number" onKeyPress="if(this.value.length==16) return false;"
                                    class="form-control form-control-user @error('nik')is-invalid @enderror" id="nik"
                                    name="nik" placeholder="16 Digit NIK Anda ...">
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="name"
                                    class="form-control form-control-user @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Nama Anda ...">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="tempat_lahir"
                                    class="form-control form-control-user @error('tempat_lahir') is-invalid @enderror"
                                    id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir Anda ...">
                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')"
                                    class="form-control form-control-user @error('tanggal_lahir') is-invalid @enderror"
                                    id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir Anda ...">
                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1">
                                    <label class="form-check-label" for="jenis_kelamin1">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2"
                                        checked>
                                    <label class="form-check-label" for="jenis_kelamin2">
                                        Perempuan
                                    </label>
                                </div>
                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-user @error('alamat') is-invalid @enderror"
                                    id="alamat" name="alamat" placeholder="Alamat Anda ...">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email"
                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Alamat Email ...">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <input type="password"
                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password"
                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                    id="password" name="password_confirmation" placeholder="Password">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-danger btn-user btn-block">Daftar</button>
                            <a class="btn btn-primary btn-user btn-block" href="/login" role="button">Sudah Punya Akun,
                                Masuk !</a>
                        </form>
                        <hr>
                    </div>
                </div> --}}
    {{-- <section class="vh-100 gradient-custom"> --}}
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
                            <h3 class="h4 text-gray-900 mb-4 pb-2 pb-md-0 mb-md-5">Buat Akun Sistem Antrian Dukcapil </h3>
                        </div>
                        <form action="{{ route('register') }}" class="user" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-2">

                                    <div class="form-group">
                                        <input type="number" onKeyPress="if(this.value.length==16) return false;"
                                            class="form-control form-control-user @error('nik')is-invalid @enderror"
                                            id="nik" name="nik" placeholder="16 Digit NIK Anda ...">
                                        @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 mb-2">

                                    <div class="form-group">
                                        <input type="name"
                                            class="form-control form-control-user @error('name') is-invalid @enderror"
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
                                            class="form-control form-control-user @error('tempat_lahir') is-invalid @enderror"
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
                                            class="form-control form-control-user @error('tanggal_lahir') is-invalid @enderror"
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
                                        <input type="text"
                                            class="form-control form-control-user @error('alamat') is-invalid @enderror"
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
                                        <select class="select2 form-control form-control-user" id="desa-kel"
                                            name="desa-kel" data-placeholder="Desa/Kelurahan Anda">
                                            <option></option>
                                            <option>Reactive</option>
                                            <option>Solution</option>
                                            <option>Conglomeration</option>
                                            <option>Algoritm</option>
                                            <option>Holistic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <select class="select2 form-control form-control-user" id="kecamatan"
                                            name="kecamatan" data-placeholder="Desa/Kelurahan Anda">
                                            <option></option>
                                            <option>Reactive</option>
                                            <option>Solution</option>
                                            <option>Conglomeration</option>
                                            <option>Algoritm</option>
                                            <option>Holistic</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-user @error('pekerjaan') is-invalid @enderror"
                                            id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan Anda ...">
                                        @error('pekerjaan')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control form-control-user @error('email') is-invalid @enderror"
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
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="password" name="password" placeholder="Password">
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
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="password" name="password_confirmation" placeholder="Ulangi Password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-2">
                                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit"
                                    value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                        <form>

                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="firstName" class="form-control form-control-lg" />
                                        <label class="form-label" for="firstName">First Name</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="lastName" class="form-control form-control-lg" />
                                        <label class="form-label" for="lastName">Last Name</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">

                                    <div data-mdb-input-init class="form-outline datepicker w-100">
                                        <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                                        <label for="birthdayDate" class="form-label">Birthday</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <h6 class="mb-2 pb-1">Gender: </h6>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="femaleGender" value="option1" checked />
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="maleGender" value="option2" />
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="otherGender" value="option3" />
                                        <label class="form-check-label" for="otherGender">Other</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="email" id="emailAddress" class="form-control form-control-lg" />
                                        <label class="form-label" for="emailAddress">Email</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">

                                    <select class="select form-control-lg">
                                        <option value="1" disabled>Choose option</option>
                                        <option value="2">Subject 1</option>
                                        <option value="3">Subject 2</option>
                                        <option value="4">Subject 3</option>
                                    </select>
                                    <label class="form-label select-label">Choose option</label>

                                </div>
                            </div>

                            <div class="mt-4 pt-2">
                                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- </section> --}}
    {{-- </div>
    </div>
    </div> --}}
@endsection
