<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="light" data-toggled="close">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Website - home</title>
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


    @if(session()->has('added') || session()->has('added'))
<div class="alert alert-success text-dark">
    {{session('added')}}
</div>
@endif


@if(session()->has('updated') || session()->has('deleted'))
<div class="alert alert-warning text-dark">
    {{session('updated')}}
    {{session('deleted')}}
</div>
@endif
        <div class="container">
            <div class="row text-center" style="margin-top: 5rem">
                <h4>Add-Note</h4>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('addnote')}}" method="POST">
                        @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title Here" name="title">
                        <span class="text-danger">
                        @error('title')
                            {{$message}}
                        @enderror    
                        </span>
                      </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                        <span class="text-danger">
                            @error('description')
                                {{$message}}
                            @enderror    
                            </span>
                      </div>
                      <button type="submit" class="btn btn-dark ">Add Note</button>
                    </form>
            </div>
            
            
            {{-- fetching notes --}}
           
            <div class="row my-5 ">
                @foreach ( $notes as $note )
                    
            
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                          <h5 class="card-title">{{$note->title}}</h5>
                          <p class="card-text">{{$note->description}}</p>
                          <a href="{{route('editnote' , $note->id)}}" class="btn btn-dark">Edit</a>
                          <a href="{{route('deletenote',$note->id)}}" class="btn btn-danger">Delete</a>
                        </div>
                      </div>  
                    </div>
                    @endforeach
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