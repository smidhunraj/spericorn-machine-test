<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminupdate extends CI_Controller {
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
   public function index()
   {
       $Admindata=new AdminModel;
       $data['data']=$Admindata->get_products();
       $this->load->view('includes/header');       
       $this->load->view('products/adminedit',$data);
       $this->load->view('includes/footer');
   }
     public function update($id)
   {
         $Admindata=new AdminModel;
       $Admindata->update_admin($id);
       redirect(base_url('adminupdate'));
   }
   
}