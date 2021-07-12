<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
          public function __construct(){
          parent::__construct();
          $this->load->model('login_model');
          }

          //menampilkan halaman login
          public function login(){
          $this->load->view('login/login');
          }

          public function halregister(){
                    
                    $this->load->view('login/register');
          }

          //setor data user untuk login
          public function aksi_login(){

          //membuat inputan dengan method post
          $username = $this->input->post('username');        
          $password = $this->input->post('password');

          //data array yang ingin dicocokan
          $where = array(
                    'username' => $username,
                    'password' => md5($password)
          );

          //variabel check data dari database
          $check = $this->login_model->check_login("user",$where)->num_rows();

          if($check > 0){

                    //data session yang dibuat
                    $data_session = array(
                    'username' => $username,
                    'status' => 'login'
                    );

                    //membuat session
                    $this->session->set_userdata($data_session);
                    //mengarahkan ke url /pasien(halaman pasienya)
                    redirect('http://localhost/sista_ci/index.php/admin');
          }else{
                    //mengarahkan ke url /login/login(halaman loginya)
                    redirect('login/login');
          }


          }


          //logout
          public function logout(){
          //menghancurkan session jadi user bisa logout
          $this->session->sess_destroy();
          redirect('login/login');
          }

          public function register(){
          $this->load->view('login/register');
          }

          public function register_user(){
                    
          //tambah data
                              $data['username'] = $this->input->post('username');
                              $data['password'] = md5($this->input->post('password'));
                              //method save data
                              $this->login_model->register('user',$data);

                              //redirect	
                              return redirect('login/login');
          }
}
