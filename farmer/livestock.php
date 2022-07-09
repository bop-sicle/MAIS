<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('add_livestock.php');
   include('includes/config.php');
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Livestock</h1>
                <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, nostrum quasi quisquam eveniet facere aliquam quod possimus. Non, rerum veritatis impedit ea autem quisquam hic.</p>
                <button class="btn btn-success mb-3" data-toggle="modal" data-target="#addlivestock">Add Livestock</button>


                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
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
                                </tr>
                                <?php
                                    include("config.php");
                                    $fid = $_SESSION['farmer_id'];
                                    $query ="SELECT * FROM livestock where farmer_id = $fid";
                                    $sql = mysqli_query($conn,$query);
                                    while($row = mysqli_fetch_array($sql))
                                    {

                                ?>

                                <tr>
                                    <td><?php echo $row["id"];?></td>
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php 
   include('includes/footer.php');
?>