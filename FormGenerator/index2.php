<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.11.15
 * Time: 18:23
 */
require_once ('BaseForm.php');
require_once ('SomeForm.php');
?>

<html>
<head>
    <title>Test SomeFort</title>
</head>
<body>

<?php
$x = new SomeForm();
$x->loadData($_POST);

echo '<pre>'. print_r($x, true) .'</pre>';

echo $x->makeForm();


?>
</body>
</html>
