<?php
class Layanan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
  //======================== PAGES =======================
    function tambah(){
            $data=array(
                    'data_services'=>$this->model_app->getAllData('services'),
            'error' => ' ',
            );
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/layanan/tambah',$data);
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_services']=$this->uri->segment(3);
        $data=array(
            'detail_layanan'=>$this->model_app->getSelectedData('services',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/layanan/edit',$data);
            $this->load->view('admin/footer');
    }
    function editgambar(){
        $id['id_services']=$this->uri->segment(3);
        $data=array(
            'detail_layanan'=>$this->model_app->getSelectedData('services',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/layanan/editgambar',$data);
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
                        'data_layanan'=>$this->model_app->getAllData('services'),
                'error' => $this->upload->display_errors(),
                );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/layanan/tambah',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $data['judul'] = $this->input->post('judul');
            $data['url'] = $this->input->post('url');
            $data['deskripsi'] = $this->input->post('deskripsi',true);
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->insertData('services',$data,$id);
        redirect("admin/layanan");
        }
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_services'] = $this->input->post('id_services');
            $data['judul'] = $this->input->post('judul');
            $data['url'] = $this->input->post('url');
            $data['deskripsi'] = $this->input->post('deskripsi',true);
           
           

        $this->model_app->updateData('services',$data,$id);
        redirect("admin/layanan");

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
                        'data_layanan'=>$this->model_app->getAllData('services'),
                'error' => $this->upload->display_errors(),
                );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/layanan/index',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_services'] = $this->input->post('id_services');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('services',$data,$id);
        redirect("admin/layanan");
        }
    }

//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_services'] = $this->uri->segment(3);
        $this->model_app->deleteData('services',$id);
        redirect("admin/layanan");
    }
}
