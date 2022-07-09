<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');
   include('includes/topbar.php');

?>
<?php


    $fid = $_GET['farmer_id'];

    $query = "SELECT * FROM farmers WHERE farmer_id='$fid' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>

            <div class="container">
                <div class="jumbotron">
                <p><a href="javascript:history.back()" class="btn btn-warning"><i class="fa-solid fa-angle-left"></i> Back</a></p>                    
                    <h2>Farmer Details</h2>
                    <hr>
                    <form action="" class="form-horizontal  span9" method="post" autocomplete="off"> 

                        <div class="row"> 
                            <div class="col-md-4">
                                <div class="form-group">
                                <label  for="name">Name</label> 
                                    <input class="form-control input-sm" id="name" name="name" placeholder=
                                    "" type="text" value="<?php echo $row['name'] ?>" > 
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="sex">Sex</label> 
                                <select class="form-control input-sm" id="sex" name="sex" value="<?php echo $row['sex'] ?>">
                                    <option <?php if ($row['sex'] == 'Male') echo 'selected'; ?>>Male</option>
                                    <option <?php if ($row['sex'] == 'Female') echo 'selected'; ?>>Female</option>
                                </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label  for="birthday">Date of Birth</label> 
                                    <input class="form-control input-sm" id="birthday" name="birthday" placeholder=
                                    "" type="date" value="<?php echo $row['birthday'] ?>"> 
                                </div>
                            </div>
                        </div>


                        <div class="row">
                             <div class="col-md-4">
                                <div class="form-group">
                                <label for="contact">Contact Number</label> 
                                    <input class="form-control input-sm" id="contact" name="contact"
                                    placeholder="" type="text" value="<?php echo $row['contact'] ?>" >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="address">Address</label> 
                                    <input class="form-control input-sm" id="address" name="craddressops"
                                    placeholder="" type="text" value="<?php echo $row['address'] ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="crops">Total Farm Area (ha)</label> 
                                    <input class="form-control input-sm" id="area" name="area"
                                    placeholder="" type="text" value="">
                                </div>
                            </div>
                            
                        </div>
                    
                         <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="crops">Types of Crops Cultivated</label> 
                                    <input class="form-control input-sm" id="crops" name="crops"
                                    placeholder="" type="text" value="<?php echo $row['crops'] ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="crops">Types of Livestock Owned</label> 
                                    <input class="form-control input-sm" id="livestock" name="livestock"
                                    placeholder="" type="text" value="<?php echo $row['livestock'] ?>">
                                </div>
                            </div>


                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="lat">Latitude</label> 
                                    <input class="form-control input-sm" id="lat" name="lat"
                                    placeholder="" type="text" value="<?php echo $row['lat'] ?>">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="lng">Longitude</label> 
                                    <input class="form-control input-sm" id="lng" name="lng"
                                    placeholder="" type="text" value="<?php echo $row['lng'] ?>">
                                </div>
                            </div>


                        </div>
                         <hr>
                        </form>

                </div>
            </div>

                    <?php
                    if(isset($_POST['update']))
                    {
                        $name = $_POST['name'];
                        $sex = $_POST['sex'];
                        $contact = $_POST['contact'];
                        $birthday = $_POST['birthday'];
                        $address = $_POST['address'];
                        $crops = $_POST['crops'];
                        $livestock = $_POST['livestock'];

                        $query = "UPDATE farmers SET 

                                        name='$name',
                                        sex='$sex',
                                        contact='$contact',
                                        birthday='$birthday',
                                        address='$address',
                                        crops='$crops',
                                        livestock='$livestock'
                                        
                                        WHERE farmer_id='$fid'  ";

                        $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                            echo '<script> alert("Data Updated"); </script>';
                            echo "<script>window.location.href='farmers.php'</script>";
                        }
                        else
                        {
                            echo '<script> alert("Data Not Updated"); </script>';
                        }
                    }
                    ?>    
            <?php
        }
    }
?>

            

<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>