 @extends('auth_layout')
 @section('auth')
 Website - SignIn
 @endsection
 @section('content')
    

 @if(session()->has('signupSuccess') || session()->has('logout'))
 <div class="alert alert-success text-dark">
     {{session('signupSuccess')}}
     {{session('logout')}}
 </div>
 @endif

    @if(session()->has("passwordError") || session()->has("notFound"))
    <div class="alert alert-danger">
        {{session('passwordError')}}
        {{session('notFound')}}
    </div>
    @endif

            <div class="card-sigin">
                <div class="main-signup-header">
                    <h3 class="text-dark">Welcome back!</h3>
                    <h6 class="fw-medium mb-4 fs-17">Please sign in to continue.</h6>

                    <form action="{{route('finduser')}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Email</label> <input class="form-control"
                                placeholder="Enter your email" type="text" name="email" value='{{old('email')}}'>
                                <span class="text-danger">
                                    @if($errors->has('email'))
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                    @endif
                                 </span>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Password</label> <input class="form-control"
                                placeholder="Enter your password" type="password" name="password">
                                
                        </div>
                        <button type="submit"  class="btn btn-dark btn-block w-100" name="signin">Sign-In</button>
                        
                    </form>
                    <div class="main-signin-footer mt-5">
                        <p>Don't have an account? <a href="{{route('signup')}}">Create an
                                Account</a></p>
                    </div>
            

         @endsection