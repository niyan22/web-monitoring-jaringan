@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="dashboard-container">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h6 class="text-muted">Selamat Datang {{ Auth::user()->name }} 👋</h6>
            <h2 class="fw-bold">Dashboard</h2>
        </div>
        <div class="text-end">
            <p class="text-muted mb-0">Monitoring Jaringan BMKG</p>
        </div>
    </div>

        <!-- Cards -->
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">CPU Load</h6>
                        <canvas id="cpuChart" style="max-height: 200px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">RAM Load</h6>
                        <canvas id="ramChart" style="max-height: 200px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h6 class="text-muted mb-2">Online Devices</h6>
                        <h3 class="text-success fw-bold">18</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h6 class="text-muted mb-2">Offline Devices</h6>
                        <h3 class="text-danger fw-bold">2</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h6 class="text-muted mb-2">AVG Memory</h6>
                        <h3 class="fw-bold">35%</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-3">Network Traffic</h5>
                <canvas id="trafficChart" style="max-height: 300px;"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    new Chart(document.getElementById('cpuChart'), {
        type: 'doughnut',
        data: {
            labels: ['Used', 'Free'],
            datasets: [{ 
                data: [67, 33],
                backgroundColor: ['#dc2626', '#e5e7eb']
            }]
        },
        options: { responsive: true, maintainAspectRatio: true }
    });

    new Chart(document.getElementById('ramChart'), {
        type: 'doughnut',
        data: {
            labels: ['Used', 'Free'],
            datasets: [{ 
                data: [65, 35],
                backgroundColor: ['#16a34a', '#e5e7eb']
            }]
        },
        options: { responsive: true, maintainAspectRatio: true }
    });

    new Chart(document.getElementById('trafficChart'), {
        type: 'line',
        data: {
            labels: ['15:39','15:40','15:41','15:42'],
            datasets: [
                { 
                    label: 'Download', 
                    data: [1.2, 1.6, 1.1, 1.8],
                    borderColor: '#3b82f6',
                    tension: 0.4
                },
                { 
                    label: 'Upload', 
                    data: [0.8, 1.2, 0.9, 1.4],
                    borderColor: '#10b981',
                    tension: 0.4
                }
            ]
        },
        options: { responsive: true, maintainAspectRatio: true }
    });
</script>

<style>
    .dashboard-container {
        padding: 2rem;
        background-color: #f7f8fa;
        min-height: calc(100vh - 80px);
    }
</style>
@endsection
