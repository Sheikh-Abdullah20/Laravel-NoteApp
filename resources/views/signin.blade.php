 @extends('auth_layout')

 @section('content')
    

            <div class="card-sigin">
                <div class="main-signup-header">
                    <h3>Welcome back!</h3>
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
                        <button type="submit"  class="btn btn-dark btn-outline-info btn-block w-100" name="signin">Sign-In</button>
                        
                    </form>
                    <div class="main-signin-footer mt-5">
                        <p>Don't have an account? <a href="{{route('signup')}}">Create an
                                Account</a></p>
                    </div>
            

         @endsection