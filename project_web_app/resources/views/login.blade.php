@extends('index')

@section('content')
 <div class="middle">
     <h1 class="ftag">Welcome To BooKKeeda</h1>
 <form>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->


 
  </div>

  <!-- Submit button -->
  <button type="button" class="btn btn-primary btn-block mb-4 middle-btn">Sign in</button>
  <p class="reg"><a href="signup">Register</a></p>

  <!-- Register buttons -->
  
</form>
 </div>
@stop