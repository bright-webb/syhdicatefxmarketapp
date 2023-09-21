<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from unic.orinostudio.com/unic/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 02 Jun 2023 06:36:47 GMT -->
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
    <title>Syndicate fx market</title>
    <meta name="description" content="">
    <meta name="keywords"
        content="" />
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="/images/logo.png" sizes="32x32">
    <!-- IOS SUPPORT -->
    <link rel="apple-touch-icon" href="/images/logo.png">
    <!-- CSS FILES -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/remixicon.min.css">
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/vendors/zuck_stories/zuck.min.css">
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

                @yield('content')

            <!-- ===================================
              START THE COPYRIGHT
            ==================================== -->
            {{-- <section class="copyright-mark">
                <div class="content">
                    <img class="logo-gray" src="/images/logo.png" style="width: 40px; height: 40px;" alt="image">
                    <p>Copyright © Syndicatfx 2023</p>
                </div>
            </section> --}}

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
    <script src="/assets/js/pwa-services.js"></script>
    <script>
    navigator.serviceWorker.register('service-worker.js');
			function requestPermission(){
				Notification.requestPermission().then((permission) => {
					if(permission == 'granted'){
						navigator.serviceWorker.ready.then((sw) => {
							sw.pushManager.subscribe({
								userVisibleOnly: true,
								applicationServerKey: "BLe8NAOoK5HTf5jkWAfNK7XhasnQaSSPGbPkY13AKWmGoWYx4aS-acXAnxhbCD6jMecOZjbIqeM1VCIQTKQeCeA"
							}).then((subscription) => {
								fetch("/api/push-subscribe", {
									method: "post",
									body: JSON.stringify(subscription)
								}).then(alert('ok'));
							})
						})
					}
				})
			}
    </script>
    
</body>


</html>
