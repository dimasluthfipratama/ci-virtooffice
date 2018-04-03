<?php
class Section_galeri extends CI_Controller{
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
            
            
            
            );
        $this->model_app->updateData('section_galeri',$data);
        redirect("admin/section_galeri");

    }
}
