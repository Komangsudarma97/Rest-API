<?php
class M_berita extends CI_Model{
    function daftar_berita1($limit,$page){
        $this->db->limit($limit,$page);
        $this->db->join('tb_kategori','tb_berita.id_kategori=tb_kategori.id_kategori');
        $data=$this->db->get('tb_berita')->result_array();
        return $data;
     }
    function num_rows(){
        $this->db->join('tb_kategori','tb_berita.id_kategori=tb_kategori.id_kategori');
        $data=$this->db->get('tb_berita')->num_rows();
        return $data;
    }
    function get_kategori(){
        $data=$this->db->get('tb_kategori')->result_array();
        return $data;
    }
    function save_register($post){
        $konfigurasi=array(
            'allowed_types'=> 'jpg|jpeg|gif|png|bmp|doc',
            'upload_path'=> realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data=array(
            'judul'=>$post['judul'],
            'id_kategori'=>$post['id_kategori'],
            'tgl_posting'=>$post['tgl_posting'],
            'id_admin'=>$post['id_admin'],
            'status'=>$post['status'],
            'isi_berita'=>$post['isi_berita'],
            'gambar'=>$_FILES['gambar']['name'],
        );
        $this->db->insert('tb_berita',$data);
    }
    function save_update_registerberita($post){
        $konfigurasi=array(
            'allowed_types'=> 'jpg|jpeg|gif|png|bmp|doc',
            'upload_path'=> realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data=array(
            'judul'=>$post['judul'],
            'id_kategori'=>$post['id_kategori'],
            'tgl_posting'=>$post['tgl_posting'],
            'id_admin'=>$post['id_admin'],
            'status'=>$post['status'],
            'isi_berita'=>$post['isi_berita'],
            'gambar'=>$_FILES['gambar']['name'],
        );
        $this->db->where('md5(id_berita)',$post['id_berita']);
        $this->db->update('tb_berita',$data);
    }
    function daftar_login($limit,$page){
        $this->db->limit($limit,$page);
        $data=$this->db->get('tb_user')->result_array();
        return $data;
     }
    function num_rows_login(){
        $data=$this->db->get('tb_user')->num_rows();
        return $data;
    }
    function save_login($post){
        $data=array(
            'username'=>$post['username'],
            'password'=>$post['password'],
            'email'=>$post['email'],
        );
        $this->db->insert('tb_user',$data);
    }
    function save_update_login($post){
        $data=array(
            'username'=>$post['username'],
            'password'=>$post['password'],
            'email'=>$post['email'],
        );
        $this->db->where('md5(id)',$post['id']);
        $this->db->update('tb_user',$data);
    }
    function daftar_kategori($limit,$page){
        $this->db->limit($limit,$page);
        $data=$this->db->get('tb_kategori')->result_array();
        return $data;
     }
    function num_rows_kategori(){
        $data=$this->db->get('tb_kategori')->num_rows();
        return $data;
    }
    function save_kategori($post){
        $data=array(
            'kategori'=>$post['kategori'],
        );
        $this->db->insert('tb_kategori',$data);
    }
    function save_update_kategori($post){
        $data=array(
            'kategori'=>$post['kategori'],
        );
        $this->db->where('md5(id_kategori)',$post['id_kategori']);
        $this->db->update('tb_kategori',$data);
    }
    function konten2($limit,$page){
        $this->db->limit($limit,$page);
        $this->db->join('tb_kategori','tb_berita.id_kategori=tb_kategori.id_kategori');
        $data=$this->db->get('tb_berita')->result_array();
        return $data;
     }
    function num_rows2(){
        $this->db->join('tb_kategori','tb_berita.id_kategori=tb_kategori.id_kategori');
        $data=$this->db->get('tb_berita')->num_rows();
        return $data;
    }
    function get_kategori2(){
        $data=$this->db->get('tb_kategori')->result_array();
        return $data;
    }
    function save_register2($post){
        $konfigurasi=array(
            'allowed_types'=> 'jpg|jpeg|gif|png|bmp|doc',
            'upload_path'=> realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data=array(
            'judul'=>$post['judul'],
            'id_kategori'=>$post['id_kategori'],
            'tgl_posting'=>$post['tgl_posting'],
            'id_admin'=>$post['id_admin'],
            'status'=>$post['status'],
            'isi_berita'=>$post['isi_berita'],
        );
        $this->db->insert('tb_berita',$data);
    }
    function konten3($limit,$page){
        $this->db->limit($limit,$page);
        $this->db->join('tb_kategori','tb_berita.id_kategori=tb_kategori.id_kategori');
        $data=$this->db->get('tb_berita')->result_array();
        return $data;
     }
    function num_rows3(){
        $this->db->join('tb_kategori','tb_berita.id_kategori=tb_kategori.id_kategori');
        $data=$this->db->get('tb_berita')->num_rows();
        return $data;
    }
    function get_kategori3(){
        $data=$this->db->get('tb_kategori')->result_array();
        return $data;
    }
    function save_register3($post){
        $konfigurasi=array(
            'allowed_types'=> 'jpg|jpeg|gif|png|bmp|doc',
            'upload_path'=> realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data=array(
            'judul'=>$post['judul'],
            'id_kategori'=>$post['id_kategori'],
            'tgl_posting'=>$post['tgl_posting'],
            'id_admin'=>$post['id_admin'],
            'status'=>$post['status'],
            'isi_berita'=>$post['isi_berita'],
            'gambar'=>$_FILES['gambar']['name'],
        );
        $this->db->insert('tb_berita',$data);
    }
    function login ($username,$password,$email){
        $this->db->select('username,password','email');
        $this->db->from('tb_user');
        $this->db->where('email', $email);
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $this->db->limit(1);
      
        $query = $this->db->get();
        if ($query->num_rows()==1) {
         return $query->result();
        } else{
         return false;
        }
       }
}?>