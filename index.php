<?php
//$con= new PDO('mysql:host=localhost;dbname=lib','root','');
$quary="SELECT * FROM books join authors on books.author_id=authors.author_id  join genres on books.genre_id=genres.genre_id join publishers on books.publisher_id=publishers.publisher_id";

//$result1=$con->prepare($quary);
//$result=$result1->execute();
//echo "<pre>";
//var_dump($result1->fetchAll());
//echo "</pre>";
//die;
//$books=$con->fetchAll();
$con=mysqli_connect("localhost","root","","lib");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
$result=mysqli_query($con,$quary);
echo "<pre>";
$books=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo "</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">author</th>
        <th scope="col">isbn</th>
        <th scope="col">genre_id</th>
        <th scope="col">quantity_available</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($books as $book): ?>
    <tr>
        <th scope="row"><?php echo $book['book_id']?></th>
        <td><?php echo $book['title'] ?></td>
        <td><?php echo $book['name']  ?></td>
        <td><?php echo $book['ISBN'] ?></td>
        <td><?php echo $book['genre_id'] ?></td>
        <td><?php echo $book['quantity_available'] ?></td>

    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
