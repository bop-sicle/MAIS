<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');


?>
<?php


    $id = $_GET['id'];

    $query = "SELECT * FROM seedling WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>

            <div class="container"> 
                <div class="jumbotron">
                    <p><a class="btn btn-warning" href="javascript:history.back()"><i class="fa-solid fa-angle-left"></i> Back</a></p>
                    <hr>
                    <h6 class="font-weight-bold">Details:</h6>
                    
                    <form action="" class="form-horizontal  span9" method="post" autocomplete="off"> 

                        <div class="row"> 
                            <div class="col-md-4">
                                <div class="form-group">
                                <label  for="name">Name</label> 
                                    <input class="form-control input-sm" id="name" name="name" disabled 
                                    type="text" value="<?php echo $row['name'] ?>" > 
                                </div>
                            </div>


                            <div class="col-md-8">
                                <div class="form-group">
                                <label  for="type">Types of Seed</label> 
                                    <input class="form-control input-sm" id="type" name="type" disabled
                                     type="text" value="<?php echo $row['type'] ?>"> 
                                </div>
                            </div>

                        </div>

                        <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label  for="stat">Status</label> 
                                        <input class="form-control input-sm" id="stat" name="stat" disabled
                                        type="text" value="<?php echo $row['status'] ?>"> 
                                    </div>
                                </div>
                        </div>

                        <div class="row">
                             <div class="col-md-4">
                             <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" rows="7" cols="115" disabled><?php echo $row['description'] ?></textarea>
                            </div>
                            </div>
                        
                        </div>
                        

                        
                            
                        </form>

                </div>
            </div>

                    <?php
                    if(isset($_POST['respond']))
                    {
                        $to = "christopheragquiz@gmail.com";
                        $subject = "Test mail";
                        $message = "Hello! This is a test email message.";
                        $from = "me@example.com";
                        $headers = "From:" . $from;

                        mail($to,$subject,$message,$headers);

                        $status = $_POST['status'];
                        $message = $_POST['message'];

                        $query = "UPDATE seedling SET 

                                        status='$status',
                                        message='$message'
                                        
                                        WHERE id='$id'  ";

                        $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                            echo '<script> alert("Data Updated"); </script>';
                            echo "<script>window.location.href='requests.php'</script>";
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