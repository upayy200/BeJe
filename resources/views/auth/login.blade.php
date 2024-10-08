@extends('layout.auth_layout')
@section('title', 'Login')

<div style="margin-top:12rem; margin-bottom: 8rem" class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h1 style="font-size: 4rem" class="text-center">KAYU MASUK -> LOG IN</h1>
            <div class="card-transparent mt-5">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <input style="height:4rem" id="username" type="text"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" required autocomplete="username" autofocus
                                    placeholder="NGARAN">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 mt-5 justify-content-center">

                            <div class="col-md-6">
                                <input style="height:4rem" id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="PW">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 text-center justify-content-center">
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label mt-1" for="remember">
                                        &nbsp;&nbsp;{{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                @if (Route::has('password.request'))
                                    <a class="btn btn_link_custom" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-6">
                                <button style="height: 4rem; font-size: 1.5rem;color: #ff0000; border-radius:1rem"
                                    type="submit" class="btn btn-block login_btn">
                                    {{ __('ASUP') }}
                                </button>
                                <a href="{{ route('register') }}"
                                    style="height: 4rem; font-size: 1.5rem;color: #000000; border-radius:1rem"
                                    class="btn btn-block register_btn mt-5">
                                    {{ __('CAN BOGA AKUN') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
