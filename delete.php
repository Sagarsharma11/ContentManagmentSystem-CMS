
<?php

$server="localhost";
$user="root";
$password="";
$db="test";

$conn=mysqli_connect($server,$user,$password,$db);

$id = $_REQUEST['id'];
echo  $id;
$query = "DELETE FROM postdata WHERE id=$id";
$result = mysqli_query($conn, $query);
header("Location: post.php");
?>