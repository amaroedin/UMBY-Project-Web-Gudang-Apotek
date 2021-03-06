<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));

		$is_login = FALSE;
		$model = new Login_model;
		$user = $model->get_validate($username, $password);
		if(count($user)) {
			$data = $user->toArray()[0];

			$is_login = TRUE;
			$data['is_login'] = $is_login;
			
			$this->session->set_userdata($data);

			redirect('admin/home');
		}else{
			$this->session->set_flashdata('failed', 'Username atau password salah');
			redirect('site');
		}
	}

	public function logout()
	{
		$sess_array = $this->session->all_userdata();
		foreach($sess_array as $key =>$val){
			$this->session->unset_userdata($key);
		}

		$this->session->sess_destroy();
		redirect('site');
	}
}