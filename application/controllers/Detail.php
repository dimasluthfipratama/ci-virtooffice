<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

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
		            'data_setting3'=>$this->model_app->getAllData('setting'),
		            'data_sosmed'=>$this->model_app->getAllData('social'),
		            'data_sosmed2'=>$this->model_app->getAllData('social'),
		            'data_banner'=>$this->model_app->getAllData('banner'),
		            'data_services'=>$this->model_app->getAllData('services'),
		            'data_about'=>$this->model_app->getAllData('about'),
		            'data_product'=>$this->model_app->getAllData('product'),
		            'data_testi'=>$this->model_app->getAllData('testimonial'),
		            'data_footer'=>$this->model_app->getAllData('footer'),
		        );
				$this->load->view('web/detail',$data);
			}

}
