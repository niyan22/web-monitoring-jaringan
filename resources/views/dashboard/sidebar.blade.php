<aside class="sidebar">
    <div class="logo">
        <img src="/assets/img/bmkg.jpeg" alt="BMKG" class="logo-img">
        <h2>BMKG</h2>
    </div>


    <ul class="menu">
        <li class="active"><i class="fa fa-home"></i> Dashboard</li>
        <li><i class="fa fa-desktop"></i> System</li>
        <li><i class="fa fa-signal"></i> Network Traffic</li>
        <li><i class="fa fa-cog"></i> Settings</li>
    </ul>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="logout">Sign Out</button>
    </form>
</aside>
