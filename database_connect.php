<?php
   define('DB_SERVER', 'mathlab.utsc.utoronto.ca');
   define('DB_USERNAME', 'chitales');
   define('DB_PASSWORD', 'chitales');
   define('DB_DATABASE', 'cscb20w18_chitales');
   $db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   if(!$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE)) {
     die('Connection Failed: '.mysqli_connect_error());
   }
   //mainly for debudding purposes
   //echo "Connection Successful";
?>
