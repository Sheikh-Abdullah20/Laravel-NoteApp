@extends('auth_layout')

@section('content')
   
                <div class="card-sigin">
                    <div class="main-signup-header">
                        <h3>Get Started</h3>
                        <h6 class="fw-medium mb-4 fs-17">It's free to signup and only takes a minute.</h6>

                        <form action="{{route('adduser')}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">First Name and last Name</label> <input class="form-control"
                                    placeholder="Enter your first Name and last Name" type="text" name="name"   value="{{old('name')}}" > 
                                    <span class="text-danger">
                                        @if($errors->has('name'))
                                            @error('name')
                                                {{$message}}
                                            @enderror
                                      
                                        @endif
                                    </span>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Email</label> <input class="form-control"
                                    placeholder="Enter your email" type="text" name="email"  value="{{old('email')}}" >
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
                                    <span class="text-danger">
                                        @if($errors->has('password'))
                                            @error('password')
                                                {{$message}}
                                            @enderror
                                      
                                        @endif
                                    </span>
                            </div>

                            <button type="submit"  class="btn btn-dark btn-outline-info btn-block w-100" value="Create Account" name="signup">Create Account</button>
                            
                        </form>

                        <div class="main-signin-footer mt-5">
                            <p>Already have an account? <a href="{{route('signin')}}">Sign In</a></p>
                        </div>

 