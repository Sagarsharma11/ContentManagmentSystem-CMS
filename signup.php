<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href=" css/style.css">

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

  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12 header">
        <nav class="navbar justify-content-center navbar-expand-lg navbar-dark mt-4 bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">CMS Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="post.php">Post</a>
                </li>
              
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="signup.php">Signup</a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
        <?php

        if (isset($_GET['success']) && $_GET['success']) {
          echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
         Signup Successfully
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
        } else if (isset($_GET['success']) && !$_GET['success']) {
          echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
         oops! Signup fail.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
        }

        ?>
        <div class="col-md-12 mt-4 pt-4">
          <div class="container">
            <div class="row">
              <div class="col-md-6 mt-4 pt-4">
                <h1 class="text-center text-dark">
                  Content Managment
                </h1>
                <h1 style="font-weight: bold;" class="text-light text-center font-weight-bolder ml-4 pl-4">Project </h1>
                <h5 style="padding-left: 10%; font-weight: bold; padding-right: 10%;" class="text-center pl-4 text-dark">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsa labore.
                </h5>
                <p style="padding-left: 10%; font-weight: bold; padding-right: 2%;" class="mt-4 pt-2 text-light">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, asperiores hic quae libero maxime
                  adipisci labore perferendis eveniet! Vel incidunt porro aut reiciendis voluptate voluptates aliquam,
                  iste nemo iure recusandae.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, beatae. Voluptatibus iusto ipsa
                  dolore eius, quasi repellat quibusdam rem beatae, corporis exercitationem in fugiat nam est, ex sint
                  commodi saepe.
                </p>
                <button style="margin-left:10%;" class="btn btn-light">
                  View more
                </button>
              </div>
              <div class="col-md-6 mt-4 pt-4 ">
                <div class="col-md-12  ">
                  <h1 class="text-center font-weight-bold text-light">Sign up</h1>
                  <form action="connection.php" method="post" class="mt-4 pt-4">
                    <div class="form-group">
                      <label class="mt-0" style="font-weight:bold; color:lavenderblush;" for="exampleInputEmail1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label class="mt-3" style="font-weight:bold; color:lavenderblush;" for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label class="mt-3" style="font-weight:bold; color:lavenderblush;" for="exampleInputPassword1">User name</label>
                      <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label class="mt-3" style="font-weight:bold; color:lavenderblush;" for="exampleInputPassword1">Password</label>
                      <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label class="mt-3" style="font-weight:bold; color:lavenderblush;" for="exampleInputPassword1">Re Password</label>
                      <input type="password" name="pass2" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" name="submit" class=" mt-3 btn btn-primary">Submit</button>
                  </form>
                </div>


              </div>
            </div>
          </div>
        </div>








      </div>

    </div>


  </div>
  <footer class="bg-dark mb-0">
    <p class="text-light text-center">
      Copy right 2020 &copy; | All rights reserved
    </p>
  </footer>


</body>

</html>