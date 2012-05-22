<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Array2array extends CI_Controller {

    private $scripts = array(); //list of scripts
    private $css = array(); //list of styles
    private $data = array(); //list of parametrs

    public function __construct() {
        parent::__construct();

        $this->load->helper('url');  // work with redirect and base_url()
        //initialization of all we need
        $this->scripts[0] = 'js/jquery-1.7.1.js';
        $this->scripts[1] = 'js/array2array/script.js';


        $this->data['scripts'] = $this->scripts;
        $this->data['css'] = $this->css;
    }

    public function index() {
        $this->data['title'] = 'Array 2 Array';
 
        $this->load->view('header_view', $this->data); //header
        $this->load->view('array2array/main_view'); // current page
        $this->load->view('footer_view'); // footer
    }



}

