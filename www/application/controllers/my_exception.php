<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class My_exception extends CI_Controller {

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
        $this->scripts[1] = 'js/my_exception/script.js';



        $this->data['scripts'] = $this->scripts;
        $this->data['css'] = $this->css;
    }

    public function index() {
        $this->data['title'] = 'Обработка исключений';
        $this->load->view('header_view', $this->data); //header
        $this->load->view('my_exception/main_view', $this->data); // current page
        $this->load->view('footer_view'); // footer
    }

    public function throwing_e() {
        if (isset($_GET['param'])) {
            $param = (int) $_GET['param'];
            try {
                if ($param) {
                    echo "Отработало нормально";
                } else {
                    throw new Exception('Что-то не так=)');
                }
            } catch (Exception $e) {
                echo 'Вызвано исключение: ', $e->getMessage(), "\n";
            }
        } else {
            echo "Ошибка. Ajax отработал некорректно.";
        }
    }

    public function nested_e() {
        if (isset($_GET['param'])) {
            $param = (int) $_GET['param'];
            try {
                if ($param) {
                    echo "Отработало нормально";
                } else {
                    throw new MyException('Что-то не так=)');
                }
            } catch (MyException $e) {
                echo 'Вызвано MyException: ', $e->getMessage(), "\n";
            }
        } else {
            echo "Ошибка. Ajax отработал некорректно.";
        }
    }

    public function following_e() {
        if (isset($_GET['param'])) {
            $name = $_GET['param'];
            try {
                try {
                    if (preg_match('/[^a-z]/i', $name)) {
                        throw new Exception("Что-то не так=)");
                    }
                    echo "Отработало нормально";
                } catch (Exception $e) {
                    throw new Exception("Попробуйте еще раз, спасибо.", 0, $e);
                }
            } catch (Exception $e) {
                if ($e->getPrevious()) {
                    echo "Предыдущее исключение Exception : " . $e->getPrevious()->getMessage() . "|";
                }
                echo "Текущее исключение Exception : " . $e->getMessage() . "|";
            }
        } else {
            echo "Ошибка. Ajax отработал некорректно.";
        }
    }

}

class MyException extends Exception {
    
}
