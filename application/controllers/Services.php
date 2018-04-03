<?php
class Services extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url', 'text'));
    }
//    ======================== PAGES =======================
    function edit(){
        $id['id_services']=$this->uri->segment(3);
        $data=array(
            'detail_services'=>$this->model_app->getSelectedData('services',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/services/edit',$data);
            $this->load->view('admin/footer');
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_services'] = $this->input->post('id_services');
            $data['judul1'] = $this->input->post('judul1');
            $data['judul2'] = $this->input->post('judul2');
            $data['text'] = $this->input->post('text');
            $data['services1'] = $this->input->post('services1');
            $data['servicestext1'] = $this->input->post('servicestext1');
            $data['services2'] = $this->input->post('services2');
            $data['servicestext2'] = $this->input->post('servicestext2');
            $data['services3'] = $this->input->post('services3');
            $data['servicestext3'] = $this->input->post('servicestext3');

        $this->model_app->updateData('services',$data,$id);
        redirect("admin/services");

    }
}
