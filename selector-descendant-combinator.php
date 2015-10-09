<?php
/**
 * Created by PhpStorm.
 * User: iyf
 * Date: 15. 9. 18.
 * Time: 오후 9:58
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
/* 하위 조합자 : 선택자 1의 자식 요소 중에서 선택자2에 해당하는 모든 요소를 선택 */
#main div {background: yellow; border:3px dashed red}

/* 자식 조합자 : 선택자1을 부모 요소로 하여 직계 자식요소 선택자2를 선택*/
#main > p {background: maroon; color: white}

/* 인접 형제 조합자 : 선택자1의 바로 뒤에 오는 동생인 선택자2 요소만 선택*/
ul + table {background: silver}
li.id + li {color: green}

/* 일반 형제 조합자 : 선택자1 다음에 나타나는 형제 관계의 모든 선택자2 요소들을 선택 */
ul ~ div {color:blue; font-style: italic}
.attribute ~ li {color: red; font-style: italic}

/* 그룹 조합자 : 여러 선택자가 동일한 선언을 공유하는 경우에 한번에 묶어서 정의 */
.class, .id, table {font-size: 20px;}
</style>
</head>


<nav>
    <h1><a href="./index.php">Home</a></h1>
</nav>

<section>
<div id="main">div 요소의 아이디 #main
 <p>선택자 연습1</p>
 <div>아이디 #main 하위의 div 요소1</div>
 <ul>
     <li class="class">클래스(class) 선택자</li>
     <li class="id">아이디(id) 선택자</li>
     <li class="attribute">속성(attribute) 선택자</li>
     <li class="pclass">가상 클래스(pseudo-class) 선택자</li>
     <li class="pelement">가상 요소(pseudo-element) 선택자</li>
 </ul>
<table border="1">
    <tr><td>2014</td><td>러시아 소치 동계올림픽</td></tr>
    <tr><td>2018</td><td>대한민국 평창 동계올림픽</td></tr>
</table>
<div>아이디 #main 하위의 div 요소2
    <p>선택자 연습3</p>
    <p>선택자 연습4</p>
</div>
<div>
    <p>조합자는 CSS내의 단순한 선택자들을 조합하는 방법으로 지정한 구역에만 적용된다.</p>
</div>

</div>