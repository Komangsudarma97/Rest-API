<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Uts extends CI_Controller{
    public function __construct(){ 
    parent :: __construct();
    $this->load->model('template_berita');
    
    }
    function daftar_berita($page=0){
        $data['title']="Latihan Tabel";
        $data['meta']="ini adalah produk untuk Latihan HTML";
        $config['total_rows']=$this->M_latihan->num_rows();
        $config['per_page']=1;
        $config['base_url']=site_url('uts/daftar_berita');
        $data['daftar_berita1']=$this->M_latihan->get_daftar_berita1($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='table 2';
        $data['sidebar']='sidebar';
        $this->load->view('template_berita',$data);
    }
    function register(){
        $data['title']="Register";
        $data['meta']="Ini adalah produk untuk Latihan HTML";
        $data['content']='register2';
        $data['sidebar']='sidebar';
        $data['nama_kategori']=$this->M_latihan->get_kategori();
        $this->load->view('template_berita',$data);
        }
    function save_register(){
        $this->M_latihan->save_register($_POST);
        redirect('uts/daftar_berita');
    }
}
?>