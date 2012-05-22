<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

interface iTemplate {

    public function compare_o($a, $b);

    public function exchange_o(&$arr, $a, $b);
}

class Sort_library implements iTemplate {

    public function __construct() {
        $CI = & get_instance();
    }

    public function compare_o($a, $b) {
        if ($a->num > $b->num) {
            return 1;
        } else {
            return 0;
        }
    }

    public function exchange_o(&$arr, $a, $b) {
        list($arr[$a], $arr[$b]) = array($arr[$b], $arr[$a]);
    }

    // sorting for numbers
    function obmen($arr, $order) {

        $size = sizeof($arr) - 1;
        $start_time = microtime(true);

        for ($i = $size; $i >= 0; $i--) {
            for ($j = 0; $j <= ($i - 1); $j++) {
                $k = -1;
                if ($order == "bubble") {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $k = $arr[$j];
                    }
                } elseif ($order == "stone") {
                    if ($arr[$j] < $arr[$j + 1]) {
                        $k = $arr[$j];
                    }
                }
                if ($k != -1) {
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $k;
                }
            }
        }

        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $arr;

        return $result['time'];
    }

    function vibor($arr, $order) {

        $size = sizeof($arr) - 1;
        $start_time = microtime(true);

        for ($i = 0; $i < $size; $i++) {
            $k = $i;
            $x = $arr[$i];
            for ($j = $i + 1; $j <= $size; $j++) {
                $marker = 0;
                if ($order == "bubble") {
                    if ($arr[$j] < $x) {
                        $marker = 1;
                    }
                } elseif ($order == "stone") {
                    if ($arr[$j] > $x) {
                        $marker = 1;
                    }
                }
                if ($marker) {
                    $k = $j;
                    $x = $arr[$j];
                    $arr[$k] = $arr[$i];
                    $arr[$i] = $x;
                }
            }
        }


        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $arr;

        return $result['time'];
    }

    function vstavka($arr, $order) {

        $size = sizeof($arr) - 1;
        $start_time = microtime(true);
        $res = array();
        for ($i = 0; $i <= $size; $i++) {  // цикл проходов, i - номер прохода
            $j = $i;
            if ($order == "bubble") {
                while (($j > 0) && ($res[$j - 1] > $arr[$i])) {
                    $res[$j] = $res[$j - 1];
                    $j--;
                }
            } elseif ($order == "stone") {
                while (($j > 0) && ($res[$j - 1] < $arr[$i])) {
                    $res[$j] = $res[$j - 1];
                    $j--;
                }
            }
            $res[$j] = $arr[$i];
        }


        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $res;
        return $result['time'];
    }

    function shaker($arr, $order) {

        $size = sizeof($arr) - 1;
        $start_time = microtime(true);

        $first = 0;
        $last = $size + 1;
        while ($last > $first) {
            for ($i = $first; $i < $last - 1; $i++) {
                if (($order == "bubble") && ($arr[$i] > $arr[$i + 1])) {
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$i + 1];
                    $arr[$i + 1] = $tmp;
                }

                if (($order == "stone") && ($arr[$i] < $arr[$i + 1])) {
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$i + 1];
                    $arr[$i + 1] = $tmp;
                }
            }
            --$last;
            for ($i = $last - 1; $i > $first; $i--) {
                if (($order == "bubble") && ($arr[$i] < $arr[$i - 1])) {
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$i - 1];
                    $arr[$i - 1] = $tmp;
                }

                if (($order == "stone") && ($arr[$i] > $arr[$i - 1])) {
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$i - 1];
                    $arr[$i - 1] = $tmp;
                }
            }
            $first++;
        }

        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $arr;
        return $result['time'];
    }

    function quick_sort($arr, $l = 0, $r = NULL) {
// when the call is recursive we need to change
//the array passed to the function yearlier
        $start_time = microtime(true);
        static $list = array();
        if ($r == NULL)
            $list = $arr;

        if ($r == NULL)
            $r = count($list) - 1; //last element of the array

        $i = $l;
        $j = $r;

        $tmp = $list[(int) ( ($l + $r) / 2 )];

        // partion the array in two parts.
        // left from $tmp are with smaller values,
        // right from $tmp are with bigger ones
        do {
            while ($list[$i] < $tmp)
                $i++;

            while ($tmp < $list[$j])
                $j--;

            // swap elements from the two sides
            if ($i <= $j) {
                $w = $list[$i];
                $list[$i] = $list[$j];
                $list[$j] = $w;

                $i++;
                $j--;
            }
        } while ($i <= $j);

        // devide left side if it is longer the 1 element
        if ($l < $j)
            $this->quick_sort(NULL, $l, $j);

        // the same with the right side
        if ($i < $r)
            $this->quick_sort(NULL, $i, $r);

        // when all partitions have one element
        // the array is sorted
        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $list;
        return $result['time'];
    }

    function gnomeSort($arr) {
        $start_time = microtime(true);
        $size = sizeof($arr) - 1;
        $i = 1;
        $j = 2;
        while ($i < count($arr)) {
            if ($arr[$i - 1] <= $arr[$i]) {
                $i = $j;
                $j++;
            } else {
                list($arr[$i], $arr[$i - 1]) = array($arr[$i - 1], $arr[$i]);
                $i--;
                if ($i == 0) {
                    $i = $j;
                    $j++;
                }
            }
        }
        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $arr;
        return $result['time'];
    }

    function counting_sort($ar) {
        $start_time = microtime(true);

        $count = array();
        foreach ($ar as $v) {
            $count[$v] = isset($count[$v]) ? $count[$v] + 1 : 1;
        }
        $sorted = array();
        $min = min($ar);
        $max = max($ar);
        for ($i = $min; $i < $max; $i++) {
            if (isset($count[$i])) {
                for ($j = 0; $j < $count[$i]; $j++) {
                    $sorted[] = $i;
                }
            }
        }

        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $sorted;
        return $result['time'];
    }

    // sorting for numbers
    // 
    // sorting for objects

    function obmen_o($arr) {

        $size = sizeof($arr) - 1;
        $start_time = microtime(true);

        for ($i = $size; $i >= 0; $i--) {
            for ($j = 0; $j <= ($i - 1); $j++) {
                $k = $this->compare_o($arr[$j], $arr[$j + 1]);
                if ($k) {
                    $this->exchange_o($arr, $j, $j + 1);
                }
            }
        }

        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $arr;

        return $result['time'];
    }

    function vibor_o($arr) {

        $size = sizeof($arr) - 1;
        $start_time = microtime(true);

        for ($i = 0; $i < $size; $i++) {
            $k = $i;
            $x = $arr[$i];
            for ($j = $i + 1; $j <= $size; $j++) {

                $marker = $this->compare_o($x, $arr[$j]);

                if ($marker) {
                    $k = $j;
                    $x = $arr[$j];
                    $this->exchange_o($arr, $j, $i);
                }
            }
        }


        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $arr;

        return $result['time'];
    }

    function vstavka_o($arr) {

        $size = sizeof($arr) - 1;
        $start_time = microtime(true);
        $res = array();
        for ($i = 0; $i <= $size; $i++) {  // цикл проходов, i - номер прохода
            $j = $i;

            while (($j > 0) && ($this->compare_o($res[$j - 1], $arr[$i]))) {
                $res[$j] = $res[$j - 1];
                $j--;
            }

            $res[$j] = $arr[$i];
        }


        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $res;
        return $result['time'];
    }

    function shaker_o($arr) {

        $size = sizeof($arr) - 1;
        $start_time = microtime(true);

        $first = 0;
        $last = $size + 1;
        while ($last > $first) {
            for ($i = $first; $i < $last - 1; $i++) {
                if ($this->compare_o($arr[$i], $arr[$i + 1])) {
                    $this->exchange_o($arr, $i, $i + 1);
                }
            }
            --$last;
            for ($i = $last - 1; $i > $first; $i--) {
                if ($this->compare_o($arr[$i - 1], $arr[$i])) {
                    $this->exchange_o($arr, $i, $i - 1);
                }
            }
            $first++;
        }

        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $arr;
        return $result['time'];
    }

    function quick_sort_o($arr, $l = 0, $r = NULL) {
// when the call is recursive we need to change
//the array passed to the function yearlier
        $start_time = microtime(true);
        static $list = array();
        if ($r == NULL)
            $list = $arr;

        if ($r == NULL)
            $r = count($list) - 1; //last element of the array

        $i = $l;
        $j = $r;

        $tmp = $list[(int) ( ($l + $r) / 2 )];

        // partion the array in two parts.
        // left from $tmp are with smaller values,
        // right from $tmp are with bigger ones
        do {
            while ($this->compare_o($tmp, $list[$i]))
                $i++;

            while ($this->compare_o($list[$j], $tmp))
                $j--;

            // swap elements from the two sides
            if ($i <= $j) {
                $this->exchange_o($list, $i, $j);

                $i++;
                $j--;
            }
        } while ($i <= $j);

        // devide left side if it is longer the 1 element
        if ($l < $j)
            $this->quick_sort_o(NULL, $l, $j);

        // the same with the right side
        if ($i < $r)
            $this->quick_sort_o(NULL, $i, $r);

        // when all partitions have one element
        // the array is sorted
        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $list;
        return $result['time'];
    }

    function gnomeSort_o($arr) {
        $start_time = microtime(true);
        $size = sizeof($arr) - 1;
        $i = 1;
        $j = 2;
        while ($i < count($arr)) {
            if ($this->compare_o($arr[$i],$arr[$i - 1])) {
                $i = $j;
                $j++;
            } else {
                $this->exchange_o($arr, $i, $i-1);
                $i--;
                if ($i == 0) {
                    $i = $j;
                    $j++;
                }
            }
        }
        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $arr;
        return $result['time'];
    }

    function counting_sort_o($ar) {
        $start_time = microtime(true);

        $count = array();
        foreach ($ar as $v) {
            $count[$v->num] = isset($count[$v->num]) ? $count[$v->num] + 1 : 1;
        }
        $sorted = array();
        $min = $this->min_o($ar);
        $max = $this->max_o($ar);
        for ($i = $min->num; $i < $max->num; $i++) {
            if (isset($count[$i])) {
                for ($j = 0; $j < $count[$i]; $j++) {
                    $sorted[] = $i;
                }
            }
        }

        $result['time'] = round((microtime(true) - $start_time), 7);
        $result['arr'] = $sorted;
        return $result['time'];
    }

    function min_o($ar) {
        $min = $ar[0];
        $elem = $ar[0]->num;
        for ($i = 0; $i < count($ar); $i++) {
            if ($ar[$i]->num < $elem) {
                $elem = $ar[$i]->num;
                $min = $ar[$i];
            }
        }
        return $min;
    }

    function max_o($ar) {
        $max = $ar[0];
        $elem = $ar[0]->num;
        for ($i = 0; $i < count($ar); $i++) {
            if ($ar[$i]->num > $elem) {
                $elem = $ar[$i]->num;
                $min = $ar[$i];
            }
        }
        return $max;
    }

}