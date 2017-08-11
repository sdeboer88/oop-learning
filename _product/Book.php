<?php
/**
 * Created by PhpStorm.
 * User: scottdeboer
 * Date: 8/10/17
 * Time: 6:31 PM
 */

require_once 'Product.php';

class Book extends Product{
    //properties
    protected $_pageCount;

    public function __construct($type, $title, $_pageCount)
    {
        parent::__construct($type,$title);
        $this->_pageCount = $_pageCount;
    }

    public function getPageCount(){
        return $this->_pageCount;
    }

}