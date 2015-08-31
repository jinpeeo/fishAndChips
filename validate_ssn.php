<?
if(!isset($_POST['is_ajax'])) exit;
if(!isset($_POST['ssn'])) exit;
if(!isset($_POST['name'])) exit;
if($_POST['is_ajax'] != true) exit;


$user_ssn = $_POST['ssn'];


$nameAuth = array(
						'780622'=>array('name'=>'박수현', 'ssn'=>'780622'),
						'790801'=>array('name'=>'박용언', 'ssn'=>'790801'),
                        '770423'=>array('name'=>'이진표', 'ssn'=>'770423')
				 );


if(!isset($nameAuth[$user_ssn])) {
    $isExist = "NO";
    exit;
}else{
    $isExist = "YES";
}

if($nameAuth[$user_ssn]['name'] != $_POST['name']) exit;

echo "success";

?>