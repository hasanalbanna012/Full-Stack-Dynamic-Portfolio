<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        @if($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif
        <form action="{{ route('auth.login.submit') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required autofocus>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p style="text-align:center;margin-top:1rem;">
            Don't have an account? <a href="{{ route('auth.register') }}">Register</a>
        </p>
    </div>
</body>
</html>