<?php
class Mengapa extends CI_Controller{
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
        $this->load->view('admin/mengapa/tambah',$data);
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_mengapa']=$this->uri->segment(3);
        $data=array(
            'detail_mengapa'=>$this->model_app->getSelectedData('mengapa',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/mengapa/edit',$data);
            $this->load->view('admin/footer');
    }
    function editgambar(){
        $id['id_mengapa']=$this->uri->segment(3);
        $data=array(
            'detail_mengapa'=>$this->model_app->getSelectedData('mengapa',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/mengapa/editgambar',$data);
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
                            'data_mengapa'=>$this->model_app->getAllData('mengapa'),
                    'error' => $this->upload->display_errors(),
                    );
                $this->load->view('admin/header');
                $this->load->view('admin/sidebar');
                $this->load->view('admin/mengapa/tambah',$data);
                $this->load->view('admin/footer');
            }
            else
            {
                $gambar = $this->upload->data();

                $data['judul'] = $this->input->post('judul');
                $data['isi'] = $this->input->post('isi');
                $data['url'] = $gambar['file_name'];


            $this->model_app->insertData('mengapa',$data);
            redirect("admin/mengapa");
            }
        }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_mengapa'] = $this->input->post('id_mengapa');
            $data['judul'] = $this->input->post('judul');
            $data['isi'] = $this->input->post('isi',true);


        $this->model_app->updateData('mengapa',$data,$id);
        redirect("admin/mengapa");
        
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
                                        'data_mengapa'=>$this->model_app->getAllData('mengapa'),
                                'error' => $this->upload->display_errors(),
                                );
                            $this->load->view('admin/header');
                            $this->load->view('admin/sidebar');
                            $this->load->view('admin/mengapa/index',$data);
                            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_mengapa'] = $this->input->post('id_mengapa');
            $data['url'] = $gambar['file_name'];


        $this->model_app->updateData('mengapa',$data,$id);
        redirect("admin/mengapa");
        }
    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_mengapa'] = $this->uri->segment(3);
        $this->model_app->deleteData('mengapa',$id);
        redirect("admin/mengapa");
    }

}
