<?php
class Section_testimoni extends CI_Controller{
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
            'subjudul'=>$this->input->post('subjudul'),
            
            
            );
        $this->model_app->updateData('section_testimoni',$data);
        redirect("admin/section_testimoni");

    }
}
