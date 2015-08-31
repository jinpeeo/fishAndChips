<?php
// ajax request 여부를 상수로 저장, 그러나 일부 서버에서 아래의 환경변수가 지원 안될 수 있음
// http://www.electrictoolbox.com/how-to-tell-ajax-request-php/

define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

if (IS_AJAX) {  
  if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
	if($_POST["action"] == "test") test_function();
    /*$action = $_POST["actions"];
    switch($action) { //Switch case for value of action
      case "test": test_function(); break;
    }*/
   }
}

//Function to check if the request is an AJAX request
/*function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}*/

function test_function(){
  $return = $_POST; 
  $return["json"] = json_encode($return);
  echo json_encode($return);
  //Do what you need to do with the info. The following are some examples.
  //if ($return["favorite_beverage"] == ""){
  //  $return["favorite_beverage"] = "Coke";
  //}
  //$return["favorite_restaurant"] = "McDonald's";  
}
?>