<div class="topbar">
    <div>
        <small>Selamat Datang Admin! ☀️</small>
        <h1>Dashboard</h1>
    </div>

    <div class="top-actions">
        <span>🔍</span>
        <span>🔔</span>

        <div class="profile">
            <div class="avatar"></div>
            <div>
                <strong>{{ Auth::user()->name }}</strong>
                <small>{{ Auth::user()->email }}</small>
            </div>
        </div>
    </div>
</div>
