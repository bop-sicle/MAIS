<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');


?>
<?php


    $id = $_GET['id'];

    $query = "SELECT * FROM harvest WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>

            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-6">
                        <p><a class="btn btn-warning" href="javascript:history.back()"><i class="fa-solid fa-angle-left"></i> Back</a></p>
                            <h2> Edit Harvest</h2>
                            <hr>
                            <form action="" method="post">
                            <input type="hidden" name="farmer_id" value="<?php echo $_SESSION['farmer_id'] ?>">
                                <div class="form-group">
                                    <label>Crop Type</label>
                                    <input type="type" name="type" class="form-control" placeholder="Enter Type" value="<?php echo $row['type'] ?>"required>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Volume</label>
                                            <input type="volume" name="volume" class="form-control" placeholder="Volume" value="<?php echo $row['volume'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                                <label for="unit">Unit</label> 
                                                    <select class="form-control input-sm" id="unit" name="unit">
                                                        <option value="Pieces" <?php if ($row['unit'] == 'Pics') echo 'selected'; ?>>
                                                        Pieces
                                                        </option>
                                                        <option value="Kilo" <?php if ($row['unit'] == 'Kilo') echo 'selected'; ?>>
                                                        Kilo
                                                        </option>
                                                        <option value="Tons" <?php if ($row['unit'] == 'Tons') echo 'selected'; ?>>
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
                                            <input type="date" name="date" class="form-control" placeholder="Harvest Date" value="<?php echo $row['date'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group">
                                            <label>Revenue</label>
                                            <input type="revenue" name="revenue" class="form-control" placeholder="revenue" value="<?php echo $row['revenue'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="update" class="btn btn-primary"> Update </button>
                            </form>

                        </div>
                    </div>

                    <?php
                    if(isset($_POST['update']))
                    {
                        $type = $_POST['type'];
                        $volume = $_POST['volume'];
                        $unit = $_POST['unit'];
                        $date = $_POST['date'];
                        $revenue = $_POST['revenue'];

                        $query = "UPDATE harvest SET type='$type', volume='$volume', unit='$unit', date='$date', revenue='$revenue' WHERE id='$id'  ";
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
            <?php
        }
    }
            ?>

            

<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>