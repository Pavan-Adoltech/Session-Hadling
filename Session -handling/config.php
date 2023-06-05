<?php
session_start();
$hostname="127.0.0.1:3307";
$uname="root";
$password="";
$dbname="tests";

$conn=new mysqli($hostname,$uname,$password,$dbname);
?>
