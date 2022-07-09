<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   //include('add_harvest.php');
   include('includes/config.php');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <h1 class="h3 mb-2 text-gray-800">Harvest</h1>
                    <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, nostrum quasi quisquam eveniet facere aliquam quod possimus. Non, rerum veritatis impedit ea autem quisquam hic.</p>
                    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#addharvest">Add Harvest</button>
                    

                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Volume</th>
                                        <th>Date</th>
                                        <th>Revenue</th>
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
                                        $query ="SELECT * FROM harvest where farmer_id = $fid";
                                        $sql = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($sql))
                                        {

                                    ?>

                                    <tr>
                                        <td><?php echo $row["id"];?></td>
                                        <td><?php echo $row["type"];?></td>
                                        <td><?php echo $row["volume"];?> <?php echo $row["unit"];?></td>
                                        <td><?php echo $row["date"];?></td>
                                        <td><?php echo $row["revenue"];?></td>
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

            <!-- Add Harvest -->
            <?php 
            if(isset($_POST['addharvestbtn']))
                    {
                        $type = $_POST['type'];
                        $volume = $_POST['volume'];
                        $unit = $_POST['unit'];
                        $date = $_POST['date'];
                        $revenue = $_POST['revenue'];
                        $fid = $_POST['farmer_id'];

                        
                                $sql = "INSERT INTO harvest (farmer_id,type,volume,unit,date,revenue) VALUES ('$fid','$type','$volume','$unit','$date','$revenue')";
                                $result = mysqli_query($conn, $sql);
                                
                                 if($result)
                            
                                {
                                    $_SESSION['status'] = "Added";
                                    header('Location: harvest.php');
                                }
                                
                                    
                                
                                else 
                                {
                                     echo "Not Added";
                                    header('Location: harvest.php');  
                                }
               
                                
                    }
            ?>
                    <!--Insert Modal -->
                    <div class="modal fade" id="addharvest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Harvest</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                            </div>
                            <form action="add_harvest.php" method="POST">
                            <div class="modal-body">
                                    <input type="hidden" name="farmer_id" value="<?php echo $_SESSION['farmer_id'] ?>">
                                    <div class="form-group">
                                        <label>Crop Type</label>
                                        <input type="type" name="type" class="form-control" placeholder="Enter Type" required>
                                    </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Volume</label>
                                        <input type="volume" name="volume" class="form-control" placeholder="Volume" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                            <label for="unit">Unit</label> 
                                                <select class="form-control input-sm" id="unit" name="unit">
                                                    <option value="">
                                                    Select Unit
                                                    </option>
                                                    <option value="Pieces">
                                                    Pieces
                                                    </option>
                                                    <option value="Kilo">
                                                    Kilo
                                                    </option>
                                                    <option value="Tons">
                                                    Tons
                                                    </option>
                                                </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Harvest Date</label>
                                        <input type="date" name="date" class="form-control" placeholder="Harvest Date" required>
                                    </div>
                                </div>
                                <div class="col">
                                <div class="form-group">
                                        <label>Revenue</label>
                                        <input type="revenue" name="revenue" class="form-control" placeholder="revenue" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="addharvestbtn">Save</button>
                            </div>
                            </form>
                            </div>                                 
                        </div>
                        </div>




<?php 
   include('includes/footer.php');
   include('includes/scripts.php');
?>