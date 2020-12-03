@extends('layouts.app')
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
    <div class="content-wrap page-car-single">

        <div class="subsite">

            <div class="row">
                <div class="col-md-12">
                    <div class="cs-top">
                        <div class="cst-left">
                            <div class="subsite-heading">
                                {{$single->matatu->name}}                            </div>
                            <div class="star-rates">
                      <span class="star rated">
                        <i class="fas fa-star"></i>
                      </span>
                                <span class="star rated">
                        <i class="fas fa-star"></i>
                      </span>
                                <span class="star rated">
                        <i class="fas fa-star"></i>
                      </span>
                                <span class="star rated">
                        <i class="fas fa-star"></i>
                      </span>
                                <span class="star rated">
                        <i class="fas fa-star"></i>
                      </span>
                                <span class="rated-value">5.0</span>
                            </div>
                        </div>
                        <div class="cst-right" id="getDet">

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="single-car-box">
                        <div class="scb-left">
                            <div class="scbl scbl-a scbl-center">
                                <div class="scbl-ra">Available Seats</div>
                                <div class="scbl-rb">5 Seats</div>
                                <div class="scbl-rc"><img src="{{asset('img/security.png')}}"></div>
                            </div>

                        </div>
                        <div class="row">
                        <div class="form-group" style="width: 200px;margin-left: 10px">
                            <label for="exampleFormControlSelect1"><b>FROM</b></label>
                            <select class="form-control" id="getFrom">
                                    <option value="{{$stage->s1}}">{{$stage->s1}}</option>
                                    <option value="{{$stage->s2}}">{{$stage->s2}}</option>
                                    <option value="{{$stage->s3}}">{{$stage->s3}}</option>
                                    <option value="{{$stage->s4}}">{{$stage->s4}}</option>
                                    <option value="{{$stage->s5}}">{{$stage->s5}}</option>
                                    <option value="{{$stage->s6}}">{{$stage->s6}}</option>
                                    <option value="{{$stage->s7}}">{{$stage->s7}}</option>
                                    <option value="{{$stage->s8}}">{{$stage->s8}}</option>
                                    <option value="{{$stage->s9}}">{{$stage->s9}}</option>
                                    <option value="{{$stage->s10}}">{{$stage->s10}}</option>
                                    <option value="{{$stage->s11}}">{{$stage->s11}}</option>
                                    <option value="{{$stage->s12}}">{{$stage->s12}}</option>
                                    <option value="{{$stage->s13}}">{{$stage->s13}}</option>
                                    <option value="{{$stage->s14}}">{{$stage->s14}}</option>
                                </select>
                        </div>
                        <div class="form-group" style="width: 200px;margin-left: 20px">
                            <label for="exampleFormControlSelect1"><b>TO</b></label>
                            <select class="form-control" id="getTo">
                                    <option value="{{$stage->s1}}">{{$stage->s1}}</option>
                                    <option value="{{$stage->s2}}">{{$stage->s2}}</option>
                                    <option value="{{$stage->s3}}">{{$stage->s3}}</option>
                                    <option value="{{$stage->s4}}">{{$stage->s4}}</option>
                                    <option value="{{$stage->s5}}">{{$stage->s5}}</option>
                                    <option value="{{$stage->s6}}">{{$stage->s6}}</option>
                                    <option value="{{$stage->s7}}">{{$stage->s7}}</option>
                                    <option value="{{$stage->s8}}">{{$stage->s8}}</option>
                                    <option value="{{$stage->s9}}">{{$stage->s9}}</option>
                                    <option value="{{$stage->s10}}">{{$stage->s10}}</option>
                                    <option value="{{$stage->s11}}">{{$stage->s11}}</option>
                                    <option value="{{$stage->s12}}">{{$stage->s12}}</option>
                                    <option value="{{$stage->s13}}">{{$stage->s13}}</option>
                                    <option value="{{$stage->s14}}">{{$stage->s14}}</option>
                            </select>
                        </div>
                        </div>
                        @include('flash-message')
                        <input type="hidden" id="matatuId" value="{{$single->matatu_id}}">
                        <div class="scb-right">
                            <h4 id="appends"></h4>
                            <h1 style="color: black">Select your seat</h1>
                            <div class="containerbus">
                                <!-- Squared ONE -->
                                <div class="autobus">

                                    <div class="fila">
                                        <div class="seccion">
                                            @if(in_array(1,$getSeat))
                                                <div class="asiento">
                                                    <input type="checkbox" value="1" class="seat" id="asiento1" name="check" disabled/>
                                                    <label for="asiento1" style="background-color: red">1</label>
                                                </div>
                                            @else
                                                <div class="asiento">
                                                    <input type="checkbox" value="1" class="seat" id="asiento1" name="check" />
                                                    <label for="asiento1">1</label>
                                                </div>
                                            @endif

                                                @if(in_array(2,$getSeat))
                                                    <div class="asiento">
                                                        <input type="checkbox" value="2" class="seat" id="asiento2" name="check" disabled/>
                                                        <label for="asiento2" style="background-color: red">2</label>
                                                    </div>
                                                @else
                                                    <div class="asiento">
                                                        <input type="checkbox" value="2" class="seat" id="asiento2" name="check"/>
                                                        <label for="asiento2">2</label>
                                                    </div>
                                                @endif
                                        </div>
                                        <div class="seccion" >
                                            <div class="asiento">
                                                <label for="asiento3">D</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fila">
                                        <div class="seccion">
                                            @if(in_array(3,$getSeat))
                                            <div class="asiento">
                                                    <input type="checkbox" value="3" class="seat" id="asiento3" name="check" disabled/>
                                                    <label for="asiento3" style="background-color: red">3</label>
                                                </div>
                                            @else
                                                <div class="asiento">
                                                    <input type="checkbox" value="3" class="seat" id="asiento3" name="check"/>
                                                    <label for="asiento3">3</label>
                                                </div>
                                            @endif
                                                @if(in_array(4,$getSeat))
                                                <div class="asiento" style="left: 60px">
                                                <input type="checkbox" value="4" class="seat" id="asiento4" name="check" disabled/>
                                                <label for="asiento4" style="background-color: red">4</label>
                                                </div>
                                                    @else
                                                        <div class="asiento" style="left: 60px">
                                                            <input type="checkbox" value="4" class="seat" id="asiento4" name="check" />
                                                            <label for="asiento4">4</label>
                                                        </div>
                                                    @endif
                                        </div>
                                        <div class="seccion">
                                            @if(in_array(5,$getSeat))
                                            <div class="asiento" style="left:28px">
                                                <input type="checkbox" value="5" class="seat" id="asiento5" name="check" disabled/>
                                                <label for="asiento5" style="background-color: red">5</label>
                                            </div>
                                            @else
                                                <div class="asiento" style="left:28px">
                                                    <input type="checkbox" value="5" class="seat" id="asiento5" name="check" />
                                                    <label for="asiento5">5</label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="fila">
                                        <div class="seccion">
                                            <div class="asiento">
                                                <label for="asiento5">C</label>
                                            </div>
                                            @if(in_array(6,$getSeat))
                                            <div class="asiento" style="left: 100px">
                                                <input type="checkbox" value="6" class="seat" id="asiento6" name="check" disabled/>
                                                <label for="asiento6" style="background-color: red">6</label>
                                            </div>
                                            @else
                                                <div class="asiento" style="left: 100px">
                                                    <input type="checkbox" value="6" class="seat" id="asiento6" name="check" />
                                                    <label for="asiento6">6</label>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="seccion">
                                            @if(in_array(7,$getSeat))
                                                <div class="asiento" style="left:28px">
                                                    <input type="checkbox" value="7" class="seat" id="asiento7" name="check" disabled/>
                                                    <label for="asiento7" style="background-color: red">7</label>
                                                </div>
                                            @else
                                                <div class="asiento" style="left:28px">
                                                    <input type="checkbox" value="7" class="seat" id="asiento7" name="check" />
                                                    <label for="asiento7">7</label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="fila">
                                        <div class="seccion">
                                            @if(in_array(8,$getSeat))
                                                <div class="asiento">
                                                    <input type="checkbox" value="8" class="seat" id="asiento8" name="check" disabled/>
                                                    <label for="asiento8" style="background-color: red">8</label>
                                                </div>
                                            @else
                                                <div class="asiento">
                                                    <input type="checkbox" value="8" class="seat" id="asiento8" name="check"/>
                                                    <label for="asiento8">8</label>
                                                </div>
                                            @endif
                                                @if(in_array(9,$getSeat))
                                                    <div class="asiento" style="left: 100px">
                                                        <input type="checkbox" value="9" class="seat" id="asiento9" name="check" disabled/>
                                                        <label for="asiento9" style="background-color: red">9</label>
                                                    </div>
                                                @else
                                                    <div class="asiento" style="left: 100px">
                                                        <input type="checkbox" value="9" class="seat" id="asiento9" name="check" />
                                                        <label for="asiento9">9</label>
                                                    </div>
                                                @endif
                                        </div>
                                        <div class="seccion">
                                            @if(in_array(10,$getSeat))
                                                <div class="asiento" style="left:28px">
                                                    <input type="checkbox" value="10" class="seat" id="asiento10" name="check" disabled/>
                                                    <label for="asiento10" style="background-color: red">10</label>
                                                </div>
                                            @else
                                                <div class="asiento" style="left:28px">
                                                    <input type="checkbox" value="10" class="seat" id="asiento10" name="check" />
                                                    <label for="asiento10">10</label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="fila">
                                        <div class="seccion">
                                            @if(in_array(11,$getSeat))
                                                <div class="asiento">
                                                    <input type="checkbox" value="11" class="seat" id="asiento11" name="check" disabled/>
                                                    <label for="asiento11" style="background-color: red">11</label>
                                                </div>
                                            @else
                                                <div class="asiento">
                                                    <input type="checkbox" value="11" class="seat" id="asiento11" name="check"/>
                                                    <label for="asiento11">11</label>
                                                </div>
                                            @endif
                                            @if(in_array(12,$getSeat))
                                                <div class="asiento" style="left: 60px">
                                                    <input type="checkbox" value="12" class="seat" id="asiento12" name="check" disabled/>
                                                    <label for="asiento12" style="background-color: red">12</label>
                                                </div>
                                            @else
                                                <div class="asiento" style="left: 60px">
                                                    <input type="checkbox" value="12" class="seat" id="asiento12" name="check" />
                                                    <label for="asiento12">12</label>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="seccion">
                                            @if(in_array(13,$getSeat))
                                                <div class="asiento" style="left:28px">
                                                    <input type="checkbox" value="13" class="seat" id="asiento13" name="check" disabled/>
                                                    <label for="asiento13" style="background-color: red">13</label>
                                                </div>
                                            @else
                                                <div class="asiento" style="left:28px">
                                                    <input type="checkbox" value="13" class="seat" id="asiento13" name="check" />
                                                    <label for="asiento13">13</label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
    body {
        background: #555;
        font-size: 12px;
    }

    h1 {
        color: #eee;
        font: 30px Arial, sans-serif;
        text-shadow: 0px 1px black;
        text-align: center;
    }

    input[type=checkbox] {
        visibility: hidden;
    }

    .containerbus {
        display: flex;
        justify-content: center;
    }

    .autobus {
        background: lightgray;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 300px;
        height: 500px;
    }

    .fila {
        display: flex;
        justify-content: space-between;
    }

    .seccion {
        display: flex;
        width: 40%;
        justify-content: space-between;
    }

    .asiento {
        width: 50px;
        height: 50px;
        color: black;
        font-size:20px;
        text-align: center;
        background: #fcfff4;
        background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
        margin: 5px auto;
        box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0, 0, 0, 0.5);
        position: relative;
    }

    .asiento label {
        cursor: pointer;
        position: absolute;
        width: 50px;
        height: 50px;
        left: 3px;
        top: 3px;
        box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px rgba(255, 255, 255, 1);
        background: linear-gradient(top, #222 0%, #45484d 100%);
    }

    .asiento label:after {
        filter: alpha(opacity=0);
        opacity: 0;
        content: '';
        position: absolute;
        width: 50px;
        height: 50px;
        background: #00bf00;
        background: linear-gradient(top, #0895d3 0%, #0966a8 100%);
        top: 0px;
        left: 0px;
        box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0, 0, 0, 0.5);
    }

    .asiento label:hover::after {
        filter: alpha(opacity=30);
        opacity: 0.3;
    }

    .asiento input[type=checkbox]:checked + label:after {
        filter: alpha(opacity=100);
        opacity: 1;
    }
</style>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="button btn-reserve">
                        <button type="submit" class="theme-button" data-toggle="modal" data-target="#ModalForm">Book Seat</button>
                    </div>
                </div>
            </div>
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
<!-- Modal Form -->
<div class="modal fade modalbox" id="ModalForm" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Balance: <b style="font-weight: bolder">{{\Illuminate\Support\Facades\Auth::user()->amount}} /=</b></h5>
                <a href="javascript:;" data-dismiss="modal">Close</a>
            </div>
            <div class="modal-body">
                <form action="{{route('bookSeat')}}" method="post">
                    @csrf
                    <input type="hidden" name="matatuId" value="{{$single->matatu_id}}">
                    <div class="login-form" id="titles">

                    </div>

                </form>
        </div>
    </div>
</div>
<!-- * Modal Form -->

<!-- .Content  -->
<!-- Botom Panel  -->
<!-- .Bottom Panel  -->
<div class="overlay"></div>
<!-- Optional JavaScript -->
<!-- jQuery v3.4.1 -->
</div>
</body>

<!-- Mirrored from uidevr.com/tf/plesir/car_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 07:28:57 GMT -->

<!-- * App Capsule -->


<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="{{url('/')}}" class="item active">
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
@include('passanger.sidebar')<!-- * App Sidebar -->
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
<div id="toast-4" class="toast-box toast-top">
    <div class="in">
        <div class="text">
            Auto closing in 2 seconds.
        </div>
    </div>
</div>
<!-- * welcome notification -->
<!-- ///////////// Js Files ////////////////////  -->
<!-- Jquery -->
<script src="{{asset('lib/jquery/jquery-3.4.1.min.js')}}"></script>
<!--  Bootstrap v4.3.1 JS -->
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Magnific Popup core JS file -->
<script src="{{asset('lib/Magnific-Popup-master/dist/jquery.magnific-popup.js')}}"></script>
<!-- Slick JS -->
<script src="{{asset('lib/slick/slick/slick.min.js')}}"></script>
<!--  Date Picker -->
<script src="{{asset('lib/gijgo/js/gijgo.min.js')}}" type="text/javascript"></script>
<!--  Custom JS -->
<script src="{{asset('js/theme.js')}}"></script>
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
<script>
    $(document).ready(function () {
        $value = $('#getTo').val();
        $value1 = $('#getFrom').val();
        $value2 = $('#matatuId').val();
        $.ajax({
            type:"get",
            url:"{{url('getPrice')}}",
            data:{to: $value, from: $value1,matatu:$value2},
            success:function (data) {
                $('#getDet').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $('#getTo').on('change', function () {
        $value = $(this).val();
        $value1 = $('#getFrom').val();
        $value2 = $('#matatuId').val();
        $.ajax({
            type:"get",
            url:"{{url('getPrice')}}",
            data:{to: $value, from: $value1,matatu:$value2},
            success:function (data) {
                $('#getDet').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $(document).ready(function () {
        $('.seat').click(function () {
            var text = "";
            $('.seat:checked').each(function () {
                text+=$(this).val()+ ',';
            });
            text=text.substring(0,text.length-1);
            var count = $("[type='checkbox']:checked").length;
            $value1 = $('#getFrom').val();
            $value2 = $('#getTo').val();
            $value3 = $('#matatuId').val();
            $.ajax({
                type:"get",
                url:"{{url('computePrice')}}",
                data:{count: count, from: $value1,to:$value2,matatu:$value3,seats:text},
                success:function (data) {
                    $('#titles').html(data);
                },
                error:function (error) {
                    console.log(error)
                    alert('error')
                }
            });
        });

    });
    $('#getTo').on('change', function () {
        $value = $(this).val();
        var text = "";
        $('.seat:checked').each(function () {
            text+=$(this).val()+ ',';
        });
        text=text.substring(0,text.length-1);
        $value1 = $('#getFrom').val();
        $value3 = $('#matatuId').val();
        var count = $("[type='checkbox']:checked").length;
        $.ajax({
            type: "get",
            url: "{{url('computePrice')}}",
            data: {count: count, from: $value1, to: $value, matatu: $value3, seats:text},
            success: function (data) {
                $('#titles').html(data);
            },
            error: function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
</script>

@section('scripts')
            <script>
        const app = new Vue({
            el: '#app',
            data: {
                comments:{},
                commentBox: '',
                post: {!! $single->toJson() !!},
                user: {!! \Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth    ::user()->toJson() : 'null' !!}
            },
            mounted() {
                this.getComments();
            },
            methods: {
                getComments() {
                    axios.get(`/api/posts/${this.post.id}/comments`)
                        .then((response) => {
                            this.comments = response.data
                        })
                        .catch(function (error) {
                                console.log(error);
                            }
                        );
                },
                postComment() {
                    axios.post('/api/posts/'+this.post.id+'/comment', {
                        api_token: this.user.api_token,
                        body: this.commentBox
                    })
                        .then((response) => {
                            this.comments.unshift(response.data);
                            this.commentBox = '';
                        })
                        .catch((error) => {
                            console.log(error);
                        })
                }
            }
        })


            </script>
@endsection


</body>



<!-- Mirrored from mobilekit.bragherstudio.com/view7/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Oct 2020 16:20:33 GMT -->
</html>
