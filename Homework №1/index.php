<?php
include_once 'Request.php';
include_once 'Response.php';
$sometext="Requst in action";
$contentType='application/json';
$statuscode = 200;
$new_arr = array('sometext' =>$sometext,
'contentType'=> $contentType,
'statuscode'=> $statuscode );
$getResponse=Response($new_arr);
foreach ($getResponse as $key => $value) {
  echo $key." :".$value."<br>";
}
echo "<br>";
$Headers=getheaders($_SERVER);
foreach ($Headers as $key => $value) {
  echo "<strong>".$key.": ".$value."<br></strong>" ;
}
