<?php 
$name=$_POST['name'];
$People=$_POST['people'];
$date=$_POST['date'];
$time=$_POST['date'];
$message=$_POST['message'];

//database connection
$conn=new mysqli('localhost','root','','restaurant');
if ($conn->connect_error) {
	die('connection failed:'.$conn->connect_error);
}else {
	$stmt=$conn->prepare("insert into reservation(RNAME,RPEOPLE,RDATE,RTIME,RMESSAGE)values(?,?,?,?,?)");
	$stmt->bind_param("siiis",$name,$People,$date,$time,$message);
	$stmt->execute();
	echo "connection successfully...";
	$stmt->close();
	$conn->close();

}