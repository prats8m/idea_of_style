<?php

  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_MODEL{
 
    function __construct(){
        parent::__construct();  
    }

    public function insert_order($data){
        $query = $this->db->insert('order',$data);
        if($this->db->affected_rows()==1){
            return $this->db->insert_id();
        }
        return false;
    }


        public function insert_order_details($data){
        $query = $this->db->insert('order_details',$data);
        if($this->db->affected_rows()==1){
            return $this->db->insert_id();
        }
        return false;
    }

}