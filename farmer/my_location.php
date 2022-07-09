<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');


?>
<?php


    $fid = $_SESSION['farmer_id'];

    $query = "SELECT * FROM farmers WHERE farmer_id='$fid' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
            <div class="container">
                <div class="jumbotron">
            <p><a class="btn btn-warning" href="javascript:history.back()"><i class="fa-solid fa-angle-left"></i> Back</a>  </p>

                                                
                    <h3> Location Settings</h3>
                        <hr>
                    <div class="row justify-content">
                        <div class="col-md-6">
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['farmer_id'] ?>">
                                <div class="form-group">
                                    <label for=""> Address </label>
                                    <input type="text" name="address" class="form-control" value="<?php echo $row['address'] ?>" placeholder="Enter Address" required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Latitude </label>
                                    <input type="text" name="lat" class="form-control" value="<?php echo $row['lat'] ?>" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Longitude </label>
                                    <input type="text" name="lng" class="form-control" value="<?php echo $row['lng'] ?>" placeholder="Enter Username" required>
                                </div>
                                
                                <!-- <img src="img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Update Profile Icon</label>
                                <input class="form-control" id="image" name="image" type="file">
                            </div> -->
                     </div>
                </div>
                                <button type="submit" name="update" class="btn btn-primary" onClick="return confirm('Save changes?')"> Update </button>
                            </form>

            </div>

                    <?php
                    if(isset($_POST['update']))
                    {
                        $address = $_POST['address'];
                        $lat = $_POST['lat'];
                        $lng = $_POST['lng'];

                        
                       
                        $query = "UPDATE farmers SET address='$address', lat='$lat', lng='$lng' WHERE farmer_id='$fid'  ";
                        $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                            echo '<script> alert("Data Updated"); </script>';
                            echo "<script>window.location.href='my_location.php'</script>";
                        }
                        else
                        {
                            echo '<script> alert("Data Not Updated"); </script>';
                        }
                    }
                    ?>
                </div>
            </div>    
            <?php
        }
    }
            ?>

            

<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>