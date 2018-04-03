<?php
class Cta extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $data['judul1'] = $this->input->post('judul');
            $data['isi'] = $this->input->post('isi');

        $this->model_app->updateData('cta',$data);
        redirect("admin/cta");
    }
}
