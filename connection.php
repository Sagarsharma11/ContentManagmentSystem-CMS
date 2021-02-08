<?php error_reporting(0); ?>
<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "test";

$conn = mysqli_connect($server, $user, $password, $db);




// if($conn)
// {
//     echo "connect";
// }
// $db= "CREATE DATABASE signup";

// $call=mysqli_query($conn,$db);

// if($call)
// {
//     echo "created database";
// }

//  $conn = mysqli_connect($server, $user, $password, $db);
//  $table= "CREATE TABLE userdata (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// $val=mysqli_query($conn,$table);

// if($val)
// {
//     echo "table created"
// }
$name = $_POST['name'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];


// $sql = "INSERT INTO `userdata` (`id`, `name`, `email`, `username`, `password`) VALUES (NULL, '$name', '$email', '$user', '$pass');";
// mysqli_query($conn, $sql); 
$success = false;

echo "page not found!";


if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($email) && !empty($user) && !empty($pass)) {


    $sql = "INSERT INTO `userdata` (`id`, `name`, `email`, `username`, `password`) VALUES (NULL, '$name', '$email', '$user', '$pass');";


    if ($pass == $pass2) {



        $sql1 = "SELECT * FROM userdata ";
        $res = mysqli_query($conn, $sql1);
        $num = mysqli_num_rows($res);



        if ($num > 0) {


            while ($row = mysqli_fetch_assoc($res)) {



                if ($row['username'] == $user || $row["email"] == $email) {


                    $success = false;
                    

                    header("Location: signup.php?success=" . $success);
                } 
            }
        } 
        if($success!= false)
        {
            

                   
                    mysqli_query($conn, $sql);
                    $success = true;
                    header("Location: login.php");
                  
                
        }
        // else {
        //     mysqli_query($conn, $sql);
        //     $success = true;
        //     header("Location: login.php");
        // }
    }



    header("Location: signup.php?success=" . $success);
}

// header("Location: signup.php?success=" . $success);




?>