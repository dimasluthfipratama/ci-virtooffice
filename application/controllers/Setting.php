<?php
class Setting extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $data=array(
            'id_setting'=>$this->input->post('id_setting'),
            'telepon'=>$this->input->post('telepon'),
            'email'=>$this->input->post('email'),
            'alamat'=>$this->input->post('alamat'),
            );
        $this->model_app->updateData('setting',$data);
        redirect("admin/website");

    }
}
