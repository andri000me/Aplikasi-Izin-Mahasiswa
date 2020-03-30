<?php
  

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "simcuti_db";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Tidak dapat terhubung ke database: ".mysqli_error());
?>