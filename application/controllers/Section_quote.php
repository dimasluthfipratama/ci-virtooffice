<?php
class Section_quote extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $data=array(
            'judul'=>$this->input->post('judul'),
            'deskripsi'=>$this->input->post('deskripsi'),
            
            
            );
        $this->model_app->updateData('section_quote',$data);
        redirect("admin/section_quote");

    }
}
