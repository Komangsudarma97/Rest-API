<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Penjualanbarang extends CI_Controller{
    public function __construct(){ 
    parent :: __construct();
    $this->load->model('M_latihan');
    
    }
    function index(){
        $this->load->view('registerpenjualan');
    }
    function aksi(){
        $this->form_validation->set_rules('nofaktur','NoFaktur','required');
        $this->form_validation->set_rules('tanggal','Tanggal','required');
        $this->form_validation->set_rules('kode_customer','Kode Customer','required');
        $this->form_validation->set_rules('kode_barang','Kode Barang','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required');
        $this->form_validation->set_rules('jenis_bayar','Jenis Bayar','required');

        if ($this->form_validation->run() != false){
        }else{
            $this->load->view('registerpenjualan');
        }
    }
    function daftar_penjualan($page=0){
        $data['title']="Latihan Tabel";
        $data['meta']="ini adalah produk untuk Latihan HTML";
        $config['total_rows']=$this->M_latihan->get_penjualan2();
        $config['per_page']=1;
        $config['base_url']=site_url('penjualanbarang/daftar_penjualan');
        $data['daftar_penjualan']=$this->M_latihan->get_penjualan($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='jualbarang';
        $data['sidebar']='sidebar';
        $this->load->view('template',$data);
    }
    function register(){
        $data['title']="Register";
        $data['meta']="Ini adalah produk untuk Latihan HTML";
        $data['content']='registerpenjualan';
        $data['sidebar']='sidebar';
        $data['kode_customer']=$this->M_latihan->get_penjualan2();
        $this->load->view('template',$data);
        }
    function save_register(){
        $this->M_latihan->save_penjualan($_POST);
        redirect('penjualanbarang/daftar_penjualan');
    }
}
?>