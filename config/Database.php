<?php

  $serverName ="localhost";
  $username = "root";
  $password = "";
  $dbname = "file_server_db";
  $connection = new mysqli($serverName , $username ,$password ,$dbname);

  if($connection->connect_error){
    die("Connection to DB Failed" .$connection->connect_error);
  }

  echo "connected to db succefully";

?>