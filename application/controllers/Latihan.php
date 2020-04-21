<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Latihan extends CI_Controller{
    public function __construct(){ 
    parent :: __construct();
    $this->load->model('M_latihan');   
        
    }
    function index(){
        $data['title']="Sudarma";
        $data['content']='beranda';
        $data['sidebar']='sidebar';
        $this->load->view('template',$data);
    }
    function berita(){
        $data['title']="berita";
        $data['meta']='ini adalah detail berita';
        $data['content']='detail_berita';
        $data['sidebar']='sidebar';
        $this->load->view('template',$data);
    }
    function berita_populer1(){
        $data['title']="berita populer";
        $data['meta']='ini adalah berita populer 1';
        $data['content']='berita1';
        $data['sidebar']='sidebar';
        $this->load->view('template',$data);
    }
    function berita_populer2($page=0){
        $data['title']="Tabel Penjualan";
        $data['meta']="Pengungsi Wamena Minta Menko Polhukam Bantu Proses Evakuasi";
        $config['total_rows']=$this->M_latihan->get_num_rows('tb_penjualan');
        $config['per_page']=10;
        $config['base_url']=site_url('Latihan/berita_populer2');
        $data['data_penjualan']=$this->M_latihan->jointabel($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['content']='berita2';
        $data['sidebar']='sidebar';
        $this->load->view('template',$data);
    }
    function daftar_berita(){
        $data['title']="Tabel Sales";
        $data['meta']='ini adalah berita populer 2';
        $data['content']='daftarberita';
        $data['sidebar']='sidebar';
        $data['data_sales']=$this->M_latihan->get_tb_sales();
        $this->load->view('template',$data);
    }
    function berita_populer3(){
        $data['title']="Tabel kategoribarang";
        $data['meta']='ini adalah berita populer 3';
        $data['content']='berita3';
        $data['sidebar']='sidebar';
        $data['data_kategoribarang']=$this->M_latihan->get_tb_kategoribarang();
        $this->load->view('template',$data);
    }
    
}
?>

