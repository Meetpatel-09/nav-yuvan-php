<?php


require_once "config.php";

session_start();


if (!isset($_SESSION['admin_email'])) {
     header('location: index.php');
}

?>

<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Admin Home</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
     <header>
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
               <div class="container-fluid">
                    <a class="navbar-brand" href="#">Nav Yuvan</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                         data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="logout.php">Log Out</a>
                              </li>
                              <!-- <li class="nav-item">
                              <a class="nav-link" href="#">Link</a>
                         </li> -->
                              <!-- <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                   Dropdown
                              </a>
                              <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">Action</a></li>
                                   <li><a class="dropdown-item" href="#">Another action</a></li>
                                   <li>
                                        <hr class="dropdown-divider">
                                   </li>
                                   <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                         </li> -->
                              <!-- <li class="nav-item">
                              <a class="nav-link disabled">Disabled</a>
                         </li> -->
                         </ul>
                         <!-- <form class="d-flex" role="search">
                              <input class="form-control me-2" type="search" placeholder="Search User"
                                   aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                         </form> -->
                    </div>
               </div>
          </nav>
     </header>

     <main style="min-height: 100vh; display: flex; justify-content: center; margin-top: 25px;">

          <div style="max-width: 1280px;">
               <!-- <div> -->
               <table class="table table-bordered border-primary">
                    <thead>
                         <tr>
                              <th scope="col">#</th>
                              <th scope="col">Photo</th>
                              <th scope="col">Name</th>
                              <th scope="col">Mobile</th>
                              <th scope="col">Email</th>
                              <!-- <th scope="col">View</th> -->
                              <th scope="col">View</th>
                              <!-- <th scope="col">Print</th> -->
                              <!-- <th scope="col">Edit</th> -->
                              <th scope="col">Remove</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $counter = 0;
                         $sql1 = mysqli_query($conn, "SELECT * FROM user_tbl");
                         while ($row = mysqli_fetch_array($sql1)) {
                              $counter++;
                         ?>
                         <tr>
                              <th scope="row"><?php echo $counter; ?></th>
                              <td><img class="rounded-circle" height="75px" width="75px" alt="avatar1"
                                        src="uploaded_images/<?php echo $row['profile_photo'] ?>" /></td>
                              <td><?php echo $row['name'] . " " . $row['father_name'] . " " . $row['surname'] ?></td>
                              <td><?php echo $row['mobile_number_one']; ?></td>
                              <td><?php echo $row['email'] ?></td>
                              <!-- <td>@mdo</td> -->
                              <td><a href="a-view.php?user_id=<?php echo $row['user_id'] ?>"
                                        class="btn btn-primary">View</a></td>
                              <!-- <td><button class="btn btn-success">Print</button></td> -->
                              <!-- <td><button class="btn btn-warning">Edit</button></td> -->
                              <!-- <td><button class="btn btn-danger">Remove</button></td> -->

                              <td><a href="remove-user.php?user_id=<?php echo $row['user_id']; ?>" type="button"
                                        class="btn btn-danger">Remove</a></td>

                         </tr>

                         <?php } ?>
                    </tbody>
               </table>
          </div>

     </main>


     <footer>
          <nav class="navbar bg-body-tertiary">
               <div class="container-fluid">
                    <a class="navbar-brand" href="#">&copy; Copyright. Nav-Yuvan</a>
               </div>
          </nav>
     </footer>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
     </script>
</body>

</html>