<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		$this->template->load('template','laporan/laporan');
	}

	function data_laporan(){
		if(isset($_GET['prov'])) {
		    $prov=$_GET['prov'];
		} else {
		    $prov=null;
		}

		 if(isset($_GET['tahun1'])) {
		    $tahun1=$_GET['tahun1'];
		} else {
		    $tahun1=null;
		}

		if(isset($_GET['tahun2'])) {
		    $tahun2=$_GET['tahun2'];
		} else {
		  $tahun2=null;
		}

		$data = array();
		$datas = array();
		        $query = "SELECT tahun,waktu, propinsi,kabkota,kecamatan,kelurahan,sumber_dana, no_sk_penetapan, tgl_sk_penetapan, no_sk_penegasan, tgl_sk_penegasan, no_sk_pemberian, tgl_sk_pemberian, luas, tp_total,  jml_bidang, jml_peserta,jenis_kt,harga_tanah_sebelum,harga_tanah_sesudah from arsip ";

		if (isset($prov)||!empty($prov)) {
		    $query = $query. "where propinsi like '%".$prov."%'";
		}

		    if (!empty($tahun1)) {
		        if (!empty($tahun1)&&strstr( $query, 'where propinsi')) {
		          $query = $query." and tahun >='". $tahun1."'";
		        } else {
		          $query = $query." where tahun >='". $tahun1."'";
		        }
		    }

		    if (!empty($tahun2)) {
		      if ((!empty($tahun2)&&strstr( $query, 'where propinsi'))||(!empty($tahun2)&&strstr( $query, 'where tahun'))) {
		          $query = $query." and tahun <='". $tahun2."'";
		        } else {
		          $query = $query." where tahun <='". $tahun2."'";
		        }
		    }

		$sql = pg_query($query);
		while ($row = pg_fetch_row($sql)) {
		    array_push($data, $row);
		}

		for ($i=0; $i < count($data); $i++) { 
		    $datas[$i]["no"]= $i+1;
		    $datas[$i]["tahun"]= $data[$i][0];
		    $datas[$i]["waktu"]= $data[$i][1];
		    $datas[$i]["propinsi"]= $data[$i][2];
		    $datas[$i]["kabkota"]= $data[$i][3];
		    $datas[$i]["kecamatan"]= $data[$i][4];
		    $datas[$i]["kelurahan"]= $data[$i][5];
		    $datas[$i]["sumber_dana"]= $data[$i][6];
		    // $datas[$i]["no_sk_penetapan"]= $data[$i][7];
		    // $datas[$i]["tgl_sk_penetapan"]= $data[$i][8];
		    // $datas[$i]["no_sk_penegasan"]= $data[$i][9];
		    // $datas[$i]["tgl_sk_penegasan"]= $data[$i][10];
		    // $datas[$i]["no_sk_pemberian"]= $data[$i][11];
		    // $datas[$i]["tgl_sk_pemberian"]= $data[$i][12];
		    $datas[$i]["luas"]= $data[$i][13];
		    // $datas[$i]["tp_total"]= $data[$i][14];
		    $datas[$i]["jml_bidang"]= $data[$i][15];
		    // $datas[$i]["jml_peserta"]= $data[$i][16];
		    // $datas[$i]["jenis_kt"]= $data[$i][17];
		    // $datas[$i]["harga_tanah_sebelum"]= $data[$i][18];
		    // $datas[$i]["harga_tanah_sesudah"]= $data[$i][19];
		}
		// $data["id"]= i;
		$dates = array('data' => $datas);
		// header('Content-Type: application/json');
		echo json_encode($dates);
		// print_r($data);
	}

	function tahun(){
		if(isset($_GET['term'])) {
		    $term=$_GET['term'];
		} else {
		    $term=null;
		}
		$q = "SELECT tahun as text from arsip ";

		if (isset($term)) {
		    $q = $q." where tahun::varchar like '%".$term."%'";
		}
		    $q= $q."group by tahun order by tahun ";
		        $result = pg_query($q);
		        $pil = array();
		        while ($row = pg_fetch_row($result)) {
		            array_push($pil,$row);
		        }
		        $a = array();
		        $ar = array();
		        for ($i=0; $i < count($pil) ; $i++) { 
		          $ar = array('id' => $pil[$i][0],'text' => $pil[$i][0]);
		             array_push($a, $ar);
		        }
		        $pal = json_encode($a);
		        // header('Content-Type: application/json');
		        echo $pal;
	}

	function prov(){
		if(isset($_GET['term'])) {
		    $term=$_GET['term'];
		} else {
		    $term=null;
		}
		$q = "SELECT propinsi as text from arsip ";

		if (isset($term)) {
		    $q = $q." where lower(propinsi) like '%".$term."%'";
		}
		    $q= $q."group by propinsi order by propinsi ";
		        $result = pg_query($q);
		        $pil = array();
		        while ($row = pg_fetch_row($result)) {
		            array_push($pil,$row);
		        }
		        $a = array();
		        $ar = array();
		        for ($i=0; $i < count($pil) ; $i++) { 
		          $ar = array('id' => $pil[$i][0],'text' => $pil[$i][0]);
		             array_push($a, $ar);
		        }
		        $pal = json_encode($a);
		        // header('Content-Type: application/json');
		        echo $pal;
	}

}

