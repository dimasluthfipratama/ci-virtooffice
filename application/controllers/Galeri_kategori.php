<?php
class Galeri_kategori extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== PAGES =======================
    function tambah(){
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/galeri_kategori/tambah');
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_galeri_kategori']=$this->uri->segment(3);
        $data=array(
            'detail_galeri_kategori'=>$this->model_app->getSelectedData('galeri_kategori',$id)->result(),
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/galeri_kategori/edit',$data);
            $this->load->view('admin/footer');
    }

//    ====================== INSERT ========================
    function prosestambah(){
        $data['judul'] = $this->input->post('judul');
        $data['url'] = $this->input->post('url');
        $this->model_app->insertData('galeri_kategori',$data);
        redirect("admin/catagories");

    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $id['id_galeri_kategori'] = $this->input->post('id_galeri_kategori');
        $data['judul'] = $this->input->post('judul');
        $data['url'] = $this->input->post('url');
        $this->model_app->updateData('galeri_kategori',$data,$id);
        redirect("admin/catagories");

    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_galeri_kategori'] = $this->uri->segment(3);
        $this->model_app->deleteData('galeri_kategori',$id);
        redirect("admin/catagories");
    }
}
