<?php
class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $data=array(
          'username'=>$this->input->post('username'),
          'password'=>md5($this->input->post('password')),
        );
        $this->model_app->updateData('user',$data);
        redirect("admin/user");

    }
}
