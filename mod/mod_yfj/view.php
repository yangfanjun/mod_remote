<?php
/**
 * Created by PhpStorm.
 * User: yfj
 * Date: 2019/9/29
 * Time: 14:03
 */

require(__DIR__.'/../../config.php');
require_login();
$userid = $USER->id;
//$auth = $USER->firstaccess;
//echo $userid;
//echo "<br>";
//echo $auth;


$PAGE->set_pagelayout('base');
$PAGE->set_title("About page");
$PAGE->set_heading("测试页面");

echo $OUTPUT->header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
测试页面
</body>
</html>


<?php
echo $OUTPUT->footer();
?>

