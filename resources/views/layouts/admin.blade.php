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
            <!-- Side Overlay-->
            <aside id="side-overlay" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <!-- Side Header -->
                                    <div class="content-header content-header-fullrow">
                                        <div class="content-header-section align-parent">
                                            <!-- Close Side Overlay -->
                                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                                                <i class="fa fa-times text-danger"></i>
                                            </button>
                                            <!-- END Close Side Overlay -->

                                            <!-- User Info -->
                                            <div class="content-header-item">
                                                <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                                    <img class="img-avatar img-avatar32" src="/assets/media/avatars/avatar15.jpg" alt="">
                                                </a>
                                                <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Wanjema</a>
                                            </div>
                                            <!-- END User Info -->
                                        </div>
                                    </div>
                                    <!-- END Side Header -->

                                    <!-- Side Content -->
                                    <div class="content-side">
                                        <!-- Search -->
                                        <div class="block pull-t pull-r-l">
                                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                                <form action="be_pages_generic_search.html" method="post">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-secondary px-10">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END Search -->

                                        <!-- Mini Stats -->
                                        <div class="block pull-r-l">
                                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                                                        <div class="font-size-h4">460</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                                        <div class="font-size-h4">728</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                                        <div class="font-size-h4">$7,860</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Mini Stats -->

                                        <!-- Friends -->
                                        <div class="block pull-r-l">
                                            <div class="block-header bg-body-light">
                                                <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                        <i class="si si-refresh"></i>
                                                    </button>
                                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <ul class="nav-users push">
                                                    <li>
                                                        <a href="be_pages_generic_profile.html">
                                                            <img class="img-avatar" src="/assets/media/avatars/avatar8.jpg" alt="">
                                                            <i class="fa fa-circle text-success"></i> Andrea Gardner
                                                            <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="be_pages_generic_profile.html">
                                                            <img class="img-avatar" src="/assets/media/avatars/avatar16.jpg" alt="">
                                                            <i class="fa fa-circle text-success"></i> Ryan Flores
                                                            <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="be_pages_generic_profile.html">
                                                            <img class="img-avatar" src="/assets/media/avatars/avatar8.jpg" alt="">
                                                            <i class="fa fa-circle text-warning"></i> Carol Ray
                                                            <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="be_pages_generic_profile.html">
                                                            <img class="img-avatar" src="/assets/media/avatars/avatar11.jpg" alt="">
                                                            <i class="fa fa-circle text-danger"></i> Brian Stevens
                                                            <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- END Friends -->

                                        <!-- Activity -->
                                        <div class="block pull-r-l">
                                            <div class="block-header bg-body-light">
                                                <h3 class="block-title">
                                                    <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                                                </h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                        <i class="si si-refresh"></i>
                                                    </button>
                                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <ul class="list list-activity">
                                                    <li>
                                                        <i class="si si-wallet text-success"></i>
                                                        <div class="font-w600">+$29 New sale</div>
                                                        <div>
                                                            <a href="javascript:void(0)">Admin Template</a>
                                                        </div>
                                                        <div class="font-size-xs text-muted">5 min ago</div>
                                                    </li>
                                                    <li>
                                                        <i class="si si-close text-danger"></i>
                                                        <div class="font-w600">Project removed</div>
                                                        <div>
                                                            <a href="javascript:void(0)">Best Icon Set</a>
                                                        </div>
                                                        <div class="font-size-xs text-muted">26 min ago</div>
                                                    </li>
                                                    <li>
                                                        <i class="si si-pencil text-info"></i>
                                                        <div class="font-w600">You edited the file</div>
                                                        <div>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-file-text-o"></i> Docs.doc
                                                            </a>
                                                        </div>
                                                        <div class="font-size-xs text-muted">3 hours ago</div>
                                                    </li>
                                                    <li>
                                                        <i class="si si-plus text-success"></i>
                                                        <div class="font-w600">New user</div>
                                                        <div>
                                                            <a href="javascript:void(0)">StudioWeb - View Profile</a>
                                                        </div>
                                                        <div class="font-size-xs text-muted">5 hours ago</div>
                                                    </li>
                                                    <li>
                                                        <i class="si si-wrench text-warning"></i>
                                                        <div class="font-w600">App v5.5 is available</div>
                                                        <div>
                                                            <a href="javascript:void(0)">Update now</a>
                                                        </div>
                                                        <div class="font-size-xs text-muted">8 hours ago</div>
                                                    </li>
                                                    <li>
                                                        <i class="si si-user-follow text-pulse"></i>
                                                        <div class="font-w600">+1 Friend Request</div>
                                                        <div>
                                                            <a href="javascript:void(0)">Accept</a>
                                                        </div>
                                                        <div class="font-size-xs text-muted">1 day ago</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- END Activity -->

                                        <!-- Profile -->
                                        <div class="block pull-r-l">
                                            <div class="block-header bg-body-light">
                                                <h3 class="block-title">
                                                    <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                                                </h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                                                    <div class="form-group mb-15">
                                                        <label for="side-overlay-profile-name">Name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-user"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="side-overlay-profile-email">Email</label>
                                                        <div class="input-group">
                                                            <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="side-overlay-profile-password">New Password</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-asterisk"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-asterisk"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-6">
                                                            <button type="submit" class="btn btn-block btn-alt-primary">
                                                                <i class="fa fa-refresh mr-5"></i> Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END Profile -->

                                        <!-- Settings -->
                                        <div class="block pull-r-l">
                                            <div class="block-header bg-body-light">
                                                <h3 class="block-title">
                                                    <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                                                </h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <div class="row gutters-tiny">
                                                    <div class="col-6">
                                                        <div class="custom-control custom-checkbox mb-5">
                                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked="">
                                                            <label class="custom-control-label" for="side-overlay-settings-status">Online Status</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-5">
                                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                                            <label class="custom-control-label" for="side-overlay-settings-public-profile">Public Profile</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-5">
                                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked="">
                                                            <label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="custom-control custom-checkbox mb-5">
                                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                                            <label class="custom-control-label" for="side-overlay-settings-updates">Auto updates</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-5">
                                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked="">
                                                            <label class="custom-control-label" for="side-overlay-settings-api-access">API Access</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-5">
                                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                                                            <label class="custom-control-label" for="side-overlay-settings-limit-requests">API Requests</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Settings -->
                                    </div>
                                    <!-- END Side Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 1774px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                    <div class="simplebar-scrollbar" style="height: 43px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                </div>
            </aside>
          
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
                                                        <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="javascript:void(0)">John Doe</a>
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
                                <span class="d-none d-sm-inline-block">John Doe</span>
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