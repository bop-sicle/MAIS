<?php 
include('config.php');

?>
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                <img width="40" height="40" src="../images/logo.png" alt="">
                </div>
                <div class="sidebar-brand-text m-3">MAIS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="farmers.php">
                    <i class="fas fa-fw fa-solid fa-hat-cowboy"></i>
                    <span>Farmers</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="harvest.php">
                    <i class="fas fa-fw fa-solid fa-wheat-awn"></i>
                    <span>Harvest</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="livestock.php">
                    <i class="fas fa-fw fa-solid fa-cow"></i>
                    <span>Livestock</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="requests.php">
                    <i class="fas fa-fw fa-solid fa-hand-holding-medical"></i>
                    <span>Services</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="map.php">
                    <i class="fas fa-fw fa-solid fa-map"></i>
                    <span>Map</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php">
                    <i class="fas fa-fw fa-solid fa-user"></i>
                    <span>Users</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAcc"
                    aria-expanded="true" aria-controls="collapseAcc">
                    <i class="fas fa-fw fa-solid fa-user"></i>
                    <span>Account</span>
                </a>
                <div id="collapseAcc" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">ACCOUNT</h6>
                    <a class="collapse-item" href="acc_settings.php">
                        <i class="fas fa-user-gear fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="collapse-item" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

        <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    

