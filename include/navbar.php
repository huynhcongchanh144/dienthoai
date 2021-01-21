<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../dienthoai/dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-user-secret"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Dashboard</div>
    </a>

<!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="../dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <span class="sidebar-heading">
        Shop Management
    </span>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menu Management</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Commodity Management:</h6>
                <a class="collapse-item" href="../dienthoai/category-admin.php"><i class="fa fa-dolly"></i> Categories</a>
                <a class="collapse-item" href="../dienthoai/product-admin.php"><i class="fas fa-shopping-basket"></i> Products</a>
                <a class="collapse-item" href="../dienthoai/producer-admin.php"><i class="fas fa-store-alt"></i> Producer</a>
                <a class="collapse-item" href="../dienthoai/order-admin.php"><i class="fas fa-truck-loading"></i> Order</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Users Management:</h6>
                <a class="collapse-item" href="../dienthoai/user_account-admin.php"><i class="fas fa-users-cog"></i> Users Account</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->