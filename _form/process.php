<?php
/**
 * Created by PhpStorm.
 * User: scottdeboer
 * Date: 8/13/17
 * Time: 4:34 PM
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'formSubmit.php';

$fName = $_POST['fname'];

$data = new formSubmit($fName);

echo $data->getFirstName();