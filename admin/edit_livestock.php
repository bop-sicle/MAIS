<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');
   include('includes/topbar.php');

?>
<?php


    $id = $_GET['id'];

    $query = "SELECT * FROM livestock WHERE id='$id' ";
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

                            
                            <h2> Edit Livestock</h2>
                            <hr>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <div class="form-group">
                                    <label for=""> Type </label>
                                    <input type="text" name="type" class="form-control" value="<?php echo $row['type'] ?>" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Quantity </label>
                                    <input type="qty" name="qty" class="form-control" value="<?php echo $row['quantity'] ?>" placeholder="Enter Last Name" required>
                                </div>

                                <button type="submit" name="update" class="btn btn-primary"> Update </button>
                            </form>

                        </div>
                    </div>

                    <?php
                    if(isset($_POST['update']))
                    {
                        $type = $_POST['type'];
                        $qty = $_POST['qty'];

                        $query = "UPDATE livestock SET type='$type', quantity='$qty' WHERE id='$id'  ";
                        $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                            echo '<script> alert("Data Updated"); </script>';
                            echo "<script>window.location.href='livestock.php'</script>";
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