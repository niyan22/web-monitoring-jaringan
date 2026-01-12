<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="auth-container">

    <div class="logo">
        <img src="{{ asset('assets/image/logo.jpeg') }}" alt="Logo">
    </div>


    <div class="auth-card">
        <h2>Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input class="input" type="email" name="email" placeholder="Email" required>

            <input class="input" type="password" name="password" placeholder="Password" required>

            <button class="btn">Login</button>

            <div class="links">
                <a href="{{ route('register') }}">Create an Account</a>
                <a href="{{ route('password.request') }}">Forget Password?</a>
            </div>
        </form>
    </div>

</div>

</body>
</html>
