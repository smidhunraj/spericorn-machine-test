<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
  $this->load->library('form_validation');
  $this->load->library('encryption');
  $this->load->model('register_model');

 }

 function index()
 {
  $this->load->view('register');
 }

 function validation()
 {
  $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[codeigniter_register.email]');
  $this->form_validation->set_rules('user_password', 'Password', 'required');

  $this->form_validation->set_rules('user_address', 'Address', 'required');
  if($this->form_validation->run())
  {
   $verification_key = md5(rand());

   $encrypted_password =$this->input->post('user_password');
   $data = array(
    'name'  => $this->input->post('user_name'),
    'email'  => $this->input->post('user_email'),
    'password' => $encrypted_password,
    'verification_key' => $verification_key,
    'address' =>$this->input->post('user_address')
   );
   $id = $this->register_model->insert($data);

   if($id > 0)
   {

echo "<h1>Your data has been successfully inserted into database.Ask system admin to activate it</h1>";
 echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a></p>';
   }

  }
 else
  {
   $this->index();
  }
   
 }



}

?>
