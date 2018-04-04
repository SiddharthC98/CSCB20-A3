<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'SiddharthC');
   define('DB_PASSWORD', 'NightHawk038');
   define('DB_DATABASE', 'cscb20a3');
   $db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   if(!$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE)) {
     die('Connection Failed: '.mysqli_connect_error());
   }
?>
