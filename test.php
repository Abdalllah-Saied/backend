<?php
function add($num1,$num2){
    return $num1+$num2;
}
$num1=1;
$num2=2;

mysqli_connect('localhost','root','');

$con =new PDO('mysql:host=localhost;dbname=lib','root','');

