<?php

/**
 * Created by PhpStorm.
 * User: scottdeboer
 * Date: 8/13/17
 * Time: 4:43 PM
 */
class formSubmit
{
    private $_fname;

    public function __construct($fName)
    {
        $this->_fname = $fName;
    }

    public function getFirstName(){
        return $this->_fname;
    }




}