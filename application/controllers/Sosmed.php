<?php
class Sosmed extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $data=array(
            'facebook'=>$this->input->post('facebook'),
            'instagram'=>$this->input->post('instagram'),
            'linked'=>$this->input->post('linked'),
            );
        $this->model_app->updateData('sosmed',$data);
        redirect("admin/sosmed");

    }
}
