<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
    }

    function index(){
        $this->load->view('admin/login');
    }

    function cek_login() {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->model_app->login($username, $password);
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                //create the session
                $sess_array = array(
                    'USERNAME' => $row->username,
                    'PASS'=>$row->password,
                    'login_status'=>true,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);
                redirect('admin','refresh');
            }
            return TRUE;
        } else {
            //if form validate false
            redirect('login','refresh');
            return FALSE;
        }
    }

    function logout() {
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('PASS');
        $this->session->unset_userdata('login_status');
        redirect('login');
    }
}
