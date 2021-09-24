`
<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Resource Manager</title>

    <meta name="description" content="">
    <meta name="author" content="wanjema">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick/slick-theme.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">

 
</head>

<body>

 
    <div id='app'>
        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-narrow side-trans-enabled">
            <div id="page-overlay"></div>
          
            <nav id="sidebar" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <!-- Sidebar Content -->
                                    <div class="sidebar-content">
                                        <!-- Side Header -->
                                        <div class="content-header content-header-fullrow px-15">
                                            <!-- Mini Mode -->
                                            <div class="content-header-section sidebar-mini-visible-b">
                                                <!-- Logo -->
                                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                                </span>
                                                <!-- END Logo -->
                                            </div>
                                            <!-- END Mini Mode -->

                                            <!-- Normal Mode -->
                                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                                <!-- Close Sidebar, Visible only on mobile screens -->
                                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                                    <i class="fa fa-times text-danger"></i>
                                                </button>
                                                <!-- END Close Sidebar -->

                                                <!-- Logo -->
                                                <div class="content-header-item">
                                                    <a class="link-effect font-w700" href="javascript:void(0)">
                                                        <!-- <i class="si si-fire text-primary"></i> -->
                                                        <span class="font-size-xl text-dual-primary-dark">Resource</span><span class="font-size-xl text-primary">Managment</span>
                                                    </a>
                                                </div>
                                                <!-- END Logo -->
                                            </div>
                                            <!-- END Normal Mode -->
                                        </div>
                                        <!-- END Side Header -->

                                        <!-- Side User -->
                                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                                            <!-- Visible only in mini mode -->
                                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                                <img class="img-avatar img-avatar32" src="/assets/media/avatars/avatar15.jpg" alt="">
                                            </div>
                                            <!-- END Visible only in mini mode -->

                                            <!-- Visible only in normal mode -->
                                            <div class="sidebar-mini-hidden-b text-center">
                                                <a class="img-link" href="be_pages_generic_profile.html">
                                                    <img class="img-avatar" src="/assets/media/avatars/avatar15.jpg" alt="">
                                                </a>
                                                <ul class="list-inline mt-10">
                                                    <li class="list-inline-item">
                                                        <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="javascript:void(0)">{{Auth::user()->name}}</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                                            <i class="si si-drop"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="link-effect text-dual-primary-dark" href="">
                                                            <i class="si si-logout"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- END Visible only in normal mode -->
                                        </div>
                                        <!-- END Side User -->

                                        <!-- Side Navigation -->
                                        <div class="content-side content-side-full">
                                            <ul class="nav-main">
                                                <li>
                                                    <router-link to="/admin"><i class="fa fa-bar-chart"></i><span class="sidebar-mini-hide">Dashboard</span></router-link>
                                                </li>
                                                <li>
                                                    <router-link to="/admin/pdfs"><i class="fa fa-book"></i><span class="sidebar-mini-hide">PDFS</span></router-link>
                                                </li>
                                                <li>
                                                    <router-link to="/admin/htmlsnippets"><i class="fa fa-code"></i><span class="sidebar-mini-hide">HTML snippet</span></router-link>
                                                </li>
                                                <li>
                                                    <router-link to="/admin/links"><i class="si si-link"></i><span class="sidebar-mini-hide">Links</span></router-link>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END Side Navigation -->    
                                    </div>
                                    <!-- Sidebar Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 1289px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                    <div class="simplebar-scrollbar" style="height: 59px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                </div>
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">{{Auth::user()->name}}</span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

            </header>
            <!-- END Header -->

            @yield('content')

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0" style="opacity: 1;">
                <div class="content py-20 font-size-sm clearfix">
                    <!-- <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="javascript:void(0)" ></a>
                    </div> -->
                    <div class="float-left">
                        <a class="font-w600" href="javascript:void(0)">Resource Manager</a> © <span class="js-year-copy js-year-copy-enabled">{{date('Y')}}</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
    </div>

    <script src="/assets/js/core/jquery.min.js"></script>
    <script src="/assets/js/core/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/core/simplebar.min.js"></script>
    <script src="/assets/js/core/jquery-scrollLock.min.js"></script>
    <script src="/assets/js/core/jquery.appear.min.js"></script>
    <script src="/assets/js/core/jquery.countTo.min.js"></script>
    <script src="/assets/js/core/js.cookie.min.js"></script>

    <script src="/js/app.js"></script>
    <script src="/assets/js/codebase.core.min.js"></script>


    <script src="/assets/js/codebase.app.min.js"></script>

    <script src="/assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
    <script src="/assets/js/plugins/slick/slick.min.js"></script>


</body>

</html>