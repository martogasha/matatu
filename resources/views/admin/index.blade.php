<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:07:29 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="asset/img/fav.png" />

    <!-- Title -->
    <title>Matatu - Admin Dashboard</title>


    <!-- *************
        ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="asset/fonts/style.css">

    <!-- Main css -->
    <link rel="stylesheet" href="asset/css/main.css">


    <!-- *************
        ************ Vendor Css Files *************
    ************ -->
    <!-- DateRange css -->
    <link rel="stylesheet" href="asset/vendor/daterange/daterange.css" />

    <!-- Chartist css -->
    <link rel="stylesheet" href="asset/vendor/chartist/css/chartist.min.css" />
    <link rel="stylesheet" href="asset/vendor/chartist/css/chartist-custom.css" />

</head>
<body>

<!-- Loading starts -->
<div id="loading-wrapper">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Loading ends -->


<!-- *************
    ************ Header section start *************
************* -->

<!-- Header start -->
<header class="header">
    <div class="logo-wrapper">
        <a href="index.html" class="logo">
            <img src="img/logo.png" alt="Wafi Admin Dashboard" />
        </a>
        <a href="#" class="quick-links-btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick Links">
            <i class="icon-menu1"></i>
        </a>
    </div>
    <div class="header-items">
        <!-- Custom search start -->
        <div class="custom-search">
            <input type="text" class="search-query" placeholder="Search here ...">
            <i class="icon-search1"></i>
        </div>
        <!-- Custom search end -->

        <!-- Header actions start -->
        <ul class="header-actions">
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-box"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                    <div class="dropdown-menu-header">
                        Tasks (05)
                    </div>
                    <ul class="header-tasks">
                        <li>
                            <p>#48 - Dashboard UI<span>90%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <span class="sr-only">90% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>#95 - Alignment Fix<span>60%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>#7 - Broken Button<span>40%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-bell"></i>
                    <span class="count-label">8</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                    <div class="dropdown-menu-header">
                        Notifications (40)
                    </div>
                    <ul class="header-notifications">
                        <li>
                            <a href="#">
                                <div class="user-img away">
                                    <img src="img/user21.png" alt="User" />
                                </div>
                                <div class="details">
                                    <div class="user-title">Abbott</div>
                                    <div class="noti-details">Membership has been ended.</div>
                                    <div class="noti-date">Oct 20, 07:30 pm</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img busy">
                                    <img src="img/user10.png" alt="User" />
                                </div>
                                <div class="details">
                                    <div class="user-title">Braxten</div>
                                    <div class="noti-details">Approved new design.</div>
                                    <div class="noti-date">Oct 10, 12:00 am</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img online">
                                    <img src="img/user6.png" alt="User" />
                                </div>
                                <div class="details">
                                    <div class="user-title">Larkyn</div>
                                    <div class="noti-details">Check out every table in detail.</div>
                                    <div class="noti-date">Oct 15, 04:00 pm</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="user-name">Zyan Ferris</span>
                    <span class="avatar">ZF<span class="status busy"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                <img src="img/user.png" alt="Admin Template" />
                            </div>
                            <h5>Zyan Ferris</h5>
                            <p>Admin</p>
                        </div>
                        <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                        <a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
                        <a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="quick-settings-btn" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick Settings">
                    <i class="icon-list"></i>
                </a>
            </li>
        </ul>
        <!-- Header actions end -->
    </div>
</header>
<!-- Header end -->

<!-- Screen overlay start -->
<div class="screen-overlay"></div>
<!-- Screen overlay end -->

<!-- Quicklinks box start -->
<div class="quick-links-box">
    <div class="quick-links-header">
        Quick Links
        <a href="#" class="quick-links-box-close">
            <i class="icon-circle-with-cross"></i>
        </a>
    </div>

    <div class="quick-links-wrapper">
        <div class="fullHeight">
            <div class="quick-links-body">
                <div class="container-fluid p-0">
                    <div class="row less-gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="documents.html" class="quick-tile blue">
                                <i class="icon-file-text"></i>
                                Documents
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="crm-dashboard.html" class="quick-tile secondary">
                                <i class="icon-pie-chart1"></i>
                                CRM
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="ecommerce-dashboard.html" class="quick-tile blue">
                                <i class="icon-shopping-cart1"></i>
                                Ecommerce
                            </a>
                        </div>
                    </div>
                    <div class="row less-gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="gallery2.html" class="quick-tile photos lg">
                                Photos
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="tasks.html" class="quick-tile">
                                <i class="icon-check-circle"></i>
                                Tasks
                            </a>
                            <a href="calendar-external-draggable.html" class="quick-tile blue">
                                <i class="icon-calendar1"></i>
                                Events
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="chat.html" class="quick-tile blue">
                                <i class="icon-message-circle"></i>
                                Chat
                            </a>
                            <a href="default-layout.html" class="quick-tile">
                                <i class="icon-grid"></i>
                                Layout
                            </a>
                        </div>
                    </div>
                    <div class="row less-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="custom-alerts.html" class="quick-tile secondary">
                                <i class="icon-alert-triangle"></i>
                                Alerts
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="google-maps.html" class="quick-tile blue">
                                <i class="icon-map-pin"></i>
                                Maps
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="https://www.gmail.com/" target="_blank" class="quick-tile white">
                                <i class="icon-drafts"></i>
                                Gmail
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="https://www.youtube.com/" target="_blank" class="quick-tile secondary">
                                <i class="icon-youtube"></i>
                                Youtube
                            </a>
                        </div>
                    </div>
                    <div class="row less-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="user-profile.html" class="quick-tile">
                                <i class="icon-account_circle"></i>
                                Profile
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="contacts.html" class="quick-tile">
                                <i class="icon-phone"></i>
                                Contacts
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="account-settings.html" class="quick-tile">
                                <i class="icon-settings1"></i>
                                Settings
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="login.html" class="quick-tile">
                                <i class="icon-lock2"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quicklinks box end -->

<!-- Quick settings start -->
<div class="quick-settings-box">
    <div class="quick-settings-header">
        <div class="date-container">Today <span class="date" id="today-date"></span></div>
        <a href="#" class="quick-settings-box-close">
            <i class="icon-circle-with-cross"></i>
        </a>
    </div>
    <div class="quick-settings-body">
        <div class="fullHeight">
            <div class="quick-setting-list">
                <h6 class="title">Events</h6>
                <ul class="list-items">
                    <li>
                        <div class="list-title">Product Launch</div>
                        <div class="list-location">10:00 AM</div>
                    </li>
                    <li>
                        <div class="list-title">Team Meeting</div>
                        <div class="list-location">01:30 PM</div>
                    </li>
                    <li>
                        <div class="list-title">Q&A Session</div>
                        <div class="list-location">02:30 PM</div>
                    </li>
                </ul>
            </div>
            <div class="quick-setting-list">
                <h6 class="title">Notes</h6>
                <ul class="list-items">
                    <li>
                        <div class="list-title">Refreshing the list</div>
                        <div class="list-location">03:15 PM</div>
                    </li>
                    <li>
                        <div class="list-title">Not able to click on button</div>
                        <div class="list-location">03:18 PM</div>
                    </li>
                </ul>
            </div>
            <div class="quick-setting-list">
                <h6 class="title">Quick Settings</h6>
                <ul class="set-priority-list">
                    <li>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="systemUpdates">
                            <label class="custom-control-label" for="systemUpdates">System Updates</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="noti">
                            <label class="custom-control-label" for="noti">Notifications</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Quick settings end -->

<!-- *************
    ************ Header section end *************
************* -->
@include('flash-message')
<!-- Container fluid start -->
<div class="container-fluid">

    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar" aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
        </button>
        <div class="collapse navbar-collapse" id="WafiAdminNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link active-page" href="{{url('admin')}}" id="dashboardsDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-devices_other nav-icon"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('matatu')}}" id="appsDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-package nav-icon"></i>
                        Matatu Listing
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('passanger')}}" id="pagesDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Passanger Listing
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('chat')}}" id="pagesDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                        <i class="icon-message nav-icon"></i>
                        Chat
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navigation end -->

    <!-- *************
        ************ Main container start *************
    ************* -->
    <div class="main-container">

        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>

            <ul class="app-actions">
                <li>
                    <a href="#" id="reportrange">
                        <span class="range-text"></span>
                        <i class="icon-chevron-down"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
                        <i class="icon-print"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
                        <i class="icon-cloud_download"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Page header end -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row starts -->
            <!-- Row end -->

            <!-- Row starts -->
            <!-- Row ends -->

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon">
                                    <i class="icon-account_circle"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>185k</h3>
                                    <p>Active Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon">
                                    <i class="icon-watch_later"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>450</h3>
                                    <p>Active Agents</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon">
                                    <i class="icon-visibility"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>7500</h3>
                                    <p>Visitors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon">
                                    <i class="icon-shopping_basket"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>$300k</h3>
                                    <p>Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon secondary">
                                    <i class="icon-check_circle"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>250</h3>
                                    <p>Signups</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="info-tiles">
                                <div class="info-icon secondary">
                                    <i class="icon-archive"></i>
                                </div>
                                <div class="stats-detail">
                                    <h3>2500</h3>
                                    <p>Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row ends -->
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="card h-320">
                        <div class="card-header">
                            <div class="card-title">Messages</div>
                        </div>
                        <div class="card-body">
                            <div class="customScroll5">
                                <ul class="user-messages">
                                    <li class="clearfix">
                                        <div class="customer">
                                            <div class="avatar md">
                                                <img src="asset/img/user.png" class="circle" alt="Wafi Admin" />
                                            </div>
                                        </div>
                                        <div class="delivery-details">
                                            <span class="badge badge-primary">Ordered</span>
                                            <h5>Aaleyah Malik</h5>
                                            <p>We are pleased to inform that the following ticket no. <b>WAFI510</b> have been booked.</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="customer">
                                            <div class="avatar md">
                                                <img src="asset/img/user.png" class="circle" alt="Wafi Admin" />
                                            </div>
                                        </div>
                                        <div class="delivery-details">
                                            <span class="badge badge-primary">Delivered</span>
                                            <h5>Ali Sayed</h5>
                                            <p>The carrier successfully delivered the message to the end user.</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="customer">ZR</div>
                                        <div class="delivery-details">
                                            <span class="badge badge-primary">Cancelled</span>
                                            <h5>Zaira Raheem</h5>
                                            <p>The following describe the status codes and messages states for delivery receipts.</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="customer secondary">LJ</div>
                                        <div class="delivery-details">
                                            <span class="badge badge-secondary">Returned</span>
                                            <h5>Lily Jordan</h5>
                                            <p>Status codes and descriptions are returned in the following OpenMarket-specific TLVs When a delivery receipt is received.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card h-320">
                        <div class="card-header">
                            <div class="card-title">Overall Ratings</div>
                        </div>
                        <div class="card-body">
                            <div class="user-ratings">
                                <div class="total-ratings">
                                    <h2>4.5</h2>
                                    <div class="rating-stars">
                                        <div id="rate1"></div>
                                    </div>
                                </div>
                                <div class="ratings-list-container">
                                    <div class="ratings-list">
                                        <div class="rating-level">5.0</div>
                                        <div class="rating-stars">
                                            <div class="rateA"></div>
                                        </div>
                                        <div class="total">
                                            8,500 <span class="percentage">65%</span>
                                        </div>
                                    </div>
                                    <div class="ratings-list">
                                        <div class="rating-level">4.0</div>
                                        <div class="rating-stars">
                                            <div class="rateB"></div>
                                        </div>
                                        <div class="total">
                                            3,500 <span class="percentage">20%</span>
                                        </div>
                                    </div>
                                    <div class="ratings-list">
                                        <div class="rating-level">3.0</div>
                                        <div class="rating-stars">
                                            <div class="rateC"></div>
                                        </div>
                                        <div class="total">
                                            1,400 <span class="percentage">15%</span>
                                        </div>
                                    </div>
                                    <div class="ratings-list">
                                        <div class="rating-level">2.0</div>
                                        <div class="rating-stars">
                                            <div class="rateD"></div>
                                        </div>
                                        <div class="total">
                                            300 <span class="percentage">05%</span>
                                        </div>
                                    </div>
                                    <div class="ratings-list">
                                        <div class="rating-level">1.0</div>
                                        <div class="rating-stars">
                                            <div class="rateE"></div>
                                        </div>
                                        <div class="total">
                                            75 <span class="percentage">03%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Row ends -->
            <!-- Content wrapper start -->

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="table-container">
                            <div class="t-header">Saccos <button class="btn btn-info" data-toggle="modal" data-target="#addSacco">Add Sacco</button> </div>
                            <div class="table-responsive">
                                <table id="copy-print-csv" class="table custom-table">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($saccos as $sacco)
                                    <tr>
                                        <td>{{$sacco->name}}</td>
                                        <td>{{$sacco->from}}</td>
                                        <td>{{$sacco->to}}</td>
                                        <td>
                                            <div class="row">
                                            <a href="{{url('matatu',$sacco->id)}}"><button class="btn btn-success">View</button></a>
                                            <button class="btn btn-info view" id="{{$sacco->id}}" data-toggle="modal" data-target="#editSacco">Edit</button>
                                            <form action="{{url('deleteSacco')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="saccoId" value="{{$sacco->id}}">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- Row end -->

            <!-- Content wrapper end -->


        </div>
        <!-- Content wrapper end -->


    </div>
    <!-- *************
        ************ Main container end *************
    ************* -->

    <!-- Footer start -->
    <footer class="main-footer">© Wafi 2020</footer>
    <!-- Footer end -->

</div>
<div class="modal fade" id="addSacco" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('admin.store')}}" method="post">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customModalTwoLabel">Register Sacco</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Sacco Name:</label>
                        <input type="text" name="name" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">From:</label>
                        <input type="text" name="from" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">To:</label>
                        <input type="text" name="to" class="form-control" id="recipient-name">
                    </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 1:</label>
                    <input type="text" name="s1" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 2:</label>
                    <input type="text" name="s2" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 3:</label>
                    <input type="text" name="s3" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 4:</label>
                    <input type="text" name="s4" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 5:</label>
                    <input type="text" name="s5" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 6:</label>
                    <input type="text" name="s6" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 7:</label>
                    <input type="text" name="s7" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 8:</label>
                    <input type="text" name="s8" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 9:</label>
                    <input type="text" name="s9" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 10:</label>
                    <input type="text" name="s10" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 11:</label>
                    <input type="text" name="s11" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 12:</label>
                    <input type="text" name="s12" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 13:</label>
                    <input type="text" name="s13" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 14:</label>
                    <input type="text" name="s14" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Stage 15:</label>
                    <input type="text" name="s15" class="form-control" id="recipient-name">
                </div>

            </div>
            <div class="modal-footer custom">

                <div class="left-side">
                    <button type="button" class="btn btn-link danger" data-dismiss="modal">Cancel</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="submit" class="btn btn-link success">Save</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<div class="modal fade" id="editSacco" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('sacco.edit')}}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customModalTwoLabel">Edit Sacco</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="basic1">

                </div>
                <div class="modal-footer custom">

                    <div class="left-side">
                        <button type="button" class="btn btn-link danger" data-dismiss="modal">Cancel</button>
                    </div>
                    <div class="divider"></div>
                    <div class="right-side">
                        <button type="submit" class="btn btn-link success">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Container fluid end -->

<!-- *************
    ************ Required JavaScript Files *************
************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/bootstrap.bundle.min.js"></script>
<script src="asset/js/moment.js"></script>


<!-- *************
    ************ Vendor Js Files *************
************* -->
<!-- Slimscroll JS -->
<script src="asset/vendor/slimscroll/slimscroll.min.js"></script>
<script src="asset/vendor/slimscroll/custom-scrollbar.js"></script>

<!-- Daterange -->
<script src="asset/vendor/daterange/daterange.js"></script>
<script src="asset/vendor/daterange/custom-daterange.js"></script>

<!-- Chartist JS -->
<script src="asset/vendor/chartist/js/chartist.min.js"></script>
<script src="asset/vendor/chartist/js/chartist-tooltip.js"></script>
<script src="asset/vendor/chartist/js/custom/threshold/threshold.js"></script>
<script src="asset/vendor/chartist/js/custom/bar/bar-chart-orders.js"></script>

<script src="asset/vendor/daterange/daterange.js"></script>
<script src="asset/vendor/daterange/custom-daterange.js"></script>

<!-- Data Tables -->
<script src="asset/vendor/datatables/dataTables.min.js"></script>
<script src="asset/vendor/datatables/dataTables.bootstrap.min.js"></script>

<!-- Custom Data tables -->
<script src="asset/vendor/datatables/custom/custom-datatables.js"></script>
<script src="asset/vendor/datatables/custom/fixedHeader.js"></script>

<!-- Download / CSV / Copy / Print -->
<script src="asset/vendor/datatables/buttons.min.js"></script>
<script src="asset/vendor/datatables/jszip.min.js"></script>
<script src="asset/vendor/datatables/pdfmake.min.js"></script>
<script src="asset/vendor/datatables/vfs_fonts.js"></script>
<script src="asset/vendor/datatables/html5.min.js"></script>
<script src="asset/vendor/datatables/buttons.print.min.js"></script>

<!-- Rating JS -->
<script src="asset/vendor/rating/raty.js"></script>
<script src="asset/vendor/rating/raty-custom.js"></script>

<!-- Main Js Required -->
<script src="asset/js/main.js"></script>

</body>
<script>
    $(document).on('click','.view',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('getSaccoDetail')}}",
            data:{'sacco':$value},
            success:function (data) {
                $('#basic1').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
</script>

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:08:13 GMT -->
</html>
