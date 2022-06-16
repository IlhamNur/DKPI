@extends('login/layouts/main')

@section('title', 'Halaman Daftar')

@section('container')
<br />
<br />
<div class="container3">
    <input type="checkbox" id="flip">
    <div class="cover">
        <div class="front">
            <img src="{{asset('assets3/images/signup.jpg')}}" alt="">
            <div class="text">
                <span class="text-1">DKPI - UNS</span>
            </div>
        </div>
    	<div class="back">
            <img class="backImg" src="{{asset('assets3/images/signup.jpg')}}" alt="">
            <div class="text">
                <span class="text-1">DKPI - UNS</span>
            </div>
        </div>
    </div>
    <div class="forms">
        <div class="form-content">
            <div class="login-form">
                <div class="title">Daftar</div>
                <form method="POST" action="/register">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="bi bi-person-fill"></i>
                            <input class="@error('name')is-invalid @enderror" type="text" name="name"
                                placeholder="Masukkan Nama" id="name" value="{{ old('name') }}" required>
                          @error('name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      	@enderror
                        </div>
                        <div class="input-box">
                            <i class="bi bi-envelope-fill"></i>
                            <input type="email" name="email" placeholder="Masukkan alamat email yang valid" id="email"
                                autofocus required value="{{ old('email') }}" />
                            @error('email')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                      		@enderror
                        </div>
                        <div class="input-box">
                            <i class="bi bi-lock-fill"></i>
                            <input type="password" name="password" id="password" placeholder="Kata Kunci" required />
                          	@error('password')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                        </div>
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="button input-box">
                            <input type="submit" value="Daftar">
                        </div>
                    </div>
                </form>
              	<div class="text sign-up-text">Ingin masuk dengan akun lain? <label for="flip"><span>Masuk</span></label></div>
            </div>
            <div class="signup-form">
                <div class="title">Masuk</div>
                <form method="POST" action="/login" enctype="multipart/form-data">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box @error('email') is-invalid @enderror">
                            <i class="bi bi-envelope-fill"></i>
                            <input type="email" name="email" placeholder="Masukkan alamat email yang valid" id="email"
                                autofocus required value="{{ old('email') }}" />
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <i class="bi bi-lock-fill"></i>
                            <input type="password" name="password" id="password" placeholder="Kata Sandi" required />
                        </div>
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="button input-box">
                            <input type="submit" value="Kirim">
                        </div>
                      	<!-- <div class="text sign-up-text">Tidak punya akun? <label for="flip"><span>Daftar sekarang</span></label></div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
