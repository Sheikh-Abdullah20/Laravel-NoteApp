<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
data-menu-styles="light" data-toggled="close">
<head>
<!-- Meta Data -->
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Website - Profile</title>
<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
<meta name="Author" content="Spruko Technologies Private Limited">
<meta name="keywords"
content="admin dashboard template,admin panel html,bootstrap dashboard,admin dashboard,html template,template dashboard html,html css,bootstrap 5 admin template,bootstrap admin template,bootstrap 5 dashboard,admin panel html template,dashboard template bootstrap,admin dashboard html template,bootstrap admin panel,simple html template,admin dashboard bootstrap">

<!-- Favicon -->
<link rel="icon" href="/images/brand-logos/favicon.ico" type="image/x-icon">

<!-- Choices JS -->
<script src="/libs/choices.js/public//scripts/choices.min.js"></script>

<!-- Main Theme Js -->
<script src="/js/main.js"></script>

<!-- Bootstrap Css -->
<link id="style" href="/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Style Css -->
<link href="/css/styles.min.css" rel="stylesheet">
<link href="/css/styles.css" rel="stylesheet">


<!-- Icons Css -->
<link href="/css/icons.css" rel="stylesheet">

<!-- Node Waves Css -->
<link href="/libs/node-waves/waves.min.css" rel="stylesheet">

<!-- Simplebar Css -->
<link href="/libs/simplebar/simplebar.min.css" rel="stylesheet">

<!-- Color Picker Css -->
<link rel="stylesheet" href="/libs/flatpickr/flatpickr.min.css">
<link rel="stylesheet" href="/libs/@simonwep/pickr/themes/nano.min.css">

<!-- Choices Css -->
<link rel="stylesheet" href="/libs/choices.js/public//styles/choices.min.css">

<!-- Jsvector Maps -->
<link rel="stylesheet" href="/libs/jsvectormap/css/jsvectormap.min.css">

</head>

<body>


{{-- header --}}
@include('header')
{{-- header --}}


<!-- Start::app-content -->
<div class="main-content app-content">
<div class="container-fluid">


<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
<div class="my-auto">
<h5 class="page-title fs-21 mb-1">Edit Profile</h5>
<nav>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
    </ol>
</nav>
</div>

<div class="d-flex my-xl-auto right-content align-items-center">

<div class="pe-1 mb-xl-0">
    <a href="{{route('editprofile')}}" class="btn btn-dark">Edit Profile</a>
</div>

<div class="pe-1 mb-xl-0">
    <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
</div>
<div class="pe-1 mb-xl-0">
    <button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
</div>
<div class="pe-1 mb-xl-0">
    <button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
</div>
<div class="mb-xl-0">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-expanded="false">
            14 Aug 2019
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuDate">
            <li><a class="dropdown-item" href="javascript:void(0);">2015</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">2016</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">2017</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">2018</a></li>
        </ul>
    </div>
</div>
</div>
</div>
<!-- Page Header Close -->

<!-- Start::row-1 -->
<div class="row">
<div class="col-xl-4 col-lg-5">
    <div class="card mb-4">
        <div class="card-body">
            <div class="ps-0">
                <div class="main-profile-overview">
                    <div class="main-img-user profile-user">
                        <img alt="profile" src="images/faces/{{$user->profile}}"><a
                            class="fe fe-camera profile-edit text-primary" href="JavaScript:void(0);"></a>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <h5 class="main-profile-name">{{session('name')}}</h5>
                        </div>
                    </div>
                    <h6 class="fs-14">Bio</h6>
                    <div class="main-profile-bio">
                        pleasure rationally encounter but because pursue consequences that are
                        extremely painful.occur in which toil and pain can procure him some great
                        pleasure.. <a href="javascript:void(0);">More</a>
                    </div><!-- main-profile-bio -->
                    <div class="row">
                        <div class="col-md-4 col mb20">
                            <h5 class="fs-17">947</h5>
                            <h6 class="text-small text-muted fs-14 mb-0">Followers</h6>
                        </div>
                        <div class="col-md-4 col mb20">
                            <h5 class="fs-17">583</h5>
                            <h6 class="text-small text-muted fs-14 mb-0">Tweets</h6>
                        </div>
                        <div class="col-md-4 col mb20">
                            <h5 class="fs-17">48</h5>
                            <h6 class="text-small text-muted fs-14 mb-0">Posts</h6>
                        </div>
                    </div>
                    <hr class="border-0">
                    <label class="main-content-label fs-13 mb-4">Social</label>
                    <div class="main-profile-social-list">
                        <div class="media">
                            <div class="media-icon bg-primary-transparent text-primary">
                                <i class="icon ion-logo-github"></i>
                            </div>
                            <div class="media-body">
                                <span>Github</span> <a href="javascript:void(0);" class="text-primary">github.com/spruko</a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-icon bg-success-transparent text-success">
                                <i class="icon ion-logo-twitter"></i>
                            </div>
                            <div class="media-body">
                                <span>Twitter</span> <a href="javascript:void(0);" class="text-primary">twitter.com/spruko.me</a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-icon bg-info-transparent text-info">
                                <i class="icon ion-logo-linkedin"></i>
                            </div>
                            <div class="media-body">
                                <span>Linkedin</span> <a href="javascript:void(0);" class="text-primary">linkedin.com/in/spruko</a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-icon bg-danger-transparent text-danger">
                                <i class="icon ion-md-link"></i>
                            </div>
                            <div class="media-body">
                                <span>My Portfolio</span> <a href="javascript:void(0);" class="text-primary">spruko.com/</a>
                            </div>
                        </div>
                    </div>
                    <hr class="border-0">
                    <h6 class="fs-14">Skills</h6>
                    <div class="skill-bar mb-4 clearfix mt-3">
                        <span>HTML5 / CSS3</span>
                        <div class="progress progress-sm mt-2">
                            <div class="progress-bar bg-primary-gradient" role="progressbar"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                style="width: 85%"></div>
                        </div>
                    </div>
                    <!--skill bar-->
                    <div class="skill-bar mb-4 clearfix">
                        <span>Javascript</span>
                        <div class="progress progress-sm mt-2">
                            <div class="progress-bar bg-danger-gradient" role="progressbar"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                style="width: 89%"></div>
                        </div>
                    </div>
                    <!--skill bar-->
                    <div class="skill-bar mb-4 clearfix">
                        <span>Bootstrap</span>
                        <div class="progress progress-sm mt-2">
                            <div class="progress-bar bg-success-gradient" role="progressbar"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                style="width: 80%"></div>
                        </div>
                    </div>
                    <!--skill bar-->
                    <div class="skill-bar clearfix">
                        <span>Coffee</span>
                        <div class="progress progress-sm mt-2">
                            <div class="progress-bar bg-info-gradient" role="progressbar"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                style="width: 95%"></div>
                        </div>
                    </div>
                    <!--skill bar-->
                </div><!-- main-profile-overview -->
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="main-content-label tx-13 mg-b-25">
                contact
            </div>
            <div class="main-profile-contact-list">
                <div class="media">
                    <div class="media-icon bg-primary-transparent text-primary">
                        <i class="icon ion-md-phone-portrait"></i>
                    </div>
                    <div class="media-body">
                        <span>Mobile</span>
                        <div>
                            +245 354 654
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-icon bg-success-transparent text-success">
                        <i class="icon ion-logo-slack"></i>
                    </div>
                    <div class="media-body">
                        <span>Slack</span>
                        <div>
                            @spruko.w
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="media-icon bg-info-transparent text-info">
                        <i class="icon ion-md-locate"></i>
                    </div>
                    <div class="media-body">
                        <span>Current Address</span>
                        <div>
                            San Francisco, CA
                        </div>
                    </div>
                </div>
            </div><!-- main-profile-contact-list -->
        </div>
    </div>
</div>

    

<div class="col-xl-8 col-lg-7">
    <div class="card">
            
        <div class="card-body">
            <div class="mb-4 main-content-label">Personal Information</div>
            <form class="form-horizontal">
                
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Name</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control"  placeholder="Name" value="{{$user->name}}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Email</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control"  placeholder="Email" value="{{$user->email}}" readonly>
                        </div>
                    </div>
                </div>
            
            </form>
        </div>
        
    </div>
</div>
</div>
<!--End::row-1 -->

</div>
</div>
<!-- End::app-content -->

</body>


<!-- Popper JS -->
<script src="libs/@popperjs/core/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Defaultmenu JS -->
<script src="js/defaultmenu.min.js"></script>

<!-- Node Waves JS-->
<script src="libs/node-waves/waves.min.js"></script>

<!-- Sticky JS -->
<script src="js/sticky.js"></script>

<!-- Simplebar JS -->
<script src="libs/simplebar/simplebar.min.js"></script>
<script src="js/simplebar.js"></script>

<!-- Color Picker JS -->
<script src="libs/@simonwep/pickr/pickr.es5.min.js"></script>


<!-- Apex Charts JS -->
<script src="libs/apexcharts/apexcharts.min.js"></script>

<!-- JSVector Maps JS -->
<script src="libs/jsvectormap/js/jsvectormap.min.js"></script>

<!-- JSVector Maps MapsJS -->
<script src="libs/jsvectormap/maps/world-merc.js"></script>
<script src="js/us-merc-en.js"></script>

<!-- Chartjs Chart JS -->
<script src="js/index.js"></script>


<!-- Custom-Switcher JS -->
<script src="js/custom-switcher.min.js"></script>
<!-- Custom JS -->
<script src="js/custom.js"></script>


</html>
