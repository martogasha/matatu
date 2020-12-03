
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">

                <!-- profile box -->
                <div class="profileBox">
                    <div class="image-wrapper">
                        <a href="{{url('cProfile')}}"> <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged rounded"></a>
                    </div>
                    <a href="{{url('cProfile')}}">
                        <div class="in">
                            <strong>Conductor</strong>
                            <div class="text-muted">
                                <ion-icon name="cash"></ion-icon>
                                <b>Ksh:399</b>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <!-- * profile box -->

                <ul class="listview flush transparent no-line image-listview mt-2">
                    <li>
                        <a href="{{url('conductor')}}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="home-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>Home</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('profile')}}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="person-circle
                                -outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>Profile</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('chat')}}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>Support</div>
                                <span class="badge badge-danger">5</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="moon-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>Dark Mode</div>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input dark-mode-switch"
                                           id="darkmodesidebar">
                                    <label class="custom-control-label" for="darkmodesidebar"></label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <form action="{{route('logout')}}" id="logout-form" method="post">
                            @csrf
                            <a href="javascript:document.getElementById('logout-form').submit();" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Logout</div>
                                </div>
                            </a>
                        </form>
                    </li>
                </ul>

            </div>

            <!-- sidebar buttons -->
            <div class="sidebar-buttons">
                <a href="javascript:;" class="button">
                    <ion-icon name="person-outline"></ion-icon>
                </a>
                <a href="javascript:;" class="button">
                    <ion-icon name="archive-outline"></ion-icon>
                </a>
                <a href="javascript:;" class="button">
                    <ion-icon name="settings-outline"></ion-icon>
                </a>
                <a href="javascript:;" class="button">
                    <ion-icon name="log-out-outline"></ion-icon>
                </a>
            </div>
            <!-- * sidebar buttons -->
        </div>
    </div>
</div>
