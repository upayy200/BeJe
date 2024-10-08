@extends('layout.auth_layout')
@section('title', 'Masukan Email')

<div style="margin-top:12rem; margin-bottom: 8rem" class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h1 style="color: #224957; font-size: 4rem" class="text-center">Masukan Email</h1>
            <div class="card-transparent mt-5">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <input style="height:4rem" id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-6 mt-5">
                                <button style="height: 4rem; font-size: 1.5rem;color: #fff; border-radius:1rem"
                                    type="submit" class="btn btn-block login_btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-6 mt-5">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
