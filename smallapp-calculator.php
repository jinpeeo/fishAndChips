<?php
/**
 * Created by G.I.V.
 * Developer: JP a.k.a Londoner
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

<style>
body{margin: 0 20px}
</style>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){

    //todo : 연산자 버튼을 클릭 할 때 마다 label 에 해당 연산자 디스플레이 처리
    $("#opHandler>input[type='button']").click(function(){
        console.log(this.value);
        $("#opLabel").text(this.value);
        $("#operator").text(this.value);

    });

    //todo : 계산 버튼 클릭 했을 때의 처리
    $("#run").click(function() {
        var form_data = {
            ip1 : $("#input1").val(),
            ip2 : $("#input2").val(),
            op : $("#opLabel").text(),
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
                    $("#equal").css({"display":"inline"});
                }else{
                    console.log("fail");
                }
            }


        })

    return false; //ajax 통신 후에 form submit 방지
    });


    $("#input1").blur(function(){
        $("#operand1").text(this.value);
    })

    $("#input2").blur(function(){
        $("#operand2").text(this.value);
    })

/* 더 구현해야 할것들
   1. 숫자 입력 텍스트박스에서 포커스 아웃 시 operand 영역에 숫자 디스플레이
      입력하지 않거나 유효하지 않은 값은 밸리데이션
   2. 연산자 버튼 클릭하면 operator span 에 연산자 보여주기
   3. 전체 리셋과 피연산자1,2,연산자 각각 리셋 기

*/



});
</script>
</head>

<body>
<nav>
    <h1><a href="./index.php">Home</a></h1>
</nav>
<main>
    <section>
        <h2>Calculator</h2>
        <form>
            <input id="input1" type="text" size="10">
            <span id="opLabel">Operator</span>
            <input id="input2" type="text" size="10">
            <button id="run" >Calculate</button>
            <div id="opHandler" style="margin: 20px 0">
                <input type="button" id="btnPlus" value="+" class="btn-lg">
                <input type="button" id="btnMinus" value="-" class="btn-lg">
                <input type="button" id="btnMultiply" value="*" class="btn-lg">
                <input type="button" id="btnDivision" value="/" class="btn-lg">
            </div>
        </form>
        <div style="margin: 20px 0; font-size: 30px; color:blue">
            <span id="operand1"></span>
            <span id="operator"></span>
            <span id="operand2"></span>
            <span id="equal" style="display: none"> = </span>
            <span id="result"></span>
        </div>
    </section>
</main>

</body>
</html>