<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');

class Pages extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
  public function index()
  {
      $data=array(
      );
    $this->load->view('web/pages',$data);
  }

}
