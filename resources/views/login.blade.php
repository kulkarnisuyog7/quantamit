@extends('layout')
@section('title', 'Login')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="height:80vh;">
<div class="login-form">
    <div class="container">
    <div class="header">
        
      <p>Welcome Back !</p>
      <h1>Login</h1>
    </div>
    <form action="{{route('login-user')}}" method="POST">
      @csrf
      <div class="input">
        <i class="fa-solid fa-envelope"></i>
        <input type="email" placeholder="Email" name="email" />
      </div>
      <div class="input">
        <i class="fa-solid fa-lock"></i>
        <input type="password" placeholder="Password" name="password" />
      </div>
      <input class="signup-btn" type="submit" value="LOG IN" />
    </form>
  </div>
</div>
</div>
@endsection