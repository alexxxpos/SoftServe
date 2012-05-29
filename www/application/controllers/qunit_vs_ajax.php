<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Qunit_vs_ajax extends CI_Controller {

    private $scripts = array(); //list of scripts
    private $css = array(); //list of styles
    private $data = array(); //list of parametrs

    public function __construct() {
        parent::__construct();

        $this->load->helper('url');  // work with redirect and base_url()
        //initialization of all we need
        $this->scripts[0] = 'js/jquery-1.7.1.js';
        $this->scripts[1] = 'js/qunit.js';
        $this->scripts[2] = 'js/qunit_vs_ajax/script.js';
        $this->scripts[3] = 'js/qunit_vs_ajax/qunit_tests.js';
        $this->css[0] = 'css/qunit.css';

        $this->data['scripts'] = $this->scripts;
        $this->data['css'] = $this->css;
    }

    public function index() {
        $this->data['title'] = 'Qunit VS Ajax';
 
        $this->load->view('header_view', $this->data); //header
        $this->load->view('qunit_vs_ajax/main_view'); // current page
        $this->load->view('footer_view'); // footer
    }
    
    public function ajaxtest(){
        if(isset($_POST['a'])){
            echo "Получены параметры с сервера: param1 = ".$_POST['a'];
        }else{
            echo "Ошибка, ничего не пришло";

        }
        
    } 


}

