<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct(){

     parent::__construct();

     // Load model
     $this->load->model('Main_model');
  }

  public function users(){

    // get data from model
    $data = $this->Main_model->getUsers();
   

  }

}