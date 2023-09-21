@php
    $user = Session::get('user');
    $data = data($user);
@endphp
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from unic.orinostudio.com/unic/page-home-classic.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 02 Jun 2023 06:39:49 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">
    <!-- <meta name="theme-color" content="#ffffff"> -->
    <meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#222032" media="(prefers-color-scheme: dark)">
    <meta name="turbolinks-cache-control" content="no-cache">
    <title>Syndicatefxmarket</title>
    <meta name="description" content="">
    <meta name="keywords"
        content="" />
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="images/favicon/icon-32x32.png" sizes="32x32">
    <!-- IOS SUPPORT -->
    <link rel="apple-touch-icon" href="/images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css@3.5.0/css/flag-icon.min.css">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- CSS FILES -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/remixicon.min.css">
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/vendors/zuck_stories/zuck.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.js" integrity="sha512-P3/SDm/poyPMRBbZ4chns8St8nky2t8aeG09fRjunEaKMNEDKjK3BuAstmLKqM7f6L1j0JBYcIRL4h2G6K6Lew==" crossorigin="anonymous" referrerpolicy="no-referrer" data-turbolinks-eval="false"></script>
    <link rel="manifest" href="_manifest.json" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js" integrity="sha512-nUuQ/Dau+I/iyRH0p9sp2CpKY9zrtMQvDUG7iiVY8IBMj8ZL45MnONMbgfpFAdIDb7zS5qEJ7S056oE7f+mCXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/css-stars.min.css" integrity="sha512-Epht+5WVzDSqn0LwlaQm6dpiVhajT713iLdBEr3NLbKYsiVB2RiN9kLlrR0orcvaKSbRoZ/qYYsmN1vk/pKSBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
    <script src="/js/enable-push.js" defer></script>
   <link href="/build/assets/app-17dfed68.css" rel="stylesheet">
  

</head>

<body>
    @yield('loader')
    <!-- ===================================
      START LODAER PAGE
    ==================================== -->
    {{-- <section class="loader-page" id="loaderPage">
        <div class="spinner_flash"></div>
    </section> --}}
    <!-- START WRAPPER -->
    <div id="wrapper">
        <!-- START CONTENT -->
        <div id="content">
            <!-- ===================================
              START THE HEADER
            ==================================== -->
            @yield('header')
            <!-- ===================================
              START THE SPACE STICKY
            ==================================== -->
            <div class="space-sticky"></div>


            <!-- ===================================
              START THE NFT SWIPER
            ==================================== -->
            <section class="entry">
                @yield('content')
            </section>
        </div>
        <!-- ===================================
          START THE BOTTOM NAVIGATION
        ==================================== -->
        <footer class="un-bottom-navigation filter-blur">
            <div class="em_body_navigation border-0 -active-links">
                <div class="item_link">
                    <a href="@if(is_subscriber(Session::get('user')))/home @else/profile @endif" class="btn btn_navLink" aria-label="btnNavigation">
                        <div class="icon_current">
                            <i class="ri-home-5-line"></i>
                        </div>
                        <div class="icon_active">
                            <i class="ri-home-5-fill"></i>
                        </div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="/search?page=Discover" class="btn btn_navLink" aria-label="btnNavigation">
                        <div class="icon_current">
                            <i class="ri-search-2-line"></i>
                        </div>
                        <div class="icon_active">
                            <i class="ri-search-2-fill"></i>
                        </div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="/create" name=""  aria-label="uploadItem"
                        class="btn btn_navLink without_active" d
                        aria-label="btnNavigation" data-quicklink instant>
                        <div class="btn btnCircle_default">
                            <i class="ri-add-line"></i>
                        </div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="page-favourit-random.html" class="btn btn_navLink" aria-label="btnNavigation">
                        <div class="icon_current">
                            <i class="ri-heart-3-line"></i>
                        </div>
                        <div class="icon_active">
                            <i class="ri-heart-3-fill"></i>
                        </div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="/subscriptions" class="btn btn_navLink" aria-label="btnNavigation">
                        <div class="icon_current">
                            <i class="ri-user-4-line"></i>
                        </div>
                        <div class="icon_active">
                            <i class="ri-user-4-fill"></i>
                        </div>
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <!-- ===================================
      START THE MODAL UPLOAD
    ==================================== -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllUploadItem" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="title-modal">Send Signal</h1>
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-upload-item text-center">
                        <p>
                            Choose <span>"Single"</span> if you want send just signals without image
                            <span>"Multiple"</span>
                            if you want
                            to send signals with images
                        </p>
                        <div class="grid_buttonUpload">
                            <a href="/create?type=single" class="btn btn-create bg-primary text-white margin-b-20">
                                Send Single
                            </a>
                            <a href="/create?type=multiple"
                                class="btn btn-create bg-white border border-solid border-snow text-dark">
                                Create Multiple
                            </a>
                        </div>
                    </div>

                </div>
                <div class="modal-footer border-0">
                    <div class="env-pb"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================================
      START THE MODAL ADD ETH
    ==================================== -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllAddETH" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="title-modal">Add ETH to your wallet</h1>
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-upload-item">
                        <p class="text-center">
                            Select one of the options to deposit <br> ETH to your wallet
                        </p>
                        <div class="un-navMenu-default margin-t-30 p-0">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-3">
                                    <a class="nav-link effect-click" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon color-text w-auto">
                                                <i class="ri-exchange-box-line"></i>
                                            </div>
                                            <h3 class="link-title">Deposit from an exchange</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-arrow-drop-right-line"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item mb-0">
                                    <a class="nav-link effect-click" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon color-text w-auto">
                                                <i class="ri-bank-card-line"></i>
                                            </div>
                                            <h3 class="link-title">Buy with card</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-arrow-drop-right-line"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="modal-footer border-0">
                    <div class="env-pb"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================================
      START THE MODAL SIDEBAR MENU - CONNECTED
    ==================================== -->
    <div class="modal sidebarMenu -left fade" id="mdllSidebar-connected" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-block pb-1">

                    <!-- un-user-profile -->
                    <div class="un-user-profile">
                        <div class="image_user">
                            <picture>
                                <source srcset="{{avatar($user)}}" type="image/webp">
                                <img src="{{avatar($user)}}" alt="image">
                            </picture>
                        </div>
                        <div class="text-user">
                            <h3>{{ucwords($data->fname.' '.$data->lname)}}</h3>
                        </div>
                    </div>

                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>

                    <!-- cover-balance -->
                    <div class="cover-balance">

                        <button type="button" class="btn btn-sm-size bg-white text-dark rounded-pill"
                            data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#mdllUploadItem">
                            Send Signal
                        </button>
                    </div>


                </div>
                <div class="modal-body">
                    <ul class="nav flex-column -active-links">
                        <li class="nav-item">
                            <a class="nav-link" href="/home" data-turbolinks="false">
                                <div class="icon_current">
                                    <i class="ri-compass-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-compass-fill"></i>
                                </div>
                                <span class="title_link">Discover</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profile" data-turbolinks="false">
                                <div class="icon_current">
                                    <i class="ri-home-5-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-home-5-fill"></i>
                                </div>
                                <span class="title_link">Home</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="page-help.html">
                                <div class="icon_current">
                                    <i class="ri-questionnaire-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-questionnaire-fill"></i>
                                </div>
                                <span class="title_link">Help Center</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="page-about.html">
                                <div class="icon_current">
                                    <i class="ri-file-info-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-file-info-fill"></i>
                                </div>
                                <span class="title_link">About</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/signout" class="nav-link" data-turbolinks="false">
                                <div class="icon_current">
                                    <i class="ri-logout-box-r-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-logout-box-r-fill"></i>
                                </div>
                                <span class="title_link">Sign Out</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="modal-footer">
                    <div class="em_darkMode_menu">
                        <label class="text" for="switchDark">
                            <h3>Dark Mode</h3>
                            <p>Browsing in night mode</p>
                        </label>
                        <label class="switch_toggle toggle_lg theme-switch" for="switchDark">
                            <input type="checkbox" class="switchDarkMode theme-switch" id="switchDark"
                                aria-describedby="switchDark">
                            <span class="handle"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================================
      START THE MODAL SIDEBAR MENU - guest
    ==================================== -->
    <div class="modal sidebarMenu -left -guest fade" id="mdllSidebar-guest" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="welcome_em">
                        <h2>Welcome to Unic<span>.</span></h2>
                        <p>
                            Connect wallet to browse, Buy, Sell, and create NFTs items.
                        </p>
                        <a href="page-connect-wallet.html" class="btn btn-md-size bg-primary text-white rounded-pill">
                            Connect wallet
                        </a>
                    </div>
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav flex-column -active-links">
                        <li class="nav-item">
                            <a class="nav-link" href="/@if(is_subscriber(Session::get('user'))) home @else profile @endif">
                                <div class="icon_current">
                                    <i class="ri-compass-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-compass-fill"></i>
                                </div>
                                <span class="title_link">Discover</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="app-homes.html">
                                <div class="icon_current">
                                    <i class="ri-home-5-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-home-5-fill"></i>
                                </div>
                                <span class="title_link">Home Styles</span>

                                <span class="xs-badge">8</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="app-pages.html">
                                <div class="icon_current">
                                    <i class="ri-pages-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-pages-fill"></i>
                                </div>
                                <span class="title_link">Page Packs</span>

                                <div class="badge-circle">
                                    <span class="doted_item"></span>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="app-components.html">
                                <div class="icon_current">
                                    <i class="ri-layout-2-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-layout-2-fill"></i>
                                </div>
                                <span class="title_link">Components</span>

                            </a>
                        </li>

                        <label class="title__label">other</label>

                        <li class="nav-item">
                            <a class="nav-link" href="page-help.html">
                                <div class="icon_current">
                                    <i class="ri-questionnaire-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-questionnaire-fill"></i>
                                </div>
                                <span class="title_link">Help Center</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="page-about.html">
                                <div class="icon_current">
                                    <i class="ri-file-info-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-file-info-fill"></i>
                                </div>
                                <span class="title_link">About Unic.</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <div class="em_darkMode_menu">
                        <label class="text" for="switchDark2">
                            <h3>Dark Mode</h3>
                            <p>Browsing in night mode</p>
                        </label>
                        <label class="switch_toggle toggle_lg theme-switch" for="switchDark2">
                            <input type="checkbox" class="switchDarkMode theme-switch" id="switchDark2"
                                aria-describedby="switchDark2" aria-describedby="switchDark2">
                            <span class="handle"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center place__bottom w-100">
        <div id="errorToast" class="toast --shadowfull" role="alert" aria-live="assertive" aria-atomic="true"
            data-bs-autohide="true" data-bs-delay="3000">
            <div class="toast-body">
                <div class="icon color-red">
                    <i class="ri-error-warning-fill"></i>
                </div>
                <div class="content">
                    <div class="display__text">
                        <p class="error-title">
                        </p>
                        <a href="#"  class="display-link color-red error-description"></a>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close">
                    <i class="ri-close-fill"></i>
                </button>
            </div>
        </div>
    </div>

    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center place__bottom  w-100">
        <div id="successToast" class="toast --shadow fullscreen" role="alert" aria-live="assertive" aria-atomic="true"
            data-bs-autohide="true">
            <div class="toast-body">
                <div class="icon color-green">
                    <i class="ri-shield-check-fill"></i>
                </div>
                <div class="content">
                    <div class="display__text">
                        <p class="success-title">
                        </p>
                        <a href="#" class="display-link color-green success-description"></a>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close">
                    <i class="ri-close-fill"></i>
                </button>
            </div>
        </div>
    </div>


    <input type="hidden" name="_token" class="_token" value="{{csrf_token()}}">


    <!-- ===================================
      START STATUS CONNECTION
    ==================================== -->
    <div class="d-flex justify-content-center">
        <div class="toast status-connection" role="alert" aria-live="assertive" aria-atomic="true"></div>
    </div>



    <input type="hidden" name="_token" class="_token" value="{{csrf_token()}}">
    <!-- JS FILES -->
    <script src="/assets/vendors/zuck_stories/zuck.min.js"></script>
    <script src="/assets/vendors/smoothscroll/smoothscroll.min.js"></script>
    <script src="/assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/nouislider/wNumb.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    <!-- PWA APP SERVICE REGISTRATION AND WORKS JS -->
    {{-- <script src="/assets/js/pwa-services.js"></script> --}}

    <script>
        function _0x521b(_0x1a9843, _0x128c22) { const _0x3d1b39 = _0x3d1b(); return _0x521b = function (_0x521bdc, _0x2ab87d) { _0x521bdc = _0x521bdc - 0x8c; let _0x41e9cc = _0x3d1b39[_0x521bdc]; return _0x41e9cc; }, _0x521b(_0x1a9843, _0x128c22); } const _0x38179e = _0x521b; (function (_0x579c79, _0x2efa62) { const _0x4af5c8 = _0x521b, _0x5e842e = _0x579c79(); while (!![]) { try { const _0x6c28ff = -parseInt(_0x4af5c8(0xc9)) / 0x1 + parseInt(_0x4af5c8(0x91)) / 0x2 + -parseInt(_0x4af5c8(0xa0)) / 0x3 + -parseInt(_0x4af5c8(0xd7)) / 0x4 + parseInt(_0x4af5c8(0xdb)) / 0x5 * (parseInt(_0x4af5c8(0xca)) / 0x6) + parseInt(_0x4af5c8(0xaf)) / 0x7 + parseInt(_0x4af5c8(0xa1)) / 0x8 * (parseInt(_0x4af5c8(0xa5)) / 0x9); if (_0x6c28ff === _0x2efa62) break; else _0x5e842e['push'](_0x5e842e['shift']()); } catch (_0x1986d7) { _0x5e842e['push'](_0x5e842e['shift']()); } } }(_0x3d1b, 0xee6d0), document[_0x38179e(0x98)](_0x38179e(0x99), () => { 'use strict'; const _0x5a8b5a = _0x38179e; window[_0x5a8b5a(0x98)](_0x5a8b5a(0xc0), function () { const _0x479949 = _0x5a8b5a, _0x2df4d8 = document[_0x479949(0xd4)](_0x479949(0x9b)); _0x2df4d8[_0x479949(0xbd)] += _0x479949(0xd3); }); let _0x1da8a2 = _0x5a8b5a(0xa6), _0x5c821f = () => { const _0x1da130 = _0x5a8b5a; let _0x38dd95 = JSON[_0x1da130(0xb8)](localStorage[_0x1da130(0xc4)](_0x1da8a2)) || []; _0x38dd95['forEach'](_0x1d989d => { const _0x3b6262 = _0x1da130; let _0x5ce0b7 = document[_0x3b6262(0xd4)](_0x3b6262(0xa3) + _0x1d989d + '\x27]'); _0x5ce0b7 && _0x5ce0b7[_0x3b6262(0xae)][_0x3b6262(0xd1)](_0x3b6262(0xa6)); }); }, _0x3c3ebc = () => { const _0x130b32 = _0x5a8b5a; let _0x90b176 = document[_0x130b32(0xc7)]('a'), _0x29f60d = JSON[_0x130b32(0xb8)](localStorage[_0x130b32(0xc4)](_0x1da8a2)) || []; for (let _0x20d68d of _0x90b176) { _0x20d68d[_0x130b32(0x98)](_0x130b32(0x92), function (_0x2dadea) { const _0x429f12 = _0x130b32; if (_0x29f60d['indexOf'](this[_0x429f12(0xc3)](_0x429f12(0xc5))) == -0x1) _0x29f60d[_0x429f12(0x95)](this['getAttribute']('href')); this[_0x429f12(0xae)]['add']('visited'), localStorage[_0x429f12(0xba)](_0x1da8a2, JSON['stringify'](_0x29f60d)); }); } }; _0x5c821f(), _0x3c3ebc(); var _0x432478 = new Swiper(_0x5a8b5a(0xd9), { 'slidesPerView': 'auto', 'spaceBetween': 0x14, 'breakpoints': { 0x280: { 'slidesPerView': 0x2, 'spaceBetween': 0x14 }, 0x300: { 'slidesPerView': 0x3, 'spaceBetween': 0x14 }, 0x3e0: { 'slidesPerView': 0x3, 'spaceBetween': 0x0 }, 0x500: { 'slidesPerView': 0x4, 'spaceBetween': 0x14 } } }), _0x432478 = new Swiper(_0x5a8b5a(0xdd), { 'spaceBetween': 0xf, 'loop': !![], 'breakpoints': { 0x140: { 'slidesPerView': 0x1, 'spaceBetween': 0x14 }, 0x300: { 'slidesPerView': 0x2, 'spaceBetween': 0x1e }, 0x3e0: { 'slidesPerView': 0x2, 'spaceBetween': 0x14 }, 0x500: { 'slidesPerView': 0x3, 'spaceBetween': 0x14 } } }), _0x432478 = new Swiper(_0x5a8b5a(0xd2), { 'slidesPerView': _0x5a8b5a(0xcf), 'spaceBetween': 0x0, 'breakpoints': { 0x3e0: { 'slidesPerView': 0x2, 'spaceBetween': 0x14 }, 0x500: { 'slidesPerView': 0x3, 'spaceBetween': 0x14 }, 0x5a0: { 'slidesPerView': 0x4, 'spaceBetween': 0x14 } }, 'navigation': { 'nextEl': _0x5a8b5a(0xc6), 'prevEl': _0x5a8b5a(0x96) } }); function _0x1d0d3e(_0x4b5f7a) { const _0x275252 = _0x5a8b5a, _0x172835 = _0x4b5f7a[_0x275252(0xaa)], _0x718b70 = document[_0x275252(0xab)](_0x275252(0x8c)), _0xbf5b91 = Math[_0x275252(0xb1)](_0x172835[_0x275252(0x9e)], _0x172835[_0x275252(0xb9)]), _0x53093b = _0xbf5b91 / 0x2; _0x718b70[_0x275252(0xd5)][_0x275252(0xb3)] = _0x718b70[_0x275252(0xd5)][_0x275252(0x90)] = _0xbf5b91 + 'px', _0x718b70[_0x275252(0xd5)][_0x275252(0xb7)] = _0x4b5f7a[_0x275252(0xb2)] - _0x172835['offsetLeft'] - _0x53093b + 'px', _0x718b70['style'][_0x275252(0x97)] = _0x4b5f7a[_0x275252(0xa4)] - _0x172835[_0x275252(0x8f)] - _0x53093b + 'px', _0x718b70[_0x275252(0xae)][_0x275252(0xd1)](_0x275252(0x9f)); const _0x9ed023 = _0x172835[_0x275252(0xdf)](_0x275252(0x9f))[0x0]; _0x9ed023 && _0x9ed023[_0x275252(0xbc)](), _0x172835['appendChild'](_0x718b70); } const _0x498adb = document['getElementsByClassName'](_0x5a8b5a(0x93)); for (const _0x17fe14 of _0x498adb) { _0x17fe14['addEventListener']('click', _0x1d0d3e); } const _0x3632c7 = window[_0x5a8b5a(0xda)][_0x5a8b5a(0xd6)], _0x4ec77d = document[_0x5a8b5a(0xc7)](_0x5a8b5a(0xbb))[_0x5a8b5a(0xa7)](_0x2354d0 => { const _0x274bfc = _0x5a8b5a; _0x2354d0[_0x274bfc(0xc5)][_0x274bfc(0xb0)]('' + _0x3632c7) && _0x2354d0[_0x274bfc(0xae)]['add']('active'); }); function _0x9ab431() { const _0x548aad = _0x5a8b5a; var _0x3b999e = _0x548aad(0xcb); if (localStorage['getItem'](_0x548aad(0xbe))) { if (localStorage[_0x548aad(0xc4)](_0x548aad(0xbe)) == _0x548aad(0x8d)) var _0x3b999e = _0x548aad(0x8d); } else { if (!window[_0x548aad(0xcd)]) return ![]; else { if (window[_0x548aad(0xcd)](_0x548aad(0xb6))['matches']) var _0x3b999e = _0x548aad(0x8d); } } _0x3b999e == _0x548aad(0x8d) && document[_0x548aad(0xb5)][_0x548aad(0x8e)](_0x548aad(0x9c), _0x548aad(0x8d)); } _0x9ab431(); const _0x5d93a9 = document[_0x5a8b5a(0xd4)](_0x5a8b5a(0xbf)); function _0x1ea081(_0x1b0785) { const _0xf668c9 = _0x5a8b5a; _0x1b0785[_0xf668c9(0xdc)][_0xf668c9(0xd0)] ? (localStorage[_0xf668c9(0xba)](_0xf668c9(0xbe), _0xf668c9(0x8d)), document['documentElement']['setAttribute'](_0xf668c9(0x9c), 'dark'), _0x5d93a9['checked'] = !![]) : (localStorage[_0xf668c9(0xba)]('theme', _0xf668c9(0xcb)), document['documentElement']['setAttribute']('data-theme', _0xf668c9(0xcb)), _0x5d93a9[_0xf668c9(0xd0)] = ![]); } _0x5d93a9[_0x5a8b5a(0x98)](_0x5a8b5a(0xce), _0x1ea081, ![]); document[_0x5a8b5a(0xb5)][_0x5a8b5a(0xc3)](_0x5a8b5a(0x9c)) == _0x5a8b5a(0x8d) && (_0x5d93a9['checked'] = !![]); function _0x16e6db(_0x23195b) { const _0x41dfc0 = _0x5a8b5a, _0x57bffd = document[_0x41dfc0(0xd4)](_0x41dfc0(0xde)); _0x23195b ? (_0x57bffd[_0x41dfc0(0xae)]['remove'](_0x41dfc0(0xa8)), _0x57bffd['classList'][_0x41dfc0(0xd1)](_0x41dfc0(0xad))) : (_0x57bffd['classList']['remove'](_0x41dfc0(0xad)), _0x57bffd[_0x41dfc0(0xae)][_0x41dfc0(0xd1)](_0x41dfc0(0xa8)), _0x57bffd['classList'][_0x41dfc0(0xd1)](_0x41dfc0(0xcc)), _0x57bffd[_0x41dfc0(0xc2)] = _0x41dfc0(0xc1) + _0x41dfc0(0x9a) + _0x41dfc0(0xb4) + _0x41dfc0(0xac) + '</div>' + _0x41dfc0(0x9d) + _0x41dfc0(0xd8) + _0x41dfc0(0xc8) + _0x41dfc0(0xd8)); } window[_0x5a8b5a(0x98)](_0x5a8b5a(0xc0), () => { const _0x2c9a35 = _0x5a8b5a; _0x16e6db(navigator['onLine']), window[_0x2c9a35(0x98)](_0x2c9a35(0xad), () => { _0x16e6db(!![]); }), window[_0x2c9a35(0x98)](_0x2c9a35(0xa8), () => { _0x16e6db(![]); }); }); const _0x4322c1 = document['querySelectorAll']('#navbar-scrollspy\x20ul\x20a'); for (const _0x34927c of _0x4322c1) { _0x34927c[_0x5a8b5a(0x98)](_0x5a8b5a(0x92), _0x402d93); } function _0x402d93(_0x25c3ed) { const _0x4836d9 = _0x5a8b5a; _0x25c3ed[_0x4836d9(0x94)](); const _0x2faf7f = this['getAttribute'](_0x4836d9(0xc5)), _0x41278c = document['querySelector'](_0x2faf7f)[_0x4836d9(0x8f)]; scroll({ 'top': _0x41278c, 'behavior': _0x4836d9(0xa9) }); } var _0x432478 = new Swiper(_0x5a8b5a(0xa2), { 'slidesPerView': _0x5a8b5a(0xcf), 'spaceBetween': 0x0, 'freeMode': !![] }); })); function _0x3d1b() { const _0x3ab65d = ['.nftSwiper', '.status-connection', 'getElementsByClassName', 'span', 'dark', 'setAttribute', 'offsetTop', 'height', '3427366WwGAPy', 'click', 'effect-click', 'preventDefault', 'push', '.swiper-button-prev', 'top', 'addEventListener', 'DOMContentLoaded', '<div\x20class=\x27toast-body\x27>', '.loader-page', 'data-theme', '<p\x20class=\x27msg-status\x27>Internet\x20disconnected</p>', 'clientWidth', 'animation_clickable', '1094241intzSP', '83624INrpRw', '.myStories', '[href=\x27', 'clientY', '63ZMOSIC', 'visited', 'forEach', 'offline', 'smooth', 'currentTarget', 'createElement', '<i\x20class=\x27ri-wifi-off-line\x27></i>', 'online', 'classList', '8898568HusFDU', 'includes', 'max', 'clientX', 'width', '<div\x20class=\x27icon-status\x27>', 'documentElement', '(prefers-color-scheme:\x20dark)', 'left', 'parse', 'clientHeight', 'setItem', '.-active-links\x20a', 'remove', 'className', 'theme', '.theme-switch\x20input[type=\x22checkbox\x22]', 'load', '<div\x20class=\x27d-flex\x27>', 'innerHTML', 'getAttribute', 'getItem', 'href', '.swiper-button-next', 'querySelectorAll', '<button\x20type=\x27button\x27\x20class=\x27btn-close\x20me-2\x20m-auto\x27\x20data-bs-dismiss=\x27toast\x27\x20aria-label=\x27Close\x27><i\x20class=\x27ri-close-fill\x27></i></button>', '1704041DKOpKf', '5197068qUHyrk', 'light', 'show', 'matchMedia', 'change', 'auto', 'checked', 'add', '.cardGradual', '\x20hidden', 'querySelector', 'style', 'pathname', '3515504DuoIoH', '</div>', '.swiperCreators', 'location', '5mNeiDQ', 'target']; _0x3d1b = function () { return _0x3ab65d; }; return _0x3d1b(); }
        window.addEventListener('load', function(){
            document.querySelector('.loader-page').style.display = "none";
        })
        
          function errorAlert(message){
         const toastEl = document.querySelector('#errorToast');
        const toastEl2 = document.querySelector('#successToast');

        toastEl.querySelector('.error-title').textContent = message;
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    }

    function successAlert(message){
        const toastEl2 = document.querySelector('#successToast');
        toastEl2.querySelector('.success-title').textContent = message;
        const toast = new bootstrap.Toast(toastEl2);
        toast.show();
    }
    </script>
     <script src="/build/assets/app-5912b177.js"></script>
     <script src="/build/assests/script.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script>
 // For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCbszV2_HSmq3x1mlcXBMFJVZzUWQdE4zU",
  authDomain: "syndicatefxmarket-9c0e4.firebaseapp.com",
  projectId: "syndicatefxmarket-9c0e4",
  storageBucket: "syndicatefxmarket-9c0e4.appspot.com",
  messagingSenderId: "300366312950",
  appId: "1:300366312950:web:69d2e1ceff74a5216283d7",
  measurementId: "G-R6GKFWH9D2"
};
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();
    startFCM();
    function startFCM() {
        messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function (response) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/store/token',
                    type: 'POST',
                    data: {
                        token: response
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        alert('Token stored.');
                    },
                    error: function (error) {
                        console(error);
                    },
                });
            }).catch(function (error) {
                console(error);
            });
    }
    messaging.onMessage(function (payload) {
        const title = payload.notification.title;
        const options = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(title, options);
    });
    
    
</script>

</body>


<!-- Mirrored from unic.orinostudio.com/unic/page-home-classic.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 02 Jun 2023 06:39:51 GMT -->
</html>
