@php
    $url = url()->previous();
@endphp

@extends('layout.app')

@section('content')
     <!-- ===================================
              START THE HEADER
            ==================================== -->
            <header class="default heade-sticky">
                <div class="un-title-page go-back">
                    <a href="{{$url}}" class="icon">
                        <i class="ri-arrow-drop-left-line"></i>
                    </a>
                    <h1></h1>
                </div>
                <div class="un-block-right">
                    <a href="/register" class="btn nav-link size-14 weight-500 pe-0">Create acccount</a>
                </div>
            </header>
            <!-- ===================================
              START THE SPACE STICKY
            ==================================== -->
            <div class="space-sticky"></div>
    <form class="login-form next-form-login">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="email" value="{{$_GET['email']}}">
    <section class="account-section padding-20">
        <div class="display-title">
            <span class="name_step">Step 2 of 2</span>
            <h1>Enter your password</h1>
            <p>Enter your credentials to continue</p>
        </div>
        <div class="display_user_account">
            <img class="img_user" src='{{$_GET['avatar']}}' alt=''>
            <div class="display-text">
                <h2>Personal account</h2>
                <p>{{$_GET['email']}}</p>
            </div>
        </div>
        <div class="content__form margin-t-24">

                <div class="form-group icon-left">
                    <label>Password</label>
                    <div class="input_group">
                        <input type="password" name="password" class="form-control" placeholder='e. g. "John$99*04"' required>
                        <div class="icon">
                            <i class="ri-lock-password-line"></i>
                        </div>
                        <div class="icon">
                            <i class="ri-eye"></i>
                        </div>
                    </div>
                </div>

        </div>
    </section>

    <footer class="footer-account">
        <div class="env-pb">
            <div class="display-actions">
                <button type="submit" class="btn btn-sm-arrow bg-primary">
                    <p>Sign In</p>
                    <div class="ico">
                        <i class="ri-arrow-drop-right-line"></i>
                    </div>
                </button>
            </div>

        </div>
    </footer>
</form>
@endsection
