<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Monitoring Jaringan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            background-color: #f7f8fa;
        }
        .sidebar {
            width: 260px;
            min-height: 100vh;
            background: #ffffff;
            border-right: 1px solid #e5e7eb;
        }
        .sidebar a {
            color: #333;
            text-decoration: none;
        }
        .sidebar .active {
            background: #e7f3ed;
            border-radius: 10px;
        }
        .card-box {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar p-4">
        <div class="text-center mb-5">
            <img src="public/assets/image/logo.jpeg" width="80">
            <h5 class="mt-3 fw-bold">BMKG</h5>
        </div>

        <ul class="nav flex-column gap-2">
            <li class="nav-item active p-3">
                <i class="bi bi-grid"></i> Dashboard
            </li>
            <li class="nav-item p-3">
                <i class="bi bi-pc-display"></i> System
            </li>
            <li class="nav-item p-3">
                <i class="bi bi-graph-up"></i> Network Traffic
            </li>
            <li class="nav-item p-3">
                <i class="bi bi-gear"></i> Settings
            </li>
            <li class="nav-item p-3 mt-5 text-danger">
                <i class="bi bi-box-arrow-left"></i> Sign Out
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h6>Selamat Datang Admin! ☀️</h6>
                <h2 class="fw-bold">Dashboard</h2>
            </div>
            <div class="d-flex align-items-center gap-3">
                <i class="bi bi-search"></i>
                <i class="bi bi-bell"></i>
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-person-circle fs-4"></i>
                    <div>
                        <strong>admin</strong><br>
                        <small class="text-muted">admin.com</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div class="card card-box p-4">
                    <h6 class="fw-bold">CPU Load</h6>
                    <canvas id="cpuChart"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-box p-4">
                    <h6 class="fw-bold">Load RAM</h6>
                    <canvas id="ramChart"></canvas>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card card-box p-4 text-center">
                    <h6>Online Device</h6>
                    <h2 class="text-success fw-bold">18</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-box p-4 text-center">
                    <h6>Offline Device</h6>
                    <h2 class="text-danger fw-bold">2</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-box p-4 text-center">
                    <h6>AVG Memory</h6>
                    <h2 class="fw-bold">35%</h2>
                </div>
            </div>
        </div>

        <!-- Traffic Chart -->
        <div class="card card-box p-4">
            <h5 class="fw-bold mb-3">Network Traffic Basic</h5>
            <canvas id="trafficChart"></canvas>
        </div>
    </div>
</div>

<script>
    new Chart(document.getElementById('cpuChart'), {
        type: 'doughnut',
        data: {
            labels: ['Used', 'Free'],
            datasets: [{ data: [67, 33] }]
        }
    });

    new Chart(document.getElementById('ramChart'), {
        type: 'doughnut',
        data: {
            labels: ['Used', 'Free'],
            datasets: [{ data: [67, 33] }]
        }
    });

    new Chart(document.getElementById('trafficChart'), {
        type: 'line',
        data: {
            labels: ['15:39','15:40','15:41','15:42'],
            datasets: [
                { label: 'Download', data: [1.2, 1.6, 1.1, 1.8] },
                { label: 'Upload', data: [0.8, 1.2, 0.9, 1.4] }
            ]
        }
    });
</script>

</body>
</html>
