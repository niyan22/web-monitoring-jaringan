@extends('layouts.app')

@section('title', 'System Monitoring')

@section('content')
<div class="system-container">
    <!-- Header -->
    <div class="mb-4">
        <h2 class="fw-bold mb-1">System Monitoring</h2>
        <p class="text-muted">Monitor performa sistem server Anda secara real-time</p>
    </div>

    <!-- Quick Stats -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h6 class="text-muted mb-2">CPU Load</h6>
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <h3 class="fw-bold mb-0" id="cpuLoad">65%</h3>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-danger" id="cpuProgress" style="width: 65%"></div>
                    </div>
                    <small class="text-muted mt-2 d-block">Last updated: Just now</small>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h6 class="text-muted mb-2">Memory Usage</h6>
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <h3 class="fw-bold mb-0" id="memLoad">48%</h3>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-warning" id="memProgress" style="width: 48%"></div>
                    </div>
                    <small class="text-muted mt-2 d-block">Last updated: Just now</small>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h6 class="text-muted mb-2">Disk Usage</h6>
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <h3 class="fw-bold mb-0" id="diskLoad">32%</h3>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-success" id="diskProgress" style="width: 32%"></div>
                    </div>
                    <small class="text-muted mt-2 d-block">Last updated: Just now</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Detailed Info -->
    <div class="row g-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-light border-0">
                    <h6 class="mb-0 fw-bold"><i class="bi bi-cpu me-2"></i>Processor Information</h6>
                </div>
                <div class="card-body">
                    <table class="table table-sm mb-0">
                        <tr>
                            <td class="text-muted">Cores:</td>
                            <td class="fw-bold">8 cores</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Model:</td>
                            <td class="fw-bold">Intel Core i7-9700K</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Frequency:</td>
                            <td class="fw-bold">3.60 GHz</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Cache:</td>
                            <td class="fw-bold">12 MB</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-light border-0">
                    <h6 class="mb-0 fw-bold"><i class="bi bi-memory me-2"></i>Memory Information</h6>
                </div>
                <div class="card-body">
                    <table class="table table-sm mb-0">
                        <tr>
                            <td class="text-muted">Total:</td>
                            <td class="fw-bold">16 GB</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Used:</td>
                            <td class="fw-bold">7.68 GB (48%)</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Available:</td>
                            <td class="fw-bold">8.32 GB</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Type:</td>
                            <td class="fw-bold">DDR4 2400 MHz</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Processes -->
    <div class="card mt-4">
        <div class="card-header bg-light border-0">
            <h6 class="mb-0 fw-bold"><i class="bi bi-list-task me-2"></i>Top Processes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Process</th>
                            <th>CPU %</th>
                            <th>Memory %</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="bi bi-chrome me-2"></i>Chrome</td>
                            <td>12.5%</td>
                            <td>8.3%</td>
                            <td><span class="badge bg-success">Running</span></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-terminal me-2"></i>Node.js</td>
                            <td>8.2%</td>
                            <td>6.1%</td>
                            <td><span class="badge bg-success">Running</span></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-database me-2"></i>MySQL</td>
                            <td>5.1%</td>
                            <td>15.2%</td>
                            <td><span class="badge bg-success">Running</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .system-container {
        animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card-header {
        background-color: rgba(0, 0, 0, 0.02) !important;
    }

    .progress {
        background-color: #e9ecef;
        border-radius: 10px;
    }

    .progress-bar {
        border-radius: 10px;
        transition: width 0.6s ease;
    }
</style>

<script>
    // Simulate real-time updates
    setInterval(() => {
        const cpuLoad = Math.floor(Math.random() * 80) + 20;
        const memLoad = Math.floor(Math.random() * 70) + 20;
        const diskLoad = Math.floor(Math.random() * 50) + 10;

        document.getElementById('cpuLoad').textContent = cpuLoad + '%';
        document.getElementById('cpuProgress').style.width = cpuLoad + '%';

        document.getElementById('memLoad').textContent = memLoad + '%';
        document.getElementById('memProgress').style.width = memLoad + '%';

        document.getElementById('diskLoad').textContent = diskLoad + '%';
        document.getElementById('diskProgress').style.width = diskLoad + '%';
    }, 3000);
</script>
@endsection