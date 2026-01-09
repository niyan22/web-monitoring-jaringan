@extends('layouts.app')

@section('content')
<div class="dashboard">
    <aside class="sidebar">
        <h3>Web Monitoring</h3>
        <a href="#">Dashboard</a>
        <a href="#">Network</a>
        <a href="#">Settings</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button>Logout</button>
        </form>
    </aside>

    <main class="content">
        <h1>Welcome, {{ auth()->user()->name }}</h1>
        <p>Monitoring system ready 🌱</p>
    </main>
</div>
@endsection
