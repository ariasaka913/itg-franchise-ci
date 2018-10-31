<?php
class Iven extends CI_Controller{
   function __construct(){
        parent::__construct();
        $this->load->model('queri');
   }

    function index(){
    	$this->load->view('index');
    }
    function login(){
    	$id_user=$this->input->post('id_user',true);
        $paswod=$this->input->post('paswod',true);
        $q=$this->queri->e_login($id_user,$paswod);
        if($q->num_rows() > 0){
            $akses=array('id_user'=>$id_user,'status'=>'login');
            $this->session->set_userdata($akses);
            redirect('even');
        }else{
            redirect('iven/gagal');
        }
    }
    function gagal(){
        redirect(base_url('iven'));
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('iven');
  }
  
}