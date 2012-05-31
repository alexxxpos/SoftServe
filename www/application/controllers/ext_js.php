<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ext_js extends CI_Controller {

    private $scripts = array(); //list of scripts
    private $css = array(); //list of styles
    private $data = array(); //list of parametrs

    public function __construct() {
        parent::__construct();

        $this->load->helper('url');  // work with redirect and base_url()
        //initialization of all we need
        $this->scripts[0] = 'js/ext_js/ext-all.js';
        $this->scripts[1] = 'js/ext_js/script.js';
        $this->css[0] = 'css/ext_js/ext-all.css';


        $this->data['scripts'] = $this->scripts;
        $this->data['css'] = $this->css;
    }

    public function index() {
        $this->data['title'] = 'Ext JS - знакомство';
 
        $this->load->view('header_view', $this->data); //header
        $this->load->view('ext_js/main_view'); // current page
        $this->load->view('footer_view'); // footer
    }



}

