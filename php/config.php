<?php
  $access_key_id="AKIA2522ZOBSAXXIJOU4";
  $secret_access_key="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";
  
  $hostname = "database-1.cnpfftxfe9y8.ap-south-1.rds.amazonaws.com";
  $username = "admin";
  $password = "admin123";
  $dbname = "chat";
  $conn = mysqli_connect($hostname, $username,$password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
