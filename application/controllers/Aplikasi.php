<?php
class Asplikasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $data['judul'] = $this->input->post('judul');
            $data['playstore'] = $this->input->post('playstore');
            $data['appstore'] = $this->input->post('appstore');
            $data['deskripsi'] = $this->input->post('deskripsi',true);

        $this->model_app->updateData('aplikasi',$data,$id);
        redirect("admin/aplikasi");

    }
//    ======================== EDIT IMAGES =======================
    function proseseditgambar()
    {
        $config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('userfile'))
        {
            $data=array(
                'data_aplikasi'=>$this->model_app->getAllData('aplikasi'),
                'error' => $this->upload->display_errors(),
            );
          $this->load->view('admin/header');
          $this->load->view('admin/sidebar');
          $this->load->view('admin/aplikasi/index',$data);
          $this->load->view('admin/aplikasi');
        }
        else
        {
            $gambar = $this->upload->data();
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('aplikasi',$data,$id);
        redirect("admin/aplikasi");
        }
    }

}
