<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar extends CI_Controller {


          function __construct()
          {
                    parent::__construct();
                    $this->load->model('seminar_model');
          }

	function index()
	{
                    $data['seminar'] = $this->seminar_model->getAll();
		$this->load->view('seminar/index', $data);
	}
}
?>