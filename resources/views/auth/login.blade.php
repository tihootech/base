@extends('layouts.auth')

@section('title')
    ورود به حساب کاربری
@endsection

@section('content')
    <section class="bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="wrapper-page">
                        <div class="account-pages">
                            <div class="account-box">
                                <div class="card m-b-30">
                                    <div class="card-body">

                                        <div class="card-title text-center mb-4">
                                            <img src="assets/images/logo_sm_2.png">
                                            <h5 class="mt-3"><b> ورود به حساب کاربری </b></h5>
                                        </div>

                                        @include('fragments.errors_and_messages')

                                        <form class="form mt-5 contact-form" method="post" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group ">
                                                <div class="col-sm-12">
                                                    <input class="form-control form-control-line" type="text" name="email" value="{{old('email')}}" placeholder="نام کاربری / ایمیل" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-sm-12">
                                                    <input class="form-control form-control-line" name="password" type="password" placeholder="رمزعبور" required="required">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-12">
                                                    <label class="cr-styled">
                                                        <input type="checkbox" name="remember">
                                                        <i class="fa"></i>
                                                        مرا به خاطر بسپار
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12 mt-4">
                                                    <button class="btn btn-primary btn-block" type="submit">ورود</button>
                                                </div>
                                            </div>

                                            @if (Route::has('password.request'))
                                                <div class="form-group">
                                                    <div class="col-sm-12 mt-4 text-center">
                                                        <a href="#"><i class="fa fa-lock m-r-5"></i> فراموشی رمزعبور </a>
                                                    </div>
                                                </div>
                                            @endif



                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
