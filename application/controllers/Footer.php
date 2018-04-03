<?php
class Footer extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $data['judul'] = $this->input->post('judul');
            $data['deskripsi'] = $this->input->post('deskripsi',true);

        $this->model_app->updateData('footer',$data,$id);
        redirect("admin/footer");

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
                'data_footer'=>$this->model_app->getAllData('footer'),
                'error' => $this->upload->display_errors(),
            );
          $this->load->view('admin/header');
          $this->load->view('admin/sidebar');
          $this->load->view('admin/footer/index',$data);
          $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();
            $data['logo'] = $gambar['file_name'];


        $this->model_app->updateData('footer',$data,$id);
        redirect("admin/footer");
        }
    }

}
