@extends('layouts.app')

@section('title', 'System Monitoring')

@section('content')
<div class="system-container">
    <!-- Header -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div>
            <h2 class="fw-bold mb-1">System Monitoring</h2>
            <p class="text-muted">Monitor performa sistem server Anda secara real-time</p>
        </div>
        <a href="{{ route('system.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>Tambah Data
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

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

    <!-- Data Metrics Table -->
    <div class="card mt-4">
        <div class="card-header bg-light border-0">
            <h6 class="mb-0 fw-bold"><i class="bi bi-table me-2"></i>Riwayat Data Sistem</h6>
        </div>
        <div class="card-body">
            @if($metrics->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover mb-0 small">
                        <thead>
                            <tr>
                                <th>Waktu</th>
                                <th>CPU Load</th>
                                <th>Memory</th>
                                <th>Disk</th>
                                <th>Processor</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($metrics as $metric)
                                <tr>
                                    <td>
                                        <small>{{ $metric->recorded_at->format('d M Y H:i') }}</small>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress" style="width: 80px; height: 20px;">
                                                <div class="progress-bar bg-danger" style="width: {{ $metric->cpu_load }}%"></div>
                                            </div>
                                            <span>{{ number_format($metric->cpu_load, 1) }}%</span>
                                        </div>
                                    </td>
                                    <td>
                                        <small>
                                            {{ number_format($metric->memory_used, 1) }}/{{ number_format($metric->memory_total, 1) }} GB
                                            <br>
                                            <span class="badge bg-warning">{{ number_format($metric->memory_percentage, 1) }}%</span>
                                        </small>
                                    </td>
                                    <td>
                                        <small>
                                            {{ number_format($metric->disk_used, 1) }}/{{ number_format($metric->disk_total, 1) }} GB
                                            <br>
                                            <span class="badge bg-info">{{ number_format($metric->disk_percentage, 1) }}%</span>
                                        </small>
                                    </td>
                                    <td>
                                        <small>{{ $metric->processor_name }}<br>({{ $metric->processor_cores }} cores)</small>
                                    </td>
                                    <td>
                                        <a href="{{ route('system.edit', $metric) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('system.destroy', $metric) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{ $metrics->links() }}
                </div>
            @else
                <div class="alert alert-info mb-0">
                    <i class="bi bi-info-circle me-2"></i>Belum ada data. <a href="{{ route('system.create') }}">Tambah data sekarang</a>
                </div>
            @endif
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