<?php
class Seo extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $data=array(
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('description'),
            'keyword'=>$this->input->post('keyword'),
            'analytic'=>$this->input->post('analytic'),
            'webmaster'=>$this->input->post('webmaster')
            );
        $this->model_app->updateData('seo',$data);
        redirect("admin/seo");

    }
}
