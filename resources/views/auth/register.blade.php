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
                        <h3 class="text-center mb-5"> Sign Up</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row mb-4">
                                <div class="col-md-12">

                                    <div class="input-group mb-2">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name"
                                               placeholder="First name">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <div class="col-md-12">
                                    <div class="input-group mb-2">
                                        <input id="surname" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="surname"
                                               value="{{ old('surname') }}" required autocomplete="surname"
                                               placeholder="Last name">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-user-plus"></i>
                                            </div>
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-12">
                                    <div class="input-group mb-2">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required
                                               placeholder="Email address"
                                               autocomplete="email">
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

                            <div class="form-group row mb-4">
                                <div class="col-md-12">
                                    <div class="input-group mb-2">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               placeholder="Password"
                                               required autocomplete="new-password">
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
                                <div class="col-md-12">
                                    <div class="input-group mb-2">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation"
                                               placeholder="Confirm password"
                                               required autocomplete="new-password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-user-secret"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-dark btn-block mb-4 p-3">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6 text-center">
                <span class="mt-2">Already Have an account?<a href="/"> Sign In</a></span>
            </div>
        </div>
    </div>
@endsection
