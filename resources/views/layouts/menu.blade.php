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
    <a href="/acount/ledger" class="nav-link {{ Request::is('acount/ledger') ? 'active' : '' }}">
        <span class="material-symbols-outlined nav-icon ">account_circle</span>
        <p>AccountLedger</p>
        {{-- <span class="">AccountLedger</span> --}}
    </a>
</li>

<li class="nav-item">
    <a href="/bank" class="nav-link {{ Request::is('bank') ? 'active' : '' }}">
        <i class="fa-solid fa-building-columns nav-icon fas"></i>
        <p>Bank</p>
    </a>
</li>
<li class="nav-item">
    <a href="/bankLedger" class="nav-link {{ Request::is('bankLedger') ? 'active' : '' }}">
        <i class="fa-solid fa-money-bill-trend-up nav-icon fas"></i>
        <p>BankLedger</p>
    </a>
</li>

<li class="nav-item">
    <a href="/room" class="nav-link {{ Request::is('room') ? 'active' : '' }}">
        <span class="material-symbols-outlined nav-icon">
            meeting_room
        </span>
        <p>Room</p>
    </a>
</li>
<li class="nav-item">
    <a href="/roomTransfer" class="nav-link {{ Request::is('roomTransfer') ? 'active' : '' }}">
        <span class="material-symbols-outlined nav-icon fes">
            transfer_within_a_station
        </span>
        <p class="p-0 m-0">Room Transfer</p>
    </a>
</li>
<li class="nav-item">
    <a href="/booking" class="nav-link {{ Request::is('booking') ? 'active' : '' }}">
        <i class="fa-solid fa-arrows-to-dot nav-icon fas"></i>
        <p>Booking</p>
    </a>
</li>


<li class="nav-item">
    <a href="/guest" class="nav-link {{ Request::is('guest') ? 'active' : '' }}">
        <span class="material-symbols-outlined nav-icon ">
            wc
        </span>
        <p>Guest</p>
    </a>
</li>
<li class="nav-item">
    <a href="/user" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
        <i class="fa-solid fa-user nav-icon fas"></i>
        <p>User</p>
    </a>
</li>
<li class="nav-item">
    <a href="/employee" class="nav-link {{ Request::is('employee') ? 'active' : '' }}">
        <i class="fa-solid fa-user-check nav-icon fas"></i>
        <p>Employee</p>
    </a>
</li>



{{-- <div class="sidebar-toggle d-flex flex-column position-relative">
    <div class="">
        <li  class="menu-btn">
            <i class="fa-solid fa-coins"></i>
            Income
            <i class="fa-solid fa-angle-right drop-down" id="custom__offset__invoice__item"></i>
        </li>
       
        <ul class="custom__toggle sub-btn">
            <li><a href="/income" class="nav-link {{ Request::is('income') ? 'active' : '' }}">
<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
    <circle cx="12" cy="12" r="10"></circle>
</svg>
Income
</a>
</li>
<li><a href="/incomeCategory" class="nav-link {{ Request::is('incomeCategory') ? 'active' : '' }}" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
            <circle cx="12" cy="12" r="10"></circle>
        </svg>
        Income Category
    </a>
</li>
</ul>
</div>
</div>

<div class="sidebar-toggle d-flex flex-column position-relative">
    <div class="">
        <li class="menu-btn">
            <i class="fa-solid fa-wallet nav-icon"></i>
            Expense
            <i class="fa-solid fa-angle-right drop-down" id="custom__offset__tax__setting"></i>
        </li>

        <ul class="custom__toggle sub-btn">
            <li><a href="/expense" class="nav-link {{ Request::is('expense') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                    Expense
                </a>
            </li>
            <li>
                <a href="/expenseCategory" class="nav-link {{ Request::is('expenseCategory') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                    Expense Category
                </a>
            </li>
        </ul>
    </div>
</div> --}}
<li class="nav-item">
    <a href="/balance" class="nav-link {{ Request::is('balance') ? 'active' : '' }}">
        <i class="fa-solid fa-file-invoice-dollar nav-icon fas"></i>
        <p>Balance</p>
    </a>
</li>
<li class="nav-item">
    <a href="/invoice" class="nav-link {{ Request::is('invoice') ? 'active' : '' }}">
        <i class="fa-solid fa-file-invoice-dollar nav-icon fas"></i>
        <p>Invoice</p>
    </a>
</li>
<li class="nav-item">
    <a href="/invoiceItem" class="nav-link {{ Request::is('invoiceItem') ? 'active' : '' }}">
        <i class="fa-solid fa-receipt nav-icon fas"></i>
        <p>Invoice Item</p>
    </a>
</li>
<li class="nav-item">
    <a href="/taxSetting" class="nav-link {{ Request::is('taxSetting') ? 'active' : '' }}">
        <i class="fa-brands fa-gg nav-icon fas"></i>
        <p>TaxSetting</p>
    </a>
</li>