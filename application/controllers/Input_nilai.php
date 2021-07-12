<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_nilai extends CI_Controller {


	function __construct()
	{
	parent::__construct();
	$this->load->model('jadwal_model');
	$this->load->model('kategori_model');
	$this->load->model('dosen_model');
	$this->load->model('peserta_model');
	$this->load->model('detail_penilaian_model');
		}

	function index()
	{
                    $this->load->model('jadwal_model');//load model
                    $data['jadwal'] = $this->jadwal_model->getAll();
		$data['peserta'] = $this->peserta_model->getAll();
		$this->load->view('input_nilai/index', $data);
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
		$this->load->view('input_nilai/lihat_detail', $data);
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
			$this->load->view('input_nilai/lihat_detail', $data);
		}
	}

	

          public function view($id){
		
		$this->load->model('jadwal_model');
		$data['pasien'] = $this->jadwal_model->findById($id);
		$this->load->view('jadwal_seminar/view',$data);
	}

	
	//add data
	public function add(){
		
		$this->load->view('input_nilai/tambah');
	}

	public function save(){

		
		$this->load->model('detail_penilaian_model');
	
		
		$data['seminar_id'] =$this->input->post('seminar_id');
		
		
                    $data['penilaian_id'] =$this->input->post('penilaian_id');
                    $data['dosen_id'] =$this->input->post('dosen_id');
                    $data['nilai'] =$this->input->post('nilai');
		
		$this->db->insert('detail_penilaian', $data);
		
		redirect('input_nilai/index');
	}

	public function save_peserta(){
		$seminar_id = $this->input->post('seminar_id');
		$data['nim'] =$this->input->post('nim');
		$data['nama'] =$this->input->post('nama_mahasiswa');
		$data['seminar_id'] = $seminar_id;
		$data['kehadiran'] =$this->input->post('kehadiran');
		
		$this->db->insert('peserta_seminar', $data);
		
		$result = $this->jadwal_model->findById($seminar_id);
		if ($result->num_rows()> 0)
		{
			$i = $result->row_array();
			$data['id'] =  $i['id'];
			$data['tanggal'] =  $i['tanggal'];
			$data['jam'] =  $i['jam'];
			$data['nim_seminar'] =  $i['nim'];
			$data['nama_mahasiswa'] =  $i['nama_mahasiswa'];
			$data['judul'] =  $i['judul'];
			$data['kategori_seminar_id'] =  $i['kategori_seminar_id'];

			$this->load->view('jadwal_seminar/save_view', $data);
		}
		else
		{
			echo "data was not Found";
		}
	}

          
	public function daftarpeserta()
	{
		$data['jadwal'] = $this->jadwal_model->getAll();

	}
                    
                    
}

?>