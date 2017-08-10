<?php
/**
 * Created by PhpStorm.
 * User: scottdeboer
 * Date: 8/10/17
 * Time: 5:35 AM
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '_product/Product.php';

$mainProduct = new Product('Book','DVD');

echo $mainProduct->getProductTitle();
echo $mainProduct->getProductType();