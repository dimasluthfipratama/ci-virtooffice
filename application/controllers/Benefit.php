<?php
class Benefit extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
  //======================== PAGES =======================
    function tambah(){
            $data=array(
                    'data_benefit'=>$this->model_app->getAllData('benefit'),
            'error' => ' ',
            );
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/benefit/tambah',$data);
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_benefit']=$this->uri->segment(3);
        $data=array(
            'detail_benefit'=>$this->model_app->getSelectedData('benefit',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/benefit/edit',$data);
            $this->load->view('admin/footer');
    }
    function editgambar(){
        $id['id_benefit']=$this->uri->segment(3);
        $data=array(
            'detail_benefit'=>$this->model_app->getSelectedData('benefit',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/benefit/editgambar',$data);
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
                        'data_benefit'=>$this->model_app->getAllData('benefit'),
                'error' => $this->upload->display_errors(),
                );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/benefit/tambah',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $data['judul'] = $this->input->post('judul');
            
            $data['deskripsi'] = $this->input->post('deskripsi',true);
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->insertData('benefit',$data,$id);
        redirect("admin/benefit");
        }
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_benefit'] = $this->input->post('id_benefit');
            $data['judul'] = $this->input->post('judul');
           
            $data['deskripsi'] = $this->input->post('deskripsi',true);
           
           

        $this->model_app->updateData('benefit',$data,$id);
        redirect("admin/benefit");

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
                        'data_benefit'=>$this->model_app->getAllData('benefit'),
                'error' => $this->upload->display_errors(),
                );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/benefit/index',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_benefit'] = $this->input->post('id_benefit');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('benefit',$data,$id);
        redirect("admin/benefit");
        }
    }

//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_benefit'] = $this->uri->segment(3);
        $this->model_app->deleteData('benefit',$id);
        redirect("admin/benefit");
    }
}
