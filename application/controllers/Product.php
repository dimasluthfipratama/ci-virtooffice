<?php
class Product extends CI_Controller{
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
        $this->load->view('admin/product/tambah',$data);
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_product']=$this->uri->segment(3);
        $data=array(
            'detail_product'=>$this->model_app->getSelectedData('product',$id)->result(),
                    'data_katagori'=>$this->model_app->getAllData('katagori'),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/product/edit',$data);
            $this->load->view('admin/footer');
    }
    function editgambar(){
        $id['id_product']=$this->uri->segment(3);
        $data=array(
            'detail_product'=>$this->model_app->getSelectedData('product',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/product/editgambar',$data);
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
      					'data_product'=>$this->model_app->getAllData('product'),
                'error' => $this->upload->display_errors(),
      			);
      		$this->load->view('admin/header');
      		$this->load->view('admin/sidebar');
      		$this->load->view('admin/product/tambah',$data);
      		$this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $data['judul1'] = $this->input->post('judul1');
            $data['judul2'] = $this->input->post('judul2');
            $data['id_katagori'] = $this->input->post('id_katagori',true);
            $data['deskripsi'] = $this->input->post('deskripsi',true);
            $data['url'] = $this->input->post('url');
            $data['galery'] = $gambar['file_name'];


        $this->model_app->insertData('product',$data,$id);
        redirect("admin/product");
        }
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_product'] = $this->input->post('id_product');
            $data['judul1'] = $this->input->post('judul1');
            $data['judul2'] = $this->input->post('judul2');
            $data['id_katagori'] = $this->input->post('id_katagori',true);
            $data['url'] = $this->input->post('url');
            $data['deskripsi'] = $this->input->post('deskripsi',true);

        $this->model_app->updateData('product',$data,$id);
        redirect("admin/product");

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
      					'data_product'=>$this->model_app->getAllData('product'),
                'error' => $this->upload->display_errors(),
      			);
      		$this->load->view('admin/header');
      		$this->load->view('admin/sidebar');
      		$this->load->view('admin/product/index',$data);
      		$this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_product'] = $this->input->post('id_product');
            $data['galery'] = $gambar['file_name'];


        $this->model_app->updateData('product',$data,$id);
        redirect("admin/product");
        }
    }
//    ======================== EDIT BANNER =======================
    function proseseditbanner()
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
                        'data_productbanner'=>$this->model_app->getAllData('gambar'),
                'error' => $this->upload->display_errors(),
                );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/productbanner/editbanner',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_gambar'] = $this->input->post('id_gambar');
            $data['galery'] = $gambar['file_name'];


        $this->model_app->updateData('gambar',$data,$id);
        redirect("admin/productbanner");
        }
    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_product'] = $this->uri->segment(3);
        $this->model_app->deleteData('product',$id);
        redirect("admin/product");
    }
}
