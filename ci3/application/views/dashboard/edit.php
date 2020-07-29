<form method="post" action="<?php echo base_url('LoginDashboard/update/'.$product->id);?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Title</label>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" value="<?php echo               $product->name; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control"><?php echo $product->email; ?></textarea>
                </div>
            </div>
        </div>
          <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Address</label>
                <div class="col-md-9">
                    <textarea name="address" class="form-control"><?php echo $product->address; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn">
        </div>
    </div>
    
</form>