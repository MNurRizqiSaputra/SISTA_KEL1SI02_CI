<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_seminar extends CI_Controller {


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
		$this->load->view('kelola_seminar/index', $data);
	}

	
	//add data
	public function add(){
		
		$this->load->view('kelola_seminar/tambah');
	}

	
	public function edit($id){
		$this->load->model('jadwal_model');
		$data['jadwal'] = $this->jadwal_model->findById($id);
		$this->load->view('kelola_seminar/edit', $data);
	}

	public function update_seminar()
	{
	//panggil model
		$this->load->model('jadwal_model');
		

		//inputan id
		$id = $this->input->post('id');
		$data['semester'] =$this->input->post('semester');
                    $data['tanggal'] =$this->input->post('tanggal');
		$data['jam'] =$this->input->post('jam');
		$data['kategori_seminar_id'] =$this->input->post('kategori_seminar_id');
		$data['nim'] =$this->input->post('nim');
		$data['nama_mahasiswa'] =$this->input->post('nama_mahasiswa');
		$data['judul'] =$this->input->post('judul');
                    $data['pembimbing_id'] =$this->input->post('pembimbing_id');
                    $data['penguji1_id'] =$this->input->post('penguji1_id');
                    $data['penguji2_id'] =$this->input->post('penguji2_id');
		$data['nilai_pembimbing'] =$this->input->post('nilai_pembimbing');
		$data['nilai_penguji1'] =$this->input->post('nilai_penguji1');
		$data['nilai_penguji2'] =$this->input->post('nilai_penguji2');
                    $data['lokasi'] =$this->input->post('lokasi');
		$data['nilai_akhir'] =$this->input->post('nilai_akhir');

		//method update data
		$this->jadwal_model->update($data,$id);

		//redirect	
		return redirect('kelola_seminar/index');
	}

	public function get_edit()
	{
		//panggil model

		$id = $this->uri->segment('3');
		$jadwal_model = $this->jadwal_model->getAll();
		$kategori_model = $this->kategori_model->getAll();
		$dosen_model = $this->dosen_model->getAll();
		$peserta_model = $this->peserta_model->getAll();
		$detail_penilaian_model = $this->detail_penilaian_model->getAll();

		
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
			$this->load->view('kelola_seminar/edit', $data);
		}
		else {
			echo 'data tidak ditemukan';
		}


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
		$this->load->view('kelola_seminar/lihat_detail', $data);
		}else{
			echo "Data Was Not Found";
		}
          }

	public function delete($id){
		//delete * from pasien where id = id
		$this->load->model('jadwal_model');//load model
		$where = array('id' => $id);
		$this->jadwal_model->delete(array('id'=>$id),'seminar_ta');// query delete(delete from pasien where id = $id)
		redirect('kelola_seminar/index');


	}

	

	public function save(){
	
		$data['semester'] =$this->input->post('semester');
                    $data['tanggal'] =$this->input->post('tanggal');
		$data['jam'] =$this->input->post('jam');
		$data['kategori_seminar_id'] =$this->input->post('kategori_seminar_id');
		$data['nim'] =$this->input->post('nim');
		$data['nama_mahasiswa'] =$this->input->post('nama_mahasiswa');
		$data['judul'] =$this->input->post('judul');
                    $data['pembimbing_id'] =$this->input->post('pembimbing_id');
                    $data['penguji1_id'] =$this->input->post('penguji1_id');
                    $data['penguji2_id'] =$this->input->post('penguji2_id');
		$data['nilai_pembimbing'] =$this->input->post('nilai_pembimbing');
		$data['nilai_penguji1'] =$this->input->post('nilai_penguji1');
		$data['nilai_penguji2'] =$this->input->post('nilai_penguji2');
                    $data['lokasi'] =$this->input->post('lokasi');
		$data['nilai_akhir'] =$this->input->post('nilai_akhir');
		
		$this->db->insert('seminar_ta', $data);
		
		return redirect('kelola_seminar/index');

		
	}
}