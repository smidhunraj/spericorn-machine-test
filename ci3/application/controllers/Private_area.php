<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  if(!$this->session->userdata('id'))
  {
   redirect('login');
  }
   $this->load->helper('url', 'form'); 
  $this->load->library('form_validation');
  $this->load->library('form_validation');
       $this->load->library('upload');
       $this->load->model('ImageModel'); 
       $this->load->library('session'); 
 }



 function logout()
 {
  $data = $this->session->all_userdata();
  foreach($data as $row => $rows_value)
  {
   $this->session->unset_userdata($row);
  }
  redirect('login');
 }


  
  function index()
 
    {
  echo '<br /><br /><br /><h1 align="center">Welcome User</h1>';
  echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a></p>';
    $this->load->view('imageupload_form');
  }
  public function upload() 
  {
        $config['upload_path'] = realpath(APPPATH . '../upload');
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 20000;
        $config['max_width'] = 15000;
        $config['max_height'] = 15000;

        $this->load->library('upload', $config);
$this->upload->initialize($config);
        if (!$this->upload->do_upload('profile_pic')) 
    {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('imageupload_form', $error);
        } 
    else 
    {
            /*$data = array('path' => $this->upload->data());
var_dump($data);
 $this->db->where('id',9);*/
 echo "Session ID is".$this->session->userdata('id');
 $this->ImageModel->insert_images($this->upload->data());
           /// return $this->db->update('codeigniter_register',$data);
            //$this->load->view('imageupload_success', $data);
        }
    }

}
?>
