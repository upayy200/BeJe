@extends('layout.auth_layout')
@section('title', 'Reset Password')

<div style="margin-top:12rem; margin-bottom: 8rem" class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h1 style="color: #224957; font-size: 4rem" class="text-center">Reset Password</h1>
            <div class="card-transparent mt-5">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <input style="height:4rem" id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email Address">
                                @error('email')
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
                                    required autocomplete="new-password" placeholder="New Password">
                                @error('password')
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 mt-5 justify-content-center">
                            <div class="col-md-6">
                                <input style="height:4rem" id="password-confirm" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @error('password')
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                </div>
                            </div>
                        @enderror
                        <div class="row mt-0 justify-content-center">
                            <div class="col-md-6 mt-5">
                                <button style="height: 4rem; font-size: 1.5rem;color: #fff; border-radius:1rem"
                                    type="submit" class="btn btn-block login_btn">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>