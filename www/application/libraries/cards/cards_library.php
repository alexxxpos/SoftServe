<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cards_library {

    public function __construct() {
        $CI = & get_instance();
        $CI->load->helper('xml');
    }

    function make_xml($records) {
        $dom = xml_dom(); //New XML document
        $cards = xml_add_child($dom, 'cards');
        foreach ($records AS $card_) :
            $card = xml_add_child($cards, 'card');
            xml_add_attribute($card, 'id', $card_->id);
            xml_add_child($card, 'name', $card_->name);
            xml_add_child($card, 'company', $card_->company);
            xml_add_child($card, 'job', $card_->job);
            xml_add_child($card, 'address', $card_->address);
            xml_add_child($card, 'phone', $card_->phone);
            xml_add_child($card, 'email', $card_->email);
        endforeach;
        return xml_print($dom, $return = TRUE); //@True@ means return string but no object
    }

    function make_json($records) {
        return json_encode($records);
    }

    function save_file($result, $type) {
        $f = fopen("uploads/cards/result." . $type, "w");
        fwrite($f, $result);
        fclose($f);
        return 0;
    }

}

