<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('login');
        };
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
	public function slider()
	{
			$data=array(
					'data_slider'=>$this->model_app->getAllData('slider'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/slider/index',$data);
		$this->load->view('admin/footer');
	}
	public function about()
	{
			$data=array(
					'data_about'=>$this->model_app->getAllData('section_about'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/about/edit',$data);
		$this->load->view('admin/footer');
	}
		public function layanan()
	{
			$data=array(
					'data_layanan'=>$this->model_app->getAllData('services'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/layanan/index',$data);
		$this->load->view('admin/footer');
	}
		public function benefit()
	{
			$data=array(
					'data_benefit'=>$this->model_app->getAllData('benefit'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/benefit/index',$data);
		$this->load->view('admin/footer');
	}
	public function galery()
	{
			$data=array(
					'data_galery'=>$this->model_app->getAllData('galeri'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/galery/index',$data);
		$this->load->view('admin/footer');
	}
	
	public function mengapa()
	{
			$data=array(
					'data_mengapa'=>$this->model_app->getAllData('mengapa'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mengapa/index',$data);
		$this->load->view('admin/footer');
	}
	
	
	
	public function catagories()
	{
			$data=array(
					'data_galeri_kategori'=>$this->model_app->getAllData('galeri_kategori'),
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/galeri_kategori/index',$data);
		$this->load->view('admin/footer');
	}
	public function event()
	{
			$data=array(
					'data_event'=>$this->model_app->getAllData('event'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/event/index',$data);
		$this->load->view('admin/footer');
	}
	public function aplikasi()
	{
			$data=array(
					'data_aplikasi'=>$this->model_app->getAllData('aplikasi'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/aplikasi/index',$data);
		$this->load->view('admin/footer');
	}
	public function testimonial()
	{
			$data=array(
					'data_testimoni'=>$this->model_app->getAllData('testimoni'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/testimonial/index',$data);
		$this->load->view('admin/footer');
	}
	public function map()
	{
			$data=array(
					'data_map'=>$this->model_app->getAllData('section_map'),
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/map/index',$data);
		$this->load->view('admin/footer');
	}
	public function kontak()
	{
			$data=array(
					'data_kontak'=>$this->model_app->getAllData('setting'),
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kontak/index',$data);
		$this->load->view('admin/footer');
	}
	
	
	
	public function sosmed()
	{
			$data=array(
					'data_sosmed'=>$this->model_app->getAllData('sosmed'),
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/sosmed/index',$data);
		$this->load->view('admin/footer');
	}
	public function user()
	{
			$data=array(
					'data_user'=>$this->model_app->getAllData('user'),
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/user/index',$data);
		$this->load->view('admin/footer');
	}
	public function seo()
	{
			$data=array(
					'data_seo'=>$this->model_app->getAllData('seo'),
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/seo/index',$data);
		$this->load->view('admin/footer');
	}
	public function section_benefit()
	{
			$data=array(
					'data_section_benefit'=>$this->model_app->getAllData('section_benefit'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/section/benefit',$data);
		$this->load->view('admin/footer');
	}
	public function section_event()
	{
			$data=array(
					'data_section_event'=>$this->model_app->getAllData('section_event'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/section/event',$data);
		$this->load->view('admin/footer');
	}
	public function section_galeri()
	{
			$data=array(
					'data_section_galeri'=>$this->model_app->getAllData('section_galeri'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/section/galeri',$data);
		$this->load->view('admin/footer');
	}
	public function section_kontak()
	{
			$data=array(
					'data_section_kontak'=>$this->model_app->getAllData('section_kontak'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/section/kontak',$data);
		$this->load->view('admin/footer');
	}
	public function section_quote()
	{
			$data=array(
					'data_section_quote'=>$this->model_app->getAllData('section_quote'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/section/quote',$data);
		$this->load->view('admin/footer');
	}
	public function section_services()
	{
			$data=array(
					'data_section_services'=>$this->model_app->getAllData('section_services'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/section/services',$data);
		$this->load->view('admin/footer');
	}
	public function section_testimoni()
	{
			$data=array(
					'data_section_testimoni'=>$this->model_app->getAllData('section_testimoni'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/section/testimoni',$data);
		$this->load->view('admin/footer');
	}
	public function newslatter()
	{
			$data=array(
					'data_newslatter'=>$this->model_app->getAllData('newslatter'),
          'error' => ' ',
			);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/newslatter/index',$data);
		$this->load->view('admin/footer');
	}
	
	

}
