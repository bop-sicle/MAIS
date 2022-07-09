<?php 
   session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');
   ?>



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
                                                Total Harvest Revenue</div>
                                                <?php 
                                                $fid = $_SESSION['farmer_id'];
                                                $query ="SELECT SUM(revenue) AS revenue FROM harvest where farmer_id=$fid";                                                $sql = mysqli_query($conn,$query);
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
                                                Total Livestock</div>
                                                <?php 
                                                $fid = $_SESSION['farmer_id'];
                                                $query ="SELECT COUNT(*) AS total FROM livestock where farmer_id = $fid";
                                                $sql = mysqli_query($conn,$query);
                                                while ($row = $sql->fetch_assoc()) {
                                                   
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $row['total']."<br>";?></div>
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

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Approved Request
                                            </div>
                                            <?php 
                                                $fid = $_SESSION['farmer_id'];
                                                $query ="SELECT COUNT(status) AS tot FROM seedling WHERE status='Approved' AND farmer_id=$fid";
                                                $sql = mysqli_query($conn,$query);
                                                while ($row = $sql->fetch_assoc()) {
                                                   
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $row['tot']."<br>";?></div>
                                                    <?php 
                                                    }
                                                    ?>   
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
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
                                                Total Crop Loaned</div>
                                                <?php 
                                                $fid = $_SESSION['farmer_id'];
                                                //$query ="SELECT SUM(revenue) AS revenue FROM harvest";
                                                $query ="SELECT SUM(amount) AS sum FROM croploan WHERE status='Approved' AND farmer_id=$fid";
                                                $sql = mysqli_query($conn,$query);
                                                while ($row = $sql->fetch_assoc()) {
                                                   
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $row['sum']."<br>";?></div>
                                                    <?php 
                                                    }
                                                    ?>  
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


   <?php 
   include('includes/footer.php');
   include('includes/scripts.php');
   ?>