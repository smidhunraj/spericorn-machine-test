<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginDashboard extends CI_Controller {
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('DashboardModal'); 

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
   public function index()
   {
       $dashboard=new DashboardModal;
       $data['data']=$dashboard->get_products();
       $this->load->view('includes/header1');       
       $this->load->view('dashboard/list',$data);
       echo '<br /><br /><br /><h1 align="center">Welcome User</h1>';
  echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a></p>';
?>
  <?php echo form_open_multipart('LoginDashboard/upload');?>
  <?php echo "<input type='file' name='profile_pic' size='20' />"; ?>
  <?php echo "<input type='submit' name='submit' value='upload' /> ";?>
  <?php echo "</form>";?>
<?php
   }
  
   public function create()
   {
      $this->load->view('includes/header');
      $this->load->view('dashboard/create');
      $this->load->view('includes/footer');      
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $products=new DashboardModal;;
       $products->insert_product();
       redirect(base_url('LoginDashboard'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $product = $this->db->get_where('codeigniter_register', array('id' => $id))->row();
       $this->load->view('includes/header');
       $this->load->view('dashboard/edit',array('product'=>$product));
       $this->load->view('includes/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
       $products=new DashboardModal;;
       $products->update_product($id);
       redirect(base_url('LoginDashboard'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('codeigniter_register');
       redirect(base_url('codeigniter_register'));
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

 public function upload() 
  {      
      $config['upload_path'] = 'upload';//realpath(APPPATH . '/upload');
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
$data = array('path' => $this->upload->data());
   var_dump($data);   
            /*$data = array('path' => $this->upload->data());

 $this->db->where('id',9);*/
 echo "Session ID is".$this->session->userdata('id');
 $this->ImageModel->insert_images($data["path"]["file_name"]);
           /// return $this->db->update('codeigniter_register',$data);
            //$this->load->view('imageupload_success', $data);
        }

        redirect(base_url('LoginDashboard'));
    }



}
?>