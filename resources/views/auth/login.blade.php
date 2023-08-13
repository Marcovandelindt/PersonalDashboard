@extends('layouts.app')

@section('content')
    <div class="login-inner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="login-form-wrapper px-xl-5">
                        <div class="intro mb-4">
                            <h1>Good to see you again!</h1>
                        </div>

                        <div class="form">
                            <form action="#" method="POST">
                                @csrf

                                <div class="form-group mb-4">
                                    <label for="email" class="fw-bold">E-mail address <sup>*</sup></label>
                                    <input type="email" name="email" id="email"
                                           class="form-control custom-form-control mt-2"
                                           value="{{ request()->old('email') }}">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="password" class="fw-bold">Password <sup>*</sup></label>
                                    <input type="password" name="password" id="password"
                                           class="form-control custom-form-control mt-2">
                                </div>
                            </form>

                            <div class="form-group d-flex justify-content-end">
                                <input type="submit" class="btn custom-login-btn" value="Login!">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/auth.jpg') }}" alt="Login">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
