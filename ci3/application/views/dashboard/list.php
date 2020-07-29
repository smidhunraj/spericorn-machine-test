
<div class="row">
    <div class="col-lg-12">           
        <h2>User Details          
            <div class="pull-right">
              
            </div>
        </h2>
     </div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Name</th>
          <th>Email</th>
        
          <th>Address</th>
            <th>Profile Pic</th>
      <th>Action</th>
      </tr>
  </thead>
  <tbody>
      
      <tr>
          <td><?php echo $data->name; ?></td>
          <td><?php echo $data->email; ?></td>
            <td><?php echo $data->address; ?></td>
          <td><img src="<?php echo $data->path; ?>" width="100px" height="100px"></img></td>          
      <td>
        <form method="DELETE" action="#">
         <a class="btn btn-info btn-xs" href="<?php echo base_url('LoginDashboard/edit/'.$data->id) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
          <button type="submit" class="btn btn-danger btn-xs"></button>
        </form>
      </td>     
      </tr>
    
  </tbody>
</table>
</div>