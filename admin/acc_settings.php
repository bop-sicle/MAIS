<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');
   include('includes/topbar.php');

?>
<?php


    $id = $_SESSION['user_id'];

    $query = "SELECT * FROM users WHERE user_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>

            <div class="container">
                <div class="jumbotron">
                    <p><a class="btn btn-warning" href="javascript:history.back()"><i class="fa-solid fa-angle-left"></i> Back</a></p>
                    
                    <h2>Account Settings</h2>
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
                                <label  for="name">Position</label> 
                                    <input class="form-control input-sm" id="position" name="position" placeholder=
                                    "" type="text" value="<?php echo $row['position'] ?>" > 
                                </div>
                            </div>


                            
                        </div>


                        <div class="row">
                           
                            <div class="col-md-4">
                                <div class="form-group">
                                <label  for="birthday">Username</label> 
                                    <input class="form-control input-sm" id="username" name="username" placeholder=
                                    "" type="text" value="<?php echo $row['username'] ?>"> 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label for="contact">Password </label> 
                                    <input class="form-control input-sm" id="password" name="password"
                                    placeholder="" type="password" value="<?php echo $row['password'] ?>" >
                                </div>
                            </div>
                        </div>

                         <hr>
                        <div class="row">
                            <div class= "col-md-4">
                            <div class="form-group">
                                <button class="btn btn-primary" name="update" type="submit">Update</button>
                            </div>
                        </div>
                        </form>

                </div>
            </div>

                    <?php
                    if(isset($_POST['update']))
                    {
                        $name = $_POST['name'];
                        $position = $_POST['position'];
                        $username = $_POST['username'];
                        $password = md5($_POST['password']);
                        

                        $query = "UPDATE users SET 

                                        name='$name',
                                        position='$position',
                                        username='$username',
                                        password='$password'
                                        
                                        WHERE user_id='$id'  ";

                        $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                            echo '<script> alert("Data Updated"); </script>';
                            echo "<script>window.location.href='acc_settings.php'</script>";
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