<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="/hotel" class="nav-link {{ Request::is('hotel') ? 'active' : '' }}">
        <i class="nav-icon fas  fa-hotel"></i>
        <p>Hotel</p>
    </a>
</li>
<li class="nav-item">
    <a href="/bank" class="nav-link {{ Request::is('bank') ? 'active' : '' }}">
        <i class="nav-icon fas fa-briefcase"></i>
        <p>Bank</p>
    </a>
</li>
<li class="nav-item">
    <a href="/room" class="nav-link {{ Request::is('room') ? 'active' : '' }}">
        <i class="nav-icon fas fa-briefcase"></i>
        <p>Room</p>
    </a>
</li>


<li class="nav-item">
    <a href="/guest" class="nav-link {{ Request::is('guest') ? 'active' : '' }}">
        <i class="nav-icon fas fa-briefcase"></i>
        <p>Guest</p>
    </a>
</li>
<li class="nav-item">
    <a href="/employee" class="nav-link {{ Request::is('employee') ? 'active' : '' }}">
        <i class="nav-icon fas fa-briefcase"></i>
        <p>Employee</p>
    </a>
</li