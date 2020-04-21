<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tugas extends CI_Controller{
    function __construct(){
        parent :: __construct();
    }
    function index(){
        echo 'Sudarma Puja Yasa';
    }
    function tampil_tanggal(){
           
        echo '17 Februari 2000';
    }
    function beranda(){
        $data['title']='ini beranda';
        $data['nama']='Sudarma Puja Yasa';
        $data['nim']='1805021020';
        $this->load->view('template2',$data);
    }
}
?>