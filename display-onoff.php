<?php
/**
 * Created by PhpStorm.
 * User: Londoner
 * Date: 15. 8. 30.
 * Time: 오후 6:30
 */

$myPin = 1234;

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        .toggleVisible {visibility: visible;}
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script>
    var flip = 0;
    $(document).ready(function(){
       $("#switch").click(function(){
           flip++;
           console.log(flip);
           if(flip%2==0){
                $("#kingsImg").css({
                   visibility : "hidden"
                });
               console.log(this);
               console.log($(this).text());
               $(this).text('Show');
           }else{
               $("#kingsImg").css({
                   visibility : "visible"
               });
               $(this).text('Hidden');
           }
       });

    });
</script>
</head>


<nav>
    <h2><a href="./index.php">Home</a></h2>
</nav>

<section>
    <h3>Display on-off</h3>
    <button id="switch">Show</button>
    <div><img id="kingsImg" src="http://boardm.godohosting.com/i2eye/goods_new/2015/02/israel.png" style="visibility: hidden;"></div>
</section>

</html>