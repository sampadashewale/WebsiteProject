<?php
$servername="localhost";
$dbuname="root";
$dbpass="";
$dbname="restaurant";
$conn=new mysqli($servername,$dbuname,$dbpass,$dbname);
if($conn->connect_error)
{
die("coonection fail :".$conn->connect_error);
}
echo 'connected...';
