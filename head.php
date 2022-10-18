<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Cradfield | Welcome - Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" /> -->
    <!-- <meta content="Themesdesign" name="author" /> -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="./img/Cradfield limited w-bg logo.png">

    <!-- Ajax for Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- datepicker -->
    <link href="assets/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- jvectormap -->
    <link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

    <!-- Animation  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Bootstrap 4 Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <!-- Bootstrap 5 CDN not neede here  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- MY own CSS  -->
    <link rel="stylesheet" href="./mycss/firststyle.css">
    <!-- not working properly  -->
    <!-- <link rel="stylesheet" href="./mycss/L-style.css"> -->

    <!-- W3 CSS  -->
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

    <!-- walai! I'm tired of these plugin too (*x*) -->
</head>


<body data-topbar="colored" data-layout="horizontal" data-layout-size="boxed">

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="container-fluid">
                    <div class="float-right">

                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-tune"></i>
                            </button>
                        </div> -->

                        <div class="dropdown d-inline-block">
                            <!-- <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1">Smith</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button> -->
                            <!-- <div class="dropdown-menu dropdown-menu-right"> -->
                            <!-- item-->
                            <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i>
                                    Billing</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i>
                                    Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a> -->
                            <!-- </div> -->
                        </div>
                    </div>

                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="./img/Cradfield limited w-bg logo.png" alt="Cradfield Limited" height="44">
                            </span>
                            <span class="logo-lg">
                                <img src="./img/Cradfield limited w-bg logo.png" alt="" height="80">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="./img/Cradfield limited w-bg logo.png" alt="" height="44">
                            </span>
                            <span class="logo-lg">
                                <img src="./img/Cradfield limited w-bg logo.png" alt="" height="80">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <div class="topnav">
                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">
                                            HOME
                                        </a>
                                    </li>
                                    <!-- 
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Elements <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-mega-menu-xl px-2" aria-labelledby="topnav-uielement">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="dropdown-item-text font-weight-semibold font-size-16">
                                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-box"></i></div> UI Elements
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <a href="ui-alerts.html" class="dropdown-item">Alerts</a>
                                                            <a href="ui-badge.html" class="dropdown-item">Badge</a>
                                                            <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
                                                            <a href="ui-cards.html" class="dropdown-item">Cards</a>
                                                            <a href="ui-dropdowns.html" class="dropdown-item">Dropdowns</a>
                                                            <a href="ui-navs.html" class="dropdown-item">Navs</a>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div>
                                                                <a href="ui-tabs-accordions.html" class="dropdown-item">Tabs &amp; Accordions</a>
                                                                <a href="ui-modals.html" class="dropdown-item">Modals</a>
                                                                <a href="ui-images.html" class="dropdown-item">Images</a>
                                                                <a href="ui-progressbars.html" class="dropdown-item">Progress Bars</a>
                                                                <a href="ui-pagination.html" class="dropdown-item">Pagination</a>
                                                                <a href="ui-popover-tooltips.html" class="dropdown-item">Popover & Tooltips</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="dropdown-item-text font-weight-semibold font-size-16">
                                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layer-group"></i></div> Advanced UI
                                                    </div>

                                                    <div>
                                                        <a href="advanced-alertify.html" class="dropdown-item">Alertify</a>
                                                        <a href="advanced-rating.html" class="dropdown-item">Rating</a>
                                                        <a href="advanced-nestable.html" class="dropdown-item">Nestable</a>
                                                        <a href="advanced-rangeslider.html" class="dropdown-item">Range
                                                            Slider</a>
                                                        <a href="advanced-sweet-alert.html" class="dropdown-item">Sweet-Alert</a>
                                                        <a href="advanced-lightbox.html" class="dropdown-item">Lightbox</a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </li> -->

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-services" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            SERVICES <div class="arrow-down"></div>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="topnav-services">
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-career" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="d-inline-block icons-sm mr-2"><i class="uim uim-briefcase"></i></div> CAREER
                                                    <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-career">
                                                    <a href="#" class="dropdown-item">Apply Now</a>
                                                    <a href="#" class="dropdown-item">Outsourcing</a>
                                                    <a href="#" class="dropdown-item">Administrative Assistance</a>
                                                    <a href="#" class="dropdown-item">Marketing Officer</a>
                                                    <a href="#" class="dropdown-item">I.T. Specialist</a>
                                                    <a href="#" class="dropdown-item">Graduate Management Trainees</a>
                                                </div>
                                            </div>
                                            <a href="#" class="dropdown-item">
                                                <div class="d-inline-block icons-sm mr-2"><i class="uim uim-box"></i></div> PRODUCT CATALOGUE
                                            </a>
                                            <!-- <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icon" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="d-inline-block icons-sm mr-2"><i class="uim uim-object-ungroup"></i></div>Icons
                                                    <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-icon">
                                                    <a href="icons-materialdesign.html" class="dropdown-item">Material
                                                        Design</a>
                                                    <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                                    <a href="icons-fontawesome.html" class="dropdown-item">Font awesome
                                                        5</a>
                                                    <a href="icons-themify.html" class="dropdown-item">Themify</a>
                                                    <a href="icons-unicons.html" class="dropdown-item">Unicons - Dual
                                                        Tone</a>
                                                </div>
                                            </div> -->
                                            <a href="#" class="dropdown-item">
                                                <div class="d-inline-block icons-sm mr-2"><i class="uim uim-apps"></i></div> PORTFOLIO
                                            </a>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-training" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="d-inline-block icons-sm mr-2"><i class="uim uim-table"></i></div>TRAINING
                                                    <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-training">
                                                    <a href="tables-basic.html" class="dropdown-item">Registeration</a>
                                                    <a href="tables-datatable.html" class="dropdown-item">Login
                                                    </a>
                                                    <!-- <a href="tables-responsive.html" class="dropdown-item">Responsive
                                                        Table</a> -->
                                                    <!-- <a href="tables-editable.html" class="dropdown-item">Editable
                                                        Table</a> -->
                                                </div>
                                            </div>
                                            <!-- <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="d-inline-block icons-sm mr-2"><i class="uim uim-document-layout-left"></i></div>Forms
                                                    <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                    <a href="form-elements.html" class="dropdown-item">Form Elements</a>
                                                    <a href="form-validation.html" class="dropdown-item">Form
                                                        Validation</a>
                                                    <a href="form-advanced.html" class="dropdown-item">Form Advanced</a>
                                                    <a href="form-editors.html" class="dropdown-item">Form Editors</a>
                                                    <a href="form-uploads.html" class="dropdown-item">Form File
                                                        Upload</a>
                                                    <a href="form-mask.html" class="dropdown-item">Form Mask</a>
                                                    <a href="form-summernote.html" class="dropdown-item">Summernote</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-chart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="d-inline-block icons-sm mr-2"><i class="uim uim-chart-pie"></i></div>Charts
                                                    <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-chart">
                                                    <a href="charts-morris.html" class="dropdown-item">Morris</a>
                                                    <a href="charts-apex.html" class="dropdown-item">Apex</a>
                                                    <a href="charts-chartist.html" class="dropdown-item">Chartist</a>
                                                    <a href="charts-chartjs.html" class="dropdown-item">Chartjs</a>
                                                    <a href="charts-flot.html" class="dropdown-item">Flot</a>
                                                    <a href="charts-sparkline.html" class="dropdown-item">Sparkline</a>
                                                    <a href="charts-knob.html" class="dropdown-item">Jquery Knob</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="d-inline-block icons-sm mr-2"><i class="uim uim-comment-plus"></i></div>Maps
                                                    <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                                    <a href="maps-google.html" class="dropdown-item">Google map</a>
                                                    <a href="maps-vector.html" class="dropdown-item">Vector map</a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            CONTACT
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            ABOUT US <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                                            <!-- <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Authentication <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                                    <a href="auth-login.html" class="dropdown-item">Login</a>
                                                    <a href="auth-register.html" class="dropdown-item">Register</a>
                                                    <a href="auth-recoverpw.html" class="dropdown-item">Recover
                                                        Password</a>
                                                    <a href="auth-lock-screen.html" class="dropdown-item">Lock
                                                        Screen</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Utility <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                                    <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                                                    <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                                    <a href="pages-comingsoon.html" class="dropdown-item">Coming
                                                        Soon</a>
                                                    <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                                    <a href="pages-gallery.html" class="dropdown-item">Gallery</a>
                                                    <a href="pages-faqs.html" class="dropdown-item">FAQs</a>
                                                    <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                                    <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                                    <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Layouts <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                                    <a href="layouts-vertical.html" class="dropdown-item">Vertical</a>
                                                    <a href="layouts-topbar-light.html" class="dropdown-item">Light
                                                        Topbar</a>
                                                    <a href="layouts-topbar-dark.html" class="dropdown-item">Dark
                                                        Topbar</a>
                                                    <a href="layouts-full-width.html" class="dropdown-item">Full
                                                        width</a>
                                                </div>
                                            </div>
                                             -->
                                            <a href="#" class="dropdown-item">
                                                <div class="d-inline-block icons-sm mr-2"><i class="uim uim-calender"></i></div> EVENT
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <div class="d-inline-block icons-sm mr-2"><i class="uim uim-layers-alt"></i></div> BLOG
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <div class="d-inline-block icons-sm mr-2"><i class="uim uim-comment-plus"></i></div> FAQ
                                            </a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>


        </header>
</body>