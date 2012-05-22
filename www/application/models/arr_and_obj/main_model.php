<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // all list of cards
    function get_all_cards() {
        return $this->db->query("SELECT * FROM cards")->result();
    }
    
    // only one card using "id"
    function get_chosen_card($id) {
        return $this->db->query("SELECT * FROM cards WHERE id=?",$id)->result();
        //return $res[0];
    }


  
    
}