@extends('layouts.app')

@section('auth')
    <!-- Outer Row -->
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
                            <h3 class="h4 text-gray-900 mt-2 mb-2 pb-2 pb-md-0 mb-md-2">Login Sistem Antrian Dukcapil
                            </h3>
                            <hr>
                        </div>
                        <form action="{{ route('login') }}" class="user" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Masukkan Alamat Email ...">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password"
                                    class="form-control @error('password') is-invalid @enderror"id="password"
                                    name="password" placeholder="Masukkan Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Remember
                                        Me</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
                            <a class="btn btn-danger btn-user btn-block" href="/register" role="button">Belum punya Akun?
                                Daftar!</a>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
