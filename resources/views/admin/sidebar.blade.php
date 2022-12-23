        <!-- Main left sidebar menu -->
        <div id="left-sidebar" class="sidebar">
            <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
            <div class="navbar-brand">
                <a href="index.html"><img src="{{url('assets/images/broadcast.png')}}" height="60" width="165"></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="user_div">
                        <img src="{{url('assets/images/user.png')}}" class="user-photo" alt="User Profile Picture">
                    </div>
                    <div class="dropdown">
                        <span>Anak Magang</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Muhammad Rasyidi</strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                            <li><a href="page-profile.html"><i class="fa fa-user"></i>My Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="page-login.html"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>  
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu animation-li-delay">
                        <li class="active"><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                        <li>
                            <a href="#forms" class="has-arrow"><i class="fa fa-pencil"></i><span> Broadcast</span></a>
                            <ul>
                                <li><a href="{{url('/formvalidasi')}}">Whatsapp</a></li>
                                <li><a href="forms-advanced.html">Notif Fritto Chicken</a></li>
                                <li><a href="forms-validation.html">Email</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Tables" class="has-arrow"><i class="fa fa-table"></i><span>Data</span></a>
                            <ul>
                                <li><a href="{{url('/table_user')}}">Data User</a></li>
                                <li><a href="{{url('/table_admin')}}">Data Admin</a></li>
                            </ul>
                        </li>
          
                        <!-- <li class="header">Halaman Kelola</li>
                        <li><a href="{{url('/kelolauser')}}"><i class="fa fa-gear"></i><span>Kelola User</span></a></li> -->

    
                        <li class="extra_widget">
                            <div class="form-group">
                                <label class="d-block"> <span class="float-right"></span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block"> <span class="float-right"></span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>     
            </div>
        </div>