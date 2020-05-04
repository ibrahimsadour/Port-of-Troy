<?php

$host =  'localhost';
$user = 'root';
$password = 'root';
$db = 'company';

$con=mysqli_connect($host,$user,$password,$db);

if(!$con)
{
    die(' Please Check Your Connection'.mysqli_error($con));
}
?>

