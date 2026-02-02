@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<div class="settings-container">
    <!-- Header -->
    <div class="mb-4">
        <h2 class="fw-bold mb-1">Settings</h2>
        <p class="text-muted">Kelola pengaturan aplikasi monitoring jaringan Anda</p>
    </div>

    <div class="row g-4">
        <!-- Sidebar Navigation -->
        <div class="col-lg-3">
            <div class="list-group sticky-top">
                <a href="#general" class="list-group-item list-group-item-action active" data-bs-toggle="list" role="tab">
                    <i class="bi bi-gear me-2"></i>General Settings
                </a>
                <a href="#network" class="list-group-item list-group-item-action" data-bs-toggle="list" role="tab">
                    <i class="bi bi-wifi me-2"></i>Network Configuration
                </a>
                <a href="#monitoring" class="list-group-item list-group-item-action" data-bs-toggle="list" role="tab">
                    <i class="bi bi-graph-up me-2"></i>Monitoring Preferences
                </a>
                <a href="#notifications" class="list-group-item list-group-item-action" data-bs-toggle="list" role="tab">
                    <i class="bi bi-bell me-2"></i>Notifications
                </a>
                <a href="#security" class="list-group-item list-group-item-action" data-bs-toggle="list" role="tab">
                    <i class="bi bi-shield-lock me-2"></i>Security
                </a>
            </div>
        </div>

        <!-- Content -->
        <div class="col-lg-9">
            <div class="tab-content">
                <!-- General Settings -->
                <div class="tab-pane fade show active" id="general">
                    <div class="card">
                        <div class="card-header bg-light border-0">
                            <h6 class="mb-0 fw-bold">General Settings</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Application Name</label>
                                    <input type="text" class="form-control" value="BMKG Network Monitoring" placeholder="Enter application name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Location</label>
                                    <input type="text" class="form-control" value="BMKG Riau" placeholder="Enter location">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Timezone</label>
                                    <select class="form-select">
                                        <option selected>Asia/Jakarta (UTC+7)</option>
                                        <option>Asia/Bangkok (UTC+7)</option>
                                        <option>Asia/Singapore (UTC+8)</option>
                                        <option>Asia/Tokyo (UTC+9)</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Language</label>
                                    <select class="form-select">
                                        <option selected>Bahasa Indonesia</option>
                                        <option>English</option>
                                        <option>中文</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Theme</label>
                                    <div class="btn-group w-100" role="group">
                                        <input type="radio" class="btn-check" name="theme" id="light" value="light" checked>
                                        <label class="btn btn-outline-secondary" for="light">
                                            <i class="bi bi-sun me-2"></i>Light
                                        </label>

                                        <input type="radio" class="btn-check" name="theme" id="dark" value="dark">
                                        <label class="btn btn-outline-secondary" for="dark">
                                            <i class="bi bi-moon me-2"></i>Dark
                                        </label>

                                        <input type="radio" class="btn-check" name="theme" id="auto" value="auto">
                                        <label class="btn btn-outline-secondary" for="auto">
                                            <i class="bi bi-circle-half me-2"></i>Auto
                                        </label>
                                    </div>
                                </div>

                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check-circle me-2"></i>Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Network Configuration -->
                <div class="tab-pane fade" id="network">
                    <div class="card">
                        <div class="card-header bg-light border-0">
                            <h6 class="mb-0 fw-bold">Network Configuration</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <h6 class="fw-bold mb-3">Monitoring Methods</h6>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="ping" checked>
                                        <label class="form-check-label" for="ping">
                                            <strong>Ping (ICMP)</strong> - Monitor device availability
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="snmp" checked>
                                        <label class="form-check-label" for="snmp">
                                            <strong>SNMP</strong> - Get detailed network statistics
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="http">
                                        <label class="form-check-label" for="http">
                                            <strong>HTTP/HTTPS</strong> - Monitor web services
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Polling Interval (seconds)</label>
                                    <input type="number" class="form-control" value="60" min="10" max="3600">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Timeout (seconds)</label>
                                    <input type="number" class="form-control" value="10" min="1" max="60">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Retries</label>
                                    <input type="number" class="form-control" value="3" min="1" max="10">
                                </div>

                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check-circle me-2"></i>Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Monitoring Preferences -->
                <div class="tab-pane fade" id="monitoring">
                    <div class="card">
                        <div class="card-header bg-light border-0">
                            <h6 class="mb-0 fw-bold">Monitoring Preferences</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <h6 class="fw-bold mb-3">Data Retention</h6>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="retention" id="retention7" value="7" checked>
                                        <label class="form-check-label" for="retention7">
                                            7 days
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="retention" id="retention30" value="30">
                                        <label class="form-check-label" for="retention30">
                                            30 days
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="retention" id="retention90" value="90">
                                        <label class="form-check-label" for="retention90">
                                            90 days
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <h6 class="fw-bold mb-3">Graph Display</h6>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="realtime" checked>
                                        <label class="form-check-label" for="realtime">
                                            Real-time graphs
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="trends" checked>
                                        <label class="form-check-label" for="trends">
                                            Show trends
                                        </label>
                                    </div>
                                </div>

                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check-circle me-2"></i>Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Notifications -->
                <div class="tab-pane fade" id="notifications">
                    <div class="card">
                        <div class="card-header bg-light border-0">
                            <h6 class="mb-0 fw-bold">Notification Settings</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <h6 class="fw-bold mb-3">Alert Methods</h6>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="email" checked>
                                        <label class="form-check-label" for="email">
                                            <i class="bi bi-envelope me-2"></i>Email Notifications
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="sms" checked>
                                        <label class="form-check-label" for="sms">
                                            <i class="bi bi-chat-dots me-2"></i>SMS Alerts
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="webhook">
                                        <label class="form-check-label" for="webhook">
                                            <i class="bi bi-webhook me-2"></i>Webhook
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Alert Email</label>
                                    <input type="email" class="form-control" value="admin@bmkg.local" placeholder="Enter alert email">
                                </div>

                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check-circle me-2"></i>Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Security -->
                <div class="tab-pane fade" id="security">
                    <div class="card">
                        <div class="card-header bg-light border-0">
                            <h6 class="mb-0 fw-bold">Security Settings</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Change Password</label>
                                    <input type="password" class="form-control mb-2" placeholder="Current Password">
                                    <input type="password" class="form-control mb-2" placeholder="New Password">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>

                                <div class="mb-3">
                                    <h6 class="fw-bold mb-3">Two-Factor Authentication</h6>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="twofa">
                                        <label class="form-check-label" for="twofa">
                                            Enable 2FA
                                        </label>
                                    </div>
                                </div>

                                <div class="alert alert-info" role="alert">
                                    <i class="bi bi-info-circle me-2"></i>Last login: 2 hours ago from 192.168.1.100
                                </div>

                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check-circle me-2"></i>Save Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .settings-container {
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

    .list-group-item {
        border: none;
        border-left: 3px solid transparent;
        transition: all 0.3s ease;
    }

    .list-group-item:hover {
        background-color: #f8f9fa;
        border-left-color: #16a34a;
        transform: translateX(5px);
    }

    .list-group-item.active {
        background-color: #e7f3ed;
        color: #16a34a;
        border-left-color: #16a34a;
    }

    body.dark-mode .list-group-item {
        background-color: #2a2a2a;
        color: #e0e0e0;
    }

    body.dark-mode .list-group-item:hover {
        background-color: #374151;
    }

    body.dark-mode .list-group-item.active {
        background-color: #1f4d3a;
        color: #4ade80;
    }

    .card-header {
        background-color: rgba(0, 0, 0, 0.02) !important;
    }
</style>
@endsection