<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('add_user.php');
   include('includes/config.php');
   include('includes/topbar.php');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <h1 class="h3 mb-2 text-gray-800">Users</h1>
                    <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, nostrum quasi quisquam eveniet facere aliquam quod possimus. Non, rerum veritatis impedit ea autem quisquam hic.</p>
                    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#adduser">Add User</button>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Position</th>
                                        
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php
                                        include("../includes/config.php");
                                        $fid = $_SESSION['user_id'];
                                        $query ="SELECT * FROM users";
                                        $sql = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($sql))
                                        {

                                    ?>

                                    <tr>
                                        <td><?php echo $row["user_id"];?></td>
                                        <td><?php echo $row["name"];?></td>
                                        <td><?php echo $row["username"];?></td>
                                        <td><?php echo $row["position"];?></td>

                                        <td >
                                            <a href="edit_user.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="delete_user.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')" name="delete"><i class="fa-solid fa-trash-can"></i></a>
                                            <!-- <form action="delete_harvest.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                <input type="submit" name="delete" class="btn btn-danger" value="DELETE"> 
                                            </form> -->
                                        </td> 
 
                                    </tr>

                                    <?php } ?>
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


<?php 
   include('../includes/footer.php');
   include('../includes/scripts.php');
?>