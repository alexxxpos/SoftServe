<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sort_types extends CI_Controller {

    private $scripts = array(); //list of scripts
    private $css = array(); //list of styles
    private $data = array(); //list of parametrs

    public function __construct() {
        parent::__construct();

        $this->load->library('sort/sort_library');
        $this->load->helper('url');  // work with redirect and base_url()
        //initialization of all we need
        $this->scripts[0] = 'js/jquery-1.7.1.js';
        $this->scripts[1] = 'js/sort_types/script.js';
        $this->css[0] = 'css/sort_types/style.css';


        $this->data['scripts'] = $this->scripts;
        $this->data['css'] = $this->css;
    }

    public function index() {
        $this->data['title'] = 'Sort';

        $this->load->view('header_view', $this->data); //header
        $this->load->view('sort_types/main_view'); // current page
        $this->load->view('footer_view'); // footer
    }

    public function sorting() {
        $order = $this->input->get('order');
        $size = $this->input->get('size');
        settype($size, "integer");

        $a = range(1, $size); // create array from 1 to $size
        shuffle($a);       // shake array

        /*
          $result['obmen'] = ($this->sort_library->obmen($a, $order)); // obmen
          $result['vibor'] = ($this->sort_library->vibor($a, $order)); // vibor
          $result['vstavka'] = ($this->sort_library->vstavka($a, $order)); // vstavka
          $result['shaker'] = ($this->sort_library->shaker($a, $order)); // shaker
          $result['quick_sort'] = ($this->sort_library->quick_sort($a)); // quick_sort
          $result['gnomeSort'] = ($this->sort_library->gnomeSort($a)); // gnomeSort
          $result['counting_sort'] = ($this->sort_library->counting_sort($a)); //counting_sort

         */

        for ($i = 0; $i < $size; $i++) {
            $num = new Num($a[$i]);
            $a[$i] = $num;
        }

        $result['obmen'] = ($this->sort_library->obmen_o($a)); // obmen
        $result['vibor'] = ($this->sort_library->vibor_o($a)); // vibor
        $result['vstavka'] = ($this->sort_library->vstavka_o($a)); // vstavka
        $result['shaker'] = ($this->sort_library->shaker_o($a)); // shaker
        $result['quick_sort'] = ($this->sort_library->quick_sort_o($a)); // quick_sort
        $result['gnomeSort'] = ($this->sort_library->gnomeSort_o($a)); // gnomeSort
        $result['counting_sort'] = ($this->sort_library->counting_sort_o($a)); //counting_sort

      
        echo json_encode($result);
    }

}

class Num {

    public $num = 0;

    public function __construct($a) {
        $this->num = $a;
    }

}
