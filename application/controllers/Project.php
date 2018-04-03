<?php
class Project extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url', 'text'));
    }
//    ======================== PAGES =======================
    function tambah(){
      $data=array(
					'data_katagori'=>$this->model_app->getAllData('katagori'),
          'error' => ' ',
        );
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/project/tambah',$data);
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_projects']=$this->uri->segment(3);
        $data=array(
            'detail_project'=>$this->model_app->getSelectedData('projects',$id)->result(),
            'detail_project2'=>$this->model_app->getSelectedData('projects',$id)->result(),
      			'data_katagori'=>$this->model_app->getAllData('katagori'),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/project/edit',$data);
            $this->load->view('admin/footer');
    }
    function editgambar(){
        $id['id_projects']=$this->uri->segment(3);
        $data=array(
            'detail_project'=>$this->model_app->getSelectedData('projects',$id)->result(),
            'detail_project2'=>$this->model_app->getSelectedData('projects',$id)->result(),
      			'data_katagori'=>$this->model_app->getAllData('katagori'),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/project/editgambar',$data);
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
    					'data_katagori'=>$this->model_app->getAllData('katagori'),
              'error' => $this->upload->display_errors(),
            );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/project/tambah',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $data['judul'] = $this->input->post('judul');
            $data['isi'] = $this->input->post('isi',true);
            $data['id_katagori'] = $this->input->post('id_katagori',true);
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->insertData('projects',$data);
        redirect("admin/projects");
        }
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_projects'] = $this->input->post('id_projects');
            $data['judul'] = $this->input->post('judul');
            $data['isi'] = $this->input->post('isi',true);
            $data['id_katagori'] = $this->input->post('id_katagori',true);

        $this->model_app->updateData('projects',$data,$id);
        redirect("admin/projects");

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
    					'data_projects'=>$this->model_app->getAllData('projects'),
              'error' => $this->upload->display_errors(),
            );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/project/index',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_projects'] = $this->input->post('id_projects');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('projects',$data,$id);
        redirect("admin/projects");
        }
    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_projects'] = $this->uri->segment(3);
        $this->model_app->deleteData('projects',$id);
        redirect("admin/projects");
    }
}
