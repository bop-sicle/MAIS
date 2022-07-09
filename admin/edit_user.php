<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');
   include('includes/topbar.php');

?>
<?php


    $id = $_GET['user_id'];

    $query = "SELECT * FROM users WHERE user_id='$id' ";
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

                            <h2> Edit User</h2>
                            <hr>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['user_id'] ?>">
                                <div class="form-group">
                                    <label for=""> Name </label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Username </label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" placeholder="Enter Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Position </label>
                                    <input type="text" name="position" class="form-control" value="<?php echo $row['position'] ?>" placeholder="Enter Contact" required>
                                </div>

                                <button type="submit" name="update" class="btn btn-primary"> Update </button>
                            </form>

                        </div>
                    </div>

                    <?php
                    if(isset($_POST['update']))
                    {
                        $name = $_POST['name'];
                        $username = $_POST['username'];
                        $position = $_POST['position'];

                        $query = "UPDATE users SET name='$name', username='$username', position=' $position' WHERE user_id='$id'  ";
                        $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                            echo '<script> alert("Data Updated"); </script>';
                            echo "<script>window.location.href='users.php'</script>";
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