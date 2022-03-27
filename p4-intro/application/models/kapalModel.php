<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kapalModel extends CI_Model {
    public function getAllKapal() {
        $this->db->select('*');
        $this->db->from('data_kapal');

        return $this->db->get()->result_array();
    }
    // public function getAllKapal() {
    //     return $this->db->query("SELECT * FROM data_kapal")->result_array();
    // }

}
