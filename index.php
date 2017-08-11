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
require_once '_product/Book.php';
require_once '_product/DVD.php';

$slightEdge = new Book('Book','Slight Edge','300');
$movie1 = new DVD('Movie','The Room');

echo '<p>The best book I ever read was the "'. $slightEdge->getProductTitle().'".</p>';
echo "<p>". $movie1->getProductType() ." - ". $movie1->getProductTitle()."</p>";


echo "<p>". $slightEdge->getProductTitle() ." - ". $slightEdge->getPageCount()."</p>";