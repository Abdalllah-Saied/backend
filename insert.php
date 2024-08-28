<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";

$con=mysqli_connect("localhost","root","","lib");
//pdo

// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
$quary="INSERT INTO books (`title`, `isbn`, `quantity_available`, `publisher_id`, `genre_id`, `author_id`) 
VALUES ('".$_POST['title']."', '".$_POST['isbn']."', '".$_POST['quantity_available']."', '".$_POST['publisher_id']."', '".$_POST['genre_id']."', '".$_POST['author_id']."')";
mysqli_query($con,$quary);
mysqli_close($con);

//return index
