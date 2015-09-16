<?php
/**
 * Created by PhpStorm.
 * User: iyf
 * Date: 15. 9. 7.
 * Time: 오후 9:06
 */

if(!isset($_POST['is_ajax'])) exit;
if(!$_POST['is_ajax']) exit;

$rs = 0;

switch($_POST['op']){

    case "plus" :
        $rs = $_POST['ip1'] + $_POST['ip2'];
    break;

    case "minus" :
        $rs = $_POST['ip1'] - $_POST['ip2'];
    break;

    case "multiplication" :
        $rs = $_POST['ip1'] * $_POST['ip2'];
    break;

    case "division" :
        $rs = $_POST['ip1'] / $_POST['ip2'];
    break;

}


// 성공 메세지 보내주기
echo $rs;
