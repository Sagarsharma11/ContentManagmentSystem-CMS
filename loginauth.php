<?php

session_start();

$server = "localhost";
$user = "root";
$password = "";
$db = "test";

$conn = mysqli_connect($server, $user, $password, $db);


$sql = "SELECT * FROM userdata ";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

$user = $_POST['user'];
$pass = $_POST['password'];


if (isset($_POST['login'])) {

    // echo $num;


    // $row= mysqli_fetch_assoc($result);
    // echo var_dump($row);


    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['username'] == $user && $row["password"] == $pass) {
            

            $name = $row['username'];

           

            $_SESSION["authuser"] = $name;
            
            
        }
    }
}

    if (isset($_SESSION["authuser"])) {
        header("Location:addpost.php?success=" . $name);
    }else 
    {
        
        $success= false;
       header("location: login.php?success=" . $success);
    }


    // header("Location: login.php?success=" . $name);



?>

