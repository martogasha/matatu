<!doctype html>
<html lang="en">


<!-- Mirrored from mobilekit.bragherstudio.com/view7/component-search.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 16:21:50 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Booked Seats</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

<!-- loader -->
<div id="loader">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- * loader -->


<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Booked Passangers</div>
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

<!-- Extra Header -->
<div class="extraHeader">
    <form class="search-form">
        <div class="form-group searchbox">
            <input type="text" class="form-control" placeholder="Search...">
            <i class="input-icon">
                <ion-icon name="search-outline"></ion-icon>
            </i>
        </div>
    </form>
</div>
<!-- * Extra Header -->

<!-- App Capsule -->
<div id="appCapsule" class="extra-header-active full-height">
<br>
    <!-- Imaged Multi Listview -->
    <a href="{{url('cRide')}}"><button class="btn btn-info">Book Seat</button></a>

    <ul class="listview image-listview">
        @foreach($passangers as $passanger)
        <li class="multi-level">
            <a href="#" class="item">
                <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image">
                <div class="in">
                    <div>{{$passanger->user->name}}<span class="badge badge-pill badge-primary">Paid</span></div> <h style="margin-left:200px;font-weight:bolder;font-size: 20px">{{$passanger->seat}}</h>
                </div>
            </a>
            <!-- sub menu -->
            <ul class="listview simple-listview">
                <li style="font-weight: bold">From: {{$passanger->from}}</li>
                <li style="font-weight: bold">To : {{$passanger->to}}</li>
                <li style="font-weight: bold">Price: {{$passanger->amount}}/=</li>
                <li><button class="btn btn-success">Check Out</button> </li>
            </ul>
            <!-- * sub menu -->
        </li>
        @endforeach



    </ul>
    <!-- * Imaged Multi Listview -->

</div>
<!-- * App Capsule -->

<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="{{url('conductor')}}" class="item">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <h6>Home</h6>
        </div>
    </a>
    <a href="{{url('cProfile')}}" class="item">
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

</div>
<!-- * App Bottom Menu -->

<!-- App Sidebar -->
@include('conductor.sidebar')
<!-- * App Sidebar -->

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


<!-- Mirrored from mobilekit.bragherstudio.com/view7/component-search.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 16:21:51 GMT -->
</html>
