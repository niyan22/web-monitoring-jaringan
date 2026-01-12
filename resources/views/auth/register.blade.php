@extends('layouts.app')

@section('content')
<div class="auth-container">
    <div class="logo">
        <img src="{{ asset('assets/image/logo.jpeg') }}">
    </div>

    <div class="auth-card">
        <h2>Sign Up</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input class="input" name="name" placeholder="Username" required>
            <input class="input" type="email" name="email" placeholder="Email" required>
            <input class="input" type="password" name="password" placeholder="Password" required>
            <input class="input" type="password" name="password_confirmation" placeholder="Confirm Password" required>

            <button class="btn">Register</button>
        </form>
    </div>
</div>
@endsection
