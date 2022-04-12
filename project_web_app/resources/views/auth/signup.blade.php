@extends('index')

@section('content')
<!-- Section: Design Block -->
        <section class="text-center text-lg-start">
        <style>
            .cascading-right {
            margin-right: -50px;
            }

            @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right" style="
                    background: black;
                    backdrop-filter: blur(30px);
                    ">
                <div class="card-body p-5 shadow-5 text-center">
                    <h2 class="fw-bold mb-5">Sign up now</h2>
                    <form action="{{route('reguser')}}" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger" style="color:white !important;">{{Session::get('fail')}}</div>
                    @endif

                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row">
                        <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" id="form3Example1" name="firstname" value="{{old('firstname')}}" class="form-control" />
                            <label class="form-label"  for="form3Example1">First name</label>
                            <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                        </div>
                        </div>
                        <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" id="form3Example2" name="lastname" value="{{old('lastname')}}" class="form-control" />
                            <label class="form-label" for="form3Example2">Last name</label>
                            <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                        </div>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" name="email" value="{{old('email')}}" class="form-control" />
                        <label class="form-label"  for="form3Example3">Email address</label>
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example4" name="password" value="{{old('password')}}" class="form-control" />
                        <label class="form-label"  for="form3Example4">Password</label>
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 middle-btn" style="width:50%; margin-left:25%;">
                        Sign up
                    </button>

                    <!-- Register buttons -->
                    </form>
                </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
                height="590"alt="" />
            </div>
            </div>
        </div>
        <!-- Jumbotron -->
        </section>

@stop