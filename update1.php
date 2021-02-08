<?php





session_start();

// require_once('security.php');
// exit();


$server = "localhost";
$user = "root";
$password = "";
$db = "test";

$conn = mysqli_connect($server, $user, $password, $db);


$sql1 = "SELECT * FROM postdata ";
$result = mysqli_query($conn, $sql1);

$num = mysqli_num_rows($result);

$id = $_REQUEST['id'];



?>

<?php

while ($row = mysqli_fetch_assoc($result)) {



    $name = $row['username'];
    $title = $row['title'];
    $comment = $row['comment'];
    $id1 = $row['id'];


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
        <div class='container'>
            <div class="row">
                <?php if ($id1 == $id) { ?>

                    <form action='update.php?id=<?php echo $id; ?>' method="post">

                        <div class="mb-3">



                            <input style="display:none;" value="<?php echo $name; ?>" type="text" name="user" class="form-control" id="exampleFormControlInput1" placeholder="user">
                        </div>
                        <div class="mb-3">
                            <h2 class="text-muted text-center">Update Post</h2>
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" value="<?php echo $title ?>" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" placeholder="comment" class="form-label">Add your comment</label>
                            <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"><?php echo $comment; ?></textarea>
                        </div>
                        <button name="add2" class="btn btn-primary">Post</button>
                        <a class="btn btn-secondary" href="addpost.php">Back </a>
                    </form>

            <?php     }
            }


            ?>
            </div>
        </div>





        <footer style="margin-top:900px;" class="bg-dark ">
            <p class="text-light text-center">
                Copy right 2020 &copy; | All rights reserved
            </p>
        </footer>


    </body>

    </html>
