<?php
/**
 * Created by G.I.V.
 * Developer: JP a.k.a Londoner
 * Date: 15. 9. 18. Friday
 * Time: 오후 1:00
 */

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<!-- IE 상위버전인데 호환모드를 IE7 로 설정하여 최신 속성들을 적용 못하는 경우 방지 -->
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">

<!-- 디바이스 해상도에 맞추어 반응형 디스플레이 -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- 부트스트랩 스타일시트 로드 -->
<link href="bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

<style>
table td{height:35px; width: 400px}

/* 트리 구조적 가상클래스를 이용한 css 셀렉터 사용 */
tr:nth-child(1) {color:olive}
tr:nth-last-child(2) {color:red;font-style: italic;}
tr:nth-child(2n+1) {background: orange}   /* (odd) 와 같음 */
tr:nth-child(even) {background: lightgreen} /* nth-child(2n-0) 과 같음 */
tr:nth-child(-n+3) {font-size: 20px; font-weight: bold}
tr:nth-child(n+4) {font-size: 40px;}
</style>
</head>

<nav>
    <h1><a href="./index.php">Home</a></h1>
</nav>

<section>
    <table border="1"  style="margin: 20px">
        <tr><td>표의 1 번째 행입니다.</td></tr>
        <tr><td>표의 2 번째 행입니다.</td></tr>
        <tr><td>표의 3 번째 행입니다.</td></tr>
        <tr><td>표의 4 번째 행입니다.</td></tr>
        <tr><td>표의 5 번째 행입니다.</td></tr>
        <tr><td>표의 6 번째 행입니다.</td></tr>
        <tr><td>표의 7 번째 행입니다.</td></tr>
    </table>
</section>






