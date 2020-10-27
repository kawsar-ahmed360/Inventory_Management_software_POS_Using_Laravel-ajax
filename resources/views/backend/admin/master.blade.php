<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.ninjateam.org/html/zeiss/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 03:20:17 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - Zeiss Template</title>

    <!-- Main Styles -->
    
    <!-- Material Design Icon -->
    <link rel="stylesheet" href="{{ asset('public/backend/fonts/material-design/css/materialdesignicons.css') }}">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') }}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugin/waves/waves.min.css') }}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugin/sweet-alert/sweetalert.css') }}">
    
    <!-- Percent Circle -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugin/percircle/css/percircle.css') }}">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugin/chart/chartist/chartist.min.css') }}">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugin/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>

    <link rel="stylesheet" href="{{ asset('public/backend/styles/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/backend/styles/custom.css') }}">

    <!-- Color Picker -->
    <link rel="stylesheet" href="{{ asset('public/backend/color-switcher/color-switcher.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/plugin/datatables/media/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/backend/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
</head>

<body>
<div class="main-menu">
    <header class="header">
        <a href="index.html" class="logo">Zeiss</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <ul class="menu js__accordion">
                <li class="current">
                    <a class="waves-effect" href="index.html"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-users"></i><span>Users</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="{{ route('userview') }}">User View</a></li>
                      
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>

                  <li>
                    <a class="waves-effect" href="{{ route('profile_view') }}"><i class="menu-icon fa fa-user"></i><span>Profile</span></a>
                </li>

                <li>
                    <a class="waves-effect" href="calendar.html"><i class="menu-icon fa fa-eye"></i><span>Calendar</span><span class="notice notice-danger">New</span></a>
                </li>


                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-eye"></i><span>Supliar</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="{{ route('viewSupliar') }}">View Supliar</a></li>
                      
                    </ul>
                </li>

                  <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-eye"></i><span>Units</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="{{ route('viewUnits') }}">View Units</a></li>
                      
                    </ul>
                </li>



                   <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-eye"></i><span>Category</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="{{ route('viewcategory') }}">View Category</a></li>
                      
                    </ul>
                </li>


              
              
             
              
            </ul>
            <!-- /.menu js__accordion -->
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
    <div class="float-left">
        <button type="button" class="menu-mobile-button fas fa-bars js__menu_mobile"></button>
        <h1 class="page-title">Home</h1>
        <!-- /.page-title -->
    </div>
    <!-- /.float-left -->
    <div class="float-right">
        <div class="ico-item">
            <a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
            <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
            <!-- /.searchform -->
        </div>
        <!-- /.ico-item -->
        <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
        <!-- /.ico-item fa fa-fa-arrows-alt -->
        <div class="ico-item toggle-hover js__drop_down ">
            <span class="fa fa-th js__drop_down_button"></span>
            <div class="toggle-content">
                <ul>
                    <li><a href="#"><i class="fa fa-github"></i><span class="txt">Github</span></a></li>
                    <li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt">Bitbucket</span></a></li>
                    <li><a href="#"><i class="fa fa-slack"></i><span class="txt">Slack</span></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i><span class="txt">Dribbble</span></a></li>
                    <li><a href="#"><i class="fa fa-amazon"></i><span class="txt">Amazon</span></a></li>
                    <li><a href="#"><i class="fa fa-dropbox"></i><span class="txt">Dropbox</span></a></li>
                </ul>
                <a href="#" class="read-more">More</a>
            </div>
            <!-- /.toggle-content -->
        </div>
        <!-- /.ico-item -->
        <a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
        <a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
        <div class="ico-item">
            <img src="{{ asset('public/backend/images/avatar-sm-1.jpg') }}" alt="" class="ico-img">
            <ul class="sub-ico-item">
                <li><a href="#">Settings</a></li>
                <li><a href="#">Blog</a></li>

                <li>
                 <a class="js__logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  
                </li>
            </ul>
            <!-- /.sub-ico-item -->
        </div>
        <!-- /.ico-item -->
    </div>
    <!-- /.float-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="50">
    <h2 class="popup-title">Your Notifications</h2>
    <!-- /.popup-title -->
    <div class="content">
        <ul class="notice-list">
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-sm-1.jpg') }}" alt=""></span>
                    <span class="name">John Doe</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">10 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-sm-2.jpg') }}" alt=""></span>
                    <span class="name">Anna William</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">15 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
                    <span class="name">Update Status</span>
                    <span class="desc">Failed to get available update data. To ensure the please contact us.</span>
                    <span class="time">30 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-1.jpg" a') }}" alt=""></span>
                    <span class="name">Jennifer</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-sm-6.jpg') }}" alt=""></span>
                    <span class="name">Michael Zenaty</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">50 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-sm-4.jpg') }}" alt=""></span>
                    <span class="name">Simon</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">1 hour</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
                    <span class="name">Account Contact Change</span>
                    <span class="desc">A contact detail associated with your account has been changed.</span>
                    <span class="time">2 hours</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-sm-7.jpg') }}" alt=""></span>
                    <span class="name">Helen 987</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">Yesterday</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-2.jpg" a') }}" alt=""></span>
                    <span class="name">Denise Jenny</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">Oct, 28</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-sm-8.jpg') }}" alt=""></span>
                    <span class="name">Thomas William</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">Oct, 27</span>
                </a>
            </li>
        </ul>
        <!-- /.notice-list -->
        <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
    </div>
    <!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="50">
    <h2 class="popup-title">Recent Messages<a href="#" class="float-right text-danger">New message</a></h2>
    <!-- /.popup-title -->
    <div class="content">
        <ul class="notice-list">
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-sm-1.jpg') }}" alt=""></span>
                    <span class="name">John Doe</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">10 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-sm-3.jpg') }}" alt=""></span>
                    <span class="name">Harry Halen</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">15 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-sm-4.jpg') }}" alt=""></span>
                    <span class="name">Thomas Taylor</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">30 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-1.jpg') }}" alt=""></span>
                    <span class="name">Jennifer</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-sm-5.jpg') }}" alt=""></span>
                    <span class="name">Helen Candy</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-2.jpg') }}" alt=""></span>
                    <span class="name">Anna Cavan</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">1 hour ago</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-success"><i class="fa fa-user"></i></span>
                    <span class="name">Jenny Betty</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">1 day ago</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="{{ asset('public/backend/images/avatar-5.jpg') }}" alt=""></span>
                    <span class="name">Denise Peterson</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">1 year ago</span>
                </a>
            </li>
        </ul>
        <!-- /.notice-list -->
        <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
    </div>
    <!-- /.content -->
</div>
<!-- /#message-popup -->
<div id="color-switcher">
    <div id="color-switcher-button" class="btn-switcher">
        <div class="inside waves-effect waves-circle waves-light">
            <i class="ico fas fa-cog"></i>
        </div>
        <!-- .inside waves-effect waves-circle -->
    </div>
    <!-- .btn-switcher -->
    <div id="color-switcher-content" class="content">
        <a href="#" data-color="red" class="item js__change_color"><span class="color" style="background-color: #f44336;"></span><span class="text">Red</span></a>
        <a href="#" data-color="violet" class="item js__change_color"><span class="color" style="background-color: #673ab7;"></span><span class="text">Violet</span></a>
        <a href="#" data-color="dark-blue" class="item js__change_color"><span class="color" style="background-color: #3f51b5;"></span><span class="text">Dark Blue</span></a>
        <a href="#" data-color="blue" class="item js__change_color active"><span class="color" style="background-color: #304ffe;"></span><span class="text">Blue</span></a>
        <a href="#" data-color="light-blue" class="item js__change_color"><span class="color" style="background-color: #2196f3;"></span><span class="text">Light Blue</span></a>
        <a href="#" data-color="green" class="item js__change_color"><span class="color" style="background-color: #4caf50;"></span><span class="text">Green</span></a>
        <a href="#" data-color="yellow" class="item js__change_color"><span class="color" style="background-color: #ffc107;"></span><span class="text">Yellow</span></a>
        <a href="#" data-color="orange" class="item js__change_color"><span class="color" style="background-color: #ff5722;"></span><span class="text">Orange</span></a>
        <a href="#" data-color="chocolate" class="item js__change_color"><span class="color" style="background-color: #795548;"></span><span class="text">Chocolate</span></a>
        <a href="#" data-color="dark-green" class="item js__change_color"><span class="color" style="background-color: #263238;"></span><span class="text">Dark Green</span></a>
        <span id="color-reset" class="btn-restore-default js__restore_default">Reset</span>
    </div>
    <!-- /.content -->
</div>
<!-- #color-switcher -->

<div id="wrapper">


    <div class="main-content">


       @yield('con');
        <!-- /.row -->      
        <footer class="footer">
            <ul class="list-inline">
                <li>2016 © NinjaAdmin.</li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </footer>
    </div>
    <!-- /.main-content -->
</div><!--/#wrapper -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="assets/script/html5shiv.min.js"></script>
        <script src="assets/script/respond.min.js"></script>
    <![endif]-->
    <!-- 
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('public/backend/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('public/backend/scripts/modernizr.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugin/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('public/backend/plugin/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugin/waves/waves.min.js') }}"></script>
    <!-- Full Screen Plugin -->
    <script src="{{ asset('public/backend/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>

    <!-- Google Chart -->
    <script type="text/javascript" src="../../../../www.gstatic.com/charts/loader.js"></script>

    <!-- chart.js Chart -->
    <script src="{{ asset('public/backend/plugin/chart/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('public/backend/scripts/chart.chartjs.init.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugin/validator/validator.min.js') }}"></script>
     @yield('footer');

    <!-- FullCalendar -->
    <script src="{{ asset('public/backend/plugin/moment/moment.js') }}"></script>
    <script src="{{ asset('public/backend/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('public/backend/scripts/fullcalendar.init.js') }}"></script>

    <script src="{{ asset('public/backend/plugin/datatables/media/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('public/backend/plugin/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('public/backend/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('public/backend/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/backend/scripts/datatables.demo.min.js') }}"></script>
    <!-- Sparkline Chart -->
    <script src="{{ asset('public/backend/plugin/chart/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('public/backend/scripts/chart.sparkline.init.min.js') }}"></script>

    <script src="{{ asset('public/backend/scripts/main.min.js') }}"></script>
<script src="{{ asset('public/backend/scripts/mycommon.js') }}"></script>
    <script src="{{ asset('public/backend/color-switcher/color-switcher.min.js') }}"></script>
</body>

<!-- Mirrored from demo.ninjateam.org/html/zeiss/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 03:20:17 GMT -->
</html>