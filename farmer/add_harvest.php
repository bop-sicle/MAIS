<?php 
   include('includes/config.php');
   include('includes/header.php');
   error_reporting(0);
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
                                // {
                
                                //     // $_SESSION['status'] = "Added";
                                //     // $_SESSION['status_code'] = "success";
                                {
                                    $_SESSION['status'] = "Added";
                                    header('Location: harvest.php');
                                }
                                
                                    
                                
                                else 
                                {
                                    // $_SESSION['status'] = "Not Added";
                                    // $_SESSION['status_code'] = "error";
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
   include('includes/scripts.php');
?>


