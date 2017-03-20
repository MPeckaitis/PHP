<?php

/**
 * Created by PhpStorm.
 * User: pyshke
 * Date: 3/20/2017
 * Time: 1:53 PM
 */
// debug_info;

class AllMagics2
{
    public $kint;

    public static function __set_state($state) {
        $obj = new AllMagics2();
        $obj->kint = $state['kint'];
        return $obj;
    }
}