<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hitung extends CI_Controller{
    function __construct(){ 
    parent :: __construct();
        
    }
    function index(){
        $data['title']="Sudarma";
        $data['content']='hitung_luas';
        $data['sidebar']='sidebar';
        $this->load->view('template',$data);
    }
    function luas_bangun_datar($data=NULL){
        $data['title']="Sudarma";
        $data['meta']="ini adalah hitung luas persegi";
        $data['content']='hitung_luas';
        $data['sidebar']='sidebar';
        $this->load->view('template',$data);
    }
    function save_luas(){
        if ($_POST['bangunruang']=='persegi'){;
            $hasil=$_POST['panjang']*$_POST['lebar'];
    }else{
        $hasil=$_POST['panjang']*$_POST['lebar']/2;
    }
        $data=$_POST;
        $data['hasil']=$hasil;
        $this->luas_bangun_datar($data);
    }
    
}
?>