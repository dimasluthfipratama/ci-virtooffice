<?php
class Banner extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== PAGES =======================
    function tambah(){
    $data=array(
        'error' => ' ',
    );
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/banner/tambah',$data);
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_banner']=$this->uri->segment(3);
        $data=array(
            'detail_banner'=>$this->model_app->getSelectedData('banner',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/banner/edit',$data);
            $this->load->view('admin/footer');
    }
    function editgambar(){
        $id['id_banner']=$this->uri->segment(3);
        $data=array(
            'detail_banner'=>$this->model_app->getSelectedData('banner',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/banner/editgambar',$data);
            $this->load->view('admin/footer');
    }

    //    ====================== INSERT ========================
        function prosestambah(){
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
          					'data_banner'=>$this->model_app->getAllData('banner'),
                    'error' => $this->upload->display_errors(),
          			);
          		$this->load->view('admin/header');
          		$this->load->view('admin/sidebar');
          		$this->load->view('admin/banner/tambah',$data);
          		$this->load->view('admin/footer');
            }
            else
            {
                $gambar = $this->upload->data();

                $data['url'] = $gambar['file_name'];


            $this->model_app->insertData('banner',$data);
            redirect("admin/banner");
            }
        }
//    =====================EDIT IMAGES=======================
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
                      					'data_banner'=>$this->model_app->getAllData('banner'),
                                'error' => $this->upload->display_errors(),
                      			);
                      		$this->load->view('admin/header');
                      		$this->load->view('admin/sidebar');
                      		$this->load->view('admin/banner/index',$data);
                      		$this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_banner'] = $this->input->post('id_banner');
            $data['url'] = $gambar['file_name'];


        $this->model_app->updateData('banner',$data,$id);
        redirect("admin/banner");
        }
    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_banner'] = $this->uri->segment(3);
        $this->model_app->deleteData('banner',$id);
        redirect("admin/banner");
    }

}
