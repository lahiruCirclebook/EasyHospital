<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    @php
        $role = session('role');

    @endphp
    <div class="logo"><a href="{{ url('/dashboard') }}" class="simple-text logo-normal ">
            <img src="assets/img/awakazaRestaurant.png" alt="" width="150">
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::segment(1) === 'dashboard' ? 'active' : null }} ">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            @if ($role == 'admin')
                <li class="nav-item {{ Request::segment(1) === 'addUser' ? 'active' : null }} ">
                    <a class="nav-link" href="{{ url('/addUser') }}">
                        <i class="material-icons">person</i>
                        <p>Create Profile</p>
                    </a>
                </li>
            @endif
            @if ($role == 'admin')
                <li class="nav-item {{ Request::segment(1) === 'viewUser' ? 'active' : null }} ">
                    <a class="nav-link" href="{{ url('/viewUser') }}">
                        <i class="material-icons">manage_accounts</i>
                        <p>View Users</p>
                    </a>
                </li>
            @endif
            <li class="nav-item {{ Request::segment(1) === 'pos' ? 'active' : null }}">
                <a class="nav-link" href="{{ url('/pos') }}">
                    <i class="material-icons">content_paste</i>
                    <p>POS</p>
                </a>
            </li>
            <li class="nav-item  {{ Request::segment(1) === 'ongoingView' ? 'active' : null }}  ">
                <a class="nav-link" href="{{ url('/ongoingView') }}">
                    {{-- <i class="material-icons">inventory_2</i> --}}
                    <i class='material-icons'>running_with_errors</i>
                    <p>Ongoing</p>
                </a>
            </li>
            <li class="nav-item  {{ Request::segment(1) === 'productView' ? 'active' : null }}  ">
                <a class="nav-link" href="{{ url('/productView') }}">
                    <i class="material-icons">inventory_2</i>
                    <p>Product</p>
                </a>
            </li>


            <li class="nav-item {{ Request::segment(1) === 'supplierView' ? 'active' : null }}">
                <a class="nav-link" href="{{ url('supplierView') }}">
                    <i class="material-icons">switch_account</i>
                    <p>Suppliers</p>
                </a>
            </li>


            @if ($role == 'admin')
                <li class="nav-item {{ Request::segment(1) === 'viewInvoice' ? 'active' : null }}">
                    <a class="nav-link" href="{{ url('/viewInvoice') }}">
                        <i class="material-icons">receipt_long</i>
                        <p>invoice</p>
                    </a>
                </li>
            @endif



            <li class="nav-item {{ Request::segment(1) === 'tableManagement' ? 'active' : null }}">
                <a class="nav-link" href="{{ url('/tableManagement') }}">
                    <i class="material-icons">table_bar</i>
                    <p>Tables Management</p>
                </a>
            </li>
            <li class="nav-item {{ Request::segment(1) === 'expensesManagement' ? 'active' : null }}">
                <a class="nav-link" href="{{ url('/expensesManagement') }}">
                    <i class="material-icons">money-bill</i>
                    <p>Expenses Management</p>
                </a>
            </li>
            @if ($role == 'admin')
            <li class="nav-item {{ Request::segment(1) === 'productSaleReport' ? 'active' : null }}">
                <a class="nav-link" href="{{ url('/productSaleReport') }}">
                    <i class="material-icons">article</i>
                    <p>Sale Reports</p>
                </a>
            </li>
            @endif
            @if ($role == 'admin')
            <li class="nav-item {{ Request::segment(1) === 'pnlReport' ? 'active' : null }}">
                <a class="nav-link" href="{{ url('/pnlReport') }}">
                    <i class="material-icons">summarize</i>
                    <p>PnL Reports</p>
                </a>
            </li>
            @endif
        
           <hr>
       
            <li class="nav-item {{ Request::segment(1) === 'foodView' ? 'active' : null }}">
                <a class="nav-link" href="{{ url('/foodView') }}" target="_blank">
                    <i class="material-icons">restaurant_menu</i>
                    <p>Food View</p>
                </a>
            </li>

            <li class="nav-item {{ Request::segment(1) === 'beverageView' ? 'active' : null }}">
                <a class="nav-link" href="{{ url('/beverageView') }}" target="_blank">
                    <i class="material-icons">emoji_food_beverage</i>
                    <p>Beverage View</p>
                </a>
            </li>
        </ul>
    </div>
</div>
