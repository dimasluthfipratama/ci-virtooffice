<?php
class Kontak extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $data=array(
            'email'=>$this->input->post('email'),
            'tlp'=>$this->input->post('tlp'),
            'hp'=>$this->input->post('hp'),
            'alamat'=>$this->input->post('alamat')
            
            );
        $this->model_app->updateData('setting',$data);
        redirect("admin/kontak");

    }
}
