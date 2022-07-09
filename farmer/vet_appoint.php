<?php 
   include('includesconfig.php');
   include('includes/header.php');
            if(isset($_POST['book']))
                    {
                        $fid = $_POST['farmer_id'];
                        $name = $_POST['name'];
                        $animal = $_POST['animal'];
                        $date = $_POST['date'];
                        $address = $_POST['address'];
                        $reason = $_POST['reason'];

                        
                                $sql = "INSERT INTO vet_appoint (farmer_id,name,animal,date,address,reason) VALUES ('$fid','$name','$animal','$date','$address','$reason')";
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
<div class="modal fade" id="vet_appoint" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Appoint a Veterinarian</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <form action="" method="POST">
        <div class="modal-body">
                <input type="hidden" name="farmer_id" value="<?php echo $_SESSION['farmer_id'] ?>">

                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                     </div>
                

                <div class="row">
                    
                        <div class="col">
                            <div class="form-group">
                                <label for="animal">Type of Animal</label>
                                <input type="text" name="animal" class="form-control" placeholder="Type of Animal" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control" placeholder="Preferred Date" required>
                            </div>
                        </div>    
                </div>
                

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Preferred Address" required>
                </div>

                <div class="form-group">
                    <label for="description">Reason for appointment</label>
                    <textarea id="description" name="reason" rows="7" cols="52" required></textarea>
                </div>

            </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" name="book">Book</button>
        </div>
        </form>
        </div>                                 
    </div>
    </div>


<?php
   include('includes/scripts.php');
?>


