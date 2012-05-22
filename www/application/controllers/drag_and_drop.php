<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Drag_and_drop extends CI_Controller {

    private $scripts = array(); //list of scripts
    private $css = array(); //list of styles
    private $data = array(); //list of parametrs

    public function __construct() {
        parent::__construct();

        $this->load->helper('url');  // work with redirect and base_url()
        //initialization of all we need
        $this->scripts[0] = 'js/jquery-1.7.1.js';
        $this->scripts[1] = 'js/jquery-ui-1.8.20.js';
        $this->scripts[2] = 'js/drag_and_drop/script.js';
        $this->css[0] = 'css/drag_and_drop/style.css';


        $this->data['scripts'] = $this->scripts;
        $this->data['css'] = $this->css;
    }

    public function index() {
        $this->data['title'] = 'Do Drag&Drop';
 
        $this->load->view('header_view', $this->data); //header
        $this->load->view('drag_and_drop/main_view'); // current page
        $this->load->view('footer_view'); // footer
    }



}

