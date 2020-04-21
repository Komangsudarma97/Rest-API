<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
    function __construct()
    { 
    parent :: __construct();
    $this->load->model('M_penjualan');
    
    }
    function daftar_produk($page=0){
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-left"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $data['title']="Latihan Tabel";
        $data['meta']="ini adalah produk untuk Latihan HTML";
        $config['total_rows']=$this->M_penjualan->num_rows();
        $config['per_page']=3;
        $config['base_url']=site_url('admin/daftar_produk');
        $data['daftar_produk']=$this->M_penjualan->daftar_produk1($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='tabel_produk';
        $this->load->view('template_admin',$data);
    }
    function register(){
        $data['title']="Register";
        $data['meta']="Ini adalah produk untuk Latihan HTML";
        $data['content']='registerproduk';
        $data['nama_kategori']=$this->M_penjualan->get_kategori();
        $this->load->view('template_admin',$data);
    }
    function update_register($id_berita){
         $data['title']="Register";
         $data['meta']="Ini adalah produk untuk Latihan HTML";
         $data['content']='registerproduk';
         $this->db->where('md5(id_produk)', $id_berita);
         $data['id_produk']=$this->db->get('tb_produk')->row_array();
         $data['nama_kategori']=$this->M_penjualan->get_kategori();
         $this->load->view('template_admin',$data);
    }
    function save_register(){
        if($_POST['id_produk']!=''){
            $this->M_penjualan->save_update_registerproduk($_POST);
        }else{
            $this->M_penjualan->save_register1($_POST);
        }
        redirect('admin/daftar_penjualan');
    }
    function delete(){
        
        $key = $this->uri->segment(3);
        $this->db->where('id_produk',$key);
        $query =$this->db->get('tb_produk');
        if($query->num_rows()>0)
        {
            $this->M_penjualan->delete_data($key);
        }
        redirect('admin/daftar_produk');
    }
    function daftar_login($page=0){
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-left"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $data['title']="Latihan Tabel";
        $data['meta']="ini adalah produk untuk Latihan HTML";
        $config['total_rows']=$this->M_penjualan->num_rows_login();
        $config['per_page']=5;
        $config['base_url']=site_url('admin/daftar_login');
        $data['daftar_login']=$this->M_penjualan->daftar_login($config['per_page'],$page);
        $data['content']='tabel_login';
        $this->load->view('template_admin',$data);
    }
    function register2(){
        $data['title']="Register";
        $data['meta']="Ini adalah produk untuk Latihan HTML";
        $data['content']='registerlogin';
        $this->load->view('template_admin',$data);
    }
    function update_registerlogin($id){
        $data['title']="Register";
        $data['meta']="Ini adalah produk untuk Latihan HTML";
        $data['content']='registerlogin';
        $this->db->where('md5(id_costomer)', $id);
        $data['id_cuostomer']=$this->db->get('tb_costomer')->row_array();
        $this->load->view('template_admin',$data);
   }
   function save_login(){
    if($_POST['id_costomer']!=''){
        $this->M_penjualan->save_update_login($_POST);
    }else{
        $this->M_penjualan->save_login($_POST);
    }
    redirect('admin/daftar_login');
}
function daftar_kategori($page=0){
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-left"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';
    $data['title']="Latihan Tabel";
    $data['meta']="ini adalah produk untuk Latihan HTML";
    $config['total_rows']=$this->M_penjualan->num_rows_kategori();
    $config['per_page']=5;
    $config['base_url']=site_url('admin/daftar_kategori');
    $data['daftar_kategori']=$this->M_penjualan->daftar_kategori($config['per_page'],$page);
    $data['content']='tabel_kategori';
    $this->load->view('template_admin',$data);
}
function register3(){
    $data['title']="Register";
    $data['meta']="Ini adalah produk untuk Latihan HTML";
    $data['content']='registerkategori';
    $this->load->view('template_admin',$data);
}
function update_registerkategori($id_kategori){
    $data['title']="Register";
    $data['meta']="Ini adalah produk untuk Latihan HTML";
    $data['content']='registerkategori';
    $this->db->where('md5(id_kategori)', $id_kategori);
    $data['id_kategori']=$this->db->get('tb_kategori')->row_array();
    $this->load->view('template_admin',$data);
}
function save_kategori(){
if($_POST['id_kategori']!=''){
    $this->M_penjualan->save_update_kategori($_POST);
}else{
    $this->M_penjualan->save_kategori($_POST);
}
redirect('admin/daftar_kategori');
}
function daftar_kota($page=0){
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-left"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';
    $data['title']="Latihan Tabel";
    $data['meta']="ini adalah produk untuk Latihan HTML";
    $config['total_rows']=$this->M_penjualan->num_rows_kota();
    $config['per_page']=5;
    $config['base_url']=site_url('admin/daftar_kategori');
    $data['daftar_kota']=$this->M_penjualan->daftar_kota($config['per_page'],$page);
    $data['content']='tabel_kota';
    $this->load->view('template_admin',$data);
}
function register4(){
    $data['title']="Register";
    $data['meta']="Ini adalah produk untuk Latihan HTML";
    $data['content']='registerkota';
    $this->load->view('template_admin',$data);
}
function update_registerkota($id_kota){
    $data['title']="Register";
    $data['meta']="Ini adalah produk untuk Latihan HTML";
    $data['content']='registerkota';
    $this->db->where('md5(id_kota)', $id_kota);
    $data['id_kota']=$this->db->get('tb_kota')->row_array();
    $this->load->view('template_admin',$data);
}
function save_kota(){
if($_POST['id_kota']!=''){
    $this->M_penjualan->save_update_kota($_POST);
}else{
    $this->M_penjualan->save_kota($_POST);
}
redirect('admin/daftar_kota');
}
    
    
}
?>