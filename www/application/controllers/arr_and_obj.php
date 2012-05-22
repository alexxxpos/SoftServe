<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Arr_and_obj extends CI_Controller {

    private $scripts = array(); //list of scripts
    private $css = array(); //list of styles
    public $data = array(); //list of parametrs

    public function __construct() {
        parent::__construct();

        $this->load->database(); // work with database
        $this->load->helper('url');  // work with redirect and base_url()
        $this->load->model('arr_and_obj/main_model');
        //initialization of all we need
        $this->scripts[0] = 'js/jquery-1.7.1.js';
        $this->scripts[1] = 'js/jquery-ui-1.8.20.js';
        $this->scripts[2] = 'js/arr_and_obj/script.js';
        $this->css[0] = 'css/arr_and_obj/style.css';


        $this->data['scripts'] = $this->scripts;
        $this->data['css'] = $this->css;
    }

    public function index() {
        $this->data['title'] = 'Array and Object';
        $this->data['all_cards'] = $this->main_model->get_all_cards();
        $id = array();
        foreach ($this->data['all_cards'] as $value) {
            $id[] = $value->id;
        }
        $this->data['id'] = $id;
        $this->load->view('header_view', $this->data); //header
        $this->load->view('arr_and_obj/main_view', $this->data); // current page
        $this->load->view('footer_view'); // footer
    }

    public function all_records() {
        $result = '<table id="info" class="tabstyle"><thead><tr>
                        <th>ФИО</th> <th>Фирма</th> <th>Должность</th> <th>Email</th> <th>Телефон</th> 
                   </tr></thead><tbody>';
        foreach ($this->main_model->get_all_cards() as $value) {
            $result.= '<tr><td>' . $value->name . '</td><td>' . $value->company . '</td><td>' . $value->job . '</td><td>' . $value->email . '</td><td>' . $value->phone . '</td></tr>';
        }
        $result.='</tbody></table>';
        print_r($result);
    }

    public function choosen_record() {
        $id = $this->input->post('id');
        settype($id, "integer");
        $result = '<table id="info" class="tabstyle"><thead><tr>
                        <th>ФИО</th> <th>Фирма</th> <th>Должность</th> <th>Email</th> <th>Телефон</th> 
                   </tr></thead><tbody>';
        $value = $this->main_model->get_chosen_card($id);
        $value=$value[0];
        $result.= '<tr><td>' . $value->name . '</td><td>' . $value->company . '</td><td>' . $value->job . '</td><td>' . $value->email . '</td><td>' . $value->phone . '</td></tr>';
        $result.='</tbody></table>';
        print_r($result);
    }
    

    public function show_header() {
        $result = '<table id="info" class="tabstyle"><thead><tr>
                        <th>ФИО</th> <th>Фирма</th> <th>Должность</th> <th>Email</th> <th>Телефон</th> 
                   </tr></thead><tbody></tbody></table>';
        print_r($result);
    }

}

