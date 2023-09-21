@php
    $url = url()->previous();
@endphp
@extends('layout.app')

@section('content')

  <!-- ===================================
              START THE HEADER
            ==================================== -->
            <header class="default heade-sticky header-dark">
                <div class="un-title-page go-back">
                    <a href="{{$url}}" class="icon">
                        <i class="ri-arrow-drop-left-line"></i>
                    </a>
                    <h1>Application</h1>
                </div>
                {{-- <div class="un-block-right">
                    <a href="/login" class="btn nav-link text-light size-14 weight-500 pe-0">Sign In</a>
                </div> --}}
            </header>
            <!-- ===================================
              START THE SPACE STICKY
            ==================================== -->
            <div class="space-sticky"></div>
            <!-- ===================================
              START THE FORM
            ==================================== -->
            <form class="application-form">
            <section class="un-creator-ptofile">
                <!-- head -->
                <div class="head">
                    <div class="cover-image d-flex align-items-center justify-content-center overlay">
                        <img id="cover-preview" src="/images/other/20.jpg" alt="cover image">
                        <div class="position-absolute">
                            <button type="button" class="btn btn-upload-text">
                                <input id="cover-input" type="file" name="cover">
                                <span>Upload cover photo</span>
                            </button>
                        </div>
                    </div>

                    <div class="text-user-creator">
                        <div class="d-flex align-items-center">
                            <div class="user-img d-flex align-items-center justify-content-center position-relative">
                                <img id="avatar-preview" src="/images/avatar/avatar.png" alt="creator image">
                                <div class="position-absolute">
                                    <button type="button" class="btn btn-upload-icon">
                                        <input id="avatar-input" type="file" name="avatar" required>
                                        <div class="icon">
                                            <i class="ri-camera-line"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="text">
                                <h3 class="size-15 weight-500">Upload Profile Photo</h3>
                                <p class="size-11 weight-400">We recommend a 300x300px JPG, PNG, SVG, WEBP or GIF (1MB
                                    max size)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="account-section  padding-20" style="background: white">
                <div class="display-title">
                    <span class="name_step">Step 3 of 3</span>
                    <h1 class="text-dark">Apply</h1>

                </div>
                <div class="content__form margin-t-40">

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="fname" value="{{$_GET['fname']}}">
                        <input type="hidden" name="lname" value="{{$_GET['lname']}}">
                        <input type="hidden" name="email" value="{{$_GET['email']}}">
                        <input type="hidden" name="category" value="{{$_GET['category']}}">
                        <input type="hidden" name="country" value="{{$_GET['country']}}">
                        <input type="hidden" name="phone" value="{{$_GET['phone']}}">
                        <div class="form-group icon-left">
                            <label>Full Name</label>
                            <div class="input_group">
                                <input type="text" name="fullname" class="form-control" placeholder='e. g. "John doe"' value="{{ucwords($_GET['fname'].' '.$_GET['lname'])}}" disabled>
                                <div class="icon">
                                    <i class="ri-user-3-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group icon-left">
                            <label>About</label>
                            <textarea name="about" rows="3" class="form-control" placeholder="Write about what you do..." required></textarea>
                        </div>
                        <div class="form-group icon-left">
                            <label>Channel name</label>
                            <input type="text" name="channel" class="form-control" placeholder="eg. Boom 500 signals" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn  btn-sm btn-sm-arrow bg-primary" style="width: 100%">

                                <p>Finish

                                </p>
                                <div class="ico">
                                    <i class="ri-arrow-drop-right-line"></i>
                                </div>
                            </button>
                        </div>

                </div>
            </section>
        </form>
@endsection
