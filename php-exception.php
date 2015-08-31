<?php
/**
 * Created by PhpStorm.
 * User: Londoner
 * Date: 15. 8. 30.
 * Time: 오후 5:24
 */


function checkNum($number)
{
    if($number>1)
    {
        throw new Exception("값은 1 이하여야 합니다.");
    }
    return true;
}

// 예외 발생 시키기
try
{
    checkNum(100);
    echo "값은 1 이하가 맞습니다.  ";
}

// 던져진 예외 잡기
catch(Exception $e)
{
    echo "Message: ".$e->getMessage();
}
?>

<!doctype html>
<html>
<head>
    <!-- -->
    <meta charset="UTF-8">
</head>
</html>