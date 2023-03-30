<?php
   $conn = oci_connect("C##IDCARD", "123", "localhost:1521/ORCL");
   if (!$conn) 
   {
      $m = oci_error();
      echo $m['message'], "\n";
      exit;
   }
?>
