<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('add_harvest.php');
   include('includes/config.php');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <p class="login-register-text"> <i class="fa-solid fa-angle-left"></i> <a href="javascript:history.back()">Back</a>  </p>
                    <h1 class="h3 mb-2 text-gray-800">Pending Loan Applications </h1>              
                    <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, nostrum quasi quisquam eveniet facere aliquam quod possimus. Non, rerum veritatis impedit ea autem quisquam hic.</p>

                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Amount</th>
                                        <th>Date Filed</th>
                                        <th>Reason</th>
                                        <th>Status</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php
                                    
                                        $fid = $_SESSION['farmer_id'];
                                        $query ="SELECT * FROM croploan where farmer_id = $fid";
                                        $sql = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($sql))
                                        {

                                    ?>

                                    <tr>
                                        <td><?php echo $row["id"];?></td>
                                        <td><?php echo $row["amount"];?></td>
                                        <td><?php echo $row["date_filed"];?></td>
                                        <td><?php echo $row["reason"];?></td>
                                        <td><?php echo $row["status"];?></td>
                                        <td >
                                            <a href="edit_harvest.php?id=<?php echo $row['id']; ?>" class="btn btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="delete_harvest.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')" name="delete"><i class="fa-solid fa-trash-can"></i></a>
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
   include('../includes/footer.php');
   include('../includes/scripts.php');
?>