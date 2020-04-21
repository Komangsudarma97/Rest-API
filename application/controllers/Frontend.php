<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend extends CI_Controller{
    public function __construct(){ 
        parent :: __construct();
        $this->load->model('M_berita');
        
        }
    function beranda(){
        $this->load->view('template_frontend');
    }
    public function login()
    {
     $this->form_validation->set_rules('email','Email','trim|required');
     $this->form_validation->set_rules('username','Username','trim|required');
     $this->form_validation->set_rules('password','Password','trim|required|callback_basisdata_cek');
     if ($this->form_validation->run()==false) {
      $this->load->view('login');
     } else{
      redirect(base_url('Frontend/beranda'),'refresh');
     }
    }
    function basisdata_cek($password){
        $username = $this->input->post('username');
        $result = $this->login->login($username, $password,$email);
        if ($result) {
         $sess_array = array();
         foreach ($result as $row) {
          $sess_array = $arrayName = array('id' => $row->id, 'username' => $row->username);
          $this->session->set_userdata('logged_in', $sess_array);
         }
         return true; 
        } else{
         $this->form_validation->set_message('basisdata_cek','Invalid Username or Password');
         return false;
        }

    function konten1($page=0){
        $data['title']="Latihan Tabel";
        $data['meta']="ini adalah produk untuk Latihan HTML";
        $config['total_rows']=$this->M_berita->num_rows2();
        $config['per_page']=2;
        $config['base_url']=site_url('frontend/konten1');
        $data['konten1']=$this->M_berita->konten2($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='Kontenberita';
        $this->load->view('konten',$data);
    }
    function register2(){
        $data['title']="Register";
        $data['meta']="Ini adalah produk untuk Latihan HTML";
        $data['content']='registerberita';
        $data['kategori']=$this->M_berita->get_kategori2();
        $this->load->view('konten',$data);
        }
    function save_register1(){
        $this->M_berita->save_register2($_POST);
        redirect('frontend/konten1');
    }
    function konten2($page=0){
        $data['title']="Latihan Tabel";
        $data['meta']="ini adalah produk untuk Latihan HTML";
        $config['total_rows']=$this->M_berita->num_rows3();
        $config['per_page']=2;
        $config['base_url']=site_url('frontend/konten2');
        $data['konten2']=$this->M_berita->konten3($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='Kontenberita2';
        $this->load->view('konten2',$data);
    }
    function register3(){
        $data['title']="Register";
        $data['meta']="Ini adalah produk untuk Latihan HTML";
        $data['content']='registerkonten2';
        $data['kategori']=$this->M_berita->get_kategori3();
        $this->load->view('konten2',$data);
        }
    function save_register2(){
        $this->M_berita->save_register3($_POST);
        redirect('frontend/konten2');
    }
}
}