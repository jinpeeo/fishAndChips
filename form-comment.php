<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>ajax form</title>
<style>
#message-form h2 {
	background:#a0d751 url("http://weebtutorials.com/examples/ajax_form/images/msg.png") no-repeat 97%;
	border:1px solid #93c64b;
	box-shadow:inset 0px 0px 0px 1px #b9ec71;
	-moz-box-shadow:inset 0px 0px 0px 1px #b9ec71;
  -webkit-box-shadow:inset 0px 0px 0px 1px #b9ec71;
	text-shadow:1px 1px 12px #5f802f;
	color:#fff;
	font-size:17px;
	padding:15px;
	font-weight:normal;
	margin:0;
}
#message-form {
	margin:0 auto;
	width:60%;
	margin-top:20px;
	font-family:myriad pro;

}
#message-form fieldset {
	display:block;
	border:0;
	padding:20px;
	border:1px solid #d3d3d3;
	border-top:0;
}

#message-form label,  #message-form input, #message-form textarea{
	display:block;
	width:99%;
}
#message-form label {
	padding-bottom:10px;
	font-size:14px;
	color:#848484;
}
#message-form input, #message-form textarea{
	margin-bottom:20px;
	color:#a8a8a8;
	border:1px solid #e7e7e7;
	padding:4px;
	transition:all 0.5s;
}
#message-form textarea {
	height:150px;
}
#message-form input:focus, #message-form textarea:focus{
	box-shadow:0px 0px 5px #a0d751;
	border:1px solid #a0d751;
}

#lines {
	background: url("http://weebtutorials.com/examples/ajax_form/images/lines.png") repeat-x;
	height:6px;
	float:left;
	width:80%;
	margin-top:17px;
}
#message-form .green-button {
	background:#a0d751;
	border:1px solid #9aca56;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	padding:10px;
	color:#fff;
	display:inline-block;
	width:16%;
	font-size:14px;
	float:right;
	transition:box-shadow .5s;
}
#message-form .green-button:active {
	box-shadow: inset 1px 1px 3px #5b7a2e;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="./validate.js" type="text/javascript"></script>
</head>

<header>
    <h2><a href="./index.php">Home</a></h2>
</header>

<div id="message-form">

	<h2> Send us a message </h2>

	<form id="sampleForm" action="post.php" method="post">

	<fieldset>
		<label for="yourName"> Your name: </label>
		<input id="yourName" type="text" name="yourName" value="" placeholder="Joe Bloggs" required />
		<!-- ssn 을 text형식으로 그대로 검증하는 php파일에 ajax 로 보내 검증한 뒤 인증여부를 레이블로 표기 -->
		<!-- 시간이 되면 password 형식으로 보내는 것과 암호화로 보내 복호화해서 검증하는 것 테스트 -->
		<label for="yourSsn"> Your SSN: </label>
		<input id="ssnValidate" type="button" class="green-button" value="본인인증">	
		<input id="yourSsn" type="text" name= "yourSsn" value="" placeholder="주민등록번호 상의 생년월일 6자리 입력" required />
		<label for="message"></label>
		<span name="message" id="messageSSN">실명확인</span>
		<label for="yourEmail"> Your Email Address: </label>
		<input type="email" id="yourEmail" name="yourEmail" value="" placeholder="your@email.com" required />

		<label for="yourComments"> Your Comments: </label>
		<textarea name="yourComments"> </textarea>

		<div id="lines">
			<span id="messageValidate"></span>
		</div>
		
		<input type="submit" class="green-button" value="Send Message">
	</fieldset>

	</form>

</div>
</html>


<?
phpinfo();
?>