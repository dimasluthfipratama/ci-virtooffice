<?php
class Galery extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url', 'text'));
    }
//    ======================== PAGES =======================
    function tambah(){
  			$data=array(
                    'data_galeri_kategori'=>$this->model_app->getAllData('galeri_kategori'),
            'error' => ' ',
  			);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/galery/tambah',$data);
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_galeri']=$this->uri->segment(3);
        $data=array(
            'detail_galery'=>$this->model_app->getSelectedData('galeri',$id)->result(),
                    'data_galeri_kategori'=>$this->model_app->getAllData('galeri_kategori'),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/galery/edit',$data);
            $this->load->view('admin/footer');
    }
    function editgambar(){
        $id['id_galeri']=$this->uri->segment(3);
        $data=array(
            'detail_galery'=>$this->model_app->getSelectedData('galeri',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/galery/editgambar',$data);
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
      					'data_galery'=>$this->model_app->getAllData('galeri'),
                'error' => $this->upload->display_errors(),
      			);
      		$this->load->view('admin/header');
      		$this->load->view('admin/sidebar');
      		$this->load->view('admin/galery/tambah',$data);
      		$this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $data['judul'] = $this->input->post('judul');
            $data['subjudul'] = $this->input->post('subjudul');
            $data['id_galeri_kategori'] = $this->input->post('id_galeri_kategori',true);
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->insertData('galeri',$data,$id);
        redirect("admin/galery");
        }
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_galeri'] = $this->input->post('id_galeri');
            $data['judul'] = $this->input->post('judul');
            $data['subjudul'] = $this->input->post('subjudul');
            $data['id_galeri_kategori'] = $this->input->post('id_galeri_kategori',true);
           
           

        $this->model_app->updateData('galeri',$data,$id);
        redirect("admin/galery");

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
      					'data_galery'=>$this->model_app->getAllData('galeri'),
                'error' => $this->upload->display_errors(),
      			);
      		$this->load->view('admin/header');
      		$this->load->view('admin/sidebar');
      		$this->load->view('admin/galery/index',$data);
      		$this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_galeri'] = $this->input->post('id_galeri');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('galeri',$data,$id);
        redirect("admin/galery");
        }
    }

//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_galeri'] = $this->uri->segment(3);
        $this->model_app->deleteData('galeri',$id);
        redirect("admin/galery");
    }
}
