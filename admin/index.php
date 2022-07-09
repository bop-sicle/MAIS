<?php 
   session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/scripts.php');
   include('includes/topbar.php');

   ?>

        <!-- Main Content -->
        <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Revenue</div>
                                                <?php 
                                                
                                                $query ="SELECT SUM(revenue) AS revenue FROM harvest";
                                                $sql = mysqli_query($conn,$query);
                                                while ($row = $sql->fetch_assoc()) {
                                                   
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $row['revenue']."<br>";?></div>
                                                    <?php 
                                                    }
                                                    ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-solid fa-coins fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Farmer</div>
                                                <?php 
                                                //$query ="SELECT SUM(revenue) AS revenue FROM harvest";
                                                $query ="SELECT COUNT(*) AS farmers FROM farmers";
                                                $sql = mysqli_query($conn,$query);
                                                while ($row = $sql->fetch_assoc()) {
                                                   
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $row['farmers']."<br>";?></div>
                                                    <?php 
                                                    }
                                                    ?>  
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-solid fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Livestocks
                                            </div>
                                            <?php 
                                                //$query ="SELECT SUM(revenue) AS revenue FROM harvest";
                                                $query ="SELECT COUNT(*) AS livestock FROM livestock";
                                                $sql = mysqli_query($conn,$query);
                                                while ($row = $sql->fetch_assoc()) {
                                                   
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $row['livestock']."<br>";?></div>
                                                    <?php 
                                                    }
                                                    ?> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-solid fa-cow fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

 
                </div>
                <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


   <?php 
   include('includes/footer.php');

   ?>