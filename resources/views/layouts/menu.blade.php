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
</li>


{{-- Invoice Start --}}

<div class="sidebar-toggle d-flex flex-column position-relative">
    <div class="">
        <li id="menu-btn" class="">
            <i class="fa-solid fa-file-invoice-dollar"></i>
            Invoice 
            <i class="fa-solid fa-angle-right drop-down offset-5"></i>
        </li>
        {{-- drop down Strat --}}
        <ul id="sub-btn" class=" custom__toggle">
            <li><a href="" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                    Invoice
                </a>
            </li>
            <li class="">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                    Invoice Item
                </a>
            </li>
            <li>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                    Tax Settings
                </a>
            </li>
        </ul>
    </div>
</div>


 

{{-- invoince end --}}

{{-- <div class="sidebar-toggle d-flex flex-column position-relative">
    <div class="">
        <li id="menu-btn1" class="">
            <i class="fa-solid fa-file-invoice-dollar"></i>
                Income 
            <i class="fa-solid fa-angle-right drop-down offset-5"></i>
        </li>
        {{-- drop down Strat --}}
        <ul id="sub-btn1" class=" custom__toggle">
            <li><a href="" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                    Invoice
                </a>
            </li>
            <li class="">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                    Invoice Item
                </a>
            </li>
            <li>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                    Tax Settings
                </a>
            </li>
        </ul>
    </div>
{{-- </div>  --}}




