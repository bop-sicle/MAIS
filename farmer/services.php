<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('apply_loan.php');
   include('seedling.php');
   include('vet_appoint.php');
   include('includes/config.php');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <h1 class="h3 mb-2 text-gray-800">Services</h1>
                        </div>
                        <div class="mx-5">
                        </div>
                    </div>
                    <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, nostrum quasi quisquam eveniet facere aliquam quod possimus. Non, rerum veritatis impedit ea autem quisquam hic.</p>                    
                    <a  class="btn btn-success" href="my_requests.php"><i class="fa-solid fa-book-bookmark"></i> Records</a>
                    <div class="row justify-content-left my-4">
                        <div class="mx-2">
                            <div class="card" style="width: 20rem;">
                                <img src="../images/loans.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Crop Loan Application</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nisi natus illum eum non ex!</p>
                                        <a data-toggle="modal" data-target="#applyloan" class="btn btn-primary">Apply now!</a>
                                    </div>
                            </div>
                        </div>

                        <div class="mx-2">
                            <div class="card" style="width: 20rem;">
                                <img src="../images/planting.jpg" class="card-img-top" alt="..." style="height: 50%">
                                    <div class="card-body">
                                        <h5 class="card-title">Seedling Request</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nisi natus illum eum non ex!</p>
                                        <a data-toggle="modal" data-target="#seed_req" class="btn btn-primary">Request</a>
                                    </div>
                            </div>
                        </div>

                        <div class="mx-2">
                            <div class="card" style="width: 20rem;">
                                <img src="../images/vet.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Veterinary Appointment</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nisi natus illum eum non ex!</p>
                                        <a data-toggle="modal" data-target="#vet_appoint" class="btn btn-primary">Appoint</a>
                                    </div>
                            </div>
                        </div>

                    </div>
                    
                    


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


