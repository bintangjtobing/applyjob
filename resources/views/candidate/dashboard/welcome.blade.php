<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Jobpply Personal Page | @yield('titledashboard')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{!!asset('dashboard/images/favicon.png')!!}">
    <!-- Pignose Calender -->
    <link href="{!!asset('dashboard/plugins/pg-calendar/css/pignose.calendar.min.css')!!}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{!!asset('dashboard/plugins/chartist/css/chartist.min.css')!!}">
    <link rel="stylesheet"
        href="{!!asset('dashboard/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')!!}">
    <!-- Custom Stylesheet -->
    <link href="{!!asset('dashboard/css/style.css')!!}" rel="stylesheet">
    <link href="{!!asset('dashboard/css/custom.css')!!}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/bf3b9c3659.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php $encode = base64_encode(session()->get('id')); ?>
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <div class="brand-logo">
                <a href="/dashboard/candidate">
                    <b class="logo-abbr"><img src="{!!asset('dashboard/images/logo.png')!!}" alt=""> </b>
                    <span class="logo-compact">
                        <img src="{!!asset('dashboard/images/logo-compact.png')!!}" alt="">
                    </span>
                    <span class="brand-title">
                        <img src="{!!asset('dashboard/images/logo-text.png')!!}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <div class="header">
            <div class="header-content clearfix">
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i
                                    class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard"
                            aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    alt="User image profile">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="/dashboard/candidate/{{$encode}}/my-setting/"><i
                                                    class="icon-equalizer"></i> <span>Pengaturan Akun</span></a></li>
                                        <li><a href="/logout"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    {{-- <li class="nav-label">Profile</li> --}}
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">Your Account</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/dashboard/candidate/{{$encode}}/my-information/">Informasi saya</a></li>
                            <li><a href="/dashboard/candidate/{{$encode}}/my-setting/">Pengaturan akun</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-body">
            @yield('content')
        </div>
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="#">ApplyJob</a>
                    2020</p>
            </div>
        </div>
    </div>
    <script src="{!!asset('dashboard/plugins/common/common.min.js')!!}"></script>
    <script src="{!!asset('dashboard/js/custom.min.js')!!}"></script>
    <script src="{!!asset('dashboard/js/settings.js')!!}"></script>
    <script src="{!!asset('dashboard/js/gleek.js')!!}"></script>
    <script src="{!!asset('dashboard/js/styleSwitcher.js')!!}"></script>

    <!-- Chartjs -->
    <script src="{!!asset('dashboard/plugins/chart.js/Chart.bundle.min.js')!!}"></script>
    <!-- Circle progress -->
    <script src="{!!asset('dashboard/plugins/circle-progress/circle-progress.min.js')!!}"></script>
    <!-- Datamap -->
    <script src="{!!asset('dashboard/plugins/d3v3/index.js')!!}"></script>
    <script src="{!!asset('dashboard/plugins/topojson/topojson.min.js')!!}"></script>
    <script src="{!!asset('dashboard/plugins/datamaps/datamaps.world.min.js')!!}"></script>
    <!-- Morrisjs -->
    <script src="{!!asset('dashboard/plugins/raphael/raphael.min.js')!!}"></script>
    <script src="{!!asset('dashboard/plugins/morris/morris.min.js')!!}"></script>
    <!-- Pignose Calender -->
    <script src="{!!asset('dashboard/plugins/moment/moment.min.js')!!}"></script>
    <script src="{!!asset('dashboard/plugins/pg-calendar/js/pignose.calendar.min.js')!!}"></script>
    <!-- ChartistJS -->
    <script src="{!!asset('dashboard/plugins/chartist/js/chartist.min.js')!!}"></script>
    <script src="{!!asset('dashboard/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')!!}"></script>



    <script src="{!!asset('dashboard/js/dashboard/dashboard-1.js')!!}"></script>

</body>

</html>
