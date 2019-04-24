<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <a href="#" class="menu-button d-none d-md-block">
            <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                <rect x="0.48" y="0.5" width="7" height="1" />
                <rect x="0.48" y="7.5" width="7" height="1" />
                <rect x="0.48" y="15.5" width="7" height="1" />
            </svg>
            <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                <rect x="1.56" y="0.5" width="16" height="1" />
                <rect x="1.56" y="7.5" width="16" height="1" />
                <rect x="1.56" y="15.5" width="16" height="1" />
            </svg>
        </a>

        <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                <rect x="0.5" y="0.5" width="25" height="1" />
                <rect x="0.5" y="7.5" width="25" height="1" />
                <rect x="0.5" y="15.5" width="25" height="1" />
            </svg>
        </a>

        <div class="search" data-search-path="Layouts.Search.html?q=">
            <input placeholder="Search...">
            <span class="search-icon">
                <i class="simple-icon-magnifier"></i>
            </span>
        </div>

        <a class="navbar-logo" href="Dashboard.Default.html">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="ml-auto">
            <div class="header-icons d-inline-block align-middle">

                <div class="position-relative d-none d-sm-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Equalizer d-block"></i>
                            <span>Settings</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-MaleFemale d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Puzzle d-block"></i>
                            <span>Components</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Bar-Chart d-block"></i>
                            <span>Profits</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-File-Chart d-block"></i>
                            <span>Surveys</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Suitcase d-block"></i>
                            <span>Tasks</span>
                        </a>

                    </div>
                </div>

                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 scroll position-absolute" id="notificationDropdown">

                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="assets/img/profile-pic-l-2.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="assets/img/notification-thumb.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>


                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="assets/img/notification-thumb-2.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3 pb-3 ">
                            <a href="#">
                                <img src="assets/img/notification-thumb-3.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">3 items just added to wish list by a user!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Sarah Kortney</span>
                    <span>
                        <img alt="Profile Picture" src="assets/img/profile-pic-l.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="#">Features</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Support</a>
                    <a class="dropdown-item" href="<?php echo site_url("user/logout"); ?>"><i class="iconsmind-Lock padding-5"></i> Sign out</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="sidebar">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="#dashboard">
                            <i class="iconsmind-Shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="#layouts">
                            <i class="iconsmind-Digital-Drawing"></i> Layouts
                        </a>
                    </li>
                    <li>
                        <a href="#applications">
                            <i class="iconsmind-Air-Balloon"></i> Applications
                        </a>
                    </li>
                    <li>
                        <a href="#ui">
                            <i class="iconsmind-Pantone"></i> UI
                        </a>
                    </li>
                    <li>
                        <a href="#menu">
                            <i class="iconsmind-Three-ArrowFork"></i> Menu
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li class="active">
                        <a href="Dashboard.Default.html">
                            <i class="simple-icon-rocket"></i> Default
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Analytics.html">
                            <i class="simple-icon-pie-chart"></i>Analytics
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Ecommerce.html">
                            <i class="simple-icon-basket-loaded"></i> Ecommerce
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Content.html">
                            <i class="simple-icon-doc"></i> Content
                        </a>
                    </li>
                </ul>

                <ul class="list-unstyled" data-link="layouts">
                    <li>
                        <a href="Layouts.List.html">
                            <i class="simple-icon-credit-card"></i> Data List
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Thumbs.html">
                            <i class="simple-icon-list"></i> Thumb List
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Images.html">
                            <i class="simple-icon-grid"></i> Image List
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Details.html">
                            <i class="simple-icon-book-open"></i> Details
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Search.html">
                            <i class="simple-icon-magnifier"></i> Search
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Login.html">
                            <i class="simple-icon-user-following"></i> Login
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Register.html">
                            <i class="simple-icon-user-follow"></i> Register
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.ForgotPassword.html">
                            <i class="simple-icon-user-unfollow"></i> Forgot Password
                        </a>
                    </li>
                    <li>
                        <a href="Layouts.Error.html">
                            <i class="simple-icon-exclamation"></i> Error
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="applications">
                    <li>
                        <a href="Apps.MediaLibrary.html">
                            <i class="simple-icon-picture"></i> Library <span class="badge badge-pill badge-outline-primary float-right mr-4">NEW</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Todo.List.html">
                            <i class="simple-icon-check"></i> Todo
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Survey.List.html">
                            <i class="simple-icon-calculator"></i> Survey
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Chat.html">
                            <i class="simple-icon-bubbles"></i> Chat
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="ui">
                    <li>
                        <a href="Ui.Alerts.html">
                            <i class="simple-icon-bell"></i> Alerts
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Badges.html">
                            <i class="simple-icon-badge"></i> Badges
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Buttons.html">
                            <i class="simple-icon-control-play"></i> Buttons
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Cards.html">
                            <i class="simple-icon-layers"></i> Cards
                        </a>
                    </li>

                    <li>
                        <a href="Ui.Carousel.html">
                            <i class="simple-icon-picture"></i> Carousel
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Charts.html">
                            <i class="simple-icon-chart"></i> Charts
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Collapse.html">
                            <i class="simple-icon-arrow-up"></i> Collapse
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Dropdowns.html">
                            <i class="simple-icon-arrow-down"></i> Dropdowns
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Editors.html">
                            <i class="simple-icon-book-open"></i> Editors
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Forms.html">
                            <i class="simple-icon-check mi-forms"></i> Forms
                        </a>
                    </li>
                    <li>
                        <a href="Ui.FormComponents.html">
                            <i class="simple-icon-puzzle"></i> Form Components
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Icons.html">
                            <i class="simple-icon-star"></i> Icons
                        </a>
                    </li>
                    <li>
                        <a href="Ui.InputGroups.html">
                            <i class="simple-icon-note"></i> Input Groups
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Jumbotron.html">
                            <i class="simple-icon-screen-desktop"></i> Jumbotron
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Modal.html">
                            <i class="simple-icon-docs"></i> Modal
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Navigation.html">
                            <i class="simple-icon-cursor"></i> Navigation
                        </a>
                    </li>

                    <li>
                        <a href="Ui.PopoverandTooltip.html">
                            <i class="simple-icon-pin"></i> Popover & Tooltip
                        </a>
                    </li>
                    <li>
                        <a href="Ui.Sortable.html">
                            <i class="simple-icon-shuffle"></i> Sortable
                        </a>
                    </li>
                </ul>

                <ul class="list-unstyled" data-link="menu">
                    <li>
                        <a href="Menu.Default.html">
                            <i class="simple-icon-control-pause"></i> Default
                        </a>
                    </li>
                    <li>
                        <a href="Menu.Subhidden.html">
                            <i class="simple-icon-arrow-left mi-subhidden"></i> Subhidden
                        </a>
                    </li>
                    <li>
                        <a href="Menu.Hidden.html">
                            <i class="simple-icon-control-start mi-hidden"></i> Hidden
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <main>
        <div class="container-fluid">
            <div class="row  ">
                <div class="col-12">

                    <h1>Dashboard</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>


                </div>
                <div class="col-lg-12 col-xl-6">

                    <div class="icon-cards-row">
                        <div class="owl-container">
                            <div class="owl-carousel dashboard-numbers">
                                <a href="#" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsmind-Alarm"></i>
                                        <p class="card-text mb-0">Pending Orders</p>
                                        <p class="lead text-center">16</p>
                                    </div>
                                </a>
                                <a href="#" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsmind-Basket-Coins"></i>
                                        <p class="card-text mb-0">Completed Orders</p>
                                        <p class="lead text-center">32</p>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsmind-Arrow-Refresh"></i>
                                        <p class="card-text mb-0">Refund Requests</p>
                                        <p class="lead text-center">2</p>
                                    </div>
                                </a>

                                <a href="#" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsmind-Mail-Read"></i>
                                        <p class="card-text mb-0">New Comments</p>
                                        <p class="lead text-center">25</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="position-absolute card-top-buttons">

                                    <button class="btn btn-header-light icon-button" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="simple-icon-refresh"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right mt-3">
                                        <a class="dropdown-item" href="#">Sales</a>
                                        <a class="dropdown-item" href="#">Orders</a>
                                        <a class="dropdown-item" href="#">Refunds</a>
                                    </div>

                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Sales</h5>
                                    <div class="dashboard-line-chart">
                                        <canvas id="salesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="simple-icon-refresh"></i>
                            </button>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Orders</h5>
                            <div class="scroll dashboard-list-with-thumbs">
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="assets/img/marble-cake-thumb.jpg" alt="Marble Cake" class="list-thumbnail border-0" />
                                        <span class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Marble Cake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Latashia Nagy - 100-148 Warwick
                                                    Trfy, Kansas City, USA</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="assets/img/fruitcake-thumb.jpg" alt="Fruitcake" class="list-thumbnail border-0" />
                                        <span class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Fruitcake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Marty Otte - 166-156 Rue de
                                                    Varennes, Gatineau, QC J8T 8G4, Canada</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="assets/img/chocolate-cake-thumb.jpg" alt="Chocolate Cake" class="list-thumbnail border-0" />
                                        <span class="badge badge-pill badge-theme-1 position-absolute badge-top-right">PROCESS</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Chocolate Cake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Linn Ronning - Rasen 2-14, 98547
                                                    Kühndorf, Germany</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="assets/img/fat-rascal-thumb.jpg" alt="Fat Rascal" class="list-thumbnail border-0" />
                                        <span class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Fat Rascal</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Rasheeda Vaquera - 37 Rue des
                                                    Grands Prés, 03100 Montluçon, France</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="assets/img/streuselkuchen-thumb.jpg" alt="Streuselkuchen" class="list-thumbnail border-0" />
                                        <span class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Streuselkuchen</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Mimi Carreira - 36-71 Victoria
                                                    St, Birmingham, UK</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="assets/img/cremeschnitte-thumb.jpg" alt="Cremeschnitte" class="list-thumbnail border-0" />
                                        <span class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Cremeschnitte</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Lenna Majeed - 6 Hertford St
                                                    Mayfair, London, UK</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">09.04.2018</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Product Categories</h5>
                            <div class="dashboard-donut-chart">
                                <canvas id="polarChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Logs</h5>

                            <div class="scroll dashboard-logs">

                                <table class="table table-sm table-borderless">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-1 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New user registiration</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">14:12</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">13:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">14 products added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:55</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Napoleonshat</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:44</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Cremeschnitte</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:30</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:40</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">2 categories added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:28</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">08:20</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tickets</h5>

                            <div class="scroll dashboard-list-with-user">
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="assets/img/profile-pic-l.jpg" alt="Mayra Sibley" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                            <p class="text-muted mb-0 text-small">09.08.2018 - 12:45</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="assets/img/profile-pic-l-7.jpg" alt="Mimi Carreira" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mimi Carreira</p>
                                            <p class="text-muted mb-0 text-small">05.08.2018 - 10:20</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="assets/img/profile-pic-l-6.jpg" alt="Philip Nelms" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Philip Nelms</p>
                                            <p class="text-muted mb-0 text-small">05.08.2018 - 09:12</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="assets/img/profile-pic-l-3.jpg" alt="Terese Threadgill" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Terese Threadgill</p>
                                            <p class="text-muted mb-0 text-small">01.08.2018 - 18:20</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="assets/img/profile-pic-l-5.jpg" alt="Kathryn Mengel" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Kathryn Mengel</p>
                                            <p class="text-muted mb-0 text-small">27.07.2018 - 11:45</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="assets/img/profile-pic-l-4.jpg" alt="Esperanza Lodge" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3 pr-2">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Esperanza Lodge</p>
                                            <p class="text-muted mb-0 text-small">24.07.2018 - 15:00</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Calendar</h5>
                            <div class="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Best Sellers</h5>
                            <table class="data-table responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Sales</th>
                                        <th>Stock</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Marble Cake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1452</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">62</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Fruitcake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1245</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">65</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Chocolate Cake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1200</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">45</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Bebinca</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1150</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">4</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Napoleonshat</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1050</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">41</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Magdalena</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">998</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">24</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Salzburger Nockerl</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">924</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">20</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Soufflé</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">905</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">64</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Cremeschnitte</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">845</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">12</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Cheesecake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">830</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">36</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Gingerbread</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">807</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">21</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Goose Breast</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">795</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">9</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card dashboard-progress">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="simple-icon-refresh"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Profile Status</h5>
                            <div class="mb-4">
                                <p class="mb-2">Basic Information
                                    <span class="float-right text-muted">12/18</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Portfolio
                                    <span class="float-right text-muted">1/8</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Billing Details
                                    <span class="float-right text-muted">2/6</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Interests
                                    <span class="float-right text-muted">0/8</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Legal Documents
                                    <span class="float-right text-muted">1/2</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card dashboard-sq-banner justify-content-end">
                        <div class="card-body justify-content-end d-flex flex-column">
                            <span class="badge badge-pill badge-theme-3 align-self-start mb-3">DORE</span>
                            <p class="lead text-white">MAGIC IS IN THE DETAILS</p>
                            <p class="text-white">Yes, it is indeed!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card dashboard-link-list">
                        <div class="card-body">
                            <h5 class="card-title">Cakes</h5>
                            <div class="d-flex flex-row">
                                <div class="w-50">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1">
                                            <a href="#">Marble Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fruitcake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Chocolate Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fat Rascal</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Financier</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Genoise</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Gingerbread</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Goose Breast</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Parkin</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Petit Gâteau</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Salzburger Nockerl</a>
                                        </li>
                                        <li>
                                            <a href="#">Soufflé</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="w-50">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1">
                                            <a href="#">Streuselkuchen</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Tea Loaf</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Napoleonshat</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Merveilleux</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Magdalena</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Cremeschnitte</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Cheesecake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Bebinca</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fruitcake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Chocolate Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fat Rascal</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Financier</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="row sortable">
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Payment Status</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="40" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Work Progress</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="64" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Tasks Completed</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="75" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Payments Done</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="32" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Website Visits</h5>
                                    <span class="text-muted text-small d-block">Unique Visitors</span>
                                </div>
                            </div>
                            <div class="btn-group float-right float-none-xs mt-2">
                                <button class="btn btn-outline-primary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    This Week
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="visitChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Conversion Rates</h5>
                                    <span class="text-muted text-small d-block">Per Session</span>
                                </div>
                            </div>
                            <div class="btn-group float-right mt-2 float-none-xs">
                                <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    This Week
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="conversionChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-12 col-xl-4">
                    <div class="row">
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsmind-Printer mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">5 Files</p>
                                            <p class="text-small text-white">Pending for print</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div role="progressbar" class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="5"
                                            aria-valuemax="12" data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsmind-Male mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">4 Orders</p>
                                            <p class="text-small text-white">On approval process</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar" class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="4"
                                            aria-valuemax="6" data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsmind-Bell mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">8 Alerts</p>
                                            <p class="text-small text-white">Waiting for notice</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar" class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="8"
                                            aria-valuemax="10" data-show-percent="false">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-lg-6 col-sm-12 mb-4">
                    <div class="card dashboard-search">
                        <div class="card-body">
                            <h5 class="text-white mb-3">Advanced Search</h5>
                            <div class="form-container">
                                <form>
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control select2-single">
                                            <option label="&nbsp;">&nbsp;</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                            <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                            <option value="TPZ">The Panic Zone</option>
                                            <option value="TTZ">The Twilight Zone</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-control select2-single">
                                            <option label="&nbsp;">&nbsp;</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                            <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                            <option value="TPZ">The Panic Zone</option>
                                            <option value="TTZ">The Twilight Zone</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-5">
                                        <label>Date</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text input-group-append input-group-addon">

                                                <i class="simple-icon-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Price Range</label>
                                        <div>
                                            <div class="slider" id="dashboardPriceRange"></div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary mt-3 pl-5 pr-5 ">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-4">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart2"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart4"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card dashboard-top-rated">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="simple-icon-refresh"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right mt-3">
                                <a class="dropdown-item" href="#">Top Sold Items</a>
                                <a class="dropdown-item" href="#">Top Commented Items</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Top Rated Items</h5>
                            <div class="owl-container">
                                <div class="owl-carousel best-rated-items">
                                    <div>
                                        <img src="assets/img/carousel-1.jpg" alt="Cheesecake" class="mb-4">
                                        <h6 class="mb-1">
                                            <span class="mr-2">1.</span>Cheesecake</h6>

                                        <select class="rating" data-current-rating="5" data-readonly="true">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                    </div>
                                    <div>
                                        <img src="assets/img/carousel-2.jpg" alt="Chocolate Cake" class="mb-4">
                                        <h6 class="mb-1">
                                            <span class="mr-2">2.</span>Chocolate Cake</h6>

                                        <select class="rating" data-current-rating="5" data-readonly="true">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                    </div>
                                    <div>
                                        <img src="assets/img/carousel-3.jpg" alt="Cremeschnitte" class="mb-4">
                                        <h6 class="mb-1">
                                            <span class="mr-2">3.</span>Cremeschnitte</h6>


                                        <select class="rating" data-current-rating="5" data-readonly="true">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>