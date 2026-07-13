<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panduan extends CI_Controller {

	public function index()
	{
		$this->template->load('template','admin/panduan');
	}

}

