<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Update extends CI_Controller {
	 /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('ProductsModel');         
   }
   public function index()
   {
       $products=new AdminModel;
       $data['data']=$products->get_products();
       $this->load->view('includes/header');       
       $this->load->view('products/list',$data);
       $this->load->view('includes/footer');
   }
     public function update($id)
   {
       $products=new ProductsModel;
       $products->update_product($id);
       redirect(base_url('products'));
   }



}