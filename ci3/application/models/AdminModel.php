<?php
class AdminModel extends CI_Model{
    
    public function get_products(){
       
        $query = $this->db->get("codeigniter_register");
        return $query->result();
    }
     public function update_admin($id) 
    {
        $data=array(
            'is_email_verified' => $this->input->post("rol"),
           
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