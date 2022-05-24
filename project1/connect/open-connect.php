<?php 
    $connect = new mysqli("localhost","root","","project1");
    mysqli_set_charset($connect,"utf8");
    // Check connection
    if ($connect -> connect_errno) {
      echo "Failed to connect to MySQL: " . $connect -> connect_error;
      exit();
    }
?>