<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_peserta extends CI_Controller {


	function __construct()
	{
	parent::__construct();
	$this->load->model('jadwal_model');
	$this->load->model('kategori_model');
	$this->load->model('dosen_model');
	$this->load->model('peserta_model');
		}

	function index()
	{
                    $this->load->model('jadwal_model');//load model
                    $this->load->model('peserta_model');//load model
		$data['peserta'] = $this->peserta_model->getAll();
		$this->load->view('kelola_peserta/index', $data);
	}

          public function delete($id){
		//delete * from pasien where id = id
		$this->load->model('peserta_model');//load model
		$where = array('id' => $id);
		$this->peserta_model->delete(array('id'=>$id),'peserta_seminar');// query delete(delete from pasien where id = $id)
		redirect('kelola_peserta/index');


	}

	public function lihat_detail(){
                    
		$id = $this->uri->segment('3');
		$result = $this->peserta_model->findById($id);
		if ($result->num_rows()> 0)
		{
			$i = $result->row_array();
			$data = array 
			(
			'id' => $i['id'],
			'nim' => $i['nim'],
			'nama' => $i['nama'],
			'seminar_id' => $i['seminar_id'],
			'kehadiran' => $i['kehadiran'],
			);
		$this->load->view('kelola_peserta/lihat_detail', $data);
		}else{
			echo "Data Was Not Found";
		}
          }

          
         

          
}