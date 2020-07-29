<div class="row">
    <div class="col-lg-12">           
        </div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Name</th>
          <th>Email</th>
      <th>Password</th>
      
       <th>Address</th>
        <th>Email Verification Status</th>
          <th>Enable or Disable Email Address</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $d->name; ?></td>
          <td><?php echo $d->email; ?></td>   
          <td><?php echo $d->password; ?></td>
          
          <td><?php echo $d->address; ?></td>
          <td><?php echo $d->is_email_verified; ?></td>

               
      <td>
        <form method="post" action="<?php echo base_url('adminupdate/update/'.$d->id);?>">
        
         <select name="rol"  class="form_input">
      <option value="yes">Yes </option>
      <option value="no">No</option>
      
    </select>
          <button type="submit" class="btn btn-danger btn-xs">Submit the Value</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>