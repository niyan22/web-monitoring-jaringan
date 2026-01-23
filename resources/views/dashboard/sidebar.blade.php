<aside class="sidebar">
    <div class="logo">
        <img src="{{ asset('assets/image/logo.jpeg') }}">
        <h3>BMKG</h3>
    </div>

    <ul class="menu">
        <li class="active">Dashboard</li>
        <li>System</li>
        <li>Network Traffic</li>
        <li>Settings</li>
    </ul>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="logout">Sign Out</button>
    </form>
</aside>
