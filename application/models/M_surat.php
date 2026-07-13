<?php 

class M_surat extends CI_Model{	

	function kode_surat_masuk()
    {
        $this->db->select('srtmskIDSRTM');
        $this->db->order_by('srtmskIDSRTM','DESC');
        $this->db->limit(1);
        $query = $this->db->get('surat_masuk');      //cek dulu apakah ada sudah ada kode di tabel.
        if($query->num_rows() <> 0){
           //jika kode ternyata sudah ada.
           $data = $query->row();
           $kode = intval($data->srtmskIDSRTM) + 1;

        }else{
            //jika kode belum ada
            $kode = 1;
        }
            return $kode;
    }

    function kode_surat_keluar()
    {
        $this->db->select('srtklrIDSRTK');
        $this->db->order_by('srtklrIDSRTK','DESC');
        $this->db->limit(1);
        $query = $this->db->get('surat_keluar');      //cek dulu apakah ada sudah ada kode di tabel.
        if($query->num_rows() <> 0){
           //jika kode ternyata sudah ada.
           $data = $query->row();
           $kode = intval($data->srtklrIDSRTK) + 1;

        }else{
            //jika kode belum ada
            $kode = 1;
        }
            return $kode;
    }

    function kode_attach()
    {
        $this->db->select('attachidatch');
        $this->db->order_by('attachidatch','DESC');
        $this->db->limit(1);
        $query = $this->db->get('attach');      //cek dulu apakah ada sudah ada kode di tabel.
        if($query->num_rows() <> 0){
           //jika kode ternyata sudah ada.
           $data = $query->row();
           $kode = intval($data->attachidatch) + 1;

        }else{
            //jika kode belum ada
            $kode = '1';
        }
            return $kode;
    }

    function data_surat_masuk($id)
	{
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->join('pengguna', 'pengguna.id = surat_masuk.srtmskPOSISI', 'left');
		$this->db->where('srtmskPOSISI',$id);
		$this->db->order_by('srtmskIDSRTM', 'ASC');
        $query = $this->db->get();
        return $query;
	}

	function data_surat_masuk_admin()
	{
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->join('pengguna', 'pengguna.id = surat_masuk.srtmskPOSISI', 'left');
		$this->db->order_by('srtmskIDSRTM', 'ASC');
        $query = $this->db->get();
        return $query;
	}

	function data_surat_keluar()
	{
		$this->db->select('*');
		$this->db->order_by('srtklrIDSRTK', 'ASC');
        $query = $this->db->get('surat_keluar');
        return $query;
	}

	function get_surat_masuk($id)
	{
		$this->db->select('*');
		$this->db->where('srtmskIDSRTM',$id);
        $query = $this->db->get('surat_masuk');
        return $query;
	}

	function get_surat_keluar($id)
	{
		$this->db->select('*');
		$this->db->from('surat_keluar');
		$this->db->join('surat_masuk', 'surat_masuk.srtmskIDSRTM = surat_keluar.srtklrIDSRTM', 'left');
		$this->db->where('srtklrIDSRTK',$id);
        $query = $this->db->get();
        return $query;
	}

	function get_lampiran_surat_masuk($id)
	{
		$this->db->select('*');
		$this->db->where('attachIDSMBR',$id);
		$this->db->where('attachJNFILE','surat_masuk');
        $query = $this->db->get('attach');
        return $query;
	}

	function get_lampiran_surat_keluar($id)
	{
		$this->db->select('*');
		$this->db->where('attachIDSMBR',$id);
		$this->db->where('attachJNFILE','surat_keluar');
        $query = $this->db->get('attach');
        return $query;
	}

	function getDownload($id)
    {
        $this->db->select('*');
        $this->db->from('attach');
        $this->db->where('attachrename',$id);
        // $this->db->where('attachJNFILE','surat_masuk');
        $tampil = $this->db->get();
        return $tampil;
    }

	function get_tmp_surat_masuk($usrnms)
	{
		$this->db->select('*');
		$this->db->where('attachUSRNMS',$usrnms);
		$this->db->where('attachJNFILE','surat_masuk');
        $query = $this->db->get('tmp_file');
        return $query;
	}

	function get_tmp_surat_keluar($usrnms)
	{
		$this->db->select('*');
		$this->db->where('attachUSRNMS',$usrnms);
		$this->db->where('attachJNFILE','surat_keluar');
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

	function hapus_surat_masuk($id)
	{
		$this->db->where('srtmskIDSRTM',$id);
        $query = $this->db->delete('surat_masuk');
        return $query;
	}

	function disposisi_surat_masuk($id,$disposisi)
	{
		$this->db->where('srtmskIDSRTM',$id);
        $this->db->update('surat_masuk',$disposisi);
	}

	function update_status($id,$status)
	{
		$this->db->where('srtmskIDSRTM',$id);
        $this->db->update('surat_masuk',$status);
	}

	function hapus_tmp_file($rename,$usrnms)
	{
		$this->db->where('attachRENAME',$rename);
		$this->db->where('attachUSRNMS',$usrnms);
        $query = $this->db->delete('tmp_file');
        return $query;
	}

    function simpan_surat_masuk($surat_masuk)
	{
		$this->db->insert('surat_masuk',$surat_masuk);
	}

	function simpan_surat_keluar($surat_keluar)
	{
		$this->db->insert('surat_keluar',$surat_keluar);
	}

	function update_surat_masuk($id_surat,$surat_masuk)
	{
		$this->db->where('srtmskIDSRTM',$id_surat);
		$this->db->update('surat_masuk',$surat_masuk);
	}

	function update_surat_keluar($id_surat,$surat_keluar)
	{
		$this->db->where('srtklrIDSRTK',$id_surat);
		$this->db->update('surat_keluar',$surat_keluar);
	}

	function simpan_attach($attach)
	{
		$this->db->insert('attach',$attach);
	}

	function simpan_tmp_file($tmp)
	{
		$this->db->insert('tmp_file',$tmp);
	}
}