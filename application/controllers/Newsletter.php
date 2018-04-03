<?php
class Newsletter extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url', 'text'));
    } 
//    ====================== INSERT ========================
    function prosestambah(){
        
            $data['email'] = $this->input->post('email');
            

        $this->model_app->insertData('newslatter',$data,$id);
        redirect("onepage");
        
        
    }


}
