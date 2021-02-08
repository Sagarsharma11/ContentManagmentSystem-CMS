<?php

$server="localhost";
$user="root";
$password="";
$db="test";

$id=$_GET['id'];

$conn=mysqli_connect($server,$user,$password,$db);





    if (isset($_POST['add2'])) {
        $title = $_POST['title'];
        $comment = $_POST['comment'];
    echo $title;
    echo $comment;
    echo  $id;
     

        $sql = "UPDATE postdata SET title='$title', comment='$comment' WHERE id=$id";
        // $sql = "UPDATE postdata SET title=$title and comment=$comment WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "data update";
            header("Location: addpost.php");
        }
        // header("Location: addpost.php");
    }
    ?>

 


