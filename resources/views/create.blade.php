@php
    $user = Session::get('user');
    $data = data($user);
@endphp

@extends('layout.main')

@section('content')
    @section('header')
        @include('partials.header', ['title' => 'Send Signal'])
    @endsection   

    <form class="send-signal" data-creator="{{Session::get('user')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <section class="un-create-collectibles">
               {{-- @if($_GET['type'] === 'multiple')
               	 <div class="form-group upload-form">
                    <h2>Upload file</h2>
                    <p>Choose your file to upload</p>
                    <div class="upload-input-form">
                        <input type="file">
                        <div class="content-input">
                            <div class="icon"><i class="ri-upload-cloud-line"></i></div>
                            <span>PNG, GIF, WEBP, MP4 or MP3. Max 50mb.</span>
                        </div>
                    </div>

                    <div class="uploaded-image mt-3">
                        <picture>
                            <source srcset="images/other/1.webp" type="image/webp">
                            <img src="images/other/1.jpg" alt="">
                        </picture>
                        <button type="clear" class="btn icon-clear">
                            <i class="ri-delete-bin-line"></i>
                        </button>
                    </div>

                </div>
               @endif --}}

                <div class="form-group">
                    <label>Signal Title</label>
                    <input type="text" class="form-control" name="title" placeholder='e. g. "Boom 500"' required>
                </div>
                <div class="form-group">
                    <label>Description <span class="size-11"></span></label>
                    <textarea class="form-control" rows="3"
                        placeholder='e. g. "Sell now"' name="desc" required></textarea>
                </div>

               	<div class="form-group">
               		<button type="submit" class="btn btn-bid-items"><p>Send now</p>
                        <div class="ico">
                            <i class="ri-arrow-drop-right-line"></i>
                        </div></button>
               	</div>
            </section>  
        </form>
               
@endsection