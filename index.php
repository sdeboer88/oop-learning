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

require_once '_page/PageStructure.php';

$home = new PageStructure('TITLE','desc','keywords, article, oop');

?>
<!doctype html>
<html>
    <head>
        <title><?php echo $home->getPageTitle(); ?></title>
        <meta name="description" content="<?php echo $home->getMetaDescription(); ?>"/>
        <meta name="keywords" content="<?php echo $home->getMetaKeywords(); ?>"/>
    </head>
    <body>
        <h1>Test</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid beatae earum excepturi
            explicabo fuga fugit in obcaecati, officia, placeat quia quis sint? Assumenda, doloribus laboriosam. Illum
            libero magnam quas.</p>
    </body>
</html>
