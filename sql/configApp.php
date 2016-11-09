<?php
class config{
 function getConfigApp(){
    $config = fopen("sql/config.txt", "r");
    return explode("#", fgets($config));
  }
}
 ?>