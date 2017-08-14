<?php

/**
 * Created by PhpStorm.
 * User: scottdeboer
 * Date: 8/13/17
 * Time: 10:05 AM
 */
class PageStructure
{
    private $_pageTitle;
    private $_metaDescription;
    private $_metaKeywords;
//    public  $_table_name = 'pages';
    private $db;

    public function __construct($pageTitle,$metaDescription,$metaKeywords)
    {
        $this->_pageTitle = $pageTitle;
        $this->_metaDescription = $metaDescription;
        $this->_metaKeywords = $metaKeywords;

//        $this->db = new db();
//        $this->db = $this->db->getConnection();
    }

    public function getPageTitle(){
        return $this->_pageTitle;
    }

    public function getMetaDescription(){
        return $this->_metaDescription;
    }

    public function getMetaKeywords(){
        return $this->_metaKeywords;
    }

}