<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.11.15
 * Time: 18:23
 */
require_once ('MyForm.php');
?>

<html>
<head>
    <title>Test MyFort</title>
</head>
<body>

<?php
$x = new MyForm();
$x->loadData($_POST);

echo '<pre>'. print_r($x, true) .'</pre>';

echo $x->makeForm();


?>
</body>
</html>
