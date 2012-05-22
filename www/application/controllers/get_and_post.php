<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Get_and_post extends CI_Controller {

    private $scripts = array(); //list of scripts
    private $css = array(); //list of styles
    private $data = array(); //list of parametrs

    public function __construct() {
        parent::__construct();

        $this->load->helper('url');  // work with redirect and base_url()
        //initialization of all we need
        $this->scripts[0] = 'js/jquery-1.7.1.js';
        $this->scripts[1] = 'js/get_and_post/script.js';
        $this->css[0] = 'css/get_and_post/style.css';


        $this->data['scripts'] = $this->scripts;
        $this->data['css'] = $this->css;
    }

    public function index() {
        $this->data['title'] = 'Do Drag&Drop';

        $this->load->view('header_view', $this->data); //header
        $this->load->view('get_and_post/main_view'); // current page
        $this->load->view('footer_view'); // footer
    }

    public function get_result() {
        $this->data['title'] = 'Get';
        $info['type'] = 'Get';
        $info['email'] = $_GET['email'];
        $info['password'] = $_GET['password'];

        $info['name'] = $_GET['name'];
        $info['tel'] = $_GET['tel'];
        $info['city'] = $_GET['city'];
        $info['country'] = $_GET['country'];
        $info['web'] = $_GET['web'];
        $info['gender'] = $_GET['gender'];
        $info['date'] = $_GET['date'];
        $info['month'] = $_GET['month'];
        $info['nationality'] = $_GET['nationality'];
        if (isset($_GET['children'])) {
            $info['children'] = $_GET['children'];
        } else {
            $info['children'] = 'нет';
        }

        $this->load->view('header_view', $this->data); //header
        $this->load->view('get_and_post/information', $info); // current page
        $this->load->view('footer_view'); // footer
    }

    public function post_result() {
        $this->data['title'] = 'Post';
        $info['type'] = 'Post';
        $info['email'] = $_POST['email'];
        $info['password'] = $_POST['password'];

        $info['name'] = $_POST['name'];
        $info['tel'] = $_POST['tel'];
        $info['city'] = $_POST['city'];
        $info['country'] = $_POST['country'];
        $info['web'] = $_POST['web'];
        $info['gender'] = $_POST['gender'];
        $info['date'] = $_POST['date'];
        $info['month'] = $_POST['month'];
        $info['nationality'] = $_POST['nationality'];
        if (isset($_POST['children'])) {
            $info['children'] = $_POST['children'];
        } else {
            $info['children'] = 'нет';
        }

        $this->load->view('header_view', $this->data); //header
        $this->load->view('get_and_post/information', $info); // current page
        $this->load->view('footer_view'); // footer
    }

}

