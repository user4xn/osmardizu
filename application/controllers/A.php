<?php 
defined("BASEPATH")or exit("NO DIRECT ACCESS ALLOWED");
	class A extends CI_Controller
	{
		
		function __construct()
		{
			header('Access-Control-Allow-Origin: *');
    		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
			parent::__construct();
			$this->load->model('MainModel');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->library('pagination');
			$this->load->library('email');
			$this->load->library('template');
			$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
	        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
	        $this->output->set_header('Pragma: no-cache');
	        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
		}
		
		function index(){
			if ($this->session->userdata('status') == 'logged_in')
	        {
	            redirect('AdminControl');
	        }else{
				$this->load->view('admin_page/auth');
	        }
		}

		function auth(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$check =  $this->MainModel->requestAuth($email,md5($password));

			if ($check) {
				$session = array(
					'nama' => $check['nama'],
					'status' => 'logged_in'
				);

				$this->session->set_userdata($session);
				redirect('AdminArea');
			}else{
				redirect('A');
			}
		}

		function logout(){
	        $this->session->sess_destroy();
	        $this->session->set_flashdata('logout_notification', 'logged_out');
	        redirect('A');
	    }
	}
?>