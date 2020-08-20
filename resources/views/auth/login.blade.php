@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 text-center">
                <h1 class="font-weight-bold mb-0">MyCars</h1>
                <p>Vorsprung durch Technik</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="text-center mb-5"> Sign In</h3>
                        <form method="POST" autocomplete="off" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row mb-5">
                                <div class="col-md-12">
                                    <div class="input-group mb-2">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required
                                               placeholder="Email address">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                @
                                            </div>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <div class="col-md-12">
                                    <div class="input-group mb-2">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required
                                               placeholder="Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-user-secret"></i>
                                            </div>
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-dark btn-block p-3 mb-3">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6 text-center">
                <span class="mt-2">Don't Have an account?<a href="/register"> Sign Up</a></span>
            </div>
        </div>
    </div>
@endsection
