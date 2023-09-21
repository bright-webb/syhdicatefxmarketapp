@extends('layout.main')
    @php
        $user = Session::get('user');
    @endphp
@section('content')
@if(is_subscriber(Session::get('user')))
     <div style="position: absolute; top: 0">
        <header class="default heade-sticky">
                <a href="/home">
                    <div class="un-item-logo">
                        <img class="logo-img light-mode" src="/images/logo.png" alt="">
                        <img class="logo-img dark-mode" src="/images/logo.png" alt="">
                    </div>
                </a>
                <div class="un-block-right">
                    <div class="un-notification">
                        <a href="/notification" aria-label="activity">
                            <i class="ri-notification-line"></i>
                        </a>
                        <span class="bull-activity"></span>
                    </div>
                    <div class="un-user-profile">
                        <a href="/profile" aria-label="profile" data-turbolinks="false">
                            <img class="img-avatar" src="{{avatar($user)}}" alt="">
                        </a>
                    </div>
                    <!-- menu-sidebar -->
                    <div class="menu-sidebar">
                        <button type="button" name="sidebarMenu" aria-label="sidebarMenu" class="btn"
                            data-bs-toggle="modal" data-bs-target="#mdllSidebar-connected">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="9.3" viewBox="0 0 19 9.3">
                                <g id="Group_8081" data-name="Group 8081" transform="translate(-329 -37)">
                                    <rect id="Rectangle_3986" data-name="Rectangle 3986" width="19" height="2.3"
                                        rx="1.15" transform="translate(329 37)" fill="#222032" />
                                    <rect id="Rectangle_3987" data-name="Rectangle 3987" width="19" height="2.3"
                                        rx="1.15" transform="translate(329 44)" fill="#222032" />
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>
     </div> 
@else
    <div style="position: absolute; top: 0">
        @include('partials.header', ['title' => 'Discover'])
    </div>
@endif
<section class="unSwiper-cards margin-t-20">
    <!-- un-title-default -->
    <div class="un-title-default">
        <div class="text">
            <h2>Discover</h2>
            <p>Latest Signal Givers</p>
        </div>
        <div class="un-block-right">
            <a href="/search?page=Discover" class="icon-back" aria-label="iconBtn" data-turbolinks="false">
                <i class="ri-arrow-drop-right-line"></i>
            </a>
        </div>
    </div>
    <div class="content-cards-NFTs margin-t-20">
        <div class="swiper cardGradual">
            <div class="swiper-wrapper">
                @if(count($users))
                    @foreach($users as $user)
                         <div class="swiper-slide">
                    <!-- item-card-gradual -->
                    <div class="item-card-gradual">
                        <!-- <div class="head-card"></div> -->
                        <a href="/page?user={{name($user->id)}}&id={{$user->id}}" class="body-card" data-turbolinks="false">
                            <div class="cover-nft">
                                <img class="img-cover" src="{{cover($user->id)}}" alt="cover image">

                            </div>
                            <div class="title-card-nft">
                                <div class="side-one">
                                    <h2>{{ucwords($user->channel)}}</h2>
                                </div>

                            </div>
                            <div class="creator-name">
                                <div class="image-user">
                                    <img class="img-avatar" src="{{avatar($user->id)}}" alt="">
                                    <div class="icon">
                                        <i class="ri-checkbox-circle-fill"></i>
                                    </div>
                                </div>
                                <h3>{{ucwords(name($user->id))}}</h3>
                            </div>
                        </a>
                        <div class="footer-card">
                            <div class="starting-bad">
                                <h4>$ {{$user->price}}</h4>
                            </div>
                            <div class="btn-like-click">
                                <div class="btnLike">
                                    <input type="checkbox">
                                    <div class="color-text rounded-pill bg-snow btn-xs-size">{{subscribers($user->id)}} Subs</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                    @endforeach
                @else

                @endif
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>
<!-- ===================================
  START THE CREATORES
==================================== -->
<section class="margin-t-20 unList-creatores">
    <!-- un-title-default -->
    <div class="un-title-default">
        <div class="text">
            <h2>Popuplar Profiles</h2>
            <p>You might want to subscribe to these</p>
        </div>
        <div class="un-block-right">
            <a href="page-creators.html" class="icon-back" aria-label="iconBtn">
                <i class="ri-arrow-drop-right-line"></i>
            </a>
        </div>
    </div>

    <div class="content-list-creatores">
        <ul class="nav flex-column">
            @if(count($users)>0)
                @foreach($users as $user)
                    <li class="nav-item">
                    <a class="nav-link" href="page-creator-profile.html">
                        <div class="item-user-img">
                            <picture>
                                <source srcset="{{avatar($user->id)}}" type="image/webp">
                                <img class="avt-img" src="{{avatar($user->id)}}" alt="">
                            </picture>
                            <div class="txt-user">
                                <h5>{{name($user->id)}}</h5>
                                <p>$ {{$user->price}}</p>
                            </div>
                        </div>
                        <div class="other-option">
                            <div class="color-text rounded-pill bg-snow btn-xs-size">{{subscribers($user->id)}} Subs</div>
                        </div>
                    </a>
                </li>
                @endforeach
            @else

            @endif
        </ul>
    </div>
</section>
@endsection
