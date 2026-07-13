<?php 

class Peta extends CI_Controller{

  	function __construct(){
    	parent::__construct();
    	$this->load->model('M_galeri');
  	}

  	function index(){
    	$this->template->load('template','peta/peta');
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


    function leaflat_json(){
      $kode_data = $this->uri->segment(3);
      echo $kode_data;
      die();
      if ($kode_data) {
        $kode = $kode_data;
        $column = pg_query("SELECT column_name FROM information_schema.columns WHERE table_schema = 'public' AND table_name   ='sebelum_kt'");
        if (!$column) {
          echo "An error occurred.\n";
          exit;
        }
        $col = array();
        $cil="mulai";
        $hov="";
        while ($row = pg_fetch_row($column)) {
          array_push($col,$row[0]);
        }

        $koloms = array('0' => 'kode_data', '1' => 'x', '2' => 'y');

          $result = pg_query("SELECT \"KODE\", st_x(st_centroid(st_union(the_geom))) as x, st_y(st_centroid(st_union(the_geom))) as y FROM sebelum_kt where \"KODE\" = '".$kode."' group by \"KODE\" ");
           if (!$result) {
          echo "An error occurred.\n";
          exit;
        }
        $pg = array();
        while ($row = pg_fetch_row($result)) {
          array_push($pg,$row);
        }


        
        // $bb = array();
        // $cc = array(kode_data => $pg[0][0],x => $pg[0][1],y => $pg[0][2]);
        $cc->KODE = $pg[0][0];
        $cc->y = $pg[0][1];
        $cc->x = $pg[0][2];

        
        header("Content-type: application/json");

        var_dump($cc);
        die();

        echo json_encode($cc);
      }
    }

    function tes(){
      $provinsi = $this->uri->segment(3);
      if($provinsi) {
          $prov=$provinsi;
      } else {
          $prov=null;
      }

      if(isset($_GET['kab'])) {
          $kab=$_GET['kab'];
      } else {
          $kab=null;
      }

      if(isset($_GET['kec'])) {
          $kec=$_GET['kec'];
      } else {
          $kec=null;
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
              $query = "SELECT tahun,waktu, propinsi,kabkota,kecamatan,kelurahan,sumber_dana,kode_data, no_sk_penetapan, tgl_sk_penetapan, no_sk_penegasan, tgl_sk_penegasan, no_sk_pemberian, tgl_sk_pemberian, luas, tp_total,  jml_bidang, jml_peserta,jenis_kt,harga_tanah_sebelum,harga_tanah_sesudah, \"KODE\" from arsip left join (select st_union(the_geom), \"KODE\" from sebelum_kt group by \"KODE\") as sebelum on kode_data = \"KODE\" ";

      if (isset($prov)||!empty($prov)) {
          $query = $query. "where propinsi like '%".$prov."%'";
      }

          if (!empty($kab)) {
              if (!empty($kab)&&strstr( $query, 'where propinsi')) {
                $query = $query." and kabkota like '%".$kab."%'";
              } else {
                $query = $query." where kabkota like '%".$kab."%'";
              }
          }

          if (!empty($kec)) {
              if (!empty($kec)&&strstr( $query, 'where propinsi')) {
                $query = $query." and kecamatan like '%".$kec."%'";
              } else {
                $query = $query." where kecamatan like '%".$kec."%'";
              }
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
          // $datas[$i]["tahun"]= $data[$i][0];
          $datas[$i]["waktu"]= $data[$i][1];
          $datas[$i]["propinsi"]= $data[$i][2];
          $datas[$i]["kabkota"]= $data[$i][3];
          $datas[$i]["kecamatan"]= $data[$i][4];
          $datas[$i]["kelurahan"]= $data[$i][5];
          $datas[$i]["sumber_dana"]= $data[$i][6];
          $datas[$i]["kode_data"]= $data[$i][7];

          if ($data[$i][21] === NULL) {
              $datas[$i]["peta"]= "";
          } else {
              $datas[$i]["peta"]='<button > Perbesar ke Peta</button>'; 
          }
          
          // $datas[$i]["peta"]= '<button>'.$data[$i][7].'</button>';
          // $datas[$i]["no_sk_penetapan"]= $data[$i][7];
          // $datas[$i]["tgl_sk_penetapan"]= $data[$i][8];
          // $datas[$i]["no_sk_penegasan"]= $data[$i][9];
          // $datas[$i]["tgl_sk_penegasan"]= $data[$i][10];
          // $datas[$i]["no_sk_pemberian"]= $data[$i][11];
          // $datas[$i]["tgl_sk_pemberian"]= $data[$i][12];
          // $datas[$i]["luas"]= $data[$i][13];
          // $datas[$i]["tp_total"]= $data[$i][14];
          // $datas[$i]["jml_bidang"]= $data[$i][15];
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

}
