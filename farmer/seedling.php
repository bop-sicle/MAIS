<?php 
   include('includes/config.php');
   include('includes/header.php');
   error_reporting(0);
            if(isset($_POST['request']))
                    {
                        $fid = $_POST['farmer_id'];
                        $name = $_POST['name'];
                        $sitaw = $_POST['sitaw'];
                        $okra = $_POST['okra'];
                        $talong = $_POST['talong'];
                        $kamatis = $_POST['kamatis'];
                        $kalabasa = $_POST['kalabasa'];
                        $petchay = $_POST['petchay'];
                        $sili = $_POST['sili'];
                        $ampalaya = $_POST['ampalaya'];
                        $others = $_POST['others'];
                        $description = $_POST['description'];
                        $type = $sitaw . $okra . $talong . $kamatis . $kalabasa . $petchay . $sili . $ampalaya . $others ;
                        
                                $sql = "INSERT INTO seedling (farmer_id,name,type,description) VALUES ('$fid','$name','$type','$description')";
                                $result = mysqli_query($conn, $sql);
                                
                                 if($result)
                            
                                {
                                    echo '<script> alert("Data Updated"); </script>';                           }
                                
                                    
                                
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
<div class="modal fade" id="seed_req" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Request Seedling</h5>
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
                        <span class="font-weight-bold">Type of Seedlings</span>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=" Sitaw," id="sitaw" name="sitaw">
                            <label class="form-check-label" for="sitaw">
                                Sitaw
                            </label>
                            </div>

                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=" Okra," id="okra" name="okra">
                            <label class="form-check-label" for="okra">
                                Okra
                            </label>
                            </div>

                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=" Talong," id="talong" name="talong">
                            <label class="form-check-label" for="talong">
                                Talong
                            </label>
                            </div>

                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=" Kamatis," id="kamatis" name="kamatis">
                            <label class="form-check-label" for="kamatis">
                                Kamatis
                            </label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                        <span class="font-weight-bold">.</span>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=" Kalabasa," id="kalabasa" name="kalabasa">
                            <label class="form-check-label" for="kalabasa">
                                Kalabasa
                            </label>
                            </div>

                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=" Petchay," id="petchay" name="petchay">
                            <label class="form-check-label" for="petchay">
                                Petchay
                            </label>
                            </div>

                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=" Sili," id="sili" name="sili">
                            <label class="form-check-label" for="sili">
                                Sili
                            </label>
                            </div>

                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=" Ampalaya" id="ampalaya" name="ampalaya">
                            <label class="form-check-label" for="ampalaya">
                                Ampalaya
                            </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Others</label>
                    <input type="text" name="others" class="form-control" placeholder="Please specify" >
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="7" cols="52" required></textarea>
                </div>

            </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" name="request">Request</button>
        </div>
        </form>
        </div>                                 
    </div>
</div>


<?php
   include('includes/scripts.php');
?>


