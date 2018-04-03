<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');

class Meetingroomsurabaya extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
  public function index()
  {
      $data=array(
        'data_setting2'=>$this->model_app->getAllData('setting'),
        'data_aplikasi'=>$this->model_app->getAllData('aplikasi'),
        'data_section_kontak'=>$this->model_app->getAllData('section_kontak'),
        'data_sosmed'=>$this->model_app->getAllData('sosmed'),
      );
    $this->load->view('web/meetingroom',$data);
  }

}
