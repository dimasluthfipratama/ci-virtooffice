<?php
class Event extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== PAGES =======================
    function tambah(){
    $data=array(
                    'data_event'=>$this->model_app->getAllData('event'),
            'error' => ' ',
    );
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/event/tambah',$data);
        $this->load->view('admin/footer');
    }

    function editgambar(){
        $id['id_event']=$this->uri->segment(3);
        $data=array(
            'detail_event'=>$this->model_app->getSelectedData('event',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/event/editgambar',$data);
            $this->load->view('admin/footer');
    }

    function edit(){
        $id['id_event']=$this->uri->segment(3);
        $data=array(
            'detail_event'=>$this->model_app->getSelectedData('event',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/event/edit',$data);
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
                        'data_event'=>$this->model_app->getAllData('event'),
                'error' => $this->upload->display_errors(),
                );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/event/tambah',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $data['tanggal'] = $this->input->post('tanggal');
            $data['bulan'] = $this->input->post('bulan');
            $data['tema'] = $this->input->post('tema');
            $data['judul'] = $this->input->post('judul');
            $data['deskripsi'] = $this->input->post('deskripsi');
            $data['url'] = $this->input->post('url');
            $data['id_event'] = $this->input->post('id_event',true);
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->insertData('event',$data,$id);
        redirect("admin/event");
        }
    }

    //    ======================== EDIT GAMBAR =======================
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
                        'data_event'=>$this->model_app->getAllData('event'),
                'error' => $this->upload->display_errors(),
                );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/event/index',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_event'] = $this->input->post('id_event');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('event',$data,$id);
        redirect("admin/event");
        }
    }

//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_event'] = $this->input->post('id_event');
            $data['tanggal'] = $this->input->post('tanggal');
            $data['bulan'] = $this->input->post('bulan');
            $data['tema'] = $this->input->post('tema');
            $data['judul'] = $this->input->post('judul');
            $data['deskripsi'] = $this->input->post('deskripsi');


        $this->model_app->updateData('event',$data,$id);
        redirect("admin/event");
    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_event'] = $this->uri->segment(3);
        $this->model_app->deleteData('event',$id);
        redirect("admin/event");
    }
}
