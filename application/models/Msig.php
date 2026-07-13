<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msig extends CI_Model{

    public function select_provinsi(){

        $this->db->select("prov as text");
        $this->db->from("peta_desa");
        $this->db->where('prov !=', '');
        $this->db->group_by("prov");
      $query=$this->db->get();
        if ($query->num_rows() > 0) {
            // $bb = array('id' =>0,'text'=>'Pilih KPH' );
            $aa = $query->result_array();
            // array_push($aa, $bb);
            // array_unshift($aa , $bb);
            return $aa;
        }
    }

    public function select_kabupaten($ab){

        $this->db->select("kab as text");
        $this->db->from("peta_desa");
        $this->db->where('kab !=', '');
        if (isset($ab)) {
            $this->db->where('prov', $ab);
        }
        $this->db->group_by("kab");
      $query=$this->db->get();
        if ($query->num_rows() > 0) {
            // $bb = array('id' =>0,'text'=>'Pilih KPH' );
            $aa = $query->result_array();
            // array_push($aa, $bb);
            // array_unshift($aa , $bb);
            return $aa;
        }
    }

    public function select_kecamatan($ab){

        $this->db->select("kec as text");
        $this->db->from("peta_desa");
        $this->db->where('kec !=', '');
        if (isset($ab)) {
            $this->db->where('kab', $ab);
        }
        $this->db->group_by("kec");
      $query=$this->db->get();
        if ($query->num_rows() > 0) {
            // $bb = array('id' =>0,'text'=>'Pilih KPH' );
            $aa = $query->result_array();
            // array_push($aa, $bb);
            // array_unshift($aa , $bb);
            return $aa;
        }
    }

    public function select_desa($ab){

        $this->db->select("des as text");
        $this->db->from("peta_desa");
        $this->db->where('des !=', '');
        if (isset($ab)) {
            $this->db->where('kec', $ab);
        }
        $this->db->group_by("des");
      $query=$this->db->get();
        if ($query->num_rows() > 0) {
            // $bb = array('id' =>0,'text'=>'Pilih KPH' );
            $aa = $query->result_array();
            // array_push($aa, $bb);
            // array_unshift($aa , $bb);
            return $aa;
        }
    }

	public function GetData($table){
        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }

    public function GetWhere($table, $data){
        $res=$this->db->get_where($table, $data);
        return $res->result_array();
    }

    public function Insert($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
 
    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }
 
    public function Delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }

    public function LastID($table){
        $res = $this->db->query("select max (id) last_id from $table");
        return $res->result_array();
    }

    public function GetDataKTLimit($limit, $start){
        $query = $this->db->query("select *
                                    from arsip
                                    order by id limit $limit offset $start");
        return $query->result();
    }

    public function GetDataPOKTLimit($limit, $start){
        $query = $this->db->query("select *
                                    from arsip_pokt
                                    order by id limit $limit offset $start");
        return $query->result();
    }
}
?>