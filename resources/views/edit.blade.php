@php
    $user = Session::get('user');
    $data = data($user);
@endphp

@extends('layout.main')

@section('content')
    @section('header')
        @include('partials.header', ['title' => 'Edit Profile'])
    @endsection

    <form class="update-form">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <section class="un-creator-ptofile">
                <!-- head -->
                <div class="head">
                    <div class="cover-image d-flex align-items-center justify-content-center overlay">
                        <img id="cover-preview" src="{{cover($data->id)}}" alt="cover image">
                       
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
                                <img id="avatar-preview" src="{{avatar($data->id)}}" alt="creator image">
                                <div class="position-absolute">
                                     <button type="button" class="btn btn-upload-icon">
                                        <input id="avatar-input" type="file" name="avatar">
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

            <section class="padding-20 form-edit-profile margin-b-20">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="fname" value="{{ucfirst($data->fname)}}" placeholder="Enter your first name" required>
                </div>  
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lname" value="{{ucfirst($data->lname)}}" placeholder="Enter your last name" required>
                </div>
               
               @if(!is_subscriber(Session::get('user')))
                <div class="form-group">
                    <label>Bio</label>
                    <textarea class="form-control" name="about" rows="3" placeholder="Tell us about you" required>{{$data->about}}</textarea>
                </div>
                
                <div class="bk-social-networks">
                    <h3>Your channel</h3><hr>
                    <div class="form-group with_icon">
                        <label>Duration (Weeks)</label>
                        <select name="duration" class="form-control" required>
                            <option value="{{$data->duration}}">{{$data->duration}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="form-group with_icon">
                        <label>Price</label>
                        <div class="input_group">
                            <input type="text" name="price" class="form-control" placeholder="0.00" value="{{$data->price == null ? '0.00' : $data->price}}" required>
                            <div class="icon">
                                $
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <button type="submit" aria-label="profile" class="btn btn-bid-items">
                        <p>Update Profile</p>
                        <div class="ico">
                            <i class="ri-arrow-drop-right-line"></i> 
                        </div>
                    </button>
                    </div>
                </div>

            </section>
        </form>
            <!-- ===================================
              START THE FOOTER - BUTTONS
            ==================================== -->
            
@endsection