@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div>
        <h1>Hello, I am </h1>
        <h2>Hasan Al Banna</h2>
        <p><b>Android App Developer</b></p>
        <p><i class="fas fa-envelope"></i> Email: shahhasanita@gmail.com</p>
        <p><i class="fas fa-phone"></i> Phone: 01735-721773</p>
        <a href="{{ route('auth.login') }}" class="login-btn">Login</a>
    </div>
    <img src="assets\images\profile.jpg" alt="Profile Picture">
</section>
@endsection
