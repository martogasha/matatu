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
@include('flash-message')
<!-- App Header -->
<div class="appHeader bg-primary scrolled">
    <div class="left">
        <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">
      Conductor
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
<div id="appCapsule">

    <div class="header-large-title">
        <h1 class="title"> {{$getConductor->plate}}</h1><h5>Conductor</h5>
        <div class="text" style="font-size: 20px">
            <ion-icon name="cash"></ion-icon>
            <b>Ksh: {{\Illuminate\Support\Facades\Auth::user()->amount}}</b>
        </div>
    </div>
    <div class="section full mt-3">
        <div class="section-title">Trip Prices</div>
        <div class="wide-block pt-2 pb-2">
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addRoute">Add Route</button>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#setTripPrice">Trip Prices</button>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#createTrip">Create Trip</button>

        </div>
    </div>

    <!-- * Modal Form -->

    <div class="section full mt-3 mb-3">

        <div id="content">
            <div class="content-wrap page-car-list">
                <div class="subsite">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subsite-heading">
                                My Trip
                            </div>
                        </div>
                    </div>
                    @foreach($trips as $trip)
                    <a href="{{url('booked')}}">
                        <div class="row car-row">
                            <div class="col-md-12">
                                <div class="car-card">
                                    <div class="cc-left">
                                        <div class="ccl-img">
                                            <img src="img/car2-nissan3.png" alt="car">
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
                                        <div class="ccr-row-d">Price from Nairobi</div>
                                        <div class="ccr-row-e"><span>Ksh:80</span></div>
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
                    <div class="section full mt-2">
                        <div class="section-title">Track Matatu</div>
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
                                        <h4 class="title">Uthiru (27 out of 33)</h4>
                                        <div class="text">
                                            <button class="btn btn-info">Reached Destination</button>
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


                            </div>
                            <!-- * timeline -->
                        </div>

                    </div>


                </div>

            </div>
        </div>

    </div>





    <!-- app footer -->
    <div class="appFooter">
        <img src="assets/img/logo.png" alt="icon" class="footer-logo mb-2">
        <div class="footer-title">
            Copyright © Mobilekit 2020. All Rights Reserved.
        </div>
        <div>Mobilekit is PWA ready Mobile UI Kit Template.</div>
        Great way to start your mobile websites and pwa projects.

        <div class="mt-2">
            <a href="javascript:;" class="btn btn-icon btn-sm btn-facebook">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="javascript:;" class="btn btn-icon btn-sm btn-twitter">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="javascript:;" class="btn btn-icon btn-sm btn-linkedin">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a>
            <a href="javascript:;" class="btn btn-icon btn-sm btn-instagram">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="javascript:;" class="btn btn-icon btn-sm btn-whatsapp">
                <ion-icon name="logo-whatsapp"></ion-icon>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-secondary goTop">
                <ion-icon name="arrow-up-outline"></ion-icon>
            </a>
        </div>

    </div>
    <!-- * app footer -->

</div>
<!-- * App Capsule -->


<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="{{url('conductor')}}" class="item active">
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

<!-- welcome notification  -->
<div class="modal fade modalbox" id="addRoute" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Route</h5>
                <a href="javascript:;" data-dismiss="modal">Close</a>
            </div>
            <div class="modal-body">
                <form action="{{route('route.store')}}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">From:</label>
                    <select class="form-control" name="from" id="exampleFormControlSelect1">
                        <option value="{{$route->s1}}">{{$route->s1}}</option>
                        <option value="{{$route->s2}}">{{$route->s2}}</option>
                        <option value="{{$route->s3}}">{{$route->s3}}</option>
                        <option value="{{$route->s4}}">{{$route->s4}}</option>
                        <option value="{{$route->s5}}">{{$route->s5}}</option>
                        <option value="{{$route->s6}}">{{$route->s6}}</option>
                        <option value="{{$route->s7}}">{{$route->s7}}</option>
                        <option value="{{$route->s8}}">{{$route->s8}}</option>
                        <option value="{{$route->s9}}">{{$route->s9}}</option>
                        <option value="{{$route->s10}}">{{$route->s10}}</option>
                        <option value="{{$route->s11}}">{{$route->s11}}</option>
                        <option value="{{$route->s12}}">{{$route->s12}}</option>
                        <option value="{{$route->s13}}">{{$route->s13}}</option>
                        <option value="{{$route->s14}}">{{$route->s14}}</option>
                        <option value="{{$route->s15}}">{{$route->s15}}</option>

                    </select>                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">To:</label>
                    <select class="form-control" name="to" id="exampleFormControlSelect1">
                        <option value="{{$route->s1}}">{{$route->s1}}</option>
                        <option value="{{$route->s2}}">{{$route->s2}}</option>
                        <option value="{{$route->s3}}">{{$route->s3}}</option>
                        <option value="{{$route->s4}}">{{$route->s4}}</option>
                        <option value="{{$route->s5}}">{{$route->s5}}</option>
                        <option value="{{$route->s6}}">{{$route->s6}}</option>
                        <option value="{{$route->s7}}">{{$route->s7}}</option>
                        <option value="{{$route->s8}}">{{$route->s8}}</option>
                        <option value="{{$route->s9}}">{{$route->s9}}</option>
                        <option value="{{$route->s10}}">{{$route->s10}}</option>
                        <option value="{{$route->s11}}">{{$route->s11}}</option>
                        <option value="{{$route->s12}}">{{$route->s12}}</option>
                        <option value="{{$route->s13}}">{{$route->s13}}</option>
                        <option value="{{$route->s14}}">{{$route->s14}}</option>
                        <option value="{{$route->s15}}">{{$route->s15}}</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Price</label>
                    <select class="form-control" name="price" id="exampleFormControlSelect1">
                        <option>100</option>
                        <option>90</option>
                        <option>80</option>
                        <option>70</option>
                        <option>60</option>
                        <option>50</option>
                        <option>40</option>
                        <option>30</option>
                        <option>20</option>
                    </select>
                </div>
                    <input type="hidden" name="matatu_id" value="{{$getConductor->id}}">
                <button type="submit" class="btn btn-info btn-block">Save</button>
                </form>

            </div>
        </div>
    </div>
</div>
<div class="modal fade modalbox" id="setTripPrice" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Prices</h5>
                <a href="javascript:;" data-dismiss="modal">Close</a>
            </div>
            <div class="modal-body">
                <div class="section mt-4 mb-5">
                    <form>
                        <!-- Simple Multi Listview -->
                        <div class="listview-title mt-2">Kikuyu to Nairobi</div>
                        <ul class="listview link-listview mb-2">

                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Kikuyu to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($matRoutes as $matRoute)
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>{{$matRoute->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>{{$matRoute->price}}</option>
                                                    <option>100</option>
                                                    <option>90</option>
                                                    <option>80</option>
                                                    <option>70</option>
                                                    <option>60</option>
                                                    <option>50</option>
                                                    <option>40</option>
                                                    <option>30</option>
                                                    <option>20</option>

                                                </select> <h>{{$matRoute->to}}</h>

                                            </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>


                        </ul>
                        <ul class="listview link-listview mb-2">

                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Gitaru to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($gits as $git)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$git->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$git->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$git->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>
                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Regen to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($regs as $reg)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$reg->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$reg->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$reg->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>
                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Kinoo to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($kins as $kin)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$kin->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$kin->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$kin->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>
                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">87 to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($sevs as $sev)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$sev->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$sev->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$sev->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>
                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Cooperative to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($cops as $cop)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$cop->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$cop->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$cop->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>
                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Uthiru to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($uths as $uth)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$uth->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$uth->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$uth->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>
                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Mountain View to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($mounts as $mount)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$mount->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$mount->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$mount->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>
                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Kangemi to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($kans as $kan)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$kan->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$kan->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$kan->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>
                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Waruku to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($wars as $war)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$war->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$war->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$war->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>
                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">ABC to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($james as $jame)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$jame->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$jame->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$jame->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>
                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Safaricom to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($safs as $saf)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$saf->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$saf->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$saf->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>
                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Westlands to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            @foreach($wests as $west)
                                                <div class="form-group" style="width:60px;margin-left:15px">
                                                    <h>{{$west->from}}</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                        <option>{{$west->price}}</option>
                                                        <option>100</option>
                                                        <option>90</option>
                                                        <option>80</option>
                                                        <option>70</option>
                                                        <option>60</option>
                                                        <option>50</option>
                                                        <option>40</option>
                                                        <option>30</option>
                                                        <option>20</option>

                                                    </select> <h>{{$west->to}}</h>

                                                </div>
                                            @endforeach

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>


                        </ul>



                        <div class="listview-title mt-2">Nairobi to Kikuyu</div>
                        <ul class="listview link-listview mb-2">

                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Kikuyu to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>90</option>
                                                    <option>80</option>
                                                    <option>70</option>
                                                    <option>60</option>
                                                    <option>50</option>
                                                    <option>40</option>
                                                    <option>30</option>
                                                    <option>20</option>

                                                </select> <h>Gitaru</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Regen</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Kinoo</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>87</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Cooperative</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Uthiru</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Mountain View</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Kangemi</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Waruku</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>ABC</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Westlands</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left: 15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Nairobi</h>

                                            </div>

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>


                        </ul>
                        <ul class="listview link-listview mb-2">

                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Gitaru to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            <div class="form-group" style="width:60px">
                                                <h>Gitaru</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Regen</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Regen</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Kinoo</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>87</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Cooperative</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Uthiru</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Mountain View</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Kangemi</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Waruku</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left:15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>ABC</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Westlands</h>

                                            </div>
                                            <div class="form-group" style="width:60px;margin-left: 15px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Nairobi</h>

                                            </div>

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>


                        </ul>
                        <ul class="listview link-listview mb-2">

                            <li class="multi-level">
                                <a href="#" class="item" style="font-weight: bold">Regen to Nairobi</a>
                                <!-- sub menu -->
                                <ul class="listview link-listview">
                                    <li>
                                        <div class="row">
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Gitaru</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Gitaru</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Gitaru</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Gitaru</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Gitaru</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Gitaru</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Gitaru</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Gitaru</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Gitaru</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Gitaru</h>

                                            </div>
                                            <div class="form-group" style="width:60px">
                                                <h>Kikuyu</h> <select class="form-control" id="exampleFormControlSelect1" style="font-weight:bold">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select> <h>Gitaru</h>

                                            </div>

                                        </div>
                                    </li>


                                </ul>
                                <!-- * sub menu-->
                            </li>


                        </ul>

                        <!-- * Simple Multi Listview -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade modalbox" id="createTrip" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Trip</h5>
                <a href="javascript:;" data-dismiss="modal">Close</a>
            </div>
            <div class="modal-body">
                <form action="{{route('trip.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">From:</label>
                        <select class="form-control" name="from" id="exampleFormControlSelect1">
                            <option value="{{$route->s1}}">{{$route->s1}}</option>
                            <option value="{{$route->s2}}">{{$route->s2}}</option>
                            <option value="{{$route->s3}}">{{$route->s3}}</option>
                            <option value="{{$route->s4}}">{{$route->s4}}</option>
                            <option value="{{$route->s5}}">{{$route->s5}}</option>
                            <option value="{{$route->s6}}">{{$route->s6}}</option>
                            <option value="{{$route->s7}}">{{$route->s7}}</option>
                            <option value="{{$route->s8}}">{{$route->s8}}</option>
                            <option value="{{$route->s9}}">{{$route->s9}}</option>
                            <option value="{{$route->s10}}">{{$route->s10}}</option>
                            <option value="{{$route->s11}}">{{$route->s11}}</option>
                            <option value="{{$route->s12}}">{{$route->s12}}</option>
                            <option value="{{$route->s13}}">{{$route->s13}}</option>
                            <option value="{{$route->s14}}">{{$route->s14}}</option>
                            <option value="{{$route->s15}}">{{$route->s15}}</option>

                        </select>                </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">To:</label>
                        <select class="form-control" name="to" id="exampleFormControlSelect1">
                            <option value="{{$route->s1}}">{{$route->s1}}</option>
                            <option value="{{$route->s2}}">{{$route->s2}}</option>
                            <option value="{{$route->s3}}">{{$route->s3}}</option>
                            <option value="{{$route->s4}}">{{$route->s4}}</option>
                            <option value="{{$route->s5}}">{{$route->s5}}</option>
                            <option value="{{$route->s6}}">{{$route->s6}}</option>
                            <option value="{{$route->s7}}">{{$route->s7}}</option>
                            <option value="{{$route->s8}}">{{$route->s8}}</option>
                            <option value="{{$route->s9}}">{{$route->s9}}</option>
                            <option value="{{$route->s10}}">{{$route->s10}}</option>
                            <option value="{{$route->s11}}">{{$route->s11}}</option>
                            <option value="{{$route->s12}}">{{$route->s12}}</option>
                            <option value="{{$route->s13}}">{{$route->s13}}</option>
                            <option value="{{$route->s14}}">{{$route->s14}}</option>
                            <option value="{{$route->s15}}">{{$route->s15}}</option>

                        </select>
                    </div>
                    <input type="hidden" name="matatu_id" value="{{$getConductor->id}}">
                    <button type="submit" class="btn btn-info btn-block">Save</button>
                </form>

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
<script src="{{asset('assets/js/base.js')}}"></script>


<script>
    setTimeout(() => {
        notification('notification-welcome', 5000);
    }, 2000);
</script>

</body>


<!-- Mirrored from mobilekit.bragherstudio.com/view7/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 16:20:33 GMT -->
</html>
