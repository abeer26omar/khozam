<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, shrink-to-fit=no ">
    <!-- <link rel="icon" type="{{''}}" href="{{url('/images/admin/favicon.png')}}"> -->
    <!--***************styel sheets and bootstrap*******-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <!--************** Plugins******* -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!--*************Internal style sheet****************-->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/admin-mainCSS.css')}}" />
</head>

<!--start side menue--------------------------------------------------------->
<div id="wrapper">
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">

            <!-- <img src="" class="logo-icon" alt="logo icon"> -->
            <h5 class="logo-text">khozam Admin</h5>

        </div>
        <div class="user-details">
            <div class="media align-items-center user-pointer collapsed" data-toggle="collapse"
                data-target="#user-dropdown">
                <div class="avatar"><img class="mr-3 side-user-img" src="{{asset('/img/avatar-s-12.jpg')}}"
                        alt="user avatar"></div>
                <div class="media-body">
                    <h6 class="side-user-name">khozam Admin</h6>
                </div>
            </div>
            <div id="user-dropdown" class="collapse">
                <ul class="user-setting-menu">
                    <li><a href="#"><i class="far fa-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="fas fa-cog "></i> Eshop</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" nav-item"><a href="#"><i
                                class="fas fa-chart-line icons"></i><span class="menu-title"
                                data-i18n="">Dashboard</span></a>
                    </li>
                    <li class=" nav-item"><a href="#"><i
                                class="fas fa-shopping-basket icons"></i><span class="menu-title"
                                data-i18n="">Orders</span></a>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="fas fa-users icons"></i><span
                                class="menu-title" data-i18n="">Users</span></a>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="fas fa-tshirt icons"></i><span
                                class="menu-title" data-i18n="">Products</span></a>
                    </li>
                    <li class=" nav-item"><a href="admin-prmotion.html"><i class="fas fa-ad icons"></i><span
                                class="menu-title" data-i18n="">Promotion</span></a>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="fas fa-hand-holding-usd icons"></i><span
                                class="menu-title" data-i18n="">Offers</span></a>
                    </li>
                    <li class="nav-item"><a href="#"><i
                                class="fas fa-envelope-open-text icons"></i><span class="menu-title"
                                data-i18n="">Support</span></a>
                    </li>

                </ul>
            </div><a href="#" class="btn btn-danger btn-block btn-glow btn-log-out mx-1 pull-up"> Log
                Out!</a>

        </div>
    </div>
    <!----------------------------------------------------------------End Side menu-->
    <!--start nav bar header-------------------------------------------------->
    <header class="topbar-nav">
        <nav id="header-setting" class="navbar navbar-expand fixed-top">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="line"></span><span class="line"></span><span class="line"></span>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <form class="search-bar">
                        <input type="text" class="form-control" placeholder="What You Want To Find ?">
                        <a href="#"><i class="fas fa-search"></i></a>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav align-items-center right-nav-link">
                <li class="nav-item dropdown-lg">
                    <a class="nav-link  waves-effect" href="#">

                        <i class="far fa-bell bx-tada"></i><span class="badge badge-primary badge-up "></span></a>
                </li>
                <li><a href="/"><i class="bx bx-cog bx-spin"></i></a></li>

                <li class="nav-item">
                    <a class="nav-link " href="#">
                        <span class="user-profile"><img src="{{asset('/img/avatar-s-12.jpg')}}"
                                class="img-circle pull-up" alt="user avatar"></span>
                    </a>

                </li>
            </ul>
        </nav>
    </header>
    <!-------------------------------------------------------end nav bar header-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <!--***************javascript**********-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </body>

</html>