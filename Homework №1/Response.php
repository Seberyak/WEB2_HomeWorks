<?php
function Response($somedata = array()){
if($somedata['statuscode']==200 and $somedata['contentType']=='application/json'){
  $response=json_encode($somedata['sometext']);

}
$len=strlen($response);
$response_arr = array('somedata' => $response,'len'=>$len );
return ($response_arr);

}



 ?>
