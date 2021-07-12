<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim_user_admin extends CI_Controller {


          function __construct()
          {
                    parent::__construct();
                    $this->load->model('seminar_model');
          }

	function index()
	{
                    
		$this->load->view('tim_user_admin/index');
	}
}
?>