<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');
   include('includes/topbar.php');
?>

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">   
            <h1 class="h3 mb-2 text-gray-800">Farmers</h1>
            <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, nostrum quasi quisquam eveniet facere aliquam quod possimus. Non, rerum veritatis impedit ea autem quisquam hic.</p>
            <!-- <button class="btn btn-success mb-3" href = add_farmer.php >Add Farmer</button> -->
            <a class="btn btn-success mb-3" href="add_farmer.php">Add Farmer</a>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                    
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php
                                        
                                        $query ="SELECT * FROM farmers";
                                        $sql = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($sql))
                                        {

                                    ?>

                                    <tr>
                                        
                                        <td><?php echo $row["name"] ;?></td>
                                        <td><?php echo $row["contact"];?></td>
                                        <td><?php echo $row["address"];?></td>
                                        <td >
                                            <a href="edit_farmer.php?farmer_id=<?php echo $row['farmer_id']; ?>" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="delete_farmer.php?farmer_id=<?php echo $row['farmer_id'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')" name="delete"><i class="fa-solid fa-trash-can"></i></a>
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
   include('includes/footer.php');
   include('includes/scripts.php');
?>