<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('post_product.php');
   include('config.php');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <h1 class="h3 mb-2 text-gray-800">Marketplace</h1>
                    <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, nostrum quasi quisquam eveniet facere aliquam quod possimus. Non, rerum veritatis impedit ea autem quisquam hic.</p>
                    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#postproduct">Post a product</button>

                        <!-- <div class="row">
                            <div class='col-sm-4'>
                                <div class='box box-solid'>
                                    <div class='prod-body'>
                                        <img src='../images/bg.jpg' width='100%' height='230px' class=''>
                                        <h5 class= "mt-2">Sample</h5>
                                    </div>
                                    <div class='box-footer'>
                                        <b>Sample</b>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <?php 
                        
                        try{
                        $inc = 3;	
                        $query ="SELECT * FROM products";
                            $sql = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($sql))
                            {
                            $image = '../images/'.$row['photo'] ;
                            $inc = ($inc == 3) ? 1 : $inc + 1;
                               if($inc == 1) echo "<div class='row prod-body'>";
                               echo "
                                   <div class='col-sm-4'>
                                       <div class='box box-solid'>
                                           <div class=''>
                                               <img src='".$image."' width='100%' height='230px' class='thumbnail'>
                                               <h5><a href='product.php?'>".$row['product_name']."</a></h5>
                                           </div>
                                           <div class='box-footer'>
                                               <b>&#36; ".number_format($row['price'], 2)."</b>
                                           </div>
                                       </div>
                                   </div>
                               ";
                               if($inc == 3) echo "</div>";
                            }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
                        }

                        catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}
                        ?>

                    <!-- <?php 
                        $inc = 3;	
                        $query = "SELECT * FROM products";
                        $sql = mysqli_query($conn,$query);
                        while($row = @mysqli_fetch_assoc($sql))
                        {
                            $image = '..images/'.$row['photo'] ;
                            $inc = ($inc == 3) ? 1 : $inc + 1;
                               if($inc == 1) echo "<div class='row'>";
                               echo "
                                   <div class='col-sm-4'>
                                       <div class='box box-solid'>
                                           <div class='box-body prod-body'>
                                               <img src='".$image."' width='100%' height='230px' class='thumbnail'>
                                               <h5><a href='product.php?'>".$row['product_name']."</a></h5>
                                           </div>
                                           <div class='box-footer'>
                                               <b>&#36; ".number_format($row['price'], 2)."</b>
                                           </div>
                                       </div>
                                   </div>
                               ";
                               if($inc == 3) echo "</div>";
                            }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
                        ?> -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


<?php 
   include('includes/footer.php');
   include('includes/scripts.php');
?>