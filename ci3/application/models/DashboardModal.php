<?php
class DashboardModal extends CI_Model{
    
    public function get_products(){
      /*  if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("codeigniter_register");
        return $query->result();*/

   $id=$this->session->userdata('id');
$row = $this->db->get_where('codeigniter_register', array('id' => $id))->row();
   return $row;


    }
    public function insert_product()
    {    
        $data = array(
            'name' => $this->input->post('title'),
            'email' => $this->input->post('description')
        );
        return $this->db->insert('codeigniter_register', $data);
    }
    public function update_product($id) 
    {
        $data=array(
            'name' => $this->input->post('title'),
            'email'=> $this->input->post('description'),
             'address'=> $this->input->post('address')
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