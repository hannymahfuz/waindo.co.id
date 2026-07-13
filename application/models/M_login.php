<?php 

class M_login extends CI_Model{	

	function cek_login($usr,$pwd){	
		return $this->db->query("SELECT * FROM pengguna WHERE login ='$usr' AND pass = '$pwd'");
	}
}