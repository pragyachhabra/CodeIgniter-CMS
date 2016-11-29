<?php

class Login extends MY_Controller{
	
	public function index()
	{	
		if($this->session->userdata('user_id'))
			return redirect('admin/dashboard');
		
		$this->load->helper('form');
		$this->load->view('public/admin_login');
	}
	public function admin_login()
	{
		$this->load->library('form_validation');
		
		//$this->form_validation->set_rules('username','User Name','required|alpha|trim');
		//$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run('admin_login'))
		{
			//success
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->load->model('loginmodel');
			$login_id = $this->loginmodel->login_valid($username,$password);
			if($login_id)
			{
				
				$this->session->set_userdata('user_id',$login_id);
				
				return redirect('admin/dashboard');
				//valid true
			}
			else
			{
				$this->session->set_flashdata('login failed','Invalid Username&Password');
				return redirect('login');
			}
		}
		else
		{
			//failed
			$this->load->view('public/admin_login');
			//echo "Validation failed";
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
}	