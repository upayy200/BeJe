@extends('layout.auth_layout')
@section('title', 'Daftar')

<div style="margin-top:12rem; margin-bottom: 8rem" class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 text-center">
            <h1 class="text-center">{{ __('SOK SOK ATH') }}</h1>
            <div class="card-transparent mt-5">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- auto assign role (customer) --}}
                        <input type="hidden" id="role" name="role" value="customer">
                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- auto assign role (customer) --}}

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <input style="height:4rem" id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="NGARAN">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <input style="height:4rem" id="no_hp" type="text"
                                    class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                                    value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus
                                    placeholder="KOSONG DELAPAN BERAPA?">

                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <input style="height:4rem" id="lokasi" type="text"
                                    class="form-control @error('lokasi') is-invalid @enderror" name="lokasi"
                                    value="{{ old('lokasi') }}" required autocomplete="lokasi" autofocus
                                    placeholder="SERLOK?">

                                @error('lokasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mt-4 justify-content-center">
                            <div class="col-md-6">
                                <input style="height:4rem" id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3 mt-4 justify-content-center">

                            <div class="col-md-6">
                                <input style="height:4rem" id="username" type="text"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" required autocomplete="username"
                                    placeholder="USERNAME">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mt-4 justify-content-center">


                            <div class="col-md-6">
                                <input style="height:4rem" id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="PW">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mt-4 justify-content-center">

                            <div class="col-md-6">
                                <input style="height:4rem" id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="SARUAKEUKMN PW">
                            </div>
                        </div>
                        <div class="row mb-3 mt-4 justify-content-center">
                            <p style="font-size: 1.2rem" class="align-middle">Have an account? <a
                                    style="font-size: 1.2rem" class="btn btn_link_custom"
                                    href="{{ route('login') }}">Login</a></p>
                        </div>

                        <div class="row mb-0 mt-3 justify-content-center">
                            <div class="col-md-6">
                                <button style="height: 4rem; font-size: 1.5rem;color: #ff0000; border-radius:1rem"
                                    type="submit" class="btn btn-block login_btn">
                                    {{ __('DER AH') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
