<?php
class ImageModel extends CI_Model{
    
    function insert_images($image_data ){
      $data = array(
      
          'path' => 'http://localhost/ci3/upload/'.$image_data,
      );
      $id=$this->session->userdata('id');
      
     $this->db->where('id',$id);
            return $this->db->update('codeigniter_register',$data);

            redirect(base_url('LoginDashboard'));
}
}
?>