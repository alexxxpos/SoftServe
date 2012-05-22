<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cards extends CI_Controller {

    private $scripts = array(); //list of scripts
    private $css = array(); //list of styles
    private $data = array(); //list of parametrs

    public function __construct() {
        parent::__construct();
        $this->load->database(); // work with database
        $this->load->helper('url');  // work with redirect and base_url()
        $this->load->model('cards/main_model');
        $this->load->library('cards/cards_library');

        //initialization of all we need
        $this->scripts[0] = 'js/jquery-1.7.1.js';
        $this->scripts[1] = 'js/cards/script.js';
        $this->css[0] = 'css/cards/style.css';


        $this->data['scripts'] = $this->scripts;
        $this->data['css'] = $this->css;
    }

    public function index() {
        $this->data['title'] = 'Cadrs support';
        $this->data['all_cards'] = $this->main_model->get_all_cards();
        $this->load->view('header_view', $this->data); //header
        $this->load->view('cards/main_view'); // current page
        $this->load->view('footer_view'); // footer
    }

    public function save() {
        // this function save records in XML or Json
        // get ajax data from client
        $id = $this->input->get('id');
        settype($id, "integer");
        $type = $this->input->get('type');
        $count = $this->input->get('count');
        // get ajax data from client
        // 
        // recive records we need from DB
        if ($count == "all") {
            $records = $this->main_model->get_all_cards();
        } else {
            $records = $this->main_model->get_chosen_card($id);
        }
        // recive records we need from DB
        // 
        // make xml file from records
        if ($type == "xml") {
            $result = $this->cards_library->make_xml($records);
        }
        // make xml file from records

        // make json file from records
        if ($type == "json") {
            $result = $this->cards_library->make_json($records);
        }
        // make json file from records
        $this->cards_library->save_file($result, $type);

        echo base_url() . "uploads/cards/result." . $type;
    }

}

