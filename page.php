<?php

$con =mysqli_connect('localhost','root');

if ($con){
echo "Connection Successful ";
}else{
echo "Not Connected";
}

mysqli_select_db($con,'sweetmitten');

$name = $_POST['name'];
$address = $_POST['address'];
$item = $_POST['item'];
$phno = $_POST['phno'];
$datetime = $_POST['datetime'];
$message= $_POST['message'];

$query= " insert into page ( name, address, item, phno, datetime, message)
values ( '$name', '$address', '$item', '$phno', '$datetime', '$message' ) ";


echo "$query";

mysqli_query($con, $query);


 ?>
