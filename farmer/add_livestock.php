<?php 
   include('includes/config.php');
   include('includes/header.php');
   error_reporting(0);
            if(isset($_POST['addlivestockbtn']))
                    {
                        $type = $_POST['type'];
                        $qty = $_POST['qty'];          
                        $fid = $_POST['farmer_id'];

                        
                                $sql = "INSERT INTO livestock (farmer_id,type,quantity) VALUES ('$fid','$type','$qty')";
                                $result = mysqli_query($conn, $sql);
                                
                                 if($result)
                                // {
                
                                //     // $_SESSION['status'] = "Added";
                                //     // $_SESSION['status_code'] = "success";
                                {
                                    $_SESSION['status'] = "Added";
                                    header('Location: livestock.php');
                                    
                                }
                                
                                    
                                
                                else 
                                {
                                    // $_SESSION['status'] = "Not Added";
                                    // $_SESSION['status_code'] = "error";
                                     echo "Not Added";
                                    header('Location: livestock.php');  
                                }
               
                                
                    }
 ?>


<!--Insert Modal -->
<div class="modal fade" id="addlivestock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Livestock</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="add_livestock.php" method="POST">
        <div class="modal-body">
                <input type="hidden" name="farmer_id" value="<?php echo $_SESSION['farmer_id'] ?>">
                <div class="form-group">
                    <?php echo $_SESSION['farmer_id'] ?>
                    <label>Type</label>
                    <input type="type" name="type" class="form-control" placeholder="Type" required>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="qty" name="qty" class="form-control" placeholder="Quantity" required>
                </div>

        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="addlivestockbtn">Save</button>
        </div>
        </form>
        </div>                                 
    </div>
    </div>


<?php
   include('includes/scripts.php');
?>


