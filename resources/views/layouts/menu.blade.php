<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('hotel') ? 'active' : '' }}">
        <i class="nav-icon fas fa-briefcase"></i>
        <p>Hotel Management</p>
    </a>
</li>