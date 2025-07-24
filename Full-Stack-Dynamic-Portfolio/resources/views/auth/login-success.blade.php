{{-- filepath: resources/views/auth/login-success.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Successful</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>Login Successful!</h2>
        <p>Welcome, {{ Auth::user()->name }}.</p>
        <a href="{{ route('home') }}" class="login-btn">Go to Home</a>
    </div>
</body>
</html>