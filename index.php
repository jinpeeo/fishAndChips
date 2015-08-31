<?php
$private_key = rand(1000,99999999);
//debug_zval_dump($private_key);

echo $private_key."<br/>";
var_dump($private_key);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>localhost Index</title>
<style>
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
</head>
<body>

<div>
	<h2>Main</h2>

    <dl>
        <dt>Display</dt>
        <dd><a href="./display-onoff.php">display on-off</a></dd>
        <dd>animate</dd>
    </dl>
    <dl>
        <dt>Form</dt>
        <dd><a href="./form-comment.php">comment without sign-in</a></dd>
        <dd>sign-up</dd>
        <dd>modify member information</dd>
    </dl>
    <dl>
        <dt>PHP</dt>
        <dd><a href="./php-exception.php">php-exception</a></dd>
        <dd>php error-log</dd>
        <dd>php print</dd>
    </dl>
    <dl>
        <dt>Small Application</dt>
        <dd><a href="./smallapp-calculator.php">calculator</a></dd>
        <dd>주사위</dd>
        <dd>윳놀이</dd>
    </dl>



</div>

</body>
</html>


<?
//phpinfo();
?>