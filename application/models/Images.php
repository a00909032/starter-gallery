<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Images extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function all(){
        $this->db->order_by("id","desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }
}

