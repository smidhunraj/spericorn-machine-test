<?php


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('AdminModel');         
   }


public function create(){
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['title'] = 'Create a new Student';
    $this->form_validation->set_rules('naam', 'Naam', 'required');
    $this->form_validation->set_rules('voornaam', 'Voornaam', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');
    if ($this->form_validation->run() === FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('students/create');
        $this->load->view('templates/footer');
    }else{
        // Upload the files then pass data to your model
        $config['upload_path'] = '/file_path/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')){
            // If the upload fails
            echo $this->upload->display_errors('<p>', '</p>');
        }else{
            // Pass the full path and post data to the set_newstudent model
            $this->student_model->set_newstudent($this->upload->data('full_path'),$this->input->post());
            $this->load->view('students/success');
        }
    }
}
?>