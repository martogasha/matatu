<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:14:23 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="asset/img/fav.png" />

    <!-- Title -->
    <title>Chat - Support</title>


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

    <!-- Data Tables -->
    <link rel="stylesheet" href="asset/vendor/datatables/dataTables.bs4.css" />
    <link rel="stylesheet" href="asset/vendor/datatables/dataTables.bs4-custom.css" />
    <link href="asset/vendor/datatables/buttons.bs.css" rel="stylesheet" />


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
            <img src="asset/img/logo.png" alt="Wafi Admin Dashboard" />
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
                                    <img src="asset/img/user21.png" alt="User" />
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
                                    <img src="asset/img/user10.png" alt="User" />
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
                                    <img src="asset/img/user6.png" alt="User" />
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
                                <img src="asset/img/user.png" alt="Admin Template" />
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
                    <a class="nav-link" href="{{url('admin')}}" id="dashboardsDropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link active-page" href="{{url('chat')}}" id="pagesDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
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
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Matatu Listing</li>
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


            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="chat-section">
                        <!-- Row start -->
                        <div class="row no-gutters">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-2 col-3">
                                <div class="users-container">
                                    <div class="chat-search-box">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Search" />
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary">
                                                    <i class="icon-magnifying-glass"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="usersContainerScroll">
                                        <ul class="users">
                                            <li class="person" data-chat="person4">
                                                <div class="user">
                                                    <img src="asset/img/user.png" alt="Wafi Admin" />
                                                    <span class="status online"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Amy Hood</span>
                                                    <span class="time">4 hours ago</span>
                                                </p>
                                            </li>
                                            <li class="person" data-chat="person1">
                                                <div class="user">
                                                    <img src="asset/img/user6.png" alt="Wafi Admin" />
                                                    <span class="status busy"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Den Klenkov</span>
                                                    <span class="time">1 hours ago</span>
                                                </p>
                                            </li>
                                            <li class="person active-user" data-chat="person1">
                                                <div class="user">
                                                    <img src="asset/img/user22.png" alt="Wafi Admin" />
                                                    <span class="status online"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Zhenya Rynzhuk</span>
                                                    <span class="time">2 hours ago</span>
                                                </p>
                                            </li>
                                            <li class="person" data-chat="person2">
                                                <div class="user">
                                                    <img src="asset/img/user24.png" alt="Wafi Admin" />
                                                    <span class="status away"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Andrea Hock</span>
                                                    <span class="time">2 hours ago</span>
                                                </p>
                                            </li>
                                            <li class="person" data-chat="person3">
                                                <div class="user">
                                                    <img src="asset/img/user12.png" alt="Wafi Admin" />
                                                    <span class="status busy"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Zuairia Zaman</span>
                                                    <span class="time">3 hours ago</span>
                                                </p>
                                            </li>
                                            <li class="person" data-chat="person4">
                                                <div class="user">
                                                    <img src="asset/img/user14.png" alt="Wafi Admin" />
                                                    <span class="status offline"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Mohamed Chahin</span>
                                                    <span class="time">4 hours ago</span>
                                                </p>
                                            </li>
                                            <li class="person" data-chat="person5">
                                                <div class="user">
                                                    <img src="asset/img/user7.png" alt="Wafi Admin" />
                                                    <span class="status away"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Haley Bridges</span>
                                                    <span class="time">5 hours ago</span>
                                                </p>
                                            </li>
                                            <li class="person" data-chat="person3">
                                                <div class="user">
                                                    <img src="asset/img/user9.png" alt="Wafi Admin" />
                                                    <span class="status busy"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Meg Lewis</span>
                                                    <span class="time">3 hours ago</span>
                                                </p>
                                            </li>
                                            <li class="person" data-chat="person5">
                                                <div class="user">
                                                    <img src="asset/img/user18.png" alt="Wafi Admin" />
                                                    <span class="status away"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Ali Sayed</span>
                                                    <span class="time">5 hours ago</span>
                                                </p>
                                            </li>
                                            <li class="person" data-chat="person3">
                                                <div class="user">
                                                    <img src="asset/img/user3.png" alt="Wafi Admin" />
                                                    <span class="status busy"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Jessica Larson</span>
                                                    <span class="time">3 hours ago</span>
                                                </p>
                                            </li>
                                            <li class="person" data-chat="person4">
                                                <div class="user">
                                                    <img src="asset/img/user20.png" alt="Wafi Admin" />
                                                    <span class="status offline"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Lisa Guerrero</span>
                                                    <span class="time">4 hours ago</span>
                                                </p>
                                            </li>
                                            <li class="person" data-chat="person5">
                                                <div class="user">
                                                    <img src="asset/img/user10.png" alt="Wafi Admin" />
                                                    <span class="status away"></span>
                                                </div>
                                                <p class="name-time">
                                                    <span class="name">Lily Jordan</span>
                                                    <span class="time">5 hours ago</span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-10 col-9">
                                <div class="active-user-chatting">
                                    <div class="active-user-info">
                                        <img src="asset/img/user.png" class="avatar" alt="avatar" />
                                        <div class="avatar-info">
                                            <h5>Amy Hood</h5>
                                            <div class="typing">Typing ...</div>
                                        </div>
                                    </div>
                                    <div class="chat-actions">
                                        <a href="#" data-toggle="modal" data-target="#videoCall">
                                            <i class="icon-video"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#audioCall">
                                            <i class="icon-phone1"></i>
                                        </a>
                                    </div>

                                    <!-- Audio Call Modal -->
                                    <div class="modal fade" id="audioCall" tabindex="-1" role="dialog" aria-labelledby="audioCallLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="call-container">
                                                        <div class="current-user">
                                                            <img src="asset/img/user24.png" alt="Avatar" >
                                                        </div>
                                                        <h5 class="calling-user-name">
                                                            Amy Hood <span class="calling">Calling...</span>
                                                        </h5>
                                                        <div class="calling-btns">
                                                            <button class="btn btn-secondary" data-dismiss="modal">
                                                                <i class="icon-x"></i>
                                                            </button>
                                                            <button class="btn btn-primary">
                                                                <i class="icon-phone1"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Video Call Modal -->
                                    <div class="modal fade" id="videoCall" tabindex="-1" role="dialog" aria-labelledby="videoCallLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="call-container">
                                                        <div class="current-user">
                                                            <img src="asset/img/user22.png" alt="Avatar" >
                                                        </div>
                                                        <h5 class="calling-user-name">
                                                            Zhenya Rynzhuk <span class="calling">Calling...</span>
                                                        </h5>
                                                        <div class="calling-btns">
                                                            <button class="btn btn-secondary" data-dismiss="modal">
                                                                <i class="icon-x"></i>
                                                            </button>
                                                            <button class="btn btn-primary">
                                                                <i class="icon-video"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="chat-container">
                                    <div class="chatContainerScroll">
                                        <ul class="chat-box">
                                            <li class='chat-left'>
                                                <div class='chat-avatar'>
                                                    <img src="asset/img/user6.png" alt="Wafi Admin" />
                                                    <div class='chat-name'>Den</div>
                                                </div>
                                                <div class='chat-text'>
                                                    <p>Hello, I'm Den Klenkov.<br />How can I help you today?<br />The basic setup requires targetting an input element and invoking the picker:</p>
                                                    <div class='chat-hour'>08:55 <span class='icon-done_all'></span></div>
                                                </div>
                                            </li>
                                            <li class='chat-right'>
                                                <div class='chat-text'>
                                                    <p>Hi, Den<br />
                                                        I need more information about Developer Plan.</p>
                                                    <div class='chat-hour'>08:56 <span class='icon-done_all'></span></div>
                                                </div>
                                                <div class='chat-avatar'>
                                                    <img src="asset/img/user.png" alt="Wafi Admin" />
                                                    <div class='chat-name'>Amy</div>
                                                </div>
                                            </li>
                                            <li class="divider">Dec 18, 2019</li>
                                            <li class='chat-left'>
                                                <div class='chat-avatar'>
                                                    <img src="asset/img/user18.png" alt="Wafi Admin" />
                                                    <div class='chat-name'>Ali</div>
                                                </div>
                                                <div class='chat-text'>
                                                    <p>Are we meeting today?<br />Project has been already finished and I have results to show you.</p>
                                                    <div class='chat-hour'>08:57 <span class='icon-done_all'></span></div>
                                                </div>
                                            </li>
                                            <li class='chat-right'>
                                                <div class='chat-text'>
                                                    <p>Well I am not sure.<br />I have results to show you.</p>
                                                    <div class='chat-hour'>08:59 <span class='icon-done_all'></span></div>
                                                </div>
                                                <div class='chat-avatar'>
                                                    <img src="asset/img/user10.png" alt="Wafi Admin" />
                                                    <div class='chat-name'>Lily</div>
                                                </div>
                                            </li>
                                            <li class="divider">Dec 21, 2019</li>
                                            <li class='chat-left'>
                                                <div class='chat-avatar'>
                                                    <img src="asset/img/user22.png" alt="Wafi Admin" />
                                                    <div class='chat-name'>Zhenya</div>
                                                </div>
                                                <div class='chat-text'>
                                                    <p>The rest of the team is not here yet.<br />Maybe in an hour or so?</p>
                                                    <div class='chat-hour'>08:57 <span class='icon-done_all'></span></div>
                                                </div>
                                            </li>
                                            <li class='chat-right'>
                                                <div class='chat-text'>
                                                    <p>Have you faced any problems at the last phase of the project?</p>
                                                    <div class='chat-hour'>08:59 <span class='icon-done_all'></span></div>
                                                </div>
                                                <div class='chat-avatar'>
                                                    <img src="asset/img/user24.png" alt="Wafi Admin" />
                                                    <div class='chat-name'>Andrea</div>
                                                </div>
                                            </li>
                                            <li class="divider">Dec 25, 2019</li>
                                            <li class='chat-left'>
                                                <div class='chat-avatar'>
                                                    <img src="asset/img/user20.png" alt="Wafi Admin" />
                                                    <div class='chat-name'>Lisa</div>
                                                </div>
                                                <div class='chat-text'>
                                                    <p>Actually everything was fine.<br />I'm very excited to show this to our team.<br />From next week I am going to work on new and exiting project. Thanks.</p>
                                                    <div class='chat-hour'>07:00 <span class='icon-done_all'></span></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="chat-form">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Type your message here..."></textarea>
                                            <button class="btn btn-primary">
                                                <i class="icon-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
            </div>
            <!-- Row end -->


        </div>
        <!-- Content wrapper end -->

        <!-- Content wrapper start -->
        <!-- Content wrapper end -->


    </div>
    <!-- *************
				************ Main container end *************
			************* -->


    <!-- Footer start -->
    <footer class="main-footer">© Wafi 2020</footer>
    <!-- Footer end -->


</div>

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

<!-- Main Js Required -->
<script src="asset/js/main.js"></script>

</body>

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:15:07 GMT -->
</html>
