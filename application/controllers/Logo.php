<?php
class Logo extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== EDIT =======================
    function prosesedit()
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
      					'data_setting'=>$this->model_app->getAllData('setting'),
                'error' => $this->upload->display_errors(),
      			);
      		$this->load->view('admin/header');
      		$this->load->view('admin/sidebar');
      		$this->load->view('admin/logo/index',$data);
      		$this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_setting'] = $this->input->post('id_setting');
            $data['logo'] = $gambar['file_name'];


        $this->model_app->updateData('setting',$data,$id);
        redirect("admin/logo");
        }
    }
}
