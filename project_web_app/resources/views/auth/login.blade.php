@extends('index')

@section('content')
 <div class="middle">
     <h1 class="ftag">𝓦𝓮𝓵𝓬𝓸𝓶𝓮 𝓣𝓸 𝓣𝓻𝓮𝓷𝓭𝔂𝓦𝓮𝓪𝓻</h1>
 
     <form action="{{route('loguser')}}" method="post">
     @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger" style="color:white !important;">{{Session::get('fail')}}</div>
                    @endif
  
     @csrf
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1"  name="email" value="{{old('email')}}" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" name="password" value="{{old('password')}}" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    
  </div>

  <!-- 2 column grid layout for inline styling -->


 
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4 middle-btn">Sign in</button>
  <p class="reg"><a href="signup">Register</a></p>

  <!-- Register buttons -->
  
</form>
 </div>
@stop