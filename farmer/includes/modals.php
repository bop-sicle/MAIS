<!-- Add -->
<div class="modal fade" id="addproduct">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"><b>Add New Product</b></h4> 
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">               
              <span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <form class="form-horizontal center-align" method="POST" action="products_add.php" enctype="multipart/form-data">

            <div class="row">
                    
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Product Name</label> 
                        <input class="form-control input-sm" id="name" name="name"
                        placeholder="" type="text">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cat">Category</label> 
                        <select class="form-control input-sm" id="cat" name="cat">
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

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="price">Price</label> 
                        <input class="form-control input-md" id="price" name="price"
                        placeholder="" type="text">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="photo">Photo</label> 
                        <input class="" id="photo" name="photo"
                        placeholder="" type="file">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="desc">Description</label> 
                        <textarea id="desc" name="desc" rows="10" cols="50" required></textarea>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              
            </div>
            </form>
        </div>

            
        </div>
    </div>
</div>