<?php
function getheaders(){
foreach ($_SERVER as $key => $value) {
  $defheaders=substr($key,0,4);
if($defheaders=='HTTP') $ARRAY[$key]=$value;
}
return $ARRAY;

}
