
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ImageModal extends CI_Model {

 public function insert_data($id , $path_name) 
    {
        $data=array(
            'path' => 'http://localhost/ci3/upload/'.$path_name,
            
        );
        if($id==0){
            return $this->db->insert('codeigniter_register',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('codeigniter_register',$data);
        }  
    }
}
?>