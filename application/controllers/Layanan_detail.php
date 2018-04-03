<?php
class Layanan_detail extends CI_Controller{
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
        $this->load->view('admin/layanan_detail/tambah',$data);
        $this->load->view('admin/footer');
    }
    function edit(){
        $id['id_layanan_detail']=$this->uri->segment(3);
        $data=array(
            'detail_layanan'=>$this->model_app->getSelectedData('layanan_detail',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/layanan_detail/edit',$data);
            $this->load->view('admin/footer');
    }
    function editgambar(){
        $id['id_layanan_detail']=$this->uri->segment(3);
        $data=array(
            'detail_layanan'=>$this->model_app->getSelectedData('layanan_detail',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/layanan_detail/editgambar',$data);
            $this->load->view('admin/footer');
    }
    function editicon1(){
        $id['id_layanan_detail']=$this->uri->segment(3);
        $data=array(
            'detail_layanan'=>$this->model_app->getSelectedData('layanan_detail',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/layanan_detail/editicon1',$data);
            $this->load->view('admin/footer');
    }

    function editicon2(){
        $id['id_layanan_detail']=$this->uri->segment(3);
        $data=array(
            'detail_layanan'=>$this->model_app->getSelectedData('layanan_detail',$id)->result(),
            'error' => ' ',
        );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/layanan_detail/editicon2',$data);
            $this->load->view('admin/footer');
    }


//    ======================== EDIT =======================
    function prosesedit()
    {
            $id['id_layanan_detail'] = $this->input->post('id_layanan_detail');
            $data['judul'] = $this->input->post('judul');
            $data['deskripsi'] = $this->input->post('deskripsi',true);


        $this->model_app->updateData('layanan_detail',$data,$id);
        redirect("admin/layanan_detail");
        
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
                                        'detail_layanan'=>$this->model_app->getAllData('layanan_detail'),
                                'error' => $this->upload->display_errors(),
                                );
                            $this->load->view('admin/header');
                            $this->load->view('admin/sidebar');
                            $this->load->view('admin/layanan_detail/index',$data);
                            $this->load->view('admin/footer');
        }
        else
        {
            $gambar = $this->upload->data();

            $id['id_layanan_detail'] = $this->input->post('id_layanan_detail');
            $data['gambar'] = $gambar['file_name'];


        $this->model_app->updateData('layanan_detail',$data,$id);
        redirect("admin/layanan_detail");
        }
    }

    function prosesediticon1()
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
                                        'detail_layanan'=>$this->model_app->getAllData('layanan_detail'),
                                'error' => $this->upload->display_errors(),
                                );
                            $this->load->view('admin/header');
                            $this->load->view('admin/sidebar');
                            $this->load->view('admin/layanan_detail/index',$data);
                            $this->load->view('admin/footer');
        }
        else
        {
            $icon1 = $this->upload->data();

            $id['id_layanan_detail'] = $this->input->post('id_layanan_detail');
            $data['icon1'] = $icon1['file_name'];


        $this->model_app->updateData('layanan_detail',$data,$id);
        redirect("admin/layanan_detail");
        }
    }

     function prosesediticon2()
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
                                        'detail_layanan'=>$this->model_app->getAllData('layanan_detail'),
                                'error' => $this->upload->display_errors(),
                                );
                            $this->load->view('admin/header');
                            $this->load->view('admin/sidebar');
                            $this->load->view('admin/layanan_detail/index',$data);
                            $this->load->view('admin/footer');
        }
        else
        {
            $icon2 = $this->upload->data();

            $id['id_layanan_detail'] = $this->input->post('id_layanan_detail');
            $data['icon2'] = $icon2['file_name'];


        $this->model_app->updateData('layanan_detail',$data,$id);
        redirect("admin/layanan_detail");
        }
    }
//    ========================== DELETE =======================
    function proseshapus(){
        $id['id_layanan_detail'] = $this->uri->segment(3);
        $this->model_app->deleteData('layanan_detail',$id);
        redirect("admin/layanan_detail");
    }

}
