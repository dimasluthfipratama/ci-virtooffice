<?php
class Tradeshow extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url', 'text'));
    }
//    ======================== PAGES =======================
    function tambah(){
  			$data=array(
            'error' => ' ',
  			);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/tradeshow/tambah',$data);
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_tradeshow']=$this->uri->segment(3);
        $data=array(
            'detail_tradeshow'=>$this->model_app->getSelectedData('tradeshow',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/tradeshow/edit',$data);
            $this->load->view('admin/footer');
    }
    function editgambar(){
        $id['id_tradeshow']=$this->uri->segment(3);
        $data=array(
            'detail_tradeshow'=>$this->model_app->getSelectedData('tradeshow',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/tradeshow/editgambar',$data);
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
      					'data_tradeshow'=>$this->model_app->getAllData('tradeshow'),
                'error' => $this->upload->display_errors(),
      			);
      		$this->load->view('admin/header');
      		$this->load->view('admin/sidebar');
      		$this->load->view('admin/tradeshow/tambah',$data);
      		$this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $data['judul'] = $this->input->post('judul');
            $data['isi'] = $this->input->post('isi',true);
            $data['url'] = $this->input->post('url');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->insertData('tradeshow',$data,$id);
        redirect("admin/tradeshow");
        }
    }
//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_tradeshow'] = $this->input->post('id_tradeshow');
            $data['judul'] = $this->input->post('judul');
            $data['isi'] = $this->input->post('isi',true);
            $data['url'] = $this->input->post('url',true);

        $this->model_app->updateData('tradeshow',$data,$id);
        redirect("admin/tradeshow");

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
      					'data_tradeshow'=>$this->model_app->getAllData('tradeshow'),
                'error' => $this->upload->display_errors(),
      			);
      		$this->load->view('admin/header');
      		$this->load->view('admin/sidebar');
      		$this->load->view('admin/tradeshow/index',$data);
      		$this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_tradeshow'] = $this->input->post('id_tradeshow');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('tradeshow',$data,$id);
        redirect("admin/tradeshow");
        }
    }
//    ======================== EDIT GAMBAR =======================
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
                        'data_tradeshowbanner'=>$this->model_app->getAllData('tradeshowbanner'),
                'error' => $this->upload->display_errors(),
                );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/tradeshow/editbanner',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_tradeshowbanner'] = $this->input->post('id_tradeshowbanner');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('tradeshowbanner',$data,$id);
        redirect("admin/tradeshowbanner");
        }
    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_tradeshow'] = $this->uri->segment(3);
        $this->model_app->deleteData('tradeshow',$id);
        redirect("admin/tradeshow");
    }
}
