<?php 
   include('includes/config.php');
   error_reporting(0);
            if(isset($_POST['adduserbtn']))
                    {
                        $name = $_POST['name'];
                        $username = $_POST['username'];
                        $position = $_POST['position'];
                        $fid = $_POST['farmer_id'];

                        
                                $sql = "INSERT INTO users (name, username, position) VALUES ('$name','$username','$position')";
                                $result = mysqli_query($conn, $sql);
                                
                                 if($result)
                                // {
                
                                //     // $_SESSION['status'] = "Added";
                                //     // $_SESSION['status_code'] = "success";
                                {
                                    $_SESSION['status'] = "Added";
                                    header('Location: users.php');
                                }
                                
                                    
                                
                                else 
                                {
                                    // $_SESSION['status'] = "Not Added";
                                    // $_SESSION['status_code'] = "error";
                                    echo "Not Added";
                                    header('Location: users.php');  
                                }
               
                                
                    }
 ?>


<!--Insert Modal -->
<div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addharvest">Add User</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
        </div>
        <form action="add_user.php" method="POST">
        <div class="modal-body">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                <div class="form-group">    
                    <!-- <?php echo $_SESSION['user_id'] ?> -->
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <label>Position</label>
                    <input type="text" name="position" class="form-control" placeholder="Position" required>
                </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="adduserbtn">Save</button>
        </div>
        </form>
        </div>                                 
    </div>
    </div>


<?php
   include('includes/scripts.php');
?>


