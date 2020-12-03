<!doctype html>
<html lang="en">

<!-- Mirrored from uidevr.com/tf/plesir/car_single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:29:01 GMT -->
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
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/theme.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="lib/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick/slick-theme.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="lib/Magnific-Popup-master/dist/magnific-popup.css">
    <!-- Font Awesome Free 5.10.2 CSS JS -->
    <link href="lib/fontawesome-free-5.10.2-web/css/all.css" rel="stylesheet">
    <script defer src="lib/fontawesome-free-5.10.2-web/js/brands.min.js"></script>
    <script defer src="lib/fontawesome-free-5.10.2-web/js/solid.min.js"></script>
    <script defer src="lib/fontawesome-free-5.10.2-web/js/regular.min.js"></script>
    <script defer src="lib/fontawesome-free-5.10.2-web/js/fontawesome.min.js"></script>
    <!-- Date picker -->
    <link href="lib/gijgo/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
@include('flash-message')
<div id="content">
    <div class="content-wrap page-my-rides">
        <div class="subsite">
            <div class="row">
                <div class="col-md-12">
                    <div class="subsite-heading">
                        My Rides
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mr-car-box-wrap">
                        <div class="mr-car-box">
                            <div class="mr-car"><img src="img/car2-mitsubishi2.png"></div>
                            <div class="mr-car-title">{{$detail->matatu->name}}</div>
                            <div class="cd">{{$detail->matatu->plate}}</div>
                            <div class="cd"><b>Ksh: {{$detail->amount}}</b></div>
                            <div class="mr-car-code">Paid</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="trip">
                        <div class="trip-left">
                            <div class="tl-wrap">
                                <div class="tl-location">
                                    {{$detail->from}}
                                </div>
                                <div class="tl-date">
                                    28 January 2025
                                </div>
                                <div class="tl-time">
                                    10.30AM
                                </div>
                            </div>
                        </div>
                        <div class="arrow">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                        <div class="trip-right">
                            <div class="tl-wrap">
                                <div class="tl-location">
                                    {{$detail->to}}
                                </div>
                                <div class="tl-date">
                                    28 January 2025
                                </div>
                                <div class="tl-time">
                                    8.30PM
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section full mt-2">
                <div class="section-title">Track Trip</div>
                <div class="wide-block">
                    <!-- timeline -->
                    <div class="timeline timed">
                        <div class="item">
                            <span class="time">1:30 PM</span>
                            <div class="dot bg-danger"></div>
                            <div class="content">
                                <h4 class="title">Kangemi (33 out of 33)</h4>
                                <div class="text">

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <span class="time">1:30 PM</span>
                            <div class="dot bg-danger"></div>
                            <div class="content">
                                <h4 class="title">Kinoo (27 out of 33)</h4>
                                <div class="text">

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <span class="time">1:30 PM</span>
                            <div class="dot bg-danger"></div>
                            <div class="content">
                                <h4 class="title">Muthiga (27 out of 33)</h4>
                                <div class="text">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- * timeline -->
                </div>

            </div>

            <div class="section full mt-2 mb-2">
                <div class="section-title">Comment Block</div>
                <div class="wide-block pt-2 pb-2">

                    <!-- comment block -->
                    <div class="comment-block" style="height:250px;overflow-y: scroll">
                        <!--item -->
                        <div class="item">
                            <div class="avatar">
                                <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w32 rounded">
                            </div>
                            <div class="in">
                                <div class="comment-header">
                                    <h4 class="title">Diego Morata</h4>
                                    <span class="time">just now</span>
                                </div>
                                <div class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                            </div>
                        </div>
                        <!-- * item -->
                        <!--item -->
                        <div class="item">
                            <div class="avatar">
                                <img src="assets/img/sample/avatar/avatar3.jpg" alt="avatar" class="imaged w32 rounded">
                            </div>
                            <div class="in">
                                <div class="comment-header">
                                    <h4 class="title">Henry Itondo</h4>
                                    <span class="time">05:50 PM</span>
                                </div>
                                <div class="text">
                                    Sed laoreet leo eget maximus ultricies. Nunc vitae enim facilisis tortor aliquet
                                    ullamcorper
                                    nec at tortor.
                                </div>
                            </div>
                        </div>
                        <!-- * item -->
                        <!--item -->
                        <div class="item">
                            <div class="avatar">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="avatar" class="imaged w32 rounded">
                            </div>
                            <div class="in">
                                <div class="comment-header">
                                    <h4 class="title">Carmelita Marsham</h4>
                                    <span class="time">Sep 23, 2020</span>
                                </div>
                                <div class="text">
                                    Vivamus lobortis, orci et commodo pulvinar, eros nibh volutpat ipsum, in rhoncus risus
                                    dolor
                                    sed ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec nisi
                                    odio,
                                    dapibus in felis vel, lobortis iaculis quam.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="avatar">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="avatar" class="imaged w32 rounded">
                            </div>
                            <div class="in">
                                <div class="comment-header">
                                    <h4 class="title">Carmelita Marsham</h4>
                                    <span class="time">Sep 23, 2020</span>
                                </div>
                                <div class="text">
                                    Vivamus lobortis, orci et commodo pulvinar, eros nibh volutpat ipsum, in rhoncus risus
                                    dolor
                                    sed ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec nisi
                                    odio,
                                    dapibus in felis vel, lobortis iaculis quam.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="avatar">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="avatar" class="imaged w32 rounded">
                            </div>
                            <div class="in">
                                <div class="comment-header">
                                    <h4 class="title">Carmelita Marsham</h4>
                                    <span class="time">Sep 23, 2020</span>
                                </div>
                                <div class="text">
                                    Vivamus lobortis, orci et commodo pulvinar, eros nibh volutpat ipsum, in rhoncus risus
                                    dolor
                                    sed ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec nisi
                                    odio,
                                    dapibus in felis vel, lobortis iaculis quam.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="avatar">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="avatar" class="imaged w32 rounded">
                            </div>
                            <div class="in">
                                <div class="comment-header">
                                    <h4 class="title">Carmelita Marsham</h4>
                                    <span class="time">Sep 23, 2020</span>
                                </div>
                                <div class="text">
                                    Vivamus lobortis, orci et commodo pulvinar, eros nibh volutpat ipsum, in rhoncus risus
                                    dolor
                                    sed ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec nisi
                                    odio,
                                    dapibus in felis vel, lobortis iaculis quam.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="avatar">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="avatar" class="imaged w32 rounded">
                            </div>
                            <div class="in">
                                <div class="comment-header">
                                    <h4 class="title">Carmelita Marsham</h4>
                                    <span class="time">Sep 23, 2020</span>
                                </div>
                                <div class="text">
                                    Vivamus lobortis, orci et commodo pulvinar, eros nibh volutpat ipsum, in rhoncus risus
                                    dolor
                                    sed ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec nisi
                                    odio,
                                    dapibus in felis vel, lobortis iaculis quam.
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="avatar">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="avatar" class="imaged w32 rounded">
                            </div>
                            <div class="in">
                                <div class="comment-header">
                                    <h4 class="title">Carmelita Marsham</h4>
                                    <span class="time">Sep 23, 2020</span>
                                </div>
                                <div class="text">
                                    Vivamus lobortis, orci et commodo pulvinar, eros nibh volutpat ipsum, in rhoncus risus
                                    dolor
                                    sed ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec nisi
                                    odio,
                                    dapibus in felis vel, lobortis iaculis quam.
                                </div>
                            </div>
                        </div>

                        <!-- * item -->
                    </div>
                    <!-- * comment block -->
        </div>
                <div>
                    <input class="form-control" placeholder="Message">
                    <button class="btn btn-info">Send</button>
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
    <a href="index.html" class="item active">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
        </div>
    </a>
    <a href="app-components.html" class="item">
        <div class="col">
            <ion-icon name="cube-outline"></ion-icon>
        </div>
    </a>
    <a href="page-chat.html" class="item">
        <div class="col">
            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
            <span class="badge badge-danger">5</span>
        </div>
    </a>
    <a href="app-pages.html" class="item">
        <div class="col">
            <ion-icon name="layers-outline"></ion-icon>
        </div>
    </a>
    <a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">
        <div class="col">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->
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
    <a href="{{url('rides')}}" class="item active">
        <div class="col">
            <ion-icon name="car-sport-outline"></ion-icon>
            <h6>Trip</h6>
        </div>
    </a>

</div>

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
<script src="assets/js/lib/jquery-3.4.1.min.js"></script>
<!-- Bootstrap-->
<script src="assets/js/lib/popper.min.js"></script>
<script src="assets/js/lib/bootstrap.min.js"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
<!-- Owl Carousel -->
<script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- jQuery Circle Progress -->
<script src="assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
<!-- Base Js File -->
<script src="assets/js/base.js"></script>




</body>


<!-- Mirrored from mobilekit.bragherstudio.com/view7/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 16:20:33 GMT -->
</html>
