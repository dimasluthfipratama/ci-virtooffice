<?php
class Katagori extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== PAGES =======================
    function tambah(){
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/katagori/tambah');
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_katagori']=$this->uri->segment(3);
        $data=array(
            'detail_katagori'=>$this->model_app->getSelectedData('katagori',$id)->result(),
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/katagori/edit',$data);
            $this->load->view('admin/footer');
    }

//    ====================== INSERT ========================
    function prosestambah(){
        $data['nama_katagori'] = $this->input->post('nama_katagori');
        $this->model_app->insertData('katagori',$data);
        redirect("admin/catagories");

    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $id['id_katagori'] = $this->input->post('id_katagori');
        $data['nama_katagori'] = $this->input->post('nama_katagori');
        $this->model_app->updateData('katagori',$data,$id);
        redirect("admin/catagories");

    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_katagori'] = $this->uri->segment(3);
        $this->model_app->deleteData('katagori',$id);
        redirect("admin/catagories");
    }
}
