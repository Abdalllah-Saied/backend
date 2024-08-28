<?php
//// echo $email;
// $db= mysqli_connect("localhost","root","","lib");
//    $query="SELECT * FROM books WHERE book_id='$email'";
//    echo $query;
////    die;
//    $result=mysqli_query($db,$query);
//    $books=mysqli_fetch_all($result,MYSQLI_ASSOC);
//    echo "<pre>";
//    var_dump($books);
//    echo "</pre>";
//
    //PDO class
$id=$_GET['id'];
echo $id;
    $db=new PDO('mysql:host=localhost;dbname=lib','root','');
    $query="SELECT * FROM books WHERE book_id=?";
    $result1=$db->prepare($query);
    $result=$result1->execute([$id]);
    echo "<pre>";
    var_dump($result1->fetchAll());
    echo "</pre>";
    die;
//echo 'test';
//echo $_GET['id'];
//$con=mysqli_connect("localhost","root","","lib");
//$id=$_GET['id'];
//$query = "SELECT * FROM books WHERE book_id='$id'";
//echo $query;
////die;
//$result=mysqli_query($con,$query);
//$book=mysqli_fetch_all($result,MYSQLI_ASSOC);
//echo "<pre>";
//var_dump($book);
//echo "</pre>";
