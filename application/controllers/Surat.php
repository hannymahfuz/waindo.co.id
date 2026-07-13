<?php 

class Surat extends CI_Controller{

  	function __construct(){
    	parent::__construct();
    	$this->load->model('M_surat');
  	}

  	function index(){
    	$this->template->load('template','surat/surat');
  	}

  	function list_surat_masuk(){
    
    	$this->template->load('template','surat/list_surat_masuk');
 	}

  	function add_surat_masuk(){
    
    	$this->template->load('template','surat/add_surat_masuk');
  	}

  	function list_surat_keluar(){
    
    	$this->template->load('template','surat/list_surat_keluar');
 	}

  	function add_surat_keluar(){
    	
    	$data['surat_masuk'] = $this->M_surat->data_surat_masuk_admin()->result_array();
    	$this->template->load('template','surat/add_surat_keluar',$data);
  	}

  	function lihat_surat_masuk(){

    	$id = $this->uri->segment(3);
	    $data['surat_masuk'] = $this->M_surat->get_surat_masuk($id)->row_array();
	    $data['lampiran'] = $this->M_surat->get_lampiran_surat_masuk($id);
	    $data['disposisi'] = $this->M_surat->get_pengguna()->result_array();
	    $this->template->load('template','surat/lihat_surat_masuk',$data);
  	}

  	function lihat_notifikasi(){

    	$id = $this->uri->segment(3);
        $status 	= array('srtmskSTATUS' => '1');
        $this->M_surat->update_status($id,$status);

	    $data['surat_masuk'] = $this->M_surat->get_surat_masuk($id)->row_array();
	    $data['lampiran'] = $this->M_surat->get_lampiran_surat_masuk($id);
	    $data['disposisi'] = $this->M_surat->get_pengguna()->result_array();
	    $this->template->load('template','surat/lihat_surat_masuk',$data);
  	}

  	function lihat_surat_keluar(){

    	$id = $this->uri->segment(3);
	    $data['surat_keluar'] = $this->M_surat->get_surat_keluar($id)->row_array();
	    $data['lampiran'] = $this->M_surat->get_lampiran_surat_keluar($id);
	    $this->template->load('template','surat/lihat_surat_keluar',$data);
  	}

  	function ubah_surat_masuk(){

	    $id = $this->uri->segment(3);
	    $data['surat_masuk'] = $this->M_surat->get_surat_masuk($id)->row_array();
	    $data['lampiran'] = $this->M_surat->get_lampiran_surat_masuk($id);
	    $this->template->load('template','surat/ubah_surat_masuk',$data);
  	}

  	function ubah_surat_keluar(){

	    $id = $this->uri->segment(3);
	    $data['surat_keluar'] = $this->M_surat->get_surat_keluar($id)->row_array();
	    $data['surat_masuk'] = $this->M_surat->data_surat_masuk($id)->result_array();
	    $data['lampiran'] = $this->M_surat->get_lampiran_surat_keluar($id);
	    $this->template->load('template','surat/ubah_surat_keluar',$data);
  	}

  	function data_surat_masuk(){
    	if ($this->session->userdata('subdit')=='1') {
    		$data = $this->M_surat->data_surat_masuk_admin()->result_array();
    	}else{
    		$id = $this->session->userdata('id');
    		$data = $this->M_surat->data_surat_masuk($id)->result_array();	
    	}
	    
	    echo json_encode($data);
  	}

  	function data_surat_keluar(){
    
	    $data = $this->M_surat->data_surat_keluar()->result_array();
	    echo json_encode($data);
  	}

  	function get_surat_masuk(){
	    $id = $this->uri->segment(3);
	    $data = $this->M_surat->get_surat_masuk($id)->result_array();
	    echo json_encode($data);
  	}

  	function get_surat_keluar(){
	    $id = $this->uri->segment(3);
	    $data = $this->M_surat->get_surat_keluar($id)->result_array();
	    echo json_encode($data);
  	}

  	function dwld_surat_masuk(){
        $id = $this->uri->segment(3);
        $lampiran = $this->M_surat->getDownload($id);
        foreach ($lampiran->result_array() as $key) {
            $path = trim($key['attachPATTHS']);
            $nama = trim($key['attachRENAME']);
            $nama_asli = $key['attachNMFILE'];
        }
        $this->load->helper('download');

        force_download($nama_asli,file_get_contents($path.$nama));
    }

    function dwld_surat_keluar(){
        $id = $this->uri->segment(3);
        $lampiran = $this->M_surat->getDownload($id);
        foreach ($lampiran->result_array() as $key) {
            $path = trim($key['attachpatths']);
            $nama = trim($key['attachrename']);
            $nama_asli = $key['attachnmfile'];
        }
        $this->load->helper('download');

        force_download($nama_asli,file_get_contents($path.$nama));
    }

  	function simpan_surat_masuk(){
    
	    $id_surat		= $this->M_surat->kode_surat_masuk();
	  	$no_surat		= $this->input->post('no_surat');
	  	$pengirim		= $this->input->post('pengirim');
	  	$perihal		= $this->input->post('perihal');
	  	$judul_surat	= $this->input->post('judul_surat');
	  	$tgl_surat		= $this->input->post('tgl_surat');
	  	$tgl_masuk		= $this->input->post('tgl_masuk');
	  	$status			= '0';
	  	$posisi			= '0';
	  	$usrnms			= 'user';
	  	$usrdts			= date("Y-m-d");

	  	$surat_masuk['srtmskIDSRTM'] = $id_surat;
	  	$surat_masuk['srtmskNOSRTM'] = $no_surat;
	  	$surat_masuk['srtmskPNGRIM'] = $pengirim;
	  	$surat_masuk['srtmskPRIHAL'] = $perihal;
	  	$surat_masuk['srtmskJDLSRT'] = $judul_surat;
	  	$surat_masuk['srtmskTGLSRT'] = $tgl_surat;
	  	$surat_masuk['srtmskTGLMSK'] = $tgl_masuk;
	  	$surat_masuk['srtmskSTATUS'] = $status;
	  	$surat_masuk['srtmskPOSISI'] = $posisi;
	  	$surat_masuk['srtmskUSRNMS'] = $usrnms;
	  	$surat_masuk['srtmskUSRDTS'] = $usrdts;

	  	$tmp_file = $this->M_surat->get_tmp_surat_masuk($usrnms)->result_array();
	  	// var_dump($tmp_file);
	  	// die();
	  	foreach ($tmp_file as $tmp ) {
	  		$rename 				= $tmp['attachRENAME'];
	  		$attach['attachIDATCH']	= $this->M_surat->kode_attach();
	   		$attach['attachIDSMBR']	= $id_surat;
	   		$attach['attachJNFILE']	= $tmp['attachJNFILE'];
	   		$attach['attachNMFILE']	= $tmp['attachNMFILE'];
	   		$attach['attachRENAME']	= $rename;
	   		$attach['attachPATTHS']	= $tmp['attachPATTHS'];
	   		$attach['attachUSRNMS']	= $usrnms;
	   		$attach['attachUSRDTS']	= $usrdts;

	   		$this->M_surat->simpan_attach($attach);
	   		$this->M_surat->hapus_tmp_file($rename,$usrnms);
	  	}

  		$this->M_surat->simpan_surat_masuk($surat_masuk);
  	}

  	function simpan_surat_keluar(){
    
	    $id_surat		= $this->M_surat->kode_surat_keluar();
	  	$no_surat		= $this->input->post('no_surat');
	  	$tujuan			= $this->input->post('tujuan');
	  	$perihal		= $this->input->post('perihal');
	  	$jns_surat		= $this->input->post('jns_surat');
	  	$surat_masuk	= $this->input->post('surat_masuk');
	  	$judul_surat	= $this->input->post('judul_surat');
	  	$tgl_surat		= $this->input->post('tgl_surat');
	  	$status			= '0';
	  	$usrnms			= 'user';
	  	$usrdts			= date("Y-m-d");

	  	$surat_keluar['srtklrIDSRTK'] = $id_surat;
	  	$surat_keluar['srtklrNOSRTK'] = $no_surat;
	  	$surat_keluar['srtklrTUJUAN'] = $tujuan;
	  	$surat_keluar['srtklrPRIHAL'] = $perihal;
	  	$surat_keluar['srtklrJNSSRT'] = $jns_surat;
	  	$surat_keluar['srtklrIDSRTM'] = $surat_masuk;
	  	$surat_keluar['srtklrJDLSRT'] = $judul_surat;
	  	$surat_keluar['srtklrTGLSRT'] = $tgl_surat;
	  	$surat_keluar['srtklrSTATUS'] = $status;
	  	$surat_keluar['srtklrUSRNMS'] = $usrnms;
	  	$surat_keluar['srtklrUSRDTS'] = $usrdts;

	  	$tmp_file = $this->M_surat->get_tmp_surat_keluar($usrnms)->result_array();
	  	// var_dump($tmp_file);
	  	// die();
	  	foreach ($tmp_file as $tmp ) {
	  		$rename 				= $tmp['attachRENAME'];
	  		$attach['attachIDATCH']	= $this->M_surat->kode_attach();
	   		$attach['attachIDSMBR']	= $id_surat;
	   		$attach['attachJNFILE']	= $tmp['attachJNFILE'];
	   		$attach['attachNMFILE']	= $tmp['attachNMFILE'];
	   		$attach['attachRENAME']	= $rename;
	   		$attach['attachPATTHS']	= $tmp['attachPATTHS'];
	   		$attach['attachUSRNMS']	= $usrnms;
	   		$attach['attachUSRDTS']	= $usrdts;

	   		$this->M_surat->simpan_attach($attach);
	   		$this->M_surat->hapus_tmp_file($rename,$usrnms);
	  	}

  		$this->M_surat->simpan_surat_keluar($surat_keluar);
  	}

  	function update_surat_masuk(){
    
	    $id_surat		= $this->input->post('id_surat');
	  	$no_surat		= $this->input->post('no_surat');
	  	$pengirim		= $this->input->post('pengirim');
	  	$perihal		= $this->input->post('perihal');
	  	$judul_surat	= $this->input->post('judul_surat');
	  	$tgl_surat		= $this->input->post('tgl_surat');
	  	$tgl_masuk		= $this->input->post('tgl_masuk');
	  	$status			= '0';
	  	$posisi			= '0';
	  	$usrnms			= 'user';
	  	$usrdts			= date("Y-m-d");

	  	$surat_masuk['srtmskIDSRTM'] = $id_surat;
	  	$surat_masuk['srtmskNOSRTM'] = $no_surat;
	  	$surat_masuk['srtmskPNGRIM'] = $pengirim;
	  	$surat_masuk['srtmskPRIHAL'] = $perihal;
	  	$surat_masuk['srtmskJDLSRT'] = $judul_surat;
	  	$surat_masuk['srtmskTGLSRT'] = $tgl_surat;
	  	$surat_masuk['srtmskTGLMSK'] = $tgl_masuk;
	  	$surat_masuk['srtmskSTATUS'] = $status;
	  	$surat_masuk['srtmskPOSISI'] = $posisi;
	  	$surat_masuk['srtmskUSRNMS'] = $usrnms;
	  	$surat_masuk['srtmskUSRDTS'] = $usrdts;

	  	$tmp_file = $this->M_surat->get_tmp_surat_masuk($usrnms)->result_array();
	  	foreach ($tmp_file as $tmp ) {
	  		$attach['attachIDATCH']	= $this->M_surat->kode_attach();
	   		$attach['attachIDSMBR']	= $id_surat;
	   		$attach['attachJNFILE']	= $tmp['attachJNFILE'];
	   		$attach['attachNMFILE']	= $tmp['attachNMFILE'];
	   		$attach['attachRENAME']	= $tmp['attachRENAME'];
	   		$attach['attachPATTHS']	= $tmp['attachPATTHS'];
	   		$attach['attachUSRNMS']	= $usrnms;
	   		$attach['attachUSRDTS']	= $usrdts;

	   		$this->M_surat->simpan_attach($attach);
	   		$this->M_surat->hapus_tmp_file($rename,$usrnms);
	  	}

  		$this->M_surat->update_surat_masuk($id_surat,$surat_masuk);

  	}

  	function update_surat_keluar(){
    
	    $id_surat		= $this->input->post('id_surat');
	  	$no_surat		= $this->input->post('no_surat');
	  	$tujuan			= $this->input->post('tujuan');
	  	$perihal		= $this->input->post('perihal');
	  	$jns_surat		= $this->input->post('jns_surat');
	  	$surat_masuk	= $this->input->post('surat_masuk');
	  	$judul_surat	= $this->input->post('judul_surat');
	  	$tgl_surat		= $this->input->post('tgl_surat');
	  	$status			= '0';
	  	$usrnms			= 'user';
	  	$usrdts			= date("Y-m-d");

	  	$surat_keluar['srtklrIDSRTK'] = $id_surat;
	  	$surat_keluar['srtklrNOSRTK'] = $no_surat;
	  	$surat_keluar['srtklrTUJUAN'] = $tujuan;
	  	$surat_keluar['srtklrPRIHAL'] = $perihal;
	  	$surat_keluar['srtklrJNSSRT'] = $jns_surat;
	  	$surat_keluar['srtklrIDSRTM'] = $surat_masuk;
	  	$surat_keluar['srtklrJDLSRT'] = $judul_surat;
	  	$surat_keluar['srtklrTGLSRT'] = $tgl_surat;
	  	$surat_keluar['srtklrSTATUS'] = $status;
	  	$surat_keluar['srtklrUSRNMS'] = $usrnms;
	  	$surat_keluar['srtklrUSRDTS'] = $usrdts;

	  	$tmp_file = $this->M_surat->get_tmp_surat_keluar($usrnms)->result_array();
	  	// var_dump($tmp_file);
	  	// die();
	  	foreach ($tmp_file as $tmp ) {
	  		$rename 				= $tmp['attachRENAME'];
	  		$attach['attachIDATCH']	= $this->M_surat->kode_attach();
	   		$attach['attachIDSMBR']	= $id_surat;
	   		$attach['attachJNFILE']	= $tmp['attachJNFILE'];
	   		$attach['attachNMFILE']	= $tmp['attachNMFILE'];
	   		$attach['attachRENAME']	= $rename;
	   		$attach['attachPATTHS']	= $tmp['attachPATTHS'];
	   		$attach['attachUSRNMS']	= $usrnms;
	   		$attach['attachUSRDTS']	= $usrdts;

	   		$this->M_surat->simpan_attach($attach);
	   		$this->M_surat->hapus_tmp_file($rename,$usrnms);
	  	}

  		$this->M_surat->update_surat_keluar($id_surat,$surat_keluar);
  	}

  	function hapus_surat_masuk()
    {
        $id = $this->uri->segment(3);
        $this->M_surat->hapus_surat_masuk($id);
    }

    function disposisi_surat_masuk()
    {
    	$id 		= $this->input->post('id');
        $dispo 		= $this->input->post('disposisi');
        $disposisi 	= array('srtmskPOSISI' => $dispo);
        $this->M_surat->disposisi_surat_masuk($id,$disposisi);
    }

  	function add_lampiran (){

        // echo $dropzone;
        // die();
        $target_dir = "uploads/surat_masuk/";
        $request = 1;
        if(isset($_POST['request'])){
          $request = $_POST['request'];
        }


        // Upload file
        if($request == 1){
          $nama_asli 	= $_FILES["file"]["name"];
          $ext 			= pathinfo($nama_asli, PATHINFO_EXTENSION);    
          $jns_file   	= 'surat_masuk';
          $temp      	= explode(".", $nama_asli);
          $rename    	= md5($nama_asli.time()) . '.' . end($temp);
          $path     	= 'uploads/surat_masuk/'; // Upload directory
          $usrnms 		= 'user';
          $usrdts 		= date("Y-m-d");
          
          // die();
          $target_file = $target_dir . basename($rename);
          
          $msg = "";
            
                
              if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$rename)) {
               		$tmp['attachIDATCH'] = $this->M_surat->kode_attach();	
               		$tmp['attachIDSMBR'] = '0';
               		$tmp['attachJNFILE'] = $jns_file;
               		$tmp['attachNMFILE'] = $nama_asli;
               		$tmp['attachRENAME'] = $rename;
               		$tmp['attachPATTHS'] = $path;
               		$tmp['attachUSRNMS'] = $usrnms;
               		$tmp['attachUSRDTS'] = $usrdts;

               		$this->M_surat->simpan_tmp_file($tmp);
                  	$msg = "Successfully uploaded";    
                  
              }else{
                  	$msg = "Error while uploading";
              }
              		echo $msg;

              }
            
    }

    function add_lampiran_sk(){

        // echo $dropzone;
        // die();
        $target_dir = "uploads/surat_keluar/";
        $request = 1;
        if(isset($_POST['request'])){
          $request = $_POST['request'];
        }


        // Upload file
        if($request == 1){
          $nama_asli 	= $_FILES["file"]["name"];
          $ext 			= pathinfo($nama_asli, PATHINFO_EXTENSION);    
          $jns_file   	= 'surat_keluar';
          $temp      	= explode(".", $nama_asli);
          $rename    	= md5($nama_asli.time()) . '.' . end($temp);
          $path     	= 'uploads/surat_keluar/'; // Upload directory
          $usrnms 		= 'user';
          $usrdts 		= date("Y-m-d");
          
          // die();
          $target_file = $target_dir . basename($rename);
          
          $msg = "";
            
                
              if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$rename)) {
               		$tmp['attachIDATCH'] = $this->M_surat->kode_attach();	
               		$tmp['attachIDSMBR'] = '0';
               		$tmp['attachJNFILE'] = $jns_file;
               		$tmp['attachNMFILE'] = $nama_asli;
               		$tmp['attachRENAME'] = $rename;
               		$tmp['attachPATTHS'] = $path;
               		$tmp['attachUSRNMS'] = $usrnms;
               		$tmp['attachUSRDTS'] = $usrdts;

               		$this->M_surat->simpan_tmp_file($tmp);
                  	$msg = "Successfully uploaded";    
                  
              }else{
                  	$msg = "Error while uploading";
              }
              echo $msg;

              }       
    }


}
