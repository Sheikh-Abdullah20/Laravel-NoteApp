<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
data-menu-styles="light" data-toggled="close">

<head>
<!-- Meta Data -->
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Website - Update-Profile</title>
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





<div class="container" style="margin-top: 5rem">
<div class="col-md-12 text-center">
<h1 class="display-3">Profile-Update</h1>
</div>
<div class="col-md-12 ">

<div class="card mt-4">
<div class="card-body mt-5">
<form class="form-horizontal  w-75 m-auto" method="POST" action="{{route('updateprofile')}}"
    enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" name='name' placeholder=" Name"
                    value="{{$users->name}}">
            </div>
        </div>
    </div>
    <div class="form-group mb-3">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" name="email" placeholder="Email"
                    value="{{$users->email}}">
            </div>
        </div>
    </div>

    <div class="form-group mb-3">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder='Address' name="address"
                value="{{$users->address}}" >
            </div>
        </div>
    </div>




    <div class="form-group mb-3">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" name="github" placeholder="Github URL"
                   value="{{$users->github}}" >
            </div>
        </div>
    </div>



    <div class="form-group mb-3">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" name="twitter" placeholder="Twitter URL"
                value="{{$users->twitter}}"  >
            </div>
        </div>
    </div>




    <div class="form-group mb-3">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" name="linkedin" placeholder="Linkedin URL"
                value="{{$users->linkedin}}" >
            </div>
        </div>
    </div>




    <div class="form-group mb-3">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" name="portfolio" placeholder="Portfolio URL"
                value="{{$users->portfolio}}"   >
            </div>
        </div>
    </div>

    <div class="form-group mb-3">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-12">
                <input type="number" class="form-control" placeholder='Contact Number' name="contact"
                value="{{$users->contact}}" >
            </div>
        </div>
    </div>


    <div class="form-group mb-3">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-12">
                <input type="file" class="form-control" placeholder='Profile' name="profile">
            </div>
        </div>
    </div>
    




    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-12 text-center">
            <button type='submit' class="btn btn-dark w-25" name='updateprofile'>Update Profile</button>
        </div>
    </div>

</form>
</div>
</div>
</div>
</div>
</div>

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