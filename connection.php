<?php
   $dbhost= "sql307.epizy.com";
  $dbuser= "epiz_29866051";
  $dbpass= "DzlRQiObXKDKi4r";
  $dbname="epiz_29866051_thrift";
  $port=3306;

  if(!$con= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$port)){
      die("failed to connect");
  }
 ?>
