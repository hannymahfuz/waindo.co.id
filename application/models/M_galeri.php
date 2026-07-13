<?php 

class M_galeri extends CI_Model{	

	function kode_galeri()
    {
        $this->db->select('id_galeri');
        $this->db->order_by('id_galeri','DESC');
        $this->db->limit(1);
        $query = $this->db->get('galeri');      //cek dulu apakah ada sudah ada kode di tabel.
        if($query->num_rows() <> 0){
           //jika kode ternyata sudah ada.
           $data = $query->row();
           $kode = intval($data->id_galeri) + 1;

        }else{
            //jika kode belum ada
            $kode = 1;
        }
            return $kode;
    }

    function kode_tmp()
    {
        $this->db->select('attachIDATCH');
        $this->db->order_by('attachIDATCH','DESC');
        $this->db->limit(1);
        $query = $this->db->get('tmp_file');      //cek dulu apakah ada sudah ada kode di tabel.
        if($query->num_rows() <> 0){
           //jika kode ternyata sudah ada.
           $data = $query->row();
           $kode = intval($data->attachIDATCH) + 1;

        }else{
            //jika kode belum ada
            $kode = 1;
        }
		return $kode;
    }

    function data_galeri()
	{
		$this->db->select('*');
		$this->db->from('galeri');
		$this->db->order_by('id_galeri', 'ASC');
        $query = $this->db->get();
        return $query;
	}

	function get_galeri_4()
	{
//         $query = $this->db->query("SELECT g.id_galeri,g.nm_galeri, a.attachpatths, a.attachrename FROM galeri g JOIN attach a ON 
// g.id_galeri = a.attachidsmbr
// WHERE a.attachjnfile ='galeri_foto' ORDER BY a.attachidatch ASC LIMIT 1");
		$query = $this->db->query("SELECT g.id_galeri,g.nm_galeri, a.attachpatths, a.attachnmfile ,a.attachidatch,a.attachpatths, a.attachrename
FROM galeri g JOIN attach a ON 
g.id_galeri = a.attachidsmbr
WHERE a.attachjnfile ='galeri_foto'");
        return $query;
	}

	function get_galeri($id)
	{
		$this->db->select('*');
		$this->db->where('id_galeri',$id);
        $query = $this->db->get('galeri');
        return $query;
	}

	function get_galeri_attach($id)
	{
		$this->db->select('*');
		$this->db->where('attachIDATCH',$id);
        $query = $this->db->get('attach');
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

	function hapus_galeri($id)
	{
		$this->db->where('id_galeri',$id);
        $query = $this->db->delete('galeri');
        return $query;
	}

	function hapus_galeri_attach($id)
	{
		$this->db->where('attachidatch',$id);
        $query = $this->db->delete('attach');
        return $query;
	}

	function hapus_tmp_file($rename,$usrnms)
	{
		$this->db->where('attachRENAME',$rename);
		$this->db->where('attachUSRNMS',$usrnms);
        $query = $this->db->delete('tmp_file');
        return $query;
	}

	function get_tmp_galeri($usrnms)
	{
		$this->db->select('*');
		$this->db->where('attachUSRNMS',$usrnms);
		$this->db->where('attachJNFILE','galeri_foto');
        $query = $this->db->get('tmp_file');
        return $query;
	}

	function data_galeri_attach($id)
	{
		$this->db->select('*');
		$this->db->where('attachidsmbr',$id);
		$this->db->where('attachjnfile','galeri_foto');
        $query = $this->db->get('attach');
        return $query;
	}

    function simpan_galeri($galeri)
	{
		$this->db->insert('galeri',$galeri);
	}

	function update_galeri($id_galeri,$galeri)
	{
		$this->db->where('id_galeri',$id_galeri);
		$this->db->update('galeri',$galeri);
	}

	function simpan_attach($attach)
	{
		$this->db->insert('attach',$attach);
	}

	function simpan_tmp_file($tmp)
	{
		$this->db->insert('tmp_file',$tmp);
	}

	function kode_video()
    {
        $this->db->select('IDVIDEO');
        $this->db->order_by('IDVIDEO','DESC');
        $this->db->limit(1);
        $query = $this->db->get('video');      //cek dulu apakah ada sudah ada kode di tabel.
        if($query->num_rows() <> 0){
           //jika kode ternyata sudah ada.
           $data = $query->row();
           $kode = intval($data->IDVIDEO) + 1;

        }else{
            //jika kode belum ada
            $kode = 1;
        }
            return $kode;
    }

	function simpan_video($video)
	{
		$this->db->insert('video',$video);
	}

	function data_video()
	{
		$this->db->select('*');
		$this->db->from('video');
		$this->db->order_by('IDVIDEO', 'ASC');
        $query = $this->db->get();
        return $query;
	}

	function get_video($id)
	{
		$this->db->select('*');
		$this->db->where('IDVIDEO',$id);
        $query = $this->db->get('video');
        return $query;
	}

	function update_video($id_video,$video)
	{

		$this->db->where('IDVIDEO',$id_video);
		$this->db->update('video',$video);
	}

	function hapus_video($id)
	{
		$this->db->where('IDVIDEO',$id);
        $query = $this->db->delete('video');
        return $query;
	}
}