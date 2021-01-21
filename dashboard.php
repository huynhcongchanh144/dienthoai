<?php 
session_start();
include('include/header.php');
include('./Connect/connect.php');
include('include/navbar.php');
include('include/scripts.php');?>
<link href="./css/style-admin.css" rel="stylesheet" type="text/css">
<link href="./css/sb-admin-2.min.css" rel="stylesheet">
<link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
         <link href="./css/sb-admin-2.min.css" rel="stylesheet">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello,<?php echo($_SESSION['admin']) ?></span>
                            </a>                           
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card bg-orange-g text-white">
                                <div class="card-body">
                                    <h4 class="font-weight-light"><i class="fa fa-dolly"></i> <a href="./category-admin.php" style="color: white">All Categories</a></h4>
                                    <hr>
                                    <h5>
                                        <b ><?php
                                            $sql="SELECT count(*) as total from Categories";
                                            $result=connect::ExecuteQuery($sql);
                                            $row=mysqli_fetch_array($result);
                                            echo($row['total']);
                                        ?></b>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-green-g text-white">
                                <div class="card-body">
                                    <h4 class="font-weight-light" ><i class="fas fa-store-alt"></i> <a href="./product-admin.php" style="color: white">All Products</a></h4>
                                    <hr>
                                    <h5>
                                        <b ><?php
                                            $sql="SELECT count(*) as total from Products";
                                            $result=connect::ExecuteQuery($sql);
                                            $row=mysqli_fetch_array($result);
                                            echo($row['total']);
                                        ?></b>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-primary-g text-white">
                                <div class="card-body">
                                    <h4 class="font-weight-light" ><i class="fas fa-users"></i><a href="./user_account-admin.php" style="color: white">All User</a></h4>
                                    <hr>
                                    <h5>
                                        <b ><?php
                                            $sql="SELECT count(*) as total from user";
                                            $result=connect::ExecuteQuery($sql);
                                            $row=mysqli_fetch_array($result);
                                            echo($row['total']);
                                        ?></b>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-golden-g text-white">
                                <div class="card-body">
                                    <h4 class="font-weight-light" ><i class="fas fa-truck-loading"></i> All Orders</h4>
                                    <hr>
                                    <h5>
                                        <b >700</b>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="all-order mt-5">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">New Orders</h1>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                              <tr class="bg-primary text-white">
                                <th scope="col">Order No.</th>
                                <th scope="col">Order Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Date</th>
                                <th scope="col">Paid Status</th>
                                <th scope="col">Order Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>3</td>
                                <td>23-08-2020</td>
                                <td><span class="badge badge-danger">Unpaid</span></td>
                                <td><span class="badge badge-success">Complete</span></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>4</td>
                                <td>23-01-2020</td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td><span class="badge badge-info">Proccess</span></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td >Larry</td>
                                <td>10</td>
                                <td>11-01-2020</td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td><span class="badge badge-danger">Rejected</span></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="order-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                              </nav>
                          </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
    <?php 
    include('include/scripts.php');
    include('include/footer.php');
    ?>






