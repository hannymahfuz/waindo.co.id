<?php 

class M_aktivitas extends CI_Model{	

	function kode_aktivitas()
    {
        $this->db->select('IDAKTV');
        $this->db->order_by('IDAKTV','DESC');
        $this->db->limit(1);
        $query = $this->db->get('aktivitas');      //cek dulu apakah ada sudah ada kode di tabel.
        if($query->num_rows() <> 0){
           //jika kode ternyata sudah ada.
           $data = $query->row();
           $kode = intval($data->IDAKTV) + 1;

        }else{
            //jika kode belum ada
            $kode = 1;
        }
            return $kode;
    }
    function data_aktivitas()
	{
		$this->db->select('*');
		$this->db->from('aktivitas');
		$this->db->order_by('IDAKTV', 'ASC');
        $query = $this->db->get();
        return $query;
	}

	function data_aktivitas_limit($limit)
	{
		$this->db->select('*');
		$this->db->order_by('IDAKTV', 'DESC');
        $query = $this->db->get('aktivitas',$limit);
        return $query;
	}

	function get_aktivitas($id)
	{
		$this->db->select('*');
		$this->db->from('aktivitas');
		$this->db->join('attach','aktivitas.IDAKTV = attach.attachIDSMBR','left');
		$this->db->where('IDAKTV',$id);
        $query = $this->db->get('');
        return $query;
	}

	function get_lampiran_aktivitas($id)
	{
		$this->db->select('*');
		$this->db->where('attachIDSMBR',$id);
		$this->db->where('attachJNFILE','aktivitas');
        $query = $this->db->get('attach');
        return $query;
	}

	function getDownload($id)
    {
        $this->db->select('*');
        $this->db->from('attach');
        $this->db->where('attachRENAME',$id);
        // $this->db->where('attachJNFILE','aktivitas');
        $tampil = $this->db->get();
        return $tampil;
    }

	function get_tmp_aktivitas($usrnms)
	{
		$this->db->select('*');
		$this->db->where('attachUSRNMS',$usrnms);
		$this->db->where('attachJNFILE','aktivitas');
        $query = $this->db->get('tmp_file');
        return $query;
	}

	function get_pengguna()
	{
		$this->db->select('*');
		$this->db->where('id !=', 0);
        $query = $this->db->get('pengguna');
        return $query;
	}

	function hapus_aktivitas($id)
	{
		$this->db->where('IDAKTV',$id);
        $query = $this->db->delete('aktivitas');
        return $query;
	}

	function hapus_tmp_file($rename,$usrnms)
	{
		$this->db->where('attachRENAME',$rename);
		$this->db->where('attachUSRNMS',$usrnms);
        $query = $this->db->delete('tmp_file');
        return $query;
	}

    function simpan_aktivitas($aktivitas)
	{
		$this->db->insert('aktivitas',$aktivitas);
	}

	function update_aktivitas($id_aktivitas,$aktivitas)
	{
		$this->db->where('IDAKTV',$id_aktivitas);
		$this->db->update('aktivitas',$aktivitas);
	}

	function simpan_attach($attach)
	{
		$this->db->insert('attach',$attach);
	}

	function simpan_tmp_file($tmp)
	{
		$this->db->insert('tmp_file',$tmp);
	}

	function get_lampiran($id)
	{
		$this->db->select('*');
		$this->db->where('attachIDSMBR',$id);
		$this->db->where('attachJNFILE','aktivitas');
        $query = $this->db->get('attach');
        return $query;
	}
}