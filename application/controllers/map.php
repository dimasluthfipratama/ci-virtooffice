<?php
class Map extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $data=array(
            'map'=>$this->input->post('map'),
            'judul'=>$this->input->post('judul'),
            'subjudul'=>$this->input->post('subjudul'),
            'why1a'=>$this->input->post('why1a'),
            'why1b'=>$this->input->post('why1b'),
            'why2a'=>$this->input->post('why2b'),
            'why2b'=>$this->input->post('why2b'),
            'why3a'=>$this->input->post('why3b'),
            'why3b'=>$this->input->post('why3b'),
            'why4a'=>$this->input->post('why4a'),
            'why4b'=>$this->input->post('why4b'),
            
            );
        $this->model_app->updateData('section_map',$data);
        redirect("admin/map");

    }
}
