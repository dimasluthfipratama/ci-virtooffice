<?php
class Testimonial extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        $this->load->helper(array('form', 'url'));
    }
//    ======================== PAGES =======================
    function tambah(){
    $data=array(
                    'data_testimoni'=>$this->model_app->getAllData('testimoni'),
            'error' => ' ',
    );
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/testimonial/tambah',$data);
        $this->load->view('admin/footer');
    }

    function editgambar(){
        $id['id_testimoni']=$this->uri->segment(3);
        $data=array(
            'detail_testimoni'=>$this->model_app->getSelectedData('testimoni',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/testimonial/editgambar',$data);
            $this->load->view('admin/footer');
    }

    function edit(){
        $id['id_testimoni']=$this->uri->segment(3);
        $data=array(
            'detail_testimonial'=>$this->model_app->getSelectedData('testimoni',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/testimonial/edit',$data);
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
                        'data_testimoni'=>$this->model_app->getAllData('testimoni'),
                'error' => $this->upload->display_errors(),
                );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/testimonial/tambah',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $data['nama'] = $this->input->post('nama');
            $data['jabatan'] = $this->input->post('jabatan');
            $data['testimoni'] = $this->input->post('testimoni');
            $data['id_testimoni'] = $this->input->post('id_testimoni',true);
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->insertData('testimoni',$data,$id);
        redirect("admin/testimonial");
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
                        'data_testimoni'=>$this->model_app->getAllData('testimoni'),
                'error' => $this->upload->display_errors(),
                );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/testimonial/index',$data);
            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_testimoni'] = $this->input->post('id_testimoni');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('testimoni',$data,$id);
        redirect("admin/testimonial");
        }
    }

//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_testimoni'] = $this->input->post('id_testimoni');
            $data['nama'] = $this->input->post('nama');
            $data['jabatan'] = $this->input->post('jabatan');
            $data['testimoni'] = $this->input->post('testimoni');


        $this->model_app->updateData('testimoni',$data,$id);
        redirect("admin/testimonial");
    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_testimoni'] = $this->uri->segment(3);
        $this->model_app->deleteData('testimoni',$id);
        redirect("admin/testimonial");
    }
}
