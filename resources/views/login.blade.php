<!DOCTYPE html>
<html lang="en">
    @php
    $url = url()->previous();
@endphp

<!-- Mirrored from unic.orinostudio.com/unic/page-step-signin.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 02 Jun 2023 06:39:44 GMT -->
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
    <title>Syndicatefx</title>
    <meta name="description" content="">
    <meta name="keywords"
        content="" />
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="/images/logo.png" sizes="32x32">
    <!-- IOS SUPPORT -->
    <link rel="apple-touch-icon" href="images/favicon/icon-96x96.png">
    <!-- CSS FILES -->
    <link rel="stylesheet" href="/assets/css/remixicon.min.css">
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/vendors/zuck_stories/zuck.min.css">
    <link rel="manifest" href="/_manifest.json" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.js" integrity="sha512-P3/SDm/poyPMRBbZ4chns8St8nky2t8aeG09fRjunEaKMNEDKjK3BuAstmLKqM7f6L1j0JBYcIRL4h2G6K6Lew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="manifest" href="_manifest.json" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="/build/assets/app-17dfed68.css" rel="stylesheet">
   <script src="/build/assets/app-5912b177.js"></script>

</head>

<body>
    <!-- ===================================
      START LODAER PAGE
    ==================================== -->
   {{--  <section class="loader-page" id="loaderPage">
        <div class="spinner_flash"></div>
    </section> --}}
    <!-- START WRAPPER -->
    <div id="wrapper">
        <!-- START CONTENT -->
        <div id="content">
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
                    <a href="/register"
                        class="btn nav-link text-primary size-14 weight-500 pe-0">Create acccount</a>
                </div>
            </header>
            <!-- ===================================
              START THE SPACE STICKY
            ==================================== -->
            <div class="space-sticky"></div>
            <!-- ===================================
              START THE FORM
            ==================================== -->
                <form class="login-form login-form-step-one">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
            <section class="account-section padding-20">
                <div class="display-title">
                    <span class="name_step">Step 1 of 2</span>
                    <h1>Sign in</h1>
                    <p>Enter your credentials to continue</p>
                </div>

                <div class="content__form margin-t-24">

                        <div class="form-group icon-left">
                            <label>Email Address</label>
                            <div class="input_group">
                                <input type="email" class="form-control" name="email" placeholder='e. g. "example@mail.com"'
                                    required>
                                <div class="icon">
                                    <i class="ri-mail-open-line"></i>
                                </div>
                            </div>
                        </div>

                </div>
            </section>
            <!-- ===================================
              START ACCOUT FOOTER
            ==================================== -->
            <footer class="footer-account" style="margin-top: -50px">
                <div class="env-pb">
                    <div class="display-actions">
                        <button type="submit" class="btn btn-sm-arrow bg-primary">
                            <p>Continue</p>
                            <div class="ico">
                                <i class="ri-arrow-drop-right-line"></i>
                            </div>
                        </button>
                    </div>
                    <div class="dividar"></div>
                    <div class="support">
                        <p>Need help? <a href="mailto:support@syndicatefxmarket.com">Contact our support team</a></p>
                    </div>
                </div>
            </footer>
        </form>
        </div>
    </div>
    <!-- ===================================
      START THE EXTERNAL OPEN MODAL
    ==================================== -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllOtherOpen" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0"></div>
                <div class="modal-body pt-0">
                    <div class="content-alert-actions">
                        <div class="margin-b-20">
                            <h2>
                                This page will open another application.
                            </h2>
                        </div>

                        <div class="action-links">
                            <button type="button" class="btn border color-text rounded-pill margin-r-20"
                                data-bs-dismiss="modal">Cancel</button>
                            <a href="page-search-grid.html" class="btn bg-primary text-white rounded-pill">Open</a>
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
      START THE MODAL UPLOAD
    ==================================== -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllUploadItem" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="title-modal">Upload Item</h1>
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-upload-item text-center">
                        <p>
                            Choose <span>"Single"</span> if you want your collectible to be one of a kind or
                            <span>"Multiple"</span>
                            if you want
                            to sell one collectible multiple times
                        </p>
                        <div class="grid_buttonUpload">
                            <a href="page-create-single.html" class="btn btn-create bg-primary text-white margin-b-20">
                                Create Single
                            </a>
                            <a href="page-create-multi.html"
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
                                <source srcset="images/avatar/11.webp" type="image/webp">
                                <img src="images/avatar/11.jpg" alt="image">
                            </picture>
                        </div>
                        <div class="text-user">
                            <h3>Rocco Gavin</h3>
                            <p>0xe3oowe0b88...E162</p>
                        </div>
                    </div>

                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>

                    <!-- cover-balance -->
                    <div class="cover-balance">
                        <div class="un-balance">
                            <div class="content-balance">
                                <div class="head-balance">
                                    <h4>My Balance</h4>
                                    <a class="btn link-addBalance" data-bs-toggle="modal" data-bs-dismiss="modal"
                                        data-bs-target="#mdllAddETH">
                                        <i class="ri-add-fill"></i>
                                    </a>
                                </div>
                                <p class="no-balance">3,650 ETH</p>
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm-size bg-white text-dark rounded-pill"
                            data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#mdllUploadItem">
                            Create
                        </button>
                    </div>


                </div>
                <div class="modal-body">
                    <ul class="nav flex-column -active-links">
                        <li class="nav-item">
                            <a class="nav-link" href="homepage.html">
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

                        <li class="nav-item">
                            <a href="homepage.html" class="nav-link">
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
                            <a class="nav-link" href="homepage.html">
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
    <!-- ===================================
      START THE SHARE PROFILE MODAL
    ==================================== -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllShareProfile" tabindex="-1"
        aria-labelledby="modalShareProfile" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="item-shared">
                        <div class="image-items">
                            <picture>
                                <source srcset="images/avatar/22.webp" type="image/webp">
                                <img class="user-img" src="images/avatar/22.jpg" alt="">
                            </picture>
                        </div>
                        <div class="txt">
                            <h1>Camillo Ferrari</h1>
                            <p>unic.com</p>
                        </div>
                    </div>
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-share-socials">

                        <div class="un-navMenu-default p-0">

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <button type="button" class="btn nav-link bg-snow">
                                        <div class="item-content-link">
                                            <h3 class="link-title">Copy</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-file-copy-2-line"></i>
                                            </div>
                                        </div>
                                    </button>
                                </li>
                            </ul>

                            <div class="sub-title-pkg">
                                <h2>Social Networks</h2>
                            </div>

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link facebook" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon-svg">
                                                <img src="images/icons/facebook.svg" alt="">
                                            </div>
                                            <h3 class="link-title">Facebook</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-arrow-drop-right-line"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link twitter" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon-svg">
                                                <img src="images/icons/twitter.svg" alt="">
                                            </div>
                                            <h3 class="link-title">Twitter</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-arrow-drop-right-line"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link instrgrame" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon-svg">
                                                <img src="images/icons/instagram.svg" alt="">
                                            </div>
                                            <h3 class="link-title">Instrgrame</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-arrow-drop-right-line"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link whatsapp" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon-svg">
                                                <img src="images/icons/whatsapp.svg" alt="">
                                            </div>
                                            <h3 class="link-title">WhatsApp</h3>
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
      START THE SHARE NFT MODAL
    ==================================== -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllShareCollectibles"
        tabindex="-1" aria-labelledby="modalShareCollectibles" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="item-shared">
                        <div class="image-items">
                            <picture>
                                <source srcset="images/other/1.webp" type="image/webp">
                                <img class="user-img" src="images/other/1.jpg" alt="">
                            </picture>
                        </div>
                        <div class="txt">
                            <h1>Galaxy on Earth</h1>
                            <p>unic.com</p>
                        </div>
                    </div>
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-share-socials">

                        <div class="un-navMenu-default p-0">

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <button type="button" class="btn nav-link bg-snow ">
                                        <div class="item-content-link">
                                            <h3 class="link-title">Copy</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-file-copy-2-line"></i>
                                            </div>
                                        </div>
                                    </button>
                                </li>
                            </ul>

                            <div class="sub-title-pkg">
                                <h2>Social Networks</h2>
                            </div>

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link facebook" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon-svg">
                                                <img src="images/icons/facebook.svg" alt="">
                                            </div>
                                            <h3 class="link-title">Facebook</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-arrow-drop-right-line"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link twitter" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon-svg">
                                                <img src="images/icons/twitter.svg" alt="">
                                            </div>
                                            <h3 class="link-title">Twitter</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-arrow-drop-right-line"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link instrgrame" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon-svg">
                                                <img src="images/icons/instagram.svg" alt="">
                                            </div>
                                            <h3 class="link-title">Instrgrame</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-arrow-drop-right-line"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link whatsapp" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon-svg">
                                                <img src="images/icons/whatsapp.svg" alt="">
                                            </div>
                                            <h3 class="link-title">WhatsApp</h3>
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
      START STATUS CONNECTION
    ==================================== -->
    <div class="d-flex justify-content-center">
        <div class="toast status-connection" role="alert" aria-live="assertive" aria-atomic="true"></div>
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

    <!-- JS FILES -->
    <script src="/assets/vendors/zuck_stories/zuck.min.js"></script>
    <script src="/assets/vendors/smoothscroll/smoothscroll.min.js"></script>
    <script src="/assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/nouislider/wNumb.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="/assets/js/custom.js"></script> --}}
    <!-- PWA APP SERVICE REGISTRATION AND WORKS JS -->
    <script src="/assets/js/pwa-services.js"></script>
    <script>
        window.addEventListener('load', function(){
            document.querySelector('.loader-page').style.display = "none";
        })
    </script>
</body>


<!-- Mirrored from unic.orinostudio.com/unic/page-step-signin.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 02 Jun 2023 06:39:44 GMT -->
</html>
