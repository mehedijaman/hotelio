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

{{--Income Dropdown  --}}
<li class="nav-item ">
	<a href="#" class="nav-link">
		<i class="nav-icon fas  fa-coins p-0 nav-icon "></i>
		<p class="p-0 m-0">
			Income
		</p>
	</a>
	<ul class="nav nav-treeview" style="display: none;">
		<li class="nav-item ml-1">
			<a href="/income/category" class="nav-link {{ Request::is('incomeCategory') ? 'active' : '' }}">
				<i class="fa-solid fa-file-circle-plus nav-icon "></i>
				<p class="p-0 m-0"> Add Category</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="/income" class="nav-link {{ Request::is('income') ? 'active' : '' }}">
				<i class="fa-solid fa-cart-plus nav-icon"></i>
				<p class="p-0 m-0">Add Items</p>
			</a>
		</li>
	</ul>
</li>
{{--  --}}

{{-- Expense Dropdown --}}
<li class="nav-item">
	<a href="#" class="nav-link">
		<i class="nav-icon fas fa-wallet fas nav-icon "></i>
		<p>
			Expense
		</p>
	</a>
	<ul class="nav nav-treeview" style="display: none;">
		<li class="nav-item">
			<a href="/expense/category" class="nav-link {{ Request::is('expenseCategory') ? 'active' : '' }}">
				<i class="fa-solid fa-file-circle-plus fas nav-icon pl-1"></i>
				<p>Add Category</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="/expense" class="nav-link {{ Request::is('expense') ? 'active' : '' }}">
				<i class="fa-solid fa-cart-plus fas nav-icon "></i>
				<p>Add Items</p>
			</a>
		</li>
	</ul>
</li>
{{--  --}}
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
{{-- <li class="nav-item">
    <a href="/invoiceItem" class="nav-link {{ Request::is('invoiceItem') ? 'active' : '' }}">
        <i class="fa-solid fa-receipt nav-icon fas"></i>
        <p>Invoice Item</p>
    </a>
</li> --}}

<li class="nav-item">
    <a href="/taxSetting" class="nav-link {{ Request::is('taxSetting') ? 'active' : '' }}">
        <i class="fa-brands fa-gg nav-icon fas"></i>
        <p>TaxSetting</p>
    </a>
</li>

@if(Auth::user()->Role == 'SuperAdmin' || Auth::user()->Role == 'Admin')
<li class="nav-item">
    <a href="/sms" class="nav-link {{ Request::is('sms') ? 'active' : '' }}">
        <i class="fa fa-email nav-icon fas"></i>
        <p>SMS</p>
    </a>
</li>

<li class="nav-item">
    <a href="/payment" class="nav-link {{ Request::is('payment') ? 'active' : '' }}">
        <i class="fa fa-email nav-icon fas"></i>
        <p>Payment</p>
    </a>
</li>

@endif