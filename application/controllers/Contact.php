<?php
class Contact extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ====================== INSERT ========================
    function prosestambah(){
        $data=array(
            'nama'=>$this->input->post('nama'),
            'email'=>$this->input->post('email'),
            'isi'=>$this->input->post('isi')
            );
        $this->model_app->insertData('pesan',$data);
        redirect("/");

    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $data=array(
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('isi')
            );
        $this->model_app->updateData('kontak',$data);
        redirect("admin/contactus");

    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_pesan'] = $this->uri->segment(3);
        $this->model_app->deleteData('pesan',$id);
        redirect("admin/contactus");
    }
}
