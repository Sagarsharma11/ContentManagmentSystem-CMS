<?php 

$server="localhost";
$user="root";
$password="";
$db="test";

$conn=mysqli_connect($server,$user,$password,$db);

$user1 = $_POST['user'];
$title = $_POST['title'];
$comment = $_POST['comment'];


if (isset($_POST['add1'])&& !empty($user1)&& !empty($title)&& !empty($comment))
 {
   

    $sql = "INSERT INTO `postdata` (`id`, `username`, `title`, `comment`) VALUES (NULL, '$user1', '$title', '$comment');";
   mysqli_query($conn, $sql);
    header("Location: addpost.php");
    
}




?>