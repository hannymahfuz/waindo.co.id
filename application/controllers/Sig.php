<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sig extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('Msig');
		// jika belum login redirect ke login
        //if ($this->session->userdata('logged')<>1) {
        //    redirect(site_url('auth'));
        //}
    }

	public function index(){
	    $this->kt();
	}

	public function maps(){
	    $this->load->view('vmaps');
	}

	public function report(){
	    $this->load->view('vreport');
	}

	public function about(){
	    $this->load->view('vabout');
	}

    public function generate_pagination($surl, $ntable, $nview, $nquery){
		$this->load->library('pagination');
        $this->load->helper('url');
        $this->load->database();
        
        //pagination settings
        $config['base_url'] = site_url($surl);
        $hak_akses = 'admin'; //$this->session->userdata['hak_akses'];
        if (strtolower($hak_akses) == 'admin'){
        	$config['total_rows'] = $this->db->count_all($ntable);
        } else {
        	$config['total_rows'] = $this->db->where('desa',$hak_akses)->from($ntable)->count_all_results();
        }
        $config['per_page'] = "10";
        $config["uri_segment"] = 3;
        $config["num_links"] = 3;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = '<<';
        $config['prev_link'] = false;
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = false;
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = '>>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void()">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        //print(json_encode($config));
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data
        //$this->load->model('Msig');
        $data['master'] = $this->Msig->$nquery($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
		// Showing total rows count 
		    if($data['pagination']!= '') {
		    	$data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of ' .$config["total_rows"]. ' entries'; //.$this->pagination->total_rows;
		    }  else {
		    	$data['pagermessage'] = '-';
		    }
        //load the department_view
        $this->load->view($nview, $data);
    }

    public function kt(){
    	$this->generate_pagination('sig/kt', 'arsip', 'vdata_kt_master', 'GetDataKTLimit');
    }

    public function pokt(){
    	$this->generate_pagination('sig/pokt', 'arsip_pokt', 'vdata_pokt_master', 'GetDataPOKTLimit');
    }

	public function add_kt(){
		$a = array();
	    $c = $this->Msig->select_provinsi();
	    for ($i=0; $i < count($c) ; $i++) { 
          $ar = array('id' => $c[$i]['text'],'text' => $c[$i]['text']);
             array_push($a, $ar);
        }
        $data['prov'] = json_encode($a);
	    $this->load->view('vdata_kt_add', $data);
	}

	public function add_pokt(){
	    $this->load->view('vdata_pokt_add');
	}

	public function insert_kt(){
	    //$this->load->model('Msig');
	    $last_id = $this->Msig->LastID('arsip');
	   	// print_r($last_id[0]['last_id']+ 1);
	   	// die;
	   	$tgl_sk_penetapan = $this->input->post('tgl_sk_penetapan');
	   	$tgl_sk_penegasan = $this->input->post('tgl_sk_penegasan');
	   	$tgl_sk_pemberian = $this->input->post('tgl_sk_pemberian');
	    $new_id = $last_id[0]['last_id'] + 1;
	    if (isset($tgl_sk_penetapan)) {
		    $tgl_sk_penetapan = date("m/d/Y", strtotime($tgl_sk_penetapan));
	    }
	    if (isset($tgl_sk_penegasan)) {  	
		    $tgl_sk_penegasan = date("m/d/Y", strtotime($tgl_sk_penegasan));
	    }
	    if (isset($tgl_sk_pemberian)) {
	    	
		    $tgl_sk_pemberian = date("m/d/Y", strtotime($tgl_sk_pemberian));
	    }
	    
	    $data = array(
	    	'id' => $new_id,
	        'tahun' => $this->input->post('tahun'),
	        'propinsi' => $this->input->post('propinsi'),
	        'kabkota' => $this->input->post('kabkota'),
	        'kecamatan' => $this->input->post('kecamatan'),
	        'kelurahan' => $this->input->post('kelurahan'),
	        'sumber_dana' => $this->input->post('sumberdana'),
	        'kode_data' => $this->input->post('kode_data'),
	        'kode_arsip' => $this->input->post('kodearsip'),
	        'no_sk_penetapan' => $this->input->post('noskpenetapan'),
	        'tgl_sk_penetapan' => $tgl_sk_penetapan,
	        'no_sk_penegasan' => $this->input->post('no_sk_penegasan'),
	        'tgl_sk_penegasan' => $tgl_sk_penegasan,
	        'no_sk_pemberian' => $this->input->post('no_sk_pemberian'),
	        'tgl_sk_pemberian' => $tgl_sk_pemberian,
			'harga_tanah_sebelum' => $this->input->post('harga_tanah_sebelum'),
			'harga_tanah_sesudah' => $this->input->post('harga_tanah_sesudah'),
	        'luas' => $this->input->post('luas'),
	        'tp_total' => $this->input->post('tp_total'),
	        'jml_bidang' => $this->input->post('jml_bidang'),
	        'jml_peserta' => $this->input->post('jml_peserta')
	        	         );
	    $data = $this->Msig->Insert('arsip', $data);
	    redirect(base_url().'index.php/sig/kt','refresh');
	    //redirect($_SERVER['HTTP_REFERER'],'refresh');
	}

	public function insert_pokt(){
	    //$this->load->model('Msig');
	    $last_id = $this->Msig->LastID('arsip_pokt');
	    $new_id = $last_id[0]['last_id'] + 1;
	    $tgl_sk_penetapan = $this->input->post('tglskpenetapan');
	    $tgl_sk_penetapan = date("m/d/Y", strtotime($tgl_sk_penetapan));
	    $data = array(
	        'id' => $new_id,
	        'tahun' => $this->input->post('tahun'),
	        'propinsi' => $this->input->post('propinsi'),
	        'kabkota' => $this->input->post('kabkota'),
	        'kecamatan' => $this->input->post('kecamatan'),
	        'kelurahan' => $this->input->post('kelurahan'),
	        'sumber_dana' => $this->input->post('sumberdana'),
	        'kode_arsip' => $this->input->post('kodearsip'),
	        'no_sk_penetapan' => $this->input->post('noskpenetapan'),
	        'tgl_sk_penetapan' => $tgl_sk_penetapan,
	        'luas' => $this->input->post('luas'),
	        'jml_bidang' => $this->input->post('jumlahbidang'),
	        'jml_peserta' => $this->input->post('jumlahpeserta')
	         );
	    $data = $this->Msig->Insert('arsip_pokt', $data);
	    redirect(base_url().'index.php/sig/pokt','refresh');
	    //redirect($_SERVER['HTTP_REFERER'],'refresh');
	}

	public function edit_kt($id){
	    //$this->load->model('Msig');
	    $arsipkt = $this->Msig->GetWhere('arsip', array('id' => $id));
	    $data['kt'] = array(
	        'id' => $arsipkt[0]['id'],
	        'tahun' => $arsipkt[0]['tahun'],
	        'waktu' => $arsipkt[0]['waktu'],
	        'propinsi' => $arsipkt[0]['propinsi'],
	        'kabkota' => $arsipkt[0]['kabkota'],
	        'kecamatan' => $arsipkt[0]['kecamatan'],
	        'kelurahan' => $arsipkt[0]['kelurahan'],
	        'sumberdana' => $arsipkt[0]['sumber_dana'],
	        'jenis_kt' => $arsipkt[0]['jenis_kt'],
	        'kode_data' => $arsipkt[0]['kode_data'],
	        'no_sk_penetapan' => $arsipkt[0]['no_sk_penetapan'],
	        'tgl_sk_penetapan' => $arsipkt[0]['tgl_sk_penetapan'],
	        // 'tgl_sk_penetapan' => date("d-m-Y", strtotime($arsipkt[0]['tgl_sk_penetapan'])),

	        'no_sk_penegasan' => $arsipkt[0]['no_sk_penegasan'],
	        'tgl_sk_penegasan' => $arsipkt[0]['tgl_sk_penegasan'],
	        // 'tgl_sk_penegasan' => date("d-m-Y", strtotime($arsipkt[0]['tgl_sk_penegasan'])),

	        'no_sk_pemberian' => $arsipkt[0]['no_sk_pemberian'],
	        'tgl_sk_pemberian' => $arsipkt[0]['tgl_sk_pemberian'],
	        // 'tgl_sk_pemberian' => date("d-m-Y", strtotime($arsipkt[0]['tgl_sk_pemberian'])),

	        'harga_tanah_sebelum' => $arsipkt[0]['harga_tanah_sebelum'],
	        'harga_tanah_sesudah' => $arsipkt[0]['harga_tanah_sesudah'],
	        'luas' => $arsipkt[0]['luas'],
	        'tp_total' => $arsipkt[0]['tp_total'],
	        'jml_bidang' => $arsipkt[0]['jml_bidang'],
	        'jml_peserta' => $arsipkt[0]['jml_peserta']
	        );
	    $a = array();
	    $c = $this->Msig->select_provinsi();
	    for ($i=0; $i < count($c) ; $i++) { 
          $ar = array('id' => $c[$i]['text'],'text' => $c[$i]['text']);
             array_push($a, $ar);
        }
        $data['prov'] = json_encode($a);
	    // print_r($a);
	    // die;
	    $this->load->view('vdata_kt_edit', $data);
	}

	public function selectkab($g){
        
        if (isset($g)) {
        	$g = str_replace("%20"," ",$g);
            $c = $this->Msig->select_kabupaten($g); 
        } else {
        $c = $this->Msig->select_kabupaten(); 
        };
        $a = array();
        for ($i=0; $i < count($c) ; $i++) { 
          $ar = array('id' => $c[$i]['text'],'text' => $c[$i]['text']);
             array_push($a, $ar);
        }
        // $data['prov'] = json_encode($a);
        $aa = json_encode($a);
        echo $aa;
    }

    public function selectkec($g){
        
        if (isset($g)) {
        	$g = str_replace("%20"," ",$g);
            $c = $this->Msig->select_kecamatan($g); 
        } else {
        $c = $this->Msig->select_kecamatan(); 
        };
        $a = array();
        for ($i=0; $i < count($c) ; $i++) { 
          $ar = array('id' => $c[$i]['text'],'text' => $c[$i]['text']);
             array_push($a, $ar);
        }
        // $data['prov'] = json_encode($a);
        $aa = json_encode($a);
        echo $aa;
    }

    public function selectdes($g){
        
        if (isset($g)) {
        	$g = str_replace("%20"," ",$g);
            $c = $this->Msig->select_desa($g); 
        } else {
        $c = $this->Msig->select_desa(); 
        };
        $a = array();
        for ($i=0; $i < count($c) ; $i++) { 
          $ar = array('id' => $c[$i]['text'],'text' => $c[$i]['text']);
             array_push($a, $ar);
        }
        // $data['prov'] = json_encode($a);
        $aa = json_encode($a);
        echo $aa;
    }

	public function edit_pokt($id){
	    //$this->load->model('Msig');
	    $arsipkt = $this->Msig->GetWhere('arsip_pokt', array('id' => $id));
	    $data = array(
	        'id' => $arsipkt[0]['id'],
	        'tahun' => $arsipkt[0]['tahun'],
	        'propinsi' => $arsipkt[0]['propinsi'],
	        'kabkota' => $arsipkt[0]['kabkota'],
	        'kecamatan' => $arsipkt[0]['kecamatan'],
	        'kelurahan' => $arsipkt[0]['kelurahan'],
	        'sumberdana' => $arsipkt[0]['sumber_dana'],
	        'kodearsip' => $arsipkt[0]['kode_arsip'],
	        'noskpenetapan' => $arsipkt[0]['no_sk_penetapan'],
	        'tglskpenetapan' => date("d-m-Y", strtotime($arsipkt[0]['tgl_sk_penetapan'])),
	        'luas' => $arsipkt[0]['luas'],
	        'jumlahbidang' => $arsipkt[0]['jml_bidang'],
	        'jumlahpeserta' => $arsipkt[0]['jml_peserta']
	        );
	    $this->load->view('vdata_pokt_edit', $data);
	}

	public function update_kt(){
		$id = $this->input->post('id');
	    $tgl_sk_penetapan = $this->input->post('tgl_sk_penetapan');
	   	$tgl_sk_penegasan = $this->input->post('tgl_sk_penegasan');
	   	$tgl_sk_pemberian = $this->input->post('tgl_sk_pemberian');
	    if (isset($tgl_sk_penetapan)) {
		    $tgl_sk_penetapan = date("m/d/Y", strtotime($tgl_sk_penetapan));
	    }
	    if (isset($tgl_sk_penegasan)) {  	
		    $tgl_sk_penegasan = date("m/d/Y", strtotime($tgl_sk_penegasan));
	    }
	    if (isset($tgl_sk_pemberian)) {
	    	
		    $tgl_sk_pemberian = date("m/d/Y", strtotime($tgl_sk_pemberian));
	    }
	    $data = array(
	        'tahun' => $this->input->post('tahun'),
	        'propinsi' => $this->input->post('propinsi'),
	        'kabkota' => $this->input->post('kabkota'),
	        'kecamatan' => $this->input->post('kecamatan'),
	        'kelurahan' => $this->input->post('kelurahan'),
	        'sumber_dana' => $this->input->post('sumberdana'),
	        'kode_data' => $this->input->post('kode_data'),
	        'kode_arsip' => $this->input->post('kodearsip'),
	        'no_sk_penetapan' => $this->input->post('noskpenetapan'),
	        'tgl_sk_penetapan' => $tgl_sk_penetapan,
	        'no_sk_penegasan' => $this->input->post('no_sk_penegasan'),
	        'tgl_sk_penegasan' => $tgl_sk_penegasan,
	        'no_sk_pemberian' => $this->input->post('no_sk_pemberian'),
	        'tgl_sk_pemberian' => $tgl_sk_pemberian,
			'harga_tanah_sebelum' => $this->input->post('harga_tanah_sebelum'),
			'harga_tanah_sesudah' => $this->input->post('harga_tanah_sesudah'),
	        'luas' => $this->input->post('luas'),
	        'tp_total' => $this->input->post('tp_total'),
	        'jml_bidang' => $this->input->post('jml_bidang'),
	        'jml_peserta' => $this->input->post('jml_peserta')

	        	         );
	    $where = array(
	        'id' => $id,
	    );
	    $res = $this->Msig->Update('arsip', $data, $where);
	    if ($res>0) {
	        redirect(base_url().'index.php/sig/kt','refresh');
	    }
	}

	public function update_pokt(){
		$id = $this->input->post('id');
	    $tgl_sk_penetapan = $this->input->post('tglskpenetapan');
	    $tgl_sk_penetapan = date("m/d/Y", strtotime($tgl_sk_penetapan));
	    $data = array(
	        'tahun' => $this->input->post('tahun'),
	        'propinsi' => $this->input->post('propinsi'),
	        'kabkota' => $this->input->post('kabkota'),
	        'kecamatan' => $this->input->post('kecamatan'),
	        'kelurahan' => $this->input->post('kelurahan'),
	        'sumber_dana' => $this->input->post('sumberdana'),
	        'kode_arsip' => $this->input->post('kodearsip'),
	        'no_sk_penetapan' => $this->input->post('noskpenetapan'),
	        'tgl_sk_penetapan' => $tgl_sk_penetapan,
	        'luas' => $this->input->post('luas'),
	        'jml_bidang' => $this->input->post('jumlahbidang'),
	        'jml_peserta' => $this->input->post('jumlahpeserta')
	         );
	    $where = array(
	        'id' => $id,
	    );
	    $res = $this->Msig->Update('arsip_pokt', $data, $where);
	    if ($res>0) {
	        redirect(base_url().'index.php/sig/pokt','refresh');
	    }
	}

	public function delete_kt($id){
	    $id = array('id' => $id);
	    $this->Msig->Delete('arsip', $id);
	    redirect($_SERVER['HTTP_REFERER'],'refresh');
	}

	public function delete_pokt($id){
	    $id = array('id' => $id);
	    $this->Msig->Delete('arsip_pokt', $id);
	    redirect($_SERVER['HTTP_REFERER'],'refresh');
	}

	public function search_data($id){
		$cari=$this->input->get('name');
		$cari=str_replace("'", "''", $cari);

		//$this->load->model('Msig');
		$data = $this->Msig->GetWhereNama($cari);
		$data = array('data' => $data);

		if ($id == 'master') {
			$this->load->view('vmudamudi_search_master', $data);
		} else {
			$this->load->view('vmudamudi_search_absensi', $data);
		}
	}

	public function filter_data($id){
		$desa=$this->input->get('desa');
		$kelompok=$this->input->get('kelompok');
		$desa=str_replace("'", "''", $desa);
		$kelompok=str_replace("'", "''", $kelompok);

		//$this->load->model('Msig');
		$data = $this->Msig->GetWhereFilter($desa,$kelompok);
		$data = array('data' => $data);

		if ($id == 'master') {
			$this->load->view('vmudamudi_search_master', $data);
		} else {
			$this->load->view('vmudamudi_search_absensi', $data);
		}
	}

	public function laporan(){
        $data = $this->Msig->GetDashboard();
        $data = array(
        	'data' => $data
        	);
	    $this->load->view('vlaporan', $data);
	}

}