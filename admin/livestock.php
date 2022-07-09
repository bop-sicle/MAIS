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
            <h1 class="h3 mb-2 text-gray-800">Livestock</h1>
            <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, nostrum quasi quisquam eveniet facere aliquam quod possimus. Non, rerum veritatis impedit ea autem quisquam hic.</p>   
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>    
                                        <th>Farmer ID</th>
                                        <th>Type</th>
                                        <th>Quantity</th>
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

                                            $fid = $_SESSION['user_id'];
                                            $query ="SELECT * FROM livestock";
                                            $sql = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_array($sql))
                                            {?>

                                                <tr>
                                                    
                                                    <td><a href="view_farmer.php?farmer_id=<?php echo $row["farmer_id"];?>"><?php echo $row["farmer_id"];?></a></td>
                                                    <td><?php echo $row["type"];?></td>
                                                    <td><?php echo $row["quantity"];?></td>
                                                    <td >
                                                        <a href="edit_livestock.php?id=<?php echo $row['id']; ?>" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="delete_livestock.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')" name="delete"><i class="fa-solid fa-trash-can"></i></a>
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