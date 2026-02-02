<nav class="navbar">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        
        {{-- Left: Toggle --}}
        <button id="toggleSidebar" class="btn btn-light" type="button" title="Toggle Sidebar">
            <i class="bi bi-list"></i>
        </button>

        {{-- Right: Icons --}}
        <div class="d-flex gap-2 align-items-center ms-auto">
            
            {{-- Search --}}
            <button class="btn btn-light" type="button" title="Search" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="bi bi-search"></i>
            </button>

            {{-- Dark Mode --}}
            <button id="toggleDark" class="btn btn-light" type="button" title="Dark Mode">
                <i class="bi bi-moon"></i>
            </button>

            {{-- Notifications --}}
            <button class="btn btn-light position-relative" type="button" title="Notifications" data-bs-toggle="modal" data-bs-target="#notificationsModal">
                <i class="bi bi-bell"></i>
                <span class="badge bg-danger position-absolute top-0 start-100 translate-middle" id="notificationCount">3</span>
            </button>

            {{-- User Dropdown --}}
            @auth
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle"></i>
                    <span class="ms-2">{{ Auth::user()->name }}</span>
                </button>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal"><i class="bi bi-person me-2"></i>Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('settings') }}"><i class="bi bi-gear me-2"></i>Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <button type="button" class="dropdown-item" id="logoutBtn"><i class="bi bi-box-arrow-left me-2"></i>Logout</button>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
    </div>

    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title"><i class="bi bi-search me-2"></i>Search</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg" id="searchInput" placeholder="Cari sistem, network, atau data lainnya..." autofocus>
                    </div>
                    <div id="searchResults">
                        <p class="text-muted text-center">Mulai ketik untuk mencari...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title"><i class="bi bi-person-circle me-2"></i>Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <div class="mb-3">
                            <i class="bi bi-person-circle" style="font-size: 80px; color: #16a34a;"></i>
                        </div>
                        <h4>{{ Auth::user()->name }}</h4>
                        <p class="text-muted">{{ Auth::user()->email }}</p>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title"><i class="bi bi-info-circle me-2"></i>Account Info</h6>
                                    <small class="text-muted d-block">Email Verified:</small>
                                    <span class="badge bg-success">{{ Auth::user()->email_verified_at ? 'Yes' : 'No' }}</span>
                                    
                                    <div class="mt-3">
                                        <small class="text-muted d-block">Member Since:</small>
                                        <span>{{ Auth::user()->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title"><i class="bi bi-shield-check me-2"></i>Status</h6>
                                    <small class="text-muted d-block">Account Status:</small>
                                    <span class="badge bg-info">Active</span>
                                    
                                    <div class="mt-3">
                                        <small class="text-muted d-block">Last Updated:</small>
                                        <span>{{ Auth::user()->updated_at->format('d M Y H:i') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary w-100">
                            <i class="bi bi-pencil me-2"></i>Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notifications Modal -->
    <div class="modal fade" id="notificationsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title"><i class="bi bi-bell me-2"></i>Notifications</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                    <div class="list-group list-group-flush" id="notificationsList">
                        <a href="#" class="list-group-item list-group-item-action border-0 py-3">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <i class="bi bi-cpu text-info"></i>
                                        <strong>System Alert</strong>
                                        <span class="badge bg-danger ms-auto">New</span>
                                    </div>
                                    <p class="mb-1">CPU Load mencapai 85%. Segera lakukan pengecekan sistem.</p>
                                    <small class="text-muted">5 menit yang lalu</small>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action border-0 py-3 border-top">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <i class="bi bi-wifi text-success"></i>
                                        <strong>Network Update</strong>
                                        <span class="badge bg-danger ms-auto">New</span>
                                    </div>
                                    <p class="mb-1">Network traffic melebihi threshold. Bandwidth usage: 78%</p>
                                    <small class="text-muted">15 menit yang lalu</small>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action border-0 py-3 border-top">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <i class="bi bi-database text-warning"></i>
                                        <strong>Disk Space Warning</strong>
                                        <span class="badge bg-danger ms-auto">New</span>
                                    </div>
                                    <p class="mb-1">Disk space usage mencapai 90%. Silakan bersihkan storage.</p>
                                    <small class="text-muted">1 jam yang lalu</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="modal-footer border-top">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" id="clearNotifications">
                        <i class="bi bi-trash me-1"></i>Clear All
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Confirmation Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-bottom bg-danger bg-opacity-10">
                    <h5 class="modal-title text-danger"><i class="bi bi-exclamation-circle me-2"></i>Confirm Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin keluar dari aplikasi ini?</p>
                    <p class="text-muted mb-0"><small>Anda dapat login kembali kapan saja menggunakan akun Anda.</small></p>
                </div>
                <div class="modal-footer border-top">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-box-arrow-left me-2"></i>Yes, Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Logout Confirmation
    document.getElementById('logoutBtn').addEventListener('click', function() {
        const logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));
        logoutModal.show();
    });

    // Search Functionality
    document.getElementById('searchInput').addEventListener('keyup', function() {
        const query = this.value.toLowerCase();
        const resultsDiv = document.getElementById('searchResults');

        if (query.length === 0) {
            resultsDiv.innerHTML = '<p class="text-muted text-center">Mulai ketik untuk mencari...</p>';
            return;
        }

        // Dummy search results
        const items = [
            { type: 'System', name: 'CPU Monitoring', icon: 'cpu', url: '/system' },
            { type: 'System', name: 'Memory Usage', icon: 'memory', url: '/system' },
            { type: 'Network', name: 'Network Traffic', icon: 'wifi', url: '/network' },
            { type: 'Network', name: 'Bandwidth Monitor', icon: 'graph-up', url: '/network' },
            { type: 'Settings', name: 'System Settings', icon: 'gear', url: '/settings' }
        ];

        const filtered = items.filter(item => 
            item.name.toLowerCase().includes(query) || 
            item.type.toLowerCase().includes(query)
        );

        if (filtered.length === 0) {
            resultsDiv.innerHTML = '<p class="text-muted text-center">Tidak ada hasil ditemukan.</p>';
            return;
        }

        let html = '<div class="list-group list-group-flush">';
        filtered.forEach(item => {
            html += `
                <a href="${item.url}" class="list-group-item list-group-item-action d-flex align-items-center gap-2">
                    <i class="bi bi-${item.icon}"></i>
                    <div>
                        <strong>${item.name}</strong>
                        <small class="text-muted d-block">${item.type}</small>
                    </div>
                </a>
            `;
        });
        html += '</div>';
        resultsDiv.innerHTML = html;
    });

    // Clear Notifications
    document.getElementById('clearNotifications').addEventListener('click', function() {
        document.getElementById('notificationsList').innerHTML = '<p class="text-muted text-center py-3">No notifications</p>';
        document.getElementById('notificationCount').textContent = '0';
        
        const toast = document.createElement('div');
        toast.className = 'toast align-items-center text-white bg-success border-0 position-fixed bottom-0 end-0 m-3';
        toast.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">
                    All notifications cleared!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        `;
        document.body.appendChild(toast);
        const bsToast = new bootstrap.Toast(toast);
        bsToast.show();
        toast.addEventListener('hidden.bs.toast', () => toast.remove());
    });

    // Search Modal Enter Key
    document.getElementById('searchInput').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            const results = document.querySelectorAll('#searchResults .list-group-item');
            if (results.length > 0) {
                results[0].click();
            }
        }
    });
</script>
