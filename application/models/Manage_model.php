<?php

class Manage_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->users_table  = 'product';
    }

    function get_all_product()
    {
        $this->db->select('*');
        $this->db->order_by('product_id', 'asc');
        $query = $this->db->get('product');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}
