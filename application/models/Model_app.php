<?php

class Model_app extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }
    function get_product_category($data,$table)
    {
        $this->db->where($data, $this->uri->segment(3));
        $this->db->get($table);
        
        //return $query->row();
        //return $query->row_array();

    }

    function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        //$this->db->where('password', $password);
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
}
