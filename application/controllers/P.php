	<?php 
	defined("BASEPATH")or exit("NO DIRECT ACCESS ALLOWED");
		class P extends CI_Controller
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
			
			// 404 OVERRIDE
			function err404(){
				$this->load->view('errors/html/error_404-mdz');
			}

			function index(){
				$data['page'] = '';
				$this->template->load('main_page/base', 'main_page/index',$data);
			}

		function login(){
			redirect('auth');
		}
		function do_upload_foto(){
            $config['upload_path']          = './assets/uploads/images/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['overwrite']            = TRUE;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto_diri')){
                if($this->upload->data('file_size') > 800){
                    return $this->compressimg($this->upload->data(),$config['upload_path']);
                } else {
                    return $this->upload->data('full_path');
                }
            }else{
                return 'error file doesnt send';
            }
		}

		function do_upload_svaksin(){
            $config['upload_path']          = './assets/uploads/images/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['overwrite']            = TRUE;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('sk_vaksin')){
                if($this->upload->data('file_size') > 800){
                    return $this->compressimg($this->upload->data(),$config['upload_path']);
                } else {
                    return $this->upload->data('full_path');
                }
            }else{
                return 'error file doesnt send';
            }
		}

		function compressimg($gbr,$path){
            $wd = $gbr['image_width']*0.4; //0.4 mean compress to 40% image_size
            $hh = $gbr['image_height']*0.4; //modify yours
            //Compress Image
            $config['image_library']    = 'gd2';
            $config['source_image']     = $path.$gbr['file_name'];
            $config['create_thumb']     = FALSE;
            $config['maintain_ratio']   = FALSE;
            $config['quality']          = '50%';
            $config['width']            = round($wd);
            $config['height']           = round($hh);
            $config['new_image']        = $path.$gbr['file_name'];

            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            
            return $gbr['full_path'];

            // Put This On Uploader , by user4xn
            // return $this->compressimg($this->upload->data(),$config['upload_path']);
        }

		function security(){
			$data['page'] = 'security';
			$this->template->load('main_page/base', 'main_page/form_security',$data);
		}

		function act_security(){
			$nama = $this->input->post('nama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$no_telp = $this->input->post('telp');
			$email = $this->input->post('email');
			$provinsi = $this->input->post('provinsi');
			$kabupaten = $this->input->post('kabupaten');
			$kecamatan = $this->input->post('kecamatan');
			$desa_kelurahan = $this->input->post('desa_kelurahan');
			$rt = $this->input->post('rt');
			$rw = $this->input->post('rw');
			$tahun_pengalaman = $this->input->post('tahun_pengalaman');
			
			// UPLOADS

			$foto = file_get_contents($this->do_upload_foto());
			$gada_pratama = $this->do_upload_gp();
			$kta = $this->do_upload_kta();
			$svaksin = file_get_contents($this->do_upload_svaksin());

			$for_member_pendaftar = array(
				'id_member' => null,
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'foto' => $foto,
				'no_telp' => $no_telp,
				'email' => $email,
				'provinsi' => $provinsi,
				'kabupaten' => $kabupaten,
				'kecamatan' => $kecamatan,
				'desa_kelurahan' => $desa_kelurahan,
				'rt' => $rt,
				'rw' => $rw,
				'tahun_pengalaman' => $tahun_pengalaman,
				'gada_pratama' => $gada_pratama,
				'kta' => $kta,
				'sertifikat_vaksin' => $svaksin
			);

			$last_id = $this->MainModel->send_to_tb('member_security',$for_member_pendaftar);

			$this->session->set_flashdata('act_status','200');
			redirect('p/security');
		}

		function do_upload_gp(){
            $config['upload_path']          = './assets/uploads/';
            $config['allowed_types']        = 'pdf';
            $config['overwrite']            = TRUE;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('gada_pratama')){
                return $this->upload->data('file_name');
            }else{
                return 'error gp file doesnt send';
            }
		}

		function do_upload_kta(){
            $config['upload_path']          = './assets/uploads/';
            $config['allowed_types']        = 'pdf';
            $config['overwrite']            = TRUE;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('kta')){
                return $this->upload->data('file_name');
            }else{
                return 'error kta file doesnt send';
            }
		}

        function driver(){
			$data['page'] = 'driver';
			$this->template->load('main_page/base', 'main_page/form_driver',$data);
		}

		function act_driver(){
			$nama = $this->input->post('nama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$no_telp = $this->input->post('telp');
			$email = $this->input->post('email');
			$provinsi = $this->input->post('provinsi');
			$kabupaten = $this->input->post('kabupaten');
			$kecamatan = $this->input->post('kecamatan');
			$desa_kelurahan = $this->input->post('desa_kelurahan');
			$rt = $this->input->post('rt');
			$rw = $this->input->post('rw');
			$tahun_pengalaman = $this->input->post('tahun_pengalaman');

			// UPLOADS

			$foto = file_get_contents($this->do_upload_foto());
			$svaksin = file_get_contents($this->do_upload_svaksin());
			$sim_a = $this->do_upload_sima();
			$sim_b1 = $this->do_upload_simb1();
			$sim_b2 = $this->do_upload_simb2();
			

			$for_member_pendaftar = array(
				'id_member' => null,
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'foto' => $foto,
				'no_telp' => $no_telp,
				'email' => $email,
				'provinsi' => $provinsi,
				'kabupaten' => $kabupaten,
				'kecamatan' => $kecamatan,
				'desa_kelurahan' => $desa_kelurahan,
				'rt' => $rt,
				'rw' => $rw,
				'tahun_pengalaman' => $tahun_pengalaman,
				'sim_a' => $sim_a,
				'sim_b1' => $sim_b1,
				'sim_b2' => $sim_b2,
				'sertifikat_vaksin' => $svaksin
			);

			// var_dump($for_member_pendaftar);

			$last_id = $this->MainModel->send_to_tb('member_driver',$for_member_pendaftar);

			$this->session->set_flashdata('act_status','200');
			redirect('p/driver');
		}

		function do_upload_sima(){
            $config['upload_path']          = './assets/uploads/';
            $config['allowed_types']        = 'jpg|png|jpeg|pdf';
            $config['overwrite']            = TRUE;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('a')){
                return $this->upload->data('file_name');
            }else{
                return '-';
            }
		}

		function do_upload_simb1(){
            $config['upload_path']          = './assets/uploads/';
            $config['allowed_types']        = 'jpg|png|jpeg|pdf';
            $config['overwrite']            = TRUE;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('b1')){
                return $this->upload->data('file_name');
            }else{
                return '-';
            }
		}

		function do_upload_simb2(){
            $config['upload_path']          = './assets/uploads/';
            $config['allowed_types']        = 'jpg|png|jpeg|pdf';
            $config['overwrite']            = TRUE;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('b2')){
                return $this->upload->data('file_name');
            }else{
                return '-';
            }
		}

		function umum(){
			$data['page'] = 'umum';
			$this->template->load('main_page/base', 'main_page/form_umum',$data);
		}

		function act_umum(){
			$nama = $this->input->post('nama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$no_telp = $this->input->post('telp');
			$email = $this->input->post('email');
			$provinsi = $this->input->post('provinsi');
			$kabupaten = $this->input->post('kabupaten');
			$kecamatan = $this->input->post('kecamatan');
			$desa_kelurahan = $this->input->post('desa_kelurahan');
			$rt = $this->input->post('rt');
			$rw = $this->input->post('rw');
			$tahun_pengalaman = $this->input->post('tahun_pengalaman');
			
			// UPLOADS

			$foto = file_get_contents($this->do_upload_foto());
			$svaksin = file_get_contents($this->do_upload_svaksin());

			$for_member_pendaftar = array(
				'id_member' => null,
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'foto' => $foto,
				'no_telp' => $no_telp,
				'email' => $email,
				'provinsi' => $provinsi,
				'kabupaten' => $kabupaten,
				'kecamatan' => $kecamatan,
				'desa_kelurahan' => $desa_kelurahan,
				'rt' => $rt,
				'rw' => $rw,
				'tahun_pengalaman' => $tahun_pengalaman,
				'sertifikat_vaksin' => $svaksin
			);

			//var_dump($for_member_pendaftar);

			$last_id = $this->MainModel->send_to_tb('member_umum',$for_member_pendaftar);

			$this->session->set_flashdata('act_status','200');
			redirect('p/umum');
		}

		function cleaning_service(){
			$data['page'] = 'cleaning_service';
			$this->template->load('main_page/base', 'main_page/form_cs',$data);
		}

		function act_cs(){
			$nama = $this->input->post('nama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$no_telp = $this->input->post('telp');
			$email = $this->input->post('email');
			$provinsi = $this->input->post('provinsi');
			$kabupaten = $this->input->post('kabupaten');
			$kecamatan = $this->input->post('kecamatan');
			$desa_kelurahan = $this->input->post('desa_kelurahan');
			$rt = $this->input->post('rt');
			$rw = $this->input->post('rw');
			$tahun_pengalaman = $this->input->post('tahun_pengalaman');
			
			// UPLOADS

			$foto = file_get_contents($this->do_upload_foto());
			$svaksin = file_get_contents($this->do_upload_svaksin());
			$sertifikat_paklaring = $this->do_upload_sk_paklaring();

			$for_member_pendaftar = array(
				'id_member' => null,
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'foto' => $foto,
				'no_telp' => $no_telp,
				'email' => $email,
				'provinsi' => $provinsi,
				'kabupaten' => $kabupaten,
				'kecamatan' => $kecamatan,
				'desa_kelurahan' => $desa_kelurahan,
				'rt' => $rt,
				'rw' => $rw,
				'tahun_pengalaman' => $tahun_pengalaman,
				'sertifikat_paklaring' => $sertifikat_paklaring,
				'sertifikat_vaksin' => $svaksin
			);

			//var_dump($for_member_pendaftar);

			$last_id = $this->MainModel->send_to_tb('member_cs',$for_member_pendaftar);

			$this->session->set_flashdata('act_status','200');
			redirect('p/cleaning_service');
		}

		function do_upload_sk_paklaring(){
            $config['upload_path']          = './assets/uploads/';
            $config['allowed_types']        = 'pdf';
            $config['overwrite']            = TRUE;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('sk_paklaring')){
                return $this->upload->data('file_name');
            }else{
                return 'error sk_paklaring file doesnt send';
            }
		}
		
	}

?>