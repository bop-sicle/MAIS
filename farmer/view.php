<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');


?>
<?php


    $id = $_GET['id'];

    $query = "SELECT * FROM croploan WHERE id='$id' ";
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
                            
                            <h2> View Crop Loan Request</h2>
                            <hr>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <div class="form-group">
                                    <label for=""> Amount </label>
                                    <input type="text" name="type" class="form-control" value="<?php echo $row['amount'] ?>" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Reason </label>
                                    <input type="text" name="volume" class="form-control" value="<?php echo $row['reason'] ?>" placeholder="Enter Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Date </label>
                                    <input type="date" name="date" class="form-control" value="<?php echo $row['date_filed'] ?>"  required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Status </label>
                                    <input type="text" disabled name="date" class="form-control" value="<?php echo $row['status'] ?>" placeholder="Enter Contact" required>
                                </div>

                                <button type="submit" name="update" class="btn btn-primary"> Update </button>

                                <a href="harvest.php" class="btn btn-danger"> Cancel </a>
                            </form>

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
            <?php
        }
    }
            ?>

            

<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>