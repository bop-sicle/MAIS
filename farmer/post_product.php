<?php 
include ('config.php');

function slugify($string){
    $preps = array('in', 'at', 'on', 'by', 'into', 'off', 'onto', 'from', 'to', 'with', 'a', 'an', 'the', 'using', 'for');
        $pattern = '/\b(?:' . join('|', $preps) . ')\b/i';
        $string = preg_replace($pattern, '', $string);
    $string = preg_replace('~[^\\pL\d]+~u', '-', $string);
    $string = trim($string, '-');
    $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
    $string = strtolower($string);
    $string = preg_replace('~[^-\w]+~', '', $string);
    
    return $string;
    
    }

if(isset($_POST['post'])){
    $name = $_POST['name'];
    $slug = slugify($name);
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $filename = $_FILES['photo']['name'];
    $tempname = $_FILES['photo']['tmp_name'];   
        $folder = '../images/'.$filename;

    
        
            $ext = (new SplFileInfo($path))->getExtension();
            $new_filename = $slug.'.'.$ext;
            move_uploaded_file($tempname, $folder);	
        

        try{
            $sql = ("INSERT INTO products (product_name, description, slug, price, photo) VALUES ('$name', '$description', '$slug', '$price', '$filename')");
            $result = mysqli_query($conn, $sql);
            
            if($result)
                {
                    $_SESSION['status'] = "Added";
                    header('Location: marketplace.php');
                }

        }
        catch(PDOException $e){
            $_SESSION['error'] = $e->getMessage();
        }
    }

?>
<!--Insert Modal -->
<div class="modal fade" id="postproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Post a Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>
                <form action="post_product.php" method="POST">
                    <div class="modal-body">
                            <input type="hidden" name="farmer_id" value="<?php echo $_SESSION['farmer_id'] ?>">
                        
                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Product Name</label> 
                                        <input class="form-control input-sm" id="name" name="name"
                                        placeholder="Product Name" type="text">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="category">Category</label> 
                                        <select class="form-control input-sm" id="category" name="category">
                                            <option value="Crops">
                                            Crops
                                            </option>
                                            <option value="Livestock">
                                            Livestock
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <label for="price">Price</label> 
                                        <input class="form-control input-sm" id="price" name="price"
                                        placeholder="" type="text">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="photo">Photo</label> 
                                        <input class="form-control input-md" id="photo" name="photo"
                                        placeholder="" type="file">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col">
                                    <div class="form-group">
                                        <label for="description">Description</label> 
                                        <textarea id="description" name="description" rows="7" cols="53" required></textarea>
                                    </div>
                                </div>

                            </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-primary" name="post"><i class="fa fa-save"></i> Save</button>
                    </div>
                </form>
    </div>                                 
    </div>
    </div>