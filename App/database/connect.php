<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'blog';

$conn = new mysqli($host, $user, $pass, $db_name);
if ($conn->connect_error) {
    die('database connection errors'. $conn->connect_error);
  
} 