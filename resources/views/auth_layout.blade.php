<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

<!-- Meta Data -->
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Sign-in</title>
<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
<meta name="Author" content="Spruko Technologies Private Limited">
<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

<!-- Favicon -->
<link rel="icon" href="images/brand-logos/favicon.ico" type="image/x-icon">

<!-- Main Theme Js -->
<script src="js/authentication-main.js"></script>

<!-- Bootstrap Css -->
<link id="style" href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

<!-- Style Css -->
<link href="css/styles.min.css" rel="stylesheet" >

<!-- Icons Css -->
<link href="css/icons.min.css" rel="stylesheet" >


</head>

<body>

<!-- Start Switcher -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
<div class="offcanvas-header border-bottom">
<h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
<nav class="border-bottom border-block-end-dashed">
<div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
<button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
<button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
</div>
</nav>
<div class="tab-content" id="nav-tabContent">
<div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
tabindex="0">
<div class="">
<p class="switcher-style-head">Theme Color Mode:</p>
<div class="row switcher-style">
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-light-theme">
                Light
            </label>
            <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                checked>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-dark-theme">
                Dark
            </label>
            <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
        </div>
    </div>
</div>
</div>
<div class="">
<p class="switcher-style-head">Directions:</p>
<div class="row switcher-style">
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-ltr">
                LTR
            </label>
            <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-rtl">
                RTL
            </label>
            <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
        </div>
    </div>
</div>
</div>
<div class="">
<p class="switcher-style-head">Navigation Styles:</p>
<div class="row switcher-style">
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-vertical">
                Vertical
            </label>
            <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                checked>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-horizontal">
                Horizontal
            </label>
            <input class="form-check-input" type="radio" name="navigation-style"
                id="switcher-horizontal">
        </div>
    </div>
</div>
</div>
<div class="navigation-menu-styles">
<p class="switcher-style-head">Navigation Menu Style:</p>
<div class="row switcher-style pb-2">
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-menu-click">
                Menu Click
            </label>
            <input class="form-check-input" type="radio" name="navigation-menu-styles"
                id="switcher-menu-click">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-menu-hover">
                Menu Hover
            </label>
            <input class="form-check-input" type="radio" name="navigation-menu-styles"
                id="switcher-menu-hover">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-icon-click">
                Icon Click
            </label>
            <input class="form-check-input" type="radio" name="navigation-menu-styles"
                id="switcher-icon-click">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-icon-hover">
                Icon Hover
            </label>
            <input class="form-check-input" type="radio" name="navigation-menu-styles"
                id="switcher-icon-hover">
        </div>
    </div>
</div>
<div class="px-4 pb-3 text-secondary fs-11"><span class="fw-semibold fs-12 text-dark me-2 d-inline-block">Note:</span>Works same for both Vertical and Horizontal</div>
</div>
<div class="">
<p class="switcher-style-head">Page Styles:</p>
<div class="row switcher-style">
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-regular">
                Regular
            </label>
            <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                checked>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-classic">
                Classic
            </label>
            <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
        </div>
    </div>
    <div class="col-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-modern">
                Modern
            </label>
            <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
        </div>
    </div>
</div>
</div>
<div class="">
<p class="switcher-style-head">Layout Width Styles:</p>
<div class="row switcher-style">
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-full-width">
                Full Width
            </label>
            <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                checked>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-boxed">
                Boxed
            </label>
            <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
        </div>
    </div>
</div>
</div>
<div class="">
<p class="switcher-style-head">Menu Positions:</p>
<div class="row switcher-style">
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-menu-fixed">
                Fixed
            </label>
            <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                checked>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-menu-scroll">
                Scrollable
            </label>
            <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
        </div>
    </div>
</div>
</div>
<div class="">
<p class="switcher-style-head">Header Positions:</p>
<div class="row switcher-style">
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-header-fixed">
                Fixed
            </label>
            <input class="form-check-input" type="radio" name="header-positions"
                id="switcher-header-fixed" checked>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-header-scroll">
                Scrollable
            </label>
            <input class="form-check-input" type="radio" name="header-positions"
                id="switcher-header-scroll">
        </div>
    </div>
</div>
</div>
<div class="sidemenu-layout-styles">
<p class="switcher-style-head">Sidemenu Layout Syles:</p>
<div class="row switcher-style pb-2">
    <div class="col-sm-6">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-default-menu">
                Default Menu
            </label>
            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                id="switcher-default-menu" checked>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-closed-menu">
                Closed Menu
            </label>
            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                id="switcher-closed-menu">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-icontext-menu">
                Icon Text
            </label>
            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                id="switcher-icontext-menu">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-icon-overlay">
                Icon Overlay
            </label>
            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                id="switcher-icon-overlay">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-detached">
                Detached
            </label>
            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                id="switcher-detached">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-check switch-select">
            <label class="form-check-label" for="switcher-double-menu">
                Double Menu
            </label>
            <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                id="switcher-double-menu">
        </div>
    </div>
</div>
<div class="px-4 pb-3 text-secondary fs-11"><span class="fw-semibold fs-12 text-dark me-2 d-inline-block">Note:</span>Navigation menu styles won't work here.</div>
</div>
</div>
<div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
<div>
<div class="theme-colors">
    <p class="switcher-style-head">Menu Colors:</p>
    <div class="d-flex switcher-style pb-2">
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                id="switcher-menu-light" checked>
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                id="switcher-menu-dark">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                id="switcher-menu-primary">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                id="switcher-menu-gradient">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-transparent"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                type="radio" name="menu-colors" id="switcher-menu-transparent">
        </div>
    </div>
    <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
</div>
<div class="theme-colors">
    <p class="switcher-style-head">Header Colors:</p>
    <div class="d-flex switcher-style pb-2">
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                id="switcher-header-light" checked>
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                id="switcher-header-dark">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                id="switcher-header-primary">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                id="switcher-header-gradient">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                id="switcher-header-transparent">
        </div>
    </div>
    <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
</div>
<div class="theme-colors">
    <p class="switcher-style-head">Theme Primary:</p>
    <div class="d-flex flex-wrap align-items-center switcher-style">
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-primary-1" type="radio"
                name="theme-primary" id="switcher-primary">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-primary-2" type="radio"
                name="theme-primary" id="switcher-primary1">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                id="switcher-primary2">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                id="switcher-primary3">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                id="switcher-primary4">
        </div>
        <div class="form-check switch-select ps-0 mt-1 color-primary-light">
            <div class="theme-container-primary"></div>
            <div class="pickr-container-primary"></div>
        </div>
    </div>
</div>
<div class="theme-colors">
    <p class="switcher-style-head">Theme Background:</p>
    <div class="d-flex flex-wrap align-items-center switcher-style">
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-bg-1" type="radio"
                name="theme-background" id="switcher-background" checked>
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-bg-2" type="radio"
                name="theme-background" id="switcher-background1">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                id="switcher-background2">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-bg-4" type="radio"
                name="theme-background" id="switcher-background3">
        </div>
        <div class="form-check switch-select me-3">
            <input class="form-check-input color-input color-bg-5" type="radio"
                name="theme-background" id="switcher-background4">
        </div>
        <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
            <div class="theme-container-background"></div>
            <div class="pickr-container-background"></div>
        </div>
    </div>
</div>
<div class="menu-image mb-3">
    <p class="switcher-style-head">Menu With Background Image:</p>
    <div class="d-flex flex-wrap align-items-center switcher-style">
        <div class="form-check switch-select m-2">
            <input class="form-check-input bgimage-input bg-img1" type="radio"
                name="theme-background" id="switcher-bg-img" checked>
        </div>
        <div class="form-check switch-select m-2">
            <input class="form-check-input bgimage-input bg-img2" type="radio"
                name="theme-background" id="switcher-bg-img1">
        </div>
        <div class="form-check switch-select m-2">
            <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                id="switcher-bg-img2">
        </div>
        <div class="form-check switch-select m-2">
            <input class="form-check-input bgimage-input bg-img4" type="radio"
                name="theme-background" id="switcher-bg-img3">
        </div>
        <div class="form-check switch-select m-2">
            <input class="form-check-input bgimage-input bg-img5" type="radio"
                name="theme-background" id="switcher-bg-img4">
        </div>
    </div>
</div>
</div>
</div>
<div class="d-flex justify-content-between canvas-footer">
<a href="#" class="btn btn-primary">Buy Now</a>
<a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-secondary">Our Portfolio</a>
<a href="javascript:void(0);" id="reset-all" class="btn btn-danger">Reset</a>
</div>
</div>
</div>
</div>
<!-- End Switcher -->

<div class="container-fluid custom-page">
<div class="row bg-white">
<!-- The image half -->
<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent-3">
<div class="row w-100 mx-auto text-center">
<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto w-100">
<img src="images/media/pngs/5.png"
    class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
</div>
</div>
</div>
<!-- The content half -->
<div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
<div class="login d-flex align-items-center py-2">
<!-- Demo content-->
<div class="container p-0">

    @if(session()->has('signupSuccess') || session()->has('logout'))
    <div class="alert alert-success text-dark">
        {{session('signupSuccess')}}
        {{session('logout')}}
    </div>
    @endif

<div class="row">
    <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
        <div class="card-sigin">
            <div class="mb-5 d-flex">
                <a href="index.php" class="header-logo"><h1>My-Note</h1>
                </a>
            </div>

            {{-- forms --}}
            @yield('content')
             {{-- forms --}}


        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- End -->

</div>
</div>
<!-- End -->

</div>
</div>


<!-- Bootstrap JS -->
<script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Show Password JS -->
<script src="js/show-password.js"></script>

</body>

</html>