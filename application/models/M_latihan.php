<?php
class M_latihan extends CI_Model{
    function get_tb_sales(){
        $data=$this->db->get('tb_sales')->result();
        return $data;
    }
    function get_tb_kategoribarang(){
        $data=$this->db->get('tb_kategoribarang')->result();
        return $data;
    }
    function get_tb_penjualan($limit,$page){
        $this->db->limit($limit,$page);
        $data=$this->db->get('tb_penjualan')->result();
        return $data;
    }
    function get_num_rows($tb_penjualan){
        $data=$this->db->get($tb_penjualan)->num_rows();
        return $data;
    }
    function jointabel($limit,$page){
        $this->db->join('tb_sales', 'tb_sales.kode_sales = tb_penjualan.kode_sales');
        $this->db->join('tb_detilpenjualan', 'tb_detilpenjualan.kode_penjualan = tb_penjualan.kode_penjualan');
        $this->db->join('tb_barang', 'tb_barang.kode_barang = tb_detilpenjualan.kode_barang');
        $this->db->from('tb_penjualan');
        $this->db->limit($limit,$page);
        $query = $this->db->get();
        return $query->result();
     }
    function get_daftar_berita1($limit,$page){
        $this->db->order_by('id_berita','desc');
        $this->db->limit($limit,$page);
        $this->db->join('tb_kategori','tb_beritautama.id_kategori=tb_kategori.id_kategori');
        $data=$this->db->get('tb_beritautama')->result_array();
        return $data; 
    }
    function num_rows(){
        $this->db->join('tb_kategori','tb_beritautama.id_kategori=tb_kategori.id_kategori');
        $data=$this->db->get('tb_beritautama')->num_rows();
        return $data;
    }
    function get_kategori(){
        $data=$this->db->get('tb_kategori')->result_array();
        return $data;
    }
    function save_register($post){
        $data=array(
            'id_kategori'=>$post['nama_kategori'],
            'judul'=>$post['judul'],
            'penulis'=>$post['penulis'],
            'create_date'=>$post['create_date']
        );
        $this->db->insert('tb_beritautama',$data);
    }
    function get_penjualan($limit,$page){
        $this->db->limit($limit,$page);
        $this->db->join('customer','customer.kode_customer=penjualan.kode_customer');
        $this->db->join('barang','barang.kode_barang=penjualan.kode_barang');
        $data=$this->db->get('penjualan')->result_array();
        return $data; 
    }
    function get_penjualan2(){
        $this->db->join('customer','customer.kode_customer=penjualan.kode_customer');
        $this->db->join('barang','barang.kode_barang=penjualan.kode_barang');
        $data=$this->db->get('penjualan')->num_rows();
        return $data; 
    }
    function save_penjualan($post){
        $data=array(
            'nofaktur'=>$post['nofaktur'],
            'tanggal'=>$post['tanggal'],
            'kode_customer'=>$post['kode customer'],
            'kode_barang'=>$post['nama barang'],
            'jumlah'=>$post['jumlah'],
            'jenis_bayar'=>$post['jenis bayar'],
        );
        $this->db->insert('penjualan',$data);
    }
}    
?>