<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <p><a class="btn btn-warning" href="javascript:history.back()"><i class="fa-solid fa-angle-left"></i> Back</a></p>
                    <h1 class="h3 mb-2 text-gray-800">Records</h1>
                    <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, nostrum quasi quisquam eveniet facere aliquam quod possimus. Non, rerum veritatis impedit ea autem quisquam hic.</p>                    

                    <ul id = "myTab" class = "nav pb-3">
                    <li class = "nav-tabs nav-item">
                        <button class="btn " data-toggle = "tab" href="#loan">Crop Loan</button>
                    </li>
                    
                    <li class = "mx-4 nav-tabs"> 
                    <button class="btn" data-toggle = "tab" href="#seed">Seed Request</button>
                    </li>

                    <li class = "nav-tabs">
                    <button class="btn" data-toggle = "tab" href="#vet">Vet Appoint</button>
                    </li>

                    </ul>

                    <div id = "myTabContent" class = "tab-content">

                    <div class = "tab-pane fade in active" id = "loan">
                    <h5 class = "font-weight-bold">Crop Loan</h5>
                    <table id="tblloan" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Amount</th>
                                        <th>Reason</th>
                                        <th>Date Filed</th>
                                        <th>Status </th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
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
                                        <td><?php echo $row["reason"];?></td>
                                        <td><?php echo $row["date_filed"];?></td>
                                        <td><?php echo $row["status"];?></td>
                                        <td >
                                        <!-- <button value="id=<?php echo $row['id'];?>" type="button" class="btn btn-primary" >Open Modal</button> -->
                                        <a href="resp_loan.php?id=<?php echo $row['id'];?>"  class="btn btn-info" ><i class="fa-solid fa-eye"></i></a>

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
                    
                    <div class = "tab-pane fade" id = "seed">
                    <h5 class = "font-weight-bold">Seedling Request</h5>
                    <table id="tblseed" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Seed Types</th>
                                        <th>Description</th>
                                        <th>Action</th>
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
                                    
                                        $fid = $_SESSION['farmer_id'];
                                        $query ="SELECT * FROM seedling where farmer_id = $fid";
                                        $sql = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($sql))
                                        {
                                        
                                    ?>

                                    <tr>
                                        <td><?php echo $row["id"];?></td>
                                        <td><?php echo $row["type"];?></td>
                                        <td><?php echo $row["description"];?></td>
                                        <td >
                                        <!-- <button value="id=<?php echo $row['id'];?>" type="button" class="btn btn-primary" >Open Modal</button> -->
                                        <a href="resp_seed.php?id=<?php echo $row['id'];?>"  class="btn btn-info" ><i class="fa-solid fa-eye"></i></a>

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
                    
                    <div class = "tab-pane fade" id = "vet">
                        <h5 class = "font-weight-bold">Veterinary Appointment</h5>
                    <table id="tblvet" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Animal</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <?php
                                       
                                        $fid = $_SESSION['farmer_id'];
                                        $query ="SELECT * FROM vet_appoint where farmer_id = $fid";
                                        $sql = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($sql))
                                        {
                                        
                                    ?>

                                    <tr>
                                        <td><?php echo $row["id"];?></td>
                                        <td><?php echo $row["animal"];?></td>
                                        <td><?php echo $row["reason"];?></td>
                                        <td><?php echo $row["date"];?></td>
                                        <td><?php echo $row["status"];?></td>
                                        <td >
                                        <!-- <button value="id=<?php echo $row['id'];?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewloan">Open Modal</button> -->
                                        <a href="resp_vet.php?id=<?php echo $row['id'];?>"  class="btn btn-info" ><i class="fa-solid fa-eye"></i></a>

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



<div class="modal fade" id="viewloan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Harvest</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <form action="add_harvest.php" method="POST">
        <div class="modal-body">
                <input type="hidden" name="farmer_id" value="<?php echo $_SESSION['farmer_id'] ?>">
                <div class="form-group">
                    <?php echo $_GET ['id'] ?>
                    <?php echo $_SESSION['farmer_id'] ?>
                    <label>Type</label>
                    <input type="type" name="type" class="form-control" placeholder="Type" required>
                </div>

                <div class="form-group">
                    <label>Volume</label>
                    <input type="volume" name="volume" class="form-control" placeholder="Volume" required>
                </div>

                <div class="form-group">
                    <label>Harvest Date</label>
                    <input type="date" name="date" class="form-control" placeholder="Harvest Date" required>
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
                if(isset($_POST['update']))
                {
                    $type = $_POST['type'];
                    $volume = $_POST['volume'];
                    $date = $_POST['date'];

                    $query = "UPDATE harvest SET type='$type', volume='$volume', date=' $date' WHERE id='$id'  ";
                    $query_run = mysqli_query($conn, $query);

                    if($query_run)
                    {
                        echo '<script> alert("Data Updated"); </script>';
                        echo "<script>window.location.href='harvest.php'</script>";
                    }
                    else
                    {
                        echo '<script> alert("Data Not Updated"); </script>';
                    }
                }
                ?>
            </div>
        </div>    


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


<?php 
   include('includes/scripts.php');
?>