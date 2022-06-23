<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

 
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

 
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

   
    <hr class="sidebar-divider">


    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{route('adminCustomers')}}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>List Customers</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('adminProducts')}}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>List Products</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('adminOrders')}}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>List Order</span></a>
    </li>


    <hr class="sidebar-divider dn-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidbarToggle"></button>
    </div>
</ul>