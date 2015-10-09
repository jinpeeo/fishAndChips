<?php
/**
 * Created by PhpStorm.
 * User: iyf
 * Date: 15. 9. 24.
 * Time: 오후 5:42
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
        #wrapper  {
                      height: 800px;
                      background: url(http://elephanttruths.com/wp-content/uploads/2015/07/night-sky-stars.jpeg) no-repeat center center;
                      background-size: 120% 120%;
                      transition: background-size 2s ease-in;
                      -moz-transition: background-size 2s ease-in;
                      -web-kit-transition: background-size 2s ease-in;
                      -ms-transition:  background-size 2s ease-in;
                      -o-transition:  background-size 2s ease-in;
                  }

        #wrapper:hover {background-size: 100% 100%}}
    </style>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="bootstrap/3.3.5/js/bootstrap.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
                $('#myModal').on('show.bs.modal', function (event) {
                  console.log("hello^^;;");
                  console.log(event.relatedTarget.id);
                  var placeid = event.relatedTarget.id;
                  console.log(placeid);
                  loadDetails(placeid);
                });

            function loadDetails(queryString) {
                jQuery(".modal-body").load("loadphpinto-details.php?param=" + encodeURIComponent(queryString));
            }


        });
    </script>
</head>

 <section id="wrapper">
     <!-- Button trigger modal -->
     <button type="button" id="btn01" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
         Launch demo modal
     </button>

     <!-- Modal -->
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                 </div>
                 <div class="modal-body">
                     ...
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                 </div>
             </div>
         </div>
     </div>

 </section>