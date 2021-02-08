<?php





session_start();

// require_once('security.php');
// exit();

if (isset($_SESSION['authuser'])) {

    require_once("addpost.php");
} else {
    header("Location: login.php");
}

$server = "localhost";
$user = "root";
$password = "";
$db = "test";

$conn = mysqli_connect($server, $user, $password, $db);


$sql1 = "SELECT * FROM postdata ";
$result = mysqli_query($conn, $sql1);

$num = mysqli_num_rows($result);


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>add post</title>
</head>

<body>
    <nav class="navbar justify-content-center navbar-expand-lg navbar-dark mt-4 bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">CMS Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item">
                        <a class="nav-link" href="post.php">Post</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <?php $users = $_SESSION['authuser']; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 pt-4">
                <h1>

                    Hey,

                    <?php
                    echo "$users";
                    ?> <i style="font-size:19px; margin-left:7px; color:lime;" class="fa fa-circle " aria-hidden="true"></i>


                </h1>



                <form action="addingpost.php" method="post">

                    <div class="mb-3">



                        <input style="display:none;" value="<?php echo $users; ?>" type="text" name="user" class="form-control" id="exampleFormControlInput1" placeholder="user">
                    </div>
                    <div class="mb-3">
                        <h2 class="text-muted text-center">Add Post</h2>
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" placeholder="comment" class="form-label">Add your comment</label>
                        <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button name="add1" class="btn btn-primary">Post</button>
                </form>
            </div>
        </div>
        <h2 class="text-muted mt-4"> Your recent post! </h2>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {



            $name = $row['username'];
            $title = $row['title'];
            $comment = $row['comment'];
            $id = $row['id'];


        ?>


            <?php if ($_SESSION['authuser'] == $name) {   ?>

                <div style="float:left !important;" class="col-md-3 mt-4 m-4 pt-4 pl-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title bg-dark text-light py-3 px-2 rounded text-center"><i class="fa fa-user mx-4" aria-hidden="true"></i><?php echo $name; ?> </h5>
                            <h4 class="card-title mb-2"><?php echo $title; ?> </h4>
                            <p class="card-text"><?php echo $comment; ?> </p>


                                <a href='update1.php?id=<?php echo $id; ?>' class='btn btn-primary card-link'>Update</a>
                                <a href='delete.php?id=<?php echo $id; ?>' class='btn btn-danger card-link'>Delete</a>
                            


                        </div>
                    </div>
                </div>




        <?php     }
        } ?>






    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>