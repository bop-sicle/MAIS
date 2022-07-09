<?php 
   include('includes/config.php');
   error_reporting(0);
            if(isset($_POST['addharvestbtn']))
                    {
                        $type = $_POST['type'];
                        $volume = $_POST['volume'];
                        $date = $_POST['date'];
                        $fid = $_POST['farmer_id'];

                        
                                $sql = "INSERT INTO harvest (farmer_id,type,volume,date) VALUES ('$fid','$type','$volume','$date')";
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
            <h5 class="modal-title" id="addharvest">Add Harvest</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
        </div>
        <form action="add_harvest.php" method="POST">
        <div class="modal-body">
                <input type="hidden" name="farmer_id" value="<?php echo $_SESSION['farmer_id'] ?>">
                <div class="form-group">    
                    <!-- <?php echo $_SESSION['user_id'] ?> -->
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
   include('includes/scripts.php');
?>


