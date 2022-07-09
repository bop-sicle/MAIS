<?php 
   include('includes/config.php');
   include('includes/header.php');
            if(isset($_POST['apply']))
                    {
                        $fid = $_POST['farmer_id'];
                        $name = $_POST['name'];
                        $amount = $_POST['amount'];
                        $reason = $_POST['reason'];
                        $description = $_POST['description'];

                        
                                $sql = "INSERT INTO croploan (farmer_id,name,amount,reason,description) VALUES ('$fid','$name','$amount','$reason', '$description')";
                                $result = mysqli_query($conn, $sql);
                                
                                 if($result)
                            
                                {
                                    echo "<script>alert('Wow! User Registration Completed. Login now!')</script>";                                }
                                
                                    
                                
                                else 
                                {
                                    // $_SESSION['status'] = "Not Added";
                                    // $_SESSION['status_code'] = "error";
                                    echo "<script>alert('Sorry!')</script>";
                                    header('Location: croploan.php');  
                                }
               
                                
                    }
 ?>


<!--Insert Modal -->
<div class="modal fade" id="applyloan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apply Crop Loan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <form action="" method="POST">
        <div class="modal-body">
                <input type="hidden" name="farmer_id" value="<?php echo $_SESSION['farmer_id'] ?>">
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                </div>

                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" name="amount" class="form-control" placeholder="Enter Amount" required>
                </div>

                <div class="form-group">
                    <label for="reason">Reason</label> 
                        <select class="form-control input-sm" id="reason" name="reason">
                        <option value="">
                            --Select Reason--
                            </option>
                            <option value="Farm Labor">
                            Farm Labor
                            </option>
                            <option value="Fertilizer ">
                            Fertilizer
                            </option>
                            <option value="Seedling ">
                            Seedling
                            </option>
                            <option value="Others ">
                            Others
                            </option>
                        </select>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="7" cols="52" required></textarea>
                </div>

            </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" name="apply">Apply</button>
        </div>
        </form>
        </div>                                 
    </div>
    </div>


<?php
   include('includes/scripts.php');
?>


