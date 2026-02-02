@extends('layouts.app')

@section('title', 'Network Traffic')

@section('content')
<div class="network-container">
    <!-- Header -->
    <div class="mb-4">
        <h2 class="fw-bold mb-1">Network Traffic</h2>
        <p class="text-muted">Monitor lalu lintas jaringan dan performa koneksi</p>
    </div>

    <!-- Real-time Stats -->
    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-muted mb-2">Download Speed</h6>
                            <h3 class="fw-bold mb-0" id="downloadSpeed">1.2 Mbps</h3>
                        </div>
                        <div class="display-6 text-primary">
                            <i class="bi bi-arrow-down-circle"></i>
                        </div>
                    </div>
                    <small class="text-muted mt-2 d-block">↓ Incoming data</small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-muted mb-2">Upload Speed</h6>
                            <h3 class="fw-bold mb-0" id="uploadSpeed">0.8 Mbps</h3>
                        </div>
                        <div class="display-6 text-success">
                            <i class="bi bi-arrow-up-circle"></i>
                        </div>
                    </div>
                    <small class="text-muted mt-2 d-block">↑ Outgoing data</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Traffic Chart -->
    <div class="card mb-4">
        <div class="card-header bg-light border-0">
            <h6 class="mb-0 fw-bold"><i class="bi bi-graph-up me-2"></i>Traffic Analysis (Last 24 Hours)</h6>
        </div>
        <div class="card-body">
            <canvas id="trafficChart" style="max-height: 350px;"></canvas>
        </div>
    </div>

    <!-- Network Interfaces -->
    <div class="row g-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-light border-0">
                    <h6 class="mb-0 fw-bold"><i class="bi bi-ethernet me-2"></i>Network Interfaces</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="mb-2">Ethernet (eth0)</h6>
                        <small class="text-muted d-block">IP: 192.168.1.100</small>
                        <small class="text-success d-block"><i class="bi bi-circle-fill"></i> Connected</small>
                    </div>
                    <div class="mb-3">
                        <h6 class="mb-2">Wi-Fi (wlan0)</h6>
                        <small class="text-muted d-block">IP: 192.168.1.101</small>
                        <small class="text-success d-block"><i class="bi bi-circle-fill"></i> Connected</small>
                    </div>
                    <div>
                        <h6 class="mb-2">Loopback (lo)</h6>
                        <small class="text-muted d-block">IP: 127.0.0.1</small>
                        <small class="text-success d-block"><i class="bi bi-circle-fill"></i> Connected</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-light border-0">
                    <h6 class="mb-0 fw-bold"><i class="bi bi-shield-check me-2"></i>Connection Summary</h6>
                </div>
                <div class="card-body">
                    <table class="table table-sm mb-0">
                        <tr>
                            <td class="text-muted">Active Connections</td>
                            <td class="fw-bold">127</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Established</td>
                            <td class="fw-bold text-success">89</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Listen</td>
                            <td class="fw-bold text-info">28</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Time Wait</td>
                            <td class="fw-bold text-warning">10</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Packet Loss</td>
                            <td class="fw-bold text-success">0.2%</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Connection List -->
    <div class="card mt-4">
        <div class="card-header bg-light border-0">
            <h6 class="mb-0 fw-bold"><i class="bi bi-diagram-3 me-2"></i>Active Connections</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0 small">
                    <thead>
                        <tr>
                            <th>Protocol</th>
                            <th>Local Address</th>
                            <th>Remote Address</th>
                            <th>State</th>
                            <th>Speed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="badge bg-primary">TCP</span></td>
                            <td>192.168.1.100:443</td>
                            <td>8.8.8.8:53</td>
                            <td><span class="badge bg-success">ESTABLISHED</span></td>
                            <td>1.2 Mbps ↓ | 0.8 Mbps ↑</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-primary">TCP</span></td>
                            <td>192.168.1.100:8080</td>
                            <td>192.168.1.50:45678</td>
                            <td><span class="badge bg-success">ESTABLISHED</span></td>
                            <td>0.5 Mbps ↓ | 0.3 Mbps ↑</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-info">UDP</span></td>
                            <td>192.168.1.100:5353</td>
                            <td>224.0.0.251:5353</td>
                            <td><span class="badge bg-success">ESTABLISHED</span></td>
                            <td>0.1 Mbps ↓ | 0.1 Mbps ↑</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .network-container {
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
</style>

<script>
    // Traffic Chart
    new Chart(document.getElementById('trafficChart'), {
        type: 'line',
        data: {
            labels: ['00:00', '04:00', '08:00', '12:00', '16:00', '20:00', '24:00'],
            datasets: [
                {
                    label: 'Download',
                    data: [1.2, 1.5, 2.1, 1.8, 2.5, 1.3, 1.1],
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4,
                    pointBackgroundColor: '#3b82f6'
                },
                {
                    label: 'Upload',
                    data: [0.8, 0.9, 1.2, 1.1, 1.5, 0.9, 0.7],
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4,
                    pointBackgroundColor: '#10b981'
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return value + ' Mbps';
                        }
                    }
                }
            }
        }
    });

    // Simulate real-time updates
    setInterval(() => {
        const download = (Math.random() * 2.5 + 0.5).toFixed(2);
        const upload = (Math.random() * 1.5 + 0.3).toFixed(2);

        document.getElementById('downloadSpeed').textContent = download + ' Mbps';
        document.getElementById('uploadSpeed').textContent = upload + ' Mbps';
    }, 3000);
</script>
@endsection