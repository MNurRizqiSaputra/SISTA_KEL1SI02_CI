<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_user extends CI_Controller {


          function __construct()
          {
                    parent::__construct();
                    
          }

	function index()
	{
          
		$this->load->view('Berita_user/index');
	}
}
?>