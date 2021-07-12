<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {


          function __construct()
          {
                    parent::__construct();
                    $this->load->model('peserta_model');
          }

	function index()
	{
                    $this->load->model('peserta_model');//load model
                    $data['peserta'] = $this->peserta_model->getAll();
		$this->load->view('jadwal_seminar/save', $data);
	}

          public function lihat_detail(){
                    
		$id = $this->uri->segment('3');
		$result = $this->jadwal_model->findById($id);
		if ($result->num_rows()> 0)
		{
			$i = $result->row_array();
			$data = array 
			(
			'id' => $i['id'],
			'semester' => $i['semester'],
			'tanggal' => $i['tanggal'],
			'jam' => $i['jam'],
			'kategori_seminar_id' => $i['kategori_seminar_id'],
			'nim' => $i['nim'],
			'nama_mahasiswa' => $i['nama_mahasiswa'],
			'judul' => $i['judul'],
			'pembimbing_id' => $i['pembimbing_id'],
			'penguji1_id' => $i['penguji1_id'],
			'penguji2_id' => $i['penguji2_id'],
			'nilai_pembimbing' => $i['nilai_pembimbing'],
			'nilai_penguji1' => $i['nilai_penguji1'],
			'nilai_penguji2' => $i['nilai_penguji2'],
			'lokasi' => $i['lokasi'],
			'nilai_akhir' => $i['nilai_akhir'],
			);
		$this->load->view('jadwal_seminar/lihat_detail', $data);
		}else{
			echo "Data Was Not Found";
		}
          }


          public function daftar_seminar()
	{
		$id = $this->uri->segment('3');
		$result = $this->jadwal_model->findById($id);
		if ($result->num_rows()> 0)
		{
			$i = $result->row_array();
			$data = array 
			(
			'id' => $i['id'],
			'tanggal' => $i['tanggal'],
			'jam' => $i['jam'],
			'nim' => $i['nim'],
			'nama_mahasiswa' => $i['nama_mahasiswa'],
			'judul' => $i['judul'],
			'kategori_seminar_id' => $i['kategori_seminar_id'],
			);
			$this->load->view('jadwal_seminar/daftar_seminar/', $data);
		}
	}

	

          public function view($id){
		
		$this->load->model('jadwal_model');
		$data['pasien'] = $this->jadwal_model->findById($id);
		$this->load->view('jadwal_seminar/view',$data);
	}

	
	//add data
	public function add(){
		$id_seminar = $this->uri->segment('3');
		$this->load->view('jadwal_seminar/daftar_seminar',$id_seminar);
	}

	public function save(){
                    
		$data['nim'] =$this->input->post('nim');
		$data['nama_mahasiswa'] =$this->input->post('nama_mahasiswa');
                    $data['seminar_id'] = $id_seminar;
		$data['kehadiran'] =$this->input->post('kehadiran');
		
		$this->db->insert('peserta_seminar', $data);
		
		$this->load->view('index.php/jadwal_seminar/save', $data);
	}


          
	public function konfrim()
	{
		$data['konfrim'] = $this->peserta_model->getAll();
		
	}
                    
                    
}

?>