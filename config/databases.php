<?php
// Database configuration
$host       = 'localhost'; // => 127.0.0.1
$dbname     = 'pets';
$username   = 'postgres';
$password   = 'Elite2024';
$port       = '5432';


$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

if(!$conn){
    die("Conecction error: ". pg_last_error());
}else{
    echo"Success !!!";
}

?>