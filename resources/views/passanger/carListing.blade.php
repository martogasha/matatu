<!doctype html>
<html lang="en">


<!-- Mirrored from mobilekit.bragherstudio.com/view7/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 16:20:04 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Matatu App</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/icon/192x192.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="manifest" href="__manifest.json">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/slick/slick/slick-theme.css')}}">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('lib/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <!-- Font Awesome Free 5.10.2 CSS JS -->
    <link href="{{asset('lib/fontawesome-free-5.10.2-web/css/all.css')}}" rel="stylesheet">
    <script defer src="{{asset('lib/fontawesome-free-5.10.2-web/js/brands.min.js')}}"></script>
    <script defer src="{{asset('lib/fontawesome-free-5.10.2-web/js/solid.min.js')}}"></script>
    <script defer src="{{asset('lib/fontawesome-free-5.10.2-web/js/regular.min.js')}}"></script>
    <script defer src="{{asset('lib/fontawesome-free-5.10.2-web/js/fontawesome.min.js')}}"></script>
    <!-- Date picker -->
    <link href="{{asset('lib/gijgo/css/gijgo.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>

<!-- loader -->
<div id="loader">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- * loader -->

<!-- App Header -->
<div class="appHeader bg-primary scrolled">
    <div class="left">
        <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">
        Matatu Culture
    </div>
    <div class="right">
        <a href="javascript:;" class="headerButton toggle-searchbox">
            <ion-icon name="search-outline"></ion-icon>
        </a>
    </div>
</div>
<!-- * App Header -->

<!-- Search Component -->
<div id="search" class="appHeader">
    <form class="search-form">
        <div class="form-group searchbox">
            <input type="text" class="form-control" placeholder="Search...">
            <i class="input-icon">
                <ion-icon name="search-outline"></ion-icon>
            </i>
            <a href="javascript:;" class="ml-1 close toggle-searchbox">
                <ion-icon name="close-circle"></ion-icon>
            </a>
        </div>
    </form>
</div>
<!-- * Search Component -->

<!-- App Capsule -->


<!-- Mirrored from uidevr.com/tf/plesir/car_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:28:44 GMT -->

<body class="default">
<!-- Preloading -->
<!-- .Preloading -->
<!-- Sidebar left -->
<!-- .Sidebar left -->
<!-- Sidebar right -->
<!-- .Sidebar right-->
<!-- Header  -->
<!-- .Header  -->
<!-- Content  -->
<div id="content">
    <div class="content-wrap page-car-list">
        <div class="subsite">
            <div class="row">
                <div class="col-md-12">
                    <div class="subsite-heading">
                        {{$saccoCar->name}}
                    </div>
                </div>
            </div>
            @foreach($trips as $trip)
            <a href="{{url('singleCar',$trip->id)}}">
            <div class="row car-row">
                <div class="col-md-12">
                    <div class="car-card">
                        <div class="cc-left">
                            <div class="ccl-img">
                                <img src="{{asset('img/car2-nissan3.png')}}" alt="car">
                            </div>
                            <div class="ccl-text">
                                <span><i class="fas fa-user"></i> 5</span>
                                <span><i class="fas fa-suitcase"></i> 2</span>
                            </div>
                        </div>
                        <div class="cc-right">
                            <div class="ccr-row-a">{{$trip->matatu->name}}</div>
                            <div class="ccr-row-b">{{$trip->matatu->plate}}</div>
                            <div class="ccr-row-c">In Kangemi</div>
                            <div class="ccr-row-d"><button class="btn btn-success">Prices</button></div>

                        </div>
                    </div>
                </div>
            </div>
            </a>
            @endforeach
            <div class="row car-row pagination-row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- .Content  -->
<!-- Botom Panel  -->
<!-- .Bottom Panel  -->
<div class="overlay"></div>
<!-- Optional JavaScript -->
<!-- jQuery v3.4.1 -->
<script src="lib/jquery/jquery-3.4.1.min.js"></script>
<!--  Bootstrap v4.3.1 JS -->
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="lib/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
<!-- Slick JS -->
<script src="lib/slick/slick/slick.min.js"></script>
<!--  Date Picker -->
<script src="lib/gijgo/js/gijgo.min.js" type="text/javascript"></script>
<!--  Custom JS -->
<script src="js/theme.js"></script>
</body>

<!-- Mirrored from uidevr.com/tf/plesir/car_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:28:57 GMT -->

<!-- * App Capsule -->


<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="{{url('/')}}" class="item">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <h6>Home</h6>
        </div>
    </a>
    <a href="{{url('profile')}}" class="item">
        <div class="col">
            <ion-icon name="person-circle-outline"></ion-icon>
            <h6>profile</h6>
        </div>
    </a>
    <a href="{{url('chat')}}" class="item">
        <div class="col">
            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
            <span class="badge badge-danger">5</span>
            <h6>Support</h6>

        </div>
    </a>
    <a href="{{url('rides')}}" class="item">
        <div class="col">
            <ion-icon name="car-sport-outline"></ion-icon>
            <h6>Trip</h6>
        </div>
    </a>

</div>

<!-- * App Bottom Menu -->

<!-- App Sidebar -->
@include('passanger.sidebar')
<!-- * App Sidebar -->

<!-- welcome notification  -->
<div id="notification-welcome" class="notification-box">
    <div class="notification-dialog android-style">
        <div class="notification-header">
            <div class="in">
                <img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">
                <strong>Mobilekit</strong>
                <span>just now</span>
            </div>
            <a href="#" class="close-button">
                <ion-icon name="close"></ion-icon>
            </a>
        </div>
        <div class="notification-content">
            <div class="in">
                <h3 class="subtitle">Welcome to Mobilekit</h3>
                <div class="text">
                    Mobilekit is a PWA ready Mobile UI Kit Template.
                    Great way to start your mobile websites and pwa projects.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * welcome notification -->

<!-- ///////////// Js Files ////////////////////  -->
<!-- Jquery -->
<script src="{{asset('assets/js/lib/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap-->
<script src="{{asset('assets/js/lib/popper.min.js')}}"></script>
<script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
<!-- Owl Carousel -->
<script src="{{asset('assets/js/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
<!-- jQuery Circle Progress -->
<script src="{{asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js')}}"></script>
<!-- Base Js File -->
<script src="{{asset('assets/js/base.js')}}"></script>




</body>


<!-- Mirrored from mobilekit.bragherstudio.com/view7/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 16:20:33 GMT -->
</html>
