<?php
class Client extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $data=array(
            'isi'=>$this->input->post('isi')
            );
        $this->model_app->updateData('client',$data);
        redirect("admin/client");

    }
}
