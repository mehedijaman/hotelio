<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="/bank" class="nav-link {{ Request::is('bank') ? 'active' : '' }}">
        <i class="nav-icon fas fa-briefcase"></i>
        <p>Bank</p>
    </a>
</li>
<li class="nav-item">
    {{-- < href="/hotel" class="nav-link {{ Request::is('hotel') ? 'active' : '' }}"> --}}
        <i class="nav-icon fas  fa-hotel"></i>
        <a href="{{url('/hotel1')}}">Hotel</a>
        
        {{-- <p>Hotel</p> --}}
    
</li>
<li class="nav-item">
    <a href="/room" class="nav-link {{ Request::is('room') ? 'active' : '' }}">
        <i class="nav-icon fas fa-briefcase"></i>
        <p>Room</p>
    </a>
</li>
{{-- Invoice Start --}}
<div class="sidebar-toggle d-flex flex-column">
    
    <div class="">
        
        <li id="menu-btn" class="">
            <i class="fa-solid fa-file-invoice-dollar"></i>
            Invoice 
            <i class="fa-solid fa-angle-right drop-down offset-5"></i>
        </li>

        <ul id="sub-btn" class="dropdown-menu">
            <li><a href="" class="">
                    <i class="bi bi-arrow-right"></i>
                    Invoice
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-arrow-right"></i>
                    Invoice Item
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-arrow-right"></i>
                    Tax Settings
                </a>
            </li>
            {{-- <i class="fa-solid fa-file-invoice-dollar"> --}}
        </ul>
        
    </ul>
</div>
{{-- invoince end --}}

