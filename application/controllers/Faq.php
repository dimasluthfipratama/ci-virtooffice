<?php
class Faq extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== PAGES =======================
    function tambah(){
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/faq/tambah');
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_faq']=$this->uri->segment(3);
        $data=array(
            'detail_faq'=>$this->model_app->getSelectedData('faq',$id)->result(),
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/faq/edit',$data);
            $this->load->view('admin/footer');
    }

//    ====================== INSERT ========================
    function prosestambah(){
        $data=array(
            'soal'=>$this->input->post('soal'),
            'jawaban'=>$this->input->post('jawaban')
            );
        $this->model_app->insertData('faq',$data);
        redirect("admin/faq");

    }
//    ======================== EDIT =======================
    function prosesedit()
    {
        $id['id_faq'] = $this->input->post('id_faq');
        $data=array(
            'soal'=>$this->input->post('soal'),
            'jawaban'=>$this->input->post('jawaban')
            );
        $this->model_app->updateData('faq',$data,$id);
        redirect("admin/faq");

    }
//    ======================== EDIT BACKGROUND =======================
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
      					'data_faqbackground'=>$this->model_app->getAllData('faqbackground'),
                'error' => $this->upload->display_errors(),
      			);
      		$this->load->view('admin/header');
      		$this->load->view('admin/sidebar');
      		$this->load->view('admin/faq/background',$data);
      		$this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_faqbackground'] = $this->input->post('id_faqbackground');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('faqbackground',$data,$id);
        redirect("admin/faqbackground");
        }
    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_faq'] = $this->uri->segment(3);
        $this->model_app->deleteData('faq',$id);
        redirect("admin/faq");
    }
}
