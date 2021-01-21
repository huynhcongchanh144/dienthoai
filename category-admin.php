<?php 
include('include/header.php');
include('./Connect/connect.php');
session_start();
include('include/navbar.php');?>
<link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="./css/style-admin.css" rel="stylesheet" type="text/css">
<link href="./css/sb-admin-2.min.css" rel="stylesheet">
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello, <?php echo($_SESSION['admin']) ?></span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- End of Topbar -->
        <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Category Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="./php/xuly-AddCategory.php" method="POST">

                        <div class="modal-body">

                            <div class="form-group">
                                <label>Mã loại</label>
                                <input type="text" name="codecategory" class="form-control" placeholder="Enter Code Category">
                            </div>
                            <div class="form-group">
                                <label>Tên loại</label>
                                <input type="text" name="namecategory" class="form-control" placeholder="Enter Name Category">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="addbtn" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Categories Management</h1>
            </div>
            <div class="card shadow md-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Categories List
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                            Add Category
                        </button>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing = "0">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>Mã loại</th>
                                    <th>Tên loại</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $sql="SELECT * from Categories";
                                    $bang=connect::ExecuteQuery($sql);
                                    while($dong=mysqli_fetch_array($bang))
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo($dong['cat_id']) ?></td>
                                                <td><?php echo($dong['cat_name']) ?></td>
                                                <td>
                                                <a href="./php/edit-cat-admin.php?id=<?php echo("$dong[cat_id]") ?>" class="text-white"><span class="badge bg-success">Edit</span></a>
                                                </td>
                                                <td>
                                                <a href="./php/delete-cat-admin.php?id=<?php echo("$dong[cat_id]") ?>" class="text-white"><span class="badge bg-success">Delete</span></a>
                                                </td>
                                            </tr>
                                        <?php
                                    }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<style>
    .modal-content{
        display: block;
    }
</style>
<?php 
    include('include/scripts.php');
    include('include/footer.php');
    ?>