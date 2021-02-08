<?php error_reporting(0); ?>
<?php



session_start();


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>CMS Project home</title>
</head>

<body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <div class="container-fluid ">

        <div class="row">
            <div class="col-md-12 ">
                <nav class="navbar justify-content-center navbar-expand-lg navbar-dark mt-4 bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">CMS Project</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Post</a>
                                </li>
                               
                                <?php if (isset($_SESSION['authuser'])) {
                                    echo " <li class='nav-item'>
                                    <a class='nav-link' href='addpost.php'>Profile</a>
                                </li>";
                                } else {

                                    echo " <li class='nav-item'>
                                    <a class='nav-link' href='login.php'>Login</a>
                                </li>";
                                }  ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="signup.php">Signup</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>


                <!-- adding comments here -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1 class="text-center mt-4 pt-4 dark">
                                Your Comments <spam class="py-0 px-1 rounded" style="font-weight:bold; color :#1f1f1f; background-color:red; "> Here</spam>
                            </h1>

                            <!-- adding users comment here -->

                            <!-- <div class="col-md-12 mt-4 m-4 pt-4 pl-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary card-link">Card link</a>
                                        <a href="#" class="btn btn-danger card-link">Another link</a>
                                    </div>
                                </div>
                            </div> -->





                            <?php while ($row = mysqli_fetch_assoc($result)) {



                                $name = $row['username'];
                                $title = $row['title'];
                                $comment = $row['comment'];
                                $id = $row['id'];


                            ?>

                                <div style="float:left !important;" class="col-md-12 mt-4 pt-4 pl-1">
                                    <div class="card mb-4" style="width:100%">
                                        <div class="card-body">
                                            <h5 style="background-color: #f1f1f1;" class="card-title text-light bg-primary px-2 py-2 rounded text-left"><?php echo $name; ?> </h5>
                                            <h4 class="card-title mb-2"><?php echo $title; ?> </h4>
                                            <p class="card-text"><?php echo $comment; ?> </p>

                                            <?php
                                            if ($_SESSION['authuser'] == $name) {
                                            ?>
                                                <a href='update1.php?id=<?php echo $id; ?>' class='btn btn-primary card-link'>Update</a>
                                                <a href='delete.php?id=<?php echo $id; ?>' class='btn btn-danger card-link'> Delete </a>

                                            <?php   } ?>


                                        </div>
                                    </div>
                                </div>




                            <?php     } ?>







                        </div>
                    </div>
                </div>





            </div>

        </div>


    </div>
    <footer class="bg-dark">
        <p class="text-light text-center">
            Copy right 2020 &copy; | All rights reserved
        </p>
    </footer>


</body>

</html>