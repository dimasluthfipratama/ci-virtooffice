<?php
class Slider extends CI_Controller{
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
        $this->load->view('admin/slider/tambah',$data);
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_slider']=$this->uri->segment(3);
        $data=array(
            'detail_slider'=>$this->model_app->getSelectedData('slider',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/slider/edit',$data);
            $this->load->view('admin/footer');
    }
    function editgambar(){
        $id['id_slider']=$this->uri->segment(3);
        $data=array(
            'detail_slider'=>$this->model_app->getSelectedData('slider',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/slider/editgambar',$data);
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
          					'data_slider'=>$this->model_app->getAllData('slider'),
                    'error' => $this->upload->display_errors(),
          			);
          		$this->load->view('admin/header');
          		$this->load->view('admin/sidebar');
          		$this->load->view('admin/slider/tambah',$data);
          		$this->load->view('admin/footer');
            }
            else
            {
                 $gambar = $this->upload->data();

            $data['layer1'] = $this->input->post('layer1');
            $data['layer2'] = $this->input->post('layer2');
            $data['tombol1'] = $this->input->post('tombol1');
            $data['tombol2'] = $this->input->post('tombol2');
            $data['url1'] = $this->input->post('url1');
            $data['url2'] = $this->input->post('url2');
            $data['gambar'] = $gambar['file_name'];


            $this->model_app->insertData('slider',$data);
            redirect("admin/slider");
            }
        }

//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_slider'] = $this->input->post('id_slider');
            $data['layer1'] = $this->input->post('layer1');
            $data['layer2'] = $this->input->post('layer2');
            $data['tombol1'] = $this->input->post('tombol1');
            $data['tombol2'] = $this->input->post('tombol2');
            $data['url1'] = $this->input->post('url1');
            $data['url2'] = $this->input->post('url2');
           
           

        $this->model_app->updateData('slider',$data,$id);
        redirect("admin/slider");

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
                      					'data_slider'=>$this->model_app->getAllData('slider'),
                                'error' => $this->upload->display_errors(),
                      			);
                      		$this->load->view('admin/header');
                      		$this->load->view('admin/sidebar');
                      		$this->load->view('admin/slider/index',$data);
                      		$this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_slider'] = $this->input->post('id_slider');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('slider',$data,$id);
        redirect("admin/slider");
        }
    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_slider'] = $this->uri->segment(3);
        $this->model_app->deleteData('slider',$id);
        redirect("admin/slider");
    }

}
