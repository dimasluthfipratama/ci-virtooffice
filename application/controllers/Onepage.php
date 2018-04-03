<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onepage extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('model_app');
		}

			public function index()
			{
				
		        $data=array(					
					'data_seo'=>$this->model_app->getAllData('seo'),
					'data_setting'=>$this->model_app->getAllData('setting'),
					'data_setting2'=>$this->model_app->getAllData('setting'),
					'data_slider'=>$this->model_app->getAllData('slider'),
					'data_section_about'=>$this->model_app->getAllData('section_about'),
					'data_section_services'=>$this->model_app->getAllData('section_services'),
					'data_services'=>$this->model_app->getAllData('services'),
					'data_section_benefit'=>$this->model_app->getAllData('section_benefit'),
					'data_benefit'=>$this->model_app->getAllData('benefit'),
					'data_section_quote'=>$this->model_app->getAllData('section_quote'),
					'data_section_map'=>$this->model_app->getAllData('section_map'),
					'data_section_event'=>$this->model_app->getAllData('section_event'),
					'data_event'=>$this->model_app->getAllData('event'),
					'data_section_galeri'=>$this->model_app->getAllData('section_galeri'),
					'data_galeri_kategori'=>$this->model_app->getAllData('galeri_kategori'),
					'data_galeri'=>$this->model_app->getAllData('galeri'),
					'data_section_testimoni'=>$this->model_app->getAllData('section_testimoni'),
					'data_testimoni'=>$this->model_app->getAllData('testimoni'),
					'data_aplikasi'=>$this->model_app->getAllData('aplikasi'),
					'data_section_kontak'=>$this->model_app->getAllData('section_kontak'),
					'data_sosmed'=>$this->model_app->getAllData('sosmed'),
		        );
				$this->load->view('web/header',$data);
				$this->load->view('web/index',$data);
				$this->load->view('web/footer',$data);
			}

}
