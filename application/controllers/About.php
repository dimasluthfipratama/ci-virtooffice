<?php
class About extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $data['judul'] = $this->input->post('judul');
            $data['subjudul'] = $this->input->post('subjudul');
            $data['icon1'] = $this->input->post('icon1');
            $data['icon2'] = $this->input->post('icon2');
            $data['icon3'] = $this->input->post('icon3');
            $data['deskripsi'] = $this->input->post('deskripsi',true);

        $this->model_app->updateData('section_about',$data,$id);
        redirect("admin/about");

    }

}
