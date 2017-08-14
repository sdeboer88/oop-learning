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

require_once '_db/db.php';
require_once '_page/PageStructure.php';

$db = new db();
$db = $db->getConnection();

$stmt = $db->prepare("Select * from pages WHERE page_id = '1'");
$stmt->execute();
$row = $stmt->fetch();

$home = new PageStructure($row['page_title'],'desc','keywords, article, oop');

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
        <?php
            echo $row['page_content'];
        ?>
        <h3>Submit Data</h3>
        <form action="_form/process.php" method="post">
            <label for="">Name</label>
            <input type="text" name="fname">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
