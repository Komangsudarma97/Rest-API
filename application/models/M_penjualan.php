<?php
class M_penjualan extends CI_Model{
    function daftar_produk1($limit,$page){
        $this->db->limit($limit,$page);
        $this->db->join('tb_kategori','tb_produk.id_kategori=tb_kategori.id_kategori');
        $data=$this->db->get('tb_produk')->result_array();
        return $data;
     }
    function num_rows(){
        $this->db->join('tb_kategori','tb_produk.id_kategori=tb_kategori.id_kategori');
        $data=$this->db->get('tb_produk')->num_rows();
        return $data;
    }
    function get_kategori(){
        $data=$this->db->get('tb_kategori')->result_array();
        return $data;
    }
    function delete_data($key){
        $this->db->where('id_produk',$key);
        $this->db->delete('tb_produk');
    }
    function save_register1($post){
        $konfigurasi=array(
            'allowed_types'=> 'jpg|jpeg|gif|png|bmp|doc',
            'upload_path'=> realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data=array(
            'id_produk'=>$post['id_produk'],
            'id_kategori'=>$post['id_kategori'],
            'nama_produk'=>$post['nama_produk'],
            'deskripsi'=>$post['deskripsi'],
            'harga'=>$post['harga'],
            'stok'=>$post['stok'],
            'gambar'=>$_FILES['gambar']['name'],
        );
        $this->db->insert('tb_produk',$data);
    }
    function save_update_registerproduk($post){
        $konfigurasi=array(
            'allowed_types'=> 'jpg|jpeg|gif|png|bmp|doc',
            'upload_path'=> realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data=array(
            'id_produk'=>$post['id_produk'],
            'id_kategori'=>$post['id_kategori'],
            'nama_produk'=>$post['nama_produk'],
            'deskripsi'=>$post['deskripsi'],
            'harga'=>$post['harga'],
            'stok'=>$post['stok'],
            'gambar'=>$_FILES['gambar']['name'],
        );
        $this->db->where('md5(id_produk)',$post['id_produk']);
        $this->db->update('tb_produk',$data);
    }
    function daftar_login($limit,$page){
        $this->db->limit($limit,$page);
        $data=$this->db->get('tb_costomer')->result_array();
        return $data;
     }
    function num_rows_login(){
        $data=$this->db->get('tb_costomer')->num_rows();
        return $data;
    }
    function save_login($post){
        $data=array(
            'nama_costomer'=>$post['nama_costomer'],
            'password'=>$post['password'],
            'alamat'=>$post['alamat'],
            'email'=>$post['email'],
            'no_telp'=>$post['no_telp'],
            'id_kota'=>$post['id_kota'],
        );
        $this->db->insert('tb_customer',$data);
    }
    function save_update_login($post){
        $data=array(
            'nama_costomer'=>$post['nama_costomer'],
            'password'=>$post['password'],
            'alamat'=>$post['alamat'],
            'email'=>$post['email'],
            'no_telp'=>$post['no_telp'],
            'id_kota'=>$post['id_kota'],
        );
        $this->db->where('md5(id_costomer)',$post['id_costomer']);
        $this->db->update('tb_costomer',$data);
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
            'nama_kategori'=>$post['nama_kategori'],
        );
        $this->db->insert('tb_kategori',$data);
    }
    function save_update_kategori($post){
        $data=array(
            'id_kategori'=>$post['id_kategori'],
            'nama_kategori'=>$post['nama_kategori'],
        );
        $this->db->where('md5(id_kategori)',$post['id_kategori']);
        $this->db->update('tb_kategori',$data);
    }
    function daftar_kota($limit,$page){
        $this->db->limit($limit,$page);
        $this->db->join('tb_kota','tb_costomer.id_kota=tb_kota.id_kota');
        $data=$this->db->get('tb_cotomer')->result_array();
        return $data;
     }
    function num_rows_kota(){
        $this->db->join('tb_kota','tb_costomer.id_kota=tb_kota.id_kota');
        $data=$this->db->get('tb_costomer')->num_rows();
        return $data;
    }
    function save_kota($post){
        $konfigurasi=array(
            'allowed_types'=> 'jpg|jpeg|gif|png|bmp|doc',
            'upload_path'=> realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data=array(
            'nama_kota'=>$post['nama_kota'],
            'ongkos_kirim'=>$post['ongkos_kirim'],
        );
        $this->db->insert('tb_kota',$data);
    }
    function save_update_kota($post){
        $konfigurasi=array(
            'allowed_types'=> 'jpg|jpeg|gif|png|bmp|doc',
            'upload_path'=> realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('gambar');
        $data=array(
            'nama_kota'=>$post['nama_kota'],
            'ongkos_kirim'=>$post['ongkos_kirim'],
        );
        $this->db->where('md5(id_kota)',$post['id_kota']);
        $this->db->update('tb_kota',$data);
    }
}?>