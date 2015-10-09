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
	<h2>Be a Game Developer</h2>

    <dl>
        <dt>Display</dt>
        <dd><a href="./display-onoff.php">display on-off</a></dd>
        <dd>animate</dd>
        <dd><a href="./loadphpinto.php">Load a PHP page into a div</a></dd>
    </dl>
    <dl>
        <dt>selector</dt>
        <dd><a href="selector-tree-pseudo.php">selector-tree-pseudo 트리 구조적 가상클래스를 이용한 셀렉터 </a></dd>
        <dd><a href="selector-descendant-combinator.php">selector-descendant-combinator 하위 요소 조합</a></dd>
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
        <dd>Drag-Drop Game (예수님 족보 순서대로 사람들 이미지를 드랙-드랍한 뒤 순서가 맞는지 체크</dd>
        <dd>객관식 퀴즈</dd>
        <dd>주사위</dd>
        <dd>윳놀이</dd>
    </dl>
    <dl>
        <dt>GNN Works</dt>
        <dl><a href="works-jsonmaker.php">jSON Payloads Maker for Push Alert</dl>
    </dl>



</div>

</body>
</html>


<?
//phpinfo();
?>