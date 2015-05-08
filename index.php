<?php

$str = "http://www.kaixin001.com/notify_carpay.php?ddid=1231333_13123123&pwd=123";
   
  $parameters = array();
  $parameter = explode('&',end(explode('?',$str)));
    foreach($parameter as $val){
        $tmp = explode('=',$val);
        $parameters [$tmp[0]] = $tmp[1];
    }
    echo "<pre>";
    print_r($parameters['ddid']);
?>
