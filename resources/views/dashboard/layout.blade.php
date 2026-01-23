<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="dashboard">
    @include('dashboard.sidebar')

    <div class="main">
        @include('dashboard.topbar')

        <div class="content">
            @yield('content')
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>
</html>
