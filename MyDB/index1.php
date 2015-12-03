<html>
<head>
    <meta charset="utf-8" />
</head>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 03.12.15
 * Time: 20:13
 */

require_once('MyDB.php');

$mydb = new MyDB('localhost', 'user123', 'user123', 'mytest01');

?>
<pre>
<?= var_export( $mydb->getTable('test1',['id', 'lastname', 'firstname']), true ) ?>
</pre>
<br /><br />
</body>
</html>
