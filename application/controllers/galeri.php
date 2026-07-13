<?php 

class Galeri extends CI_Controller{

  	function __construct(){
    	parent::__construct();
    	$this->load->model('M_galeri');
      $this->load->model('M_surat');
  	}

  	function index(){
    	$this->template->load('template','aktivitas/galeri');
  	}

    function list_galeri(){
      $this->template->load('template','galeri/list_galeri');
    }

    function data_galeri(){
      $data = $this->M_galeri->data_galeri()->result_array();
      echo json_encode($data);
    }

    function data_galeri_atach(){
      $id   = $this->uri->segment(3);
      $data = $this->M_galeri->data_galeri_attach($id)->result_array();
      echo json_encode($data);
    }

  	function add_galeri(){
    	$this->template->load('template','galeri/add_galeri');
  	}

  	

  	function get_galeri(){
	    $id    = $this->uri->segment(3);
	    $data  = $this->M_galeri->get_galeri($id)->result_array();
	    echo json_encode($data);
  	}

    function add_galeri_foto(){

        // echo $dropzone;
        // die();
        $target_dir = "uploads/galeri/";
        $request    = 1;
        if(isset($_POST['request'])){
          $request  = $_POST['request'];
        }


        // Upload file
        if($request == 1){
          $nama_asli  = $_FILES["file"]["name"];
          $ext        = pathinfo($nama_asli, PATHINFO_EXTENSION);    
          $jns_file   = 'galeri_foto';
          $temp       = explode(".", $nama_asli);
          $rename     = md5($nama_asli.time()) . '.' . end($temp);
          $path       = 'uploads/galeri/'; // Upload directory
          $usrnms     = 'user';
          $usrdts     = date("Y-m-d");
          
          // die();
          $target_file = $target_dir . basename($rename);
          
          $msg = "";
            
                
              if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$rename)) {
                  $tmp['attachidatch'] = $this->M_galeri->kode_tmp(); 
                  $tmp['attachidsmbr'] = '0';
                  $tmp['attachjnfile'] = $jns_file;
                  $tmp['attachnmfile'] = $nama_asli;
                  $tmp['attachrename'] = $rename;
                  $tmp['attachpatths'] = $path;
                  $tmp['attachusrnms'] = $usrnms;
                  $tmp['attachusrdts'] = $usrdts;

                  $this->M_surat->simpan_tmp_file($tmp);
                    $msg = "Successfully uploaded";    
                  
              }else{
                    $msg = "Error while uploading";
              }
              echo $msg;

              }       
    }

  	function lihat_galeri(){

    	$id             = $this->uri->segment(3);
	    $data['galeri'] = $this->M_galeri->get_galeri($id)->row_array();
	    // $data['lampiran'] = $this->M_aktivitas->get_lampiran_aktivitas($id);
	    $this->template->load('template','galeri/lihat_galeri',$data);
  	}

  	function ubah_galeri(){

	    $id             = $this->uri->segment(3);
      $data['galeri'] = $this->M_galeri->get_galeri($id)->row_array();
	    // $data['lampiran'] = $this->M_surat->get_lampiran_surat_masuk($id);
	    $this->template->load('template','galeri/ubah_galeri',$data);
  	}

  	function hapus_galeri()
    {
        $id     = $this->uri->segment(3);
        $gambar = $this->M_galeri->get_galeri($id)->row_array();
        unlink($gambar['foto']);
        $this->M_galeri->hapus_galeri($id);
    }

    function hapus_galeri_dropzone()
    {
        $id     = $this->uri->segment(3);
        $gambar = $this->M_galeri->get_galeri_attach($id)->row_array();
        unlink($gambar['attachpatths'].$gambar['attachrename']);
        $this->M_galeri->hapus_galeri_attach($id);
    }


  function simpan(){
    	
    	$id_galeri			= $this->M_galeri->kode_galeri();
	    $jdl_galeri			= $this->input->post('judul');
	  	// $username 			= $this->session->userdata('id');
	  	$tgl 					  = date("Y-m-d");
      $usrnms         = 'user';

	  	$galeri['id_galeri']    = $id_galeri;
	  	$galeri['nm_galeri']    = $jdl_galeri;
	  	$galeri['user_id']      = $usrnms;
	  	$galeri['create_date']  = $tgl;

      $tmp_file = $this->M_galeri->get_tmp_galeri($usrnms)->result_array();
      // var_dump($tmp_file);
      // die();
      foreach ($tmp_file as $tmp ) {
        $rename                 = $tmp['attachRENAME'];
        $attach['attachidatch'] = $this->M_surat->kode_attach();
        $attach['attachidsmbr'] = $id_galeri;
        $attach['attachjnfile'] = $tmp['attachJNFILE'];
        $attach['attachnmfile'] = $tmp['attachNMFILE'];
        $attach['attachrename'] = $rename;
        $attach['attachpatths'] = $tmp['attachPATTHS'];
        $attach['attachusrnms'] = $usrnms;
        $attach['attachusrdts'] = $usrdts;

        $this->M_surat->simpan_attach($attach);
        $this->M_surat->hapus_tmp_file($rename,$usrnms);
      }
	  	$this->M_galeri->simpan_galeri($galeri);
	}

  function update(){
      
      $id_galeri      = $this->input->post('id');
      $jdl_galeri     = $this->input->post('judul');
      
      // $username      = $this->session->userdata('id');
      $tgl            = date("Y-m-d");
      $usrnms         = 'user';

      // $galeri['id_galeri']     = $id_galeri;
      $galeri['nm_galeri']     = $jdl_galeri;
      $galeri['user_id']       = $usrnms;
      $galeri['create_date']   = $tgl;

      $tmp_file = $this->M_galeri->get_tmp_galeri($usrnms)->result_array();
      // var_dump($tmp_file);
      // die();
      foreach ($tmp_file as $tmp ) {
        $rename                 = $tmp['attachRENAME'];
        $attach['attachIDATCH'] = $this->M_surat->kode_attach();
        $attach['attachIDSMBR'] = $id_galeri;
        $attach['attachJNFILE'] = $tmp['attachJNFILE'];
        $attach['attachNMFILE'] = $tmp['attachNMFILE'];
        $attach['attachRENAME'] = $rename;
        $attach['attachPATTHS'] = $tmp['attachPATTHS'];
        $attach['attachUSRNMS'] = $usrnms;
        $attach['attachUSRDTS'] = $usrdts;

        $this->M_surat->simpan_attach($attach);
        $this->M_surat->hapus_tmp_file($rename,$usrnms);
      }

      $this->M_galeri->update_galeri($id_galeri,$galeri);
  }

	private function set_upload_options(){
         $files = $_FILES['foto']['name'];

         $config = array();
         $config['upload_path']      = './uploads/galeri/';
         $config['allowed_types']    = 'gif|jpg|png';
         // $config['max_size']         = 50024;
         $config['file_name']        = $files;
         // $config['overwrite']        = FALSE;

         return $config;
    }

	function update_a(){
    	
    	$id_galeri			= $this->input->post('id_galeri');
	    $judul_galeri		= $this->input->post('judul_galeri');
      $gambar         = $this->input->post('gb_galeri');
	  	$username 			= $this->session->userdata('id');
	  	$tgl 					  = date("Y-m-d");

	  	// Foto 
          $files     = $_FILES['foto']['name'];
          $this->upload->initialize($this->set_upload_options());
          $this->upload->do_upload('foto');
          $upload    = $this->upload->data();
          $path      = 'uploads/galeri/';
          $nama_file = $files;

          // echo $path.$nama_file;
          // die();
        // Foto 
        if ($files == '') {
        	$gb = $gambar;
        }else{
          $sc_gambar = $this->M_galeri->get_galeri($id_galeri)->row_array();
          unlink($sc_gambar['foto']);
        	$gb = $path.$files;
        }

	  	$galeri['id_galeri']     = $id_galeri;
	  	$galeri['judul_galeri']  = $judul_galeri;
      $galeri['foto']          = $gb;
	  	$galeri['user_id']       = $username;
	  	$galeri['create_date']   = $tgl;



	  	$this->M_galeri->update_galeri($id_galeri,$galeri);
	  	redirect('galeri/list_galeri/');
	}

  function video(){
    $this->template->load('template','video/video');
  }

  function list_video(){
      $this->template->load('template','video/list_video');
    }

  function data_video(){
    $data = $this->M_galeri->data_video()->result_array();
    echo json_encode($data);
  }

  function add_video(){
    $this->template->load('template','video/add_video');
  }

  function simpan_video(){
      
      $id_video       = $this->M_galeri->kode_video();
      $deskripsi      = $this->input->post('deskripsi');
      $status         = 0;
      $username       = $this->session->userdata('id');
      $tgl            = date("Y-m-d");

      // Foto 
          $files     = $_FILES['video']['name'];
          $this->upload->initialize($this->set_upload_video());
          $this->upload->do_upload('video');
          $upload    = $this->upload->data();
          $path      = 'uploads/video/';
          $temp      = explode(".", $files);
          $rename    = md5($nama_asli.time()) . '.' . end($temp);
          $nama_file = $files;

          // var_dump($upload);
          // die();
        // Foto 

      $video['IDVIDEO'] = $id_video;
      $video['LINKVID'] = $path.$rename;
      $video['DTVIDEO'] = $deskripsi;
      $video['STATUS']  = $status;
      $video['USRNMS']  = $username;
      $video['USRDTS']  = $tgl;

      $this->M_galeri->simpan_video($video);

      redirect('galeri/list_video/');
  }

  function update_video(){
      
      $id_video       = $this->input->post('id_video');
      $deskripsi      = $this->input->post('deskripsi');
      $status         = $this->input->post('status');
      $video_upload   = $this->input->post('video_upload');
      $username       = $this->session->userdata('id');
      $tgl            = date("Y-m-d");

      // Foto 
          $files     = $_FILES['video']['name'];
          $path      = 'uploads/video/';
          $temp      = explode(".", $files);
          $rename    = 'video_web' . '.' . end($temp);
          $nama_file = $files;

          // var_dump($upload);
          // die();
        // Foto 

        if ($files == '') {
          $v = $video_upload;
        }else{
          $sc_video = $this->M_galeri->get_video($id_video)->row_array();
          // echo $sc_video['LINKVID'];
          // die();
          unlink($sc_video['LINKVID']);
          $this->upload->initialize($this->set_upload_video());
          $this->upload->do_upload('video');
          $upload    = $this->upload->data();
          $v = $path.$rename;
        }

      $data['IDVIDEO'] = $id_video;
      $data['LINKVID'] = $v;
      $data['DTVIDEO'] = $deskripsi;
      $data['STATUS']  = $status;
      $data['USRNMS']  = $username;
      $data['USRDTS']  = $tgl;

      // var_dump($data);
      // echo $id_video;
      // die();

      $this->M_galeri->update_video($id_video,$data);

      redirect('galeri/list_video/');
  }

  private function set_upload_video(){
         $files = $_FILES['video']['name'];

         $config = array();
         $config['upload_path']      = './uploads/video/';
         $config['allowed_types']    = 'mp4|wmv|mkv';
         // $config['max_size']         = 50024;
         // $config['file_name']        = $files;
         $config['file_name']        = 'video_web';
         $config['overwrite']        = FALSE;

         return $config;
    }

  function get_video(){
      $id    = $this->uri->segment(3);
      $data  = $this->M_galeri->get_video($id)->result_array();
      echo json_encode($data);
    }

  function hapus_video()
    {
        $id     = $this->uri->segment(3);
        // $gambar = $this->M_galeri->get_video($id)->row_array();
        // unlink($gambar['foto']);
        $this->M_galeri->hapus_video($id);
    }
  	

}
