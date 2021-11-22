<?php


  $host = 'localhost';
  $user = 'root';
  $pass = 'mysql';
  $dbname = 'crud';
  $port = 3306;

  $conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname,$user,$pass);

  