<?php 
  session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('includes/config.php');
   include('includes/topbar.php');
 ?>
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card-header">
              <p><a href="javascript:history.back()" class="btn btn-warning"><i class="fa-solid fa-angle-left"></i> Back</a></p>
                <h5>Add New Farmer</h5>
            </div>
                <div class="card-body">
                    <form action="add_farmer.php" class="form-horizontal  span9" method="post" autocomplete="off">             
                        <div class="row"> 
                          <div class="col-md-4">
                            <div class="form-group">
                              <label  for="username">Username</label> 
                                <input class="form-control input-sm" id="username" name="username" placeholder=
                                "" type="text" value="" required> 
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label  for="username">Email</label> 
                                <input class="form-control input-sm" id="email" name="email" placeholder=
                                "" type="email" value="" required> 
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label  for="password">Password</label> 
                                <input class="form-control input-sm" id="password" name="password" placeholder=
                                "" type="text" value="" required> 
                            </div>
                          </div>
                        </div>

                        

                        <div class="row"> 
                          <div class="col-md-4">
                            <div class="form-group">
                              <label  for="name">Name</label> 
                                <input class="form-control input-sm" id="name" name="name" placeholder=
                                "" type="text" value="" required> 
                            </div>
                          </div>


                          <div class="col-md-4">
                          <div class="form-group">
                            <label for="sex">Sex</label> 
                              <select class="form-control input-sm" id="sex" name="sex">
                                <option value="Male">
                                  Male
                                </option>

                                <option value="Female">
                                  Female
                                </option>
                              </select>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="dob">Date of Birth</label> 
                                <input class="form-control input-sm" id="dob" name="dob"
                                placeholder="" type="date">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label  for="contact">Contact</label> 
                                <input class="form-control input-sm" id="contact" name="contact" placeholder=
                                "" type="text" value="" required> 
                            </div>
                          </div>

                          <div class="col-md-4">
                          <div class="form-group">
                            <label for="address">Address</label> 
                              <input class="form-control input-sm" id="address" name="address"
                              placeholder="" type="text">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="address">Total Farm Area (ha)</label> 
                              <input class="form-control input-sm" id="area" name="area"
                              placeholder="" type="text">
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="crops">Types of Crops Cultivated</label> 
                              <input class="form-control input-sm" id="crops" name="crops"
                              placeholder="" type="text">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="livestock">Types of Livestock Owned</label> 
                              <input class="form-control input-sm" id="livestock" name="livestock"
                              placeholder="" type="text">
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="latitude">Latitude</label> 
                              <input class="form-control input-sm" id="latitude" name="latitude"
                              placeholder="" type="text">
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="longitude">Longitude</label> 
                              <input class="form-control input-sm" id="longitude" name="longitude"
                              placeholder="" type="text">
                          </div>
                        </div>
                  </div>

                      <div class="card-footer">
                        <div class="form-group">            
                            <button class="btn btn-success" name="addfarmerbtn" type="submit">Save</button>
                        </div>
                      </div>

                  </form>
                  
                </div>

                </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

            <?php 

                        if(isset($_POST['addfarmerbtn']))
                                {
                                    $username = $_POST['username'];
                                    $email = $_POST['email'];
                                    $password = md5($_POST['password']);
                                    $name = $_POST['name'];
                                    $sex = $_POST['sex'];
                                    $contact = $_POST['contact'];
                                    $dob = $_POST['dob'];
                                    $address = $_POST['address'];
                                    $crops = $_POST['crops'];
                                    $livestock = $_POST['livestock'];
                                    // $sugarcane = $_POST['sugarcane'];
                                    // $corn = $_POST['corn'];
                                    // $rice = $_POST['rice'];
                                    // $carabao = $_POST['carabao'];
                                    // $cow = $_POST['cow'];
                                    // $horse = $_POST['horse'];
                                    // $goat = $_POST['goat'];
                                    // $crop = $sugarcane . $corn . $rice;
                                    $lat = $_POST['latitude'];
                                    $lng = $_POST['longitude'];
                                    $sql = "SELECT * FROM farmers WHERE email='$email'";
                                    $result = mysqli_query($conn, $sql);

                                    if (!$result->num_rows > 0) {

                                      $sql = "INSERT INTO farmers (
                                        username,
                                        email,
                                        password,
                                        name,
                                        sex,
                                        contact,
                                        birthday,
                                        address,
                                        crops,
                                        livestock,
                                        -- sugarcane,
                                        -- corn,
                                        -- rice,
                                        -- carabao,
                                        -- cow,
                                        -- horse,
                                        -- goat,
                                        lat,
                                        lng
                                        
                                      ) 
                                      VALUES (
                                        '$username',
                                        '$email',
                                        '$password',
                                        '$name',
                                        '$sex',
                                        '$contact',
                                        '$dob',
                                        '$address',
                                        '$crops',
                                        '$livestock',
                                        -- '$sugarcane',
                                        -- '$corn',
                                        -- '$rice',
                                        -- '$carabao',
                                        -- '$cow',
                                        -- '$horse',
                                        -- '$goat',
                                        '$lat',
                                        '$lng'
                                        )";
                                      $result = mysqli_query($conn, $sql);
                                      if ($result) {
                                        echo "<script>alert('Wow! User Registration Completed.')</script>";
                                      } else {
                                        echo "<script>alert('Woops! Something Wrong Went.')</script>";
                                      }
                                    } else {
                                      echo "<script>alert('Woops! Email Already Exists.')</script>";
                                    }
                          
                                            
                                }
            ?>




<?php
  include('includes/footer.php');
  include('includes/scripts.php');
?>


