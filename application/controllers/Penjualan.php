<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Penjualan extends CI_Controller{   
	function __construct(){     
	parent::__construct();     
	}   
	
     function index(){      
	$result=$this->db->get('penjualan')->result();      
	echo json_encode($result);  
	}  
     
     function save(){
 	$data=array(         
	  'nama'=>$_POST['nama'],         
	  'keterangan'=>$_POST['keterangan'],         
      'jumlah'=>$_POST['jumlah'],         
	  'tanggal'=>$_POST['tanggal']       
	);       
	$this->db->insert('penjualan',$data);  
	}   
	
     function save_update(){   
	$data=array(     
	  'nama'=>$_POST['nama'],     
	  'keterangan'=>$_POST['keterangan'],     
      'jumlah'=>$_POST['jumlah'],     
	  'tanggal'=>$_POST['tanggal']   
	);   
	$this->db->where('id',$_POST['id'])->update('penjualan',$data); 
     } 

     function delete($id){  
	$this->db->where('id',$id)->delete('penjualan'); 
     }
     }
 