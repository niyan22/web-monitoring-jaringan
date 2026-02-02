<nav class="navbar">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        
        {{-- Left: Toggle --}}
        <button id="toggleSidebar" class="btn btn-light" type="button" title="Toggle Sidebar">
            <i class="bi bi-list"></i>
        </button>

        {{-- Right: Icons --}}
        <div class="d-flex gap-2 align-items-center ms-auto">
            
            {{-- Search --}}
            <button class="btn btn-light" type="button" title="Search">
                <i class="bi bi-search"></i>
            </button>

            {{-- Dark Mode --}}
            <button id="toggleDark" class="btn btn-light" type="button" title="Dark Mode">
                <i class="bi bi-moon"></i>
            </button>

            {{-- Notifications --}}
            <button class="btn btn-light position-relative" type="button" title="Notifications">
                <i class="bi bi-bell"></i>
                <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">3</span>
            </button>

            {{-- User Dropdown --}}
            @auth
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle"></i>
                    <span class="ms-2">{{ Auth::user()->name }}</span>
                </button>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="bi bi-person me-2"></i>Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('settings') }}"><i class="bi bi-gear me-2"></i>Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left me-2"></i>Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
    </div>
</nav>
