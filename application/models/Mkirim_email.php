<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Mkirim_email extends CI_Model {



function cek()

{

$this->db->where('id_pesan');

$query = $this->db->get('pesan');

return $query->result_array();

}



function update($data)

{

  $this->db->where('id_pesan');

$this->db->update('pesan',$data);

}



}
