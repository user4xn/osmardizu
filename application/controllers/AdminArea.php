<?php 
defined("BASEPATH")or exit("NO DIRECT ACCESS ALLOWED");
	class AdminArea extends CI_Controller
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
	        $status = $this->session->userdata('status');
	        if ($status != 'logged_in') {
	        	redirect('A');
	        }else{}
		}

		function index(){
			$data['page'] 			= 'Dashboard';
			$data['total_umum'] 	= $this->db->query('SELECT * FROM member_umum')->num_rows();
			$data['total_security'] = $this->db->query('SELECT * FROM member_security')->num_rows();
			$data['total_cs'] 		= $this->db->query('SELECT * FROM member_cs')->num_rows();
			$data['total_driver'] 	= $this->db->query('SELECT * FROM member_driver')->num_rows();
			$this->template->load('admin_page/base', 'admin_page/index',$data);
		}

		function mem_cs(){
			$data['page'] = 'Master Data';
			$data['data_all'] = $this->MainModel->getAll('member_cs');
			$data['monthly_data'] = $this->db->query('SELECT * FROM member_cs WHERE MONTH(created_at) =  MONTH(NOW())')->num_rows();
			$data['weekly_data'] = $this->db->query('SELECT * FROM member_cs WHERE WEEK(created_at) =  WEEK(NOW())')->num_rows();
			$data['daily_data'] = $this->db->query('SELECT * FROM member_cs WHERE DAY(created_at) =  DAY(NOW())')->num_rows();
			$data['total_data'] = $this->db->query('SELECT * FROM member_cs')->num_rows();
			$this->template->load('admin_page/base', 'admin_page/mem_cs',$data);	
		}

		function jsonCSM($rowno=0){
    
	        // Get Search
	        $search_text             = "";
	        
	        if($this->input->get('search_text') != NULL ){
	          $search_text  = $this->input->get('search_text');
	        }
	        
	        // Row per page
	        $rowperpage = 10;
	        
	        // Row position
	        if($rowno != 0){
	          $rowno = ($rowno-1) * $rowperpage;
	        }
	        
	        // Customize Pagging
	        $cfg['first_link']       = 'First';
	        $cfg['last_link']        = 'Last';
	        $cfg['next_link']        = 'Next';
	        $cfg['prev_link']        = 'Prev';
	        $cfg['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	        $cfg['full_tag_close']   = '</ul></nav></div>';
	        $cfg['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	        $cfg['num_tag_close']    = '</span></li>';
	        $cfg['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	        $cfg['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        $cfg['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	        $cfg['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['prev_tagl_close']  = '</span>Next</li>';
	        $cfg['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	        $cfg['first_tagl_close'] = '</span></li>';
	        $cfg['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['last_tagl_close']  = '</span></li>';
	        
	        // All records count
	        $allcount = $this->MainModel->countCSM($search_text);
	        
	        // Get records
	        $users_record = $this->MainModel->getCSM($rowno,$rowperpage,$search_text);
	        
	        // Pagination cfguration
	        $cfg['base_url'] = 'AdminControl/jsonCSM';
	        $cfg['use_page_numbers'] = TRUE;
	        $cfg['total_rows'] = $allcount;
	        $cfg['per_page'] = $rowperpage;
	        
	        // Initialize
	        $this->pagination->initialize($cfg);
	        
	        // Initialize $data Array
	        $data['pagination'] = $this->pagination->create_links();
	        $data['result'] = $users_record;
	        $data['row'] = $rowno;
	        
	        
	        echo json_encode($data);
	        
	    }

	    function mem_driver(){
			$data['page'] = 'Master Data';
			$data['data_all'] = $this->MainModel->getAll('member_driver');
			$data['monthly_data'] = $this->db->query('SELECT * FROM member_driver WHERE MONTH(created_at) =  MONTH(NOW())')->num_rows();
			$data['weekly_data'] = $this->db->query('SELECT * FROM member_driver WHERE WEEK(created_at) =  WEEK(NOW())')->num_rows();
			$data['daily_data'] = $this->db->query('SELECT * FROM member_driver WHERE DAY(created_at) =  DAY(NOW())')->num_rows();
			$data['total_data'] = $this->db->query('SELECT * FROM member_driver')->num_rows();
			$this->template->load('admin_page/base', 'admin_page/mem_driver',$data);	
		}

		function jsonDRV($rowno=0){
    
	        // Get Search
	        $search_text                = "";
	        
	        if($this->input->get('search_text') != NULL ){
	          $search_text  = $this->input->get('search_text');
	        }
	        
	        // Row per page
	        $rowperpage = 10;
	        
	        // Row position
	        if($rowno != 0){
	          $rowno = ($rowno-1) * $rowperpage;
	        }
	        
	        // Customize Pagging
	        $cfg['first_link']       = 'First';
	        $cfg['last_link']        = 'Last';
	        $cfg['next_link']        = 'Next';
	        $cfg['prev_link']        = 'Prev';
	        $cfg['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	        $cfg['full_tag_close']   = '</ul></nav></div>';
	        $cfg['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	        $cfg['num_tag_close']    = '</span></li>';
	        $cfg['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	        $cfg['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        $cfg['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	        $cfg['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['prev_tagl_close']  = '</span>Next</li>';
	        $cfg['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	        $cfg['first_tagl_close'] = '</span></li>';
	        $cfg['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['last_tagl_close']  = '</span></li>';
	        
	        // All records count
	        $allcount = $this->MainModel->countDRV($search_text);
	        
	        // Get records
	        $users_record = $this->MainModel->getDRV($rowno,$rowperpage,$search_text);
	        
	        // Pagination cfguration
	        $cfg['base_url'] = 'AdminControl/jsonDRV';
	        $cfg['use_page_numbers'] = TRUE;
	        $cfg['total_rows'] = $allcount;
	        $cfg['per_page'] = $rowperpage;
	        
	        // Initialize
	        $this->pagination->initialize($cfg);
	        
	        // Initialize $data Array
	        $data['pagination'] = $this->pagination->create_links();
	        $data['result'] = $users_record;
	        $data['row'] = $rowno;
	        
	        
	        echo json_encode($data);
	        
	    }

	    function mem_security(){
			$data['page'] = 'Master Data';
			$data['data_all'] = $this->MainModel->getAll('member_security');
			$data['monthly_data'] = $this->db->query('SELECT * FROM member_security WHERE MONTH(created_at) =  MONTH(NOW())')->num_rows();
			$data['weekly_data'] = $this->db->query('SELECT * FROM member_security WHERE WEEK(created_at) =  WEEK(NOW())')->num_rows();
			$data['daily_data'] = $this->db->query('SELECT * FROM member_security WHERE DAY(created_at) =  DAY(NOW())')->num_rows();
			$data['total_data'] = $this->db->query('SELECT * FROM member_security')->num_rows();
			$this->template->load('admin_page/base', 'admin_page/mem_security',$data);	
		}

		function jsonSCY($rowno=0){
    
	        // Get Search
	        $search_text                = "";
	        
	        if($this->input->get('search_text') != NULL ){
	          $search_text  = $this->input->get('search_text');
	        }
	        
	        // Row per page
	        $rowperpage = 10;
	        
	        // Row position
	        if($rowno != 0){
	          $rowno = ($rowno-1) * $rowperpage;
	        }
	        
	        // Customize Pagging
	        $cfg['first_link']       = 'First';
	        $cfg['last_link']        = 'Last';
	        $cfg['next_link']        = 'Next';
	        $cfg['prev_link']        = 'Prev';
	        $cfg['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	        $cfg['full_tag_close']   = '</ul></nav></div>';
	        $cfg['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	        $cfg['num_tag_close']    = '</span></li>';
	        $cfg['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	        $cfg['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        $cfg['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	        $cfg['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['prev_tagl_close']  = '</span>Next</li>';
	        $cfg['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	        $cfg['first_tagl_close'] = '</span></li>';
	        $cfg['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['last_tagl_close']  = '</span></li>';
	        
	        // All records count
	        $allcount = $this->MainModel->countSCY($search_text);
	        
	        // Get records
	        $users_record = $this->MainModel->getSCY($rowno,$rowperpage,$search_text);
	        
	        // Pagination cfguration
	        $cfg['base_url'] = 'AdminControl/jsonSCY';
	        $cfg['use_page_numbers'] = TRUE;
	        $cfg['total_rows'] = $allcount;
	        $cfg['per_page'] = $rowperpage;
	        
	        // Initialize
	        $this->pagination->initialize($cfg);
	        
	        // Initialize $data Array
	        $data['pagination'] = $this->pagination->create_links();
	        $data['result'] = $users_record;
	        $data['row'] = $rowno;
	        
	        
	        echo json_encode($data);
	        
	    }

	    function mem_umum(){
			$data['page'] = 'Master Data';
			$data['data_all'] = $this->MainModel->getAll('member_umum');
			$data['monthly_data'] = $this->db->query('SELECT * FROM member_umum WHERE MONTH(created_at) =  MONTH(NOW())')->num_rows();
			$data['weekly_data'] = $this->db->query('SELECT * FROM member_umum WHERE WEEK(created_at) =  WEEK(NOW())')->num_rows();
			$data['daily_data'] = $this->db->query('SELECT * FROM member_umum WHERE DAY(created_at) =  DAY(NOW())')->num_rows();
			$data['total_data'] = $this->db->query('SELECT * FROM member_umum')->num_rows();
			$this->template->load('admin_page/base', 'admin_page/mem_umum',$data);	
		}

		function jsonUMUM($rowno=0){
    
	        // Get Search
	        $search_text                = "";
	        
	        if($this->input->get('search_text') != NULL ){
	          $search_text  = $this->input->get('search_text');
	        }
	        
	        // Row per page
	        $rowperpage = 10;
	        
	        // Row position
	        if($rowno != 0){
	          $rowno = ($rowno-1) * $rowperpage;
	        }
	        
	        // Customize Pagging
	        $cfg['first_link']       = 'First';
	        $cfg['last_link']        = 'Last';
	        $cfg['next_link']        = 'Next';
	        $cfg['prev_link']        = 'Prev';
	        $cfg['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	        $cfg['full_tag_close']   = '</ul></nav></div>';
	        $cfg['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	        $cfg['num_tag_close']    = '</span></li>';
	        $cfg['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	        $cfg['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        $cfg['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	        $cfg['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['prev_tagl_close']  = '</span>Next</li>';
	        $cfg['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	        $cfg['first_tagl_close'] = '</span></li>';
	        $cfg['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $cfg['last_tagl_close']  = '</span></li>';
	        
	        // All records count
	        $allcount = $this->MainModel->countUMUM($search_text);
	        
	        // Get records
	        $users_record = $this->MainModel->getUMUM($rowno,$rowperpage,$search_text);
	        
	        // Pagination cfguration
	        $cfg['base_url'] = 'AdminControl/jsonUMUM';
	        $cfg['use_page_numbers'] = TRUE;
	        $cfg['total_rows'] = $allcount;
	        $cfg['per_page'] = $rowperpage;
	        
	        // Initialize
	        $this->pagination->initialize($cfg);
	        
	        // Initialize $data Array
	        $data['pagination'] = $this->pagination->create_links();
	        $data['result'] = $users_record;
	        $data['row'] = $rowno;
	        
	        
	        echo json_encode($data);
	        
	    }
	}
?>