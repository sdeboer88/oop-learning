<?php
/**
 * Created by PhpStorm.
 * User: scottdeboer
 * Date: 8/10/17
 * Time: 5:40 AM
 */

class Product{
    // properties defined here
    protected $_type;
    protected $_title;

    // constructor
    public function __construct($type,$title)
    {
        $this->_type = $type;
        $this->_title = $title;
    }

    // methods defined here
    public function getProductType(){
        return $this->_type;
    }

    public function getProductTitle(){
        return $this->_title;
    }
}