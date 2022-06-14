

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

{{-- dropdwon  --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<div class="btn-group">
    <button type="button" class="btn dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
      Income
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item text-info" href="/incomeCategory">Income Category</a></li>
      <li><a class="dropdown-item text-info" href="/income">Income Add</a></li>
    </ul>
  </div>
{{-- dropdwon  --}}

{{-- Invoice Start --}}
<div class="sidebar-toggle d-flex flex-column position-relative">
    <div class="">
        <li  class="menu-btn">
            <i class="fa-solid fa-file-invoice-dollar"></i>
            Invoice 
            <i class="fa-solid fa-angle-right drop-down " id="custom__offset__invoice"></i>
        </li>
        {{-- drop down Strat --}}
        <ul class="custom__toggle sub-btn">
            <li><a href="{{ asset('/invoice') }}" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                    Invoice
                </a>
            </li>
        </ul>
    </div>
</div>

{{-- invoince Item--}}
<div class="sidebar-toggle d-flex flex-column position-relative">
    <div class="">
        <li  class="menu-btn">
            <i class="fa-solid fa-file-invoice-dollar"></i>
            Invoice Item
            <i class="fa-solid fa-angle-right drop-down" id="custom__offset__invoice__item"></i>
        </li>
        {{-- drop down Strat --}}
        <ul class="custom__toggle sub-btn">
            <li><a href="" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                    Invoice Item
                </a>
            </li>
        </ul>
    </div>
</div>
{{-- Tax Settings--}}
<div class="sidebar-toggle d-flex flex-column position-relative">
    <div class="">
        <li  class="menu-btn">
            <i class="fa-solid fa-file-invoice-dollar"></i>
                Tax Settings
            <i class="fa-solid fa-angle-right drop-down" id="custom__offset__tax__setting"></i>
        </li>
        {{-- drop down Strat --}}
        <ul class="custom__toggle sub-btn">
            <li><a href="" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                     Tax Settings
                </a>
            </li>
        </ul>
    </div>
</div>