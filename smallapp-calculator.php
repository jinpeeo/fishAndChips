<?php
/**
 * Created by G.I.V.
 * User: JP a.k.a Londoner
 * Date: 15. 9. 7.
 * Time: 오후 8:26
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
<script>
$(document).ready(function(){
    $("#run").click(function() {
        var form_data = {
            ip1 : $("#input1").val(),
            ip2 : $("#input2").val(),
            op : $("#operator").val(),
            is_ajax : 1
        };

        $.ajax({
            type: "POST",
            url: "smallapp-calculator-process.php",
            data: form_data,
            success: function(response){
                if(response != ''){
                    console.log(response);
                    $("#result").text(response);
                }else{
                    console.log("fail");
                }
            }


        })

    return false; //ajax 통신 후에 form submit 방지
    });

/* 더 구현해야 할것들
   1. 숫자 입력 텍스트박스에서 포커스 아웃 시 operand 영역에 숫자 디스플레이
      입력하지 않거나 유효하지 않은 값은 밸리데이션
   2. 연산자 버튼 클릭하면 operator span 에 연산자 보여주기
   3.

*/



});
</script>
</head>

<nav>
    <h2><a href="./index.php">Home</a></h2>
</nav>
<main>
    <section>
        <h3>Calculator</h3>
        <form>
        <input id="input1" type="text" size="10">
        <input id="operator" type="text" list="oplist" size="15">
        <input type="button" value="+" class="btn-lg">
        <input type="button" value="-" class="btn-lg">
        <input type="button" value="*" class="btn-lg">
        <input type="button" value="/" class="btn-lg">
        <datalist id="oplist">
            <option value="plus" label="+">
            <option value="minus" label="-">
            <option value="multiplication" label="*">
            <option value="division" label="/">
        </datalist>
        <input id="input2" type="text" size="10">
        <button id="run" >Calculate</button>
        </form>
        <div>
            <span id="operand1"></span>
            <span id="operator"></span>
            <span id="operand2"></span> =
            <span id="result"></span>
        </div>
    </section>
</main>


</html>