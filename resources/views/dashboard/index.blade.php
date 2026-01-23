@extends('dashboard.layout')

@section('content')

<div class="cards">
    <div class="card">
        <h4>CPU Load</h4>
        <div class="big">67%</div>
    </div>

    <div class="card">
        <h4>Load RAM</h4>
        <div class="big green">67%</div>
    </div>

    <div class="card summary">
        <h4>Network Summary</h4>
        <p>🟢 18 Online</p>
        <p>🔴 2 Offline</p>
        <p>AVG Memory 35%</p>
    </div>
</div>

<div class="chart-card">
    <h3>Network Traffic Basic</h3>
    <canvas id="trafficChart"></canvas>
</div>

@endsection
