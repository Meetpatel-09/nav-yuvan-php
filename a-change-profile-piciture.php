<?php

// ob_start();
session_start();

if (!isset($_SESSION['admin_email'])) {
     header('location: index.php');
}
$profile_photo_error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

     // if (isset($_POST['confirm'])) {

     if (isset($_FILES['profile_photo'])) {
          // $profile_photo = $_POST['profile_photo'];
          $image_name = $_FILES['profile_photo']['name'];
          $image_size = $_FILES['profile_photo']['size'];
          $tmp_name = $_FILES['profile_photo']['tmp_name'];
          $type = $_FILES['profile_photo']['type'];

          if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/jpe" || $type == "image/jfif") {

               $profile_photo = rand(10000000, 99999999) . ".jpg";
          } else {
               $profile_photo_error = "Valid extensions .jpg, .jpeg, .png, .jpe, .jifi";
          }
     } else {
          $profile_photo_error = "Please select a picture";
     }


     if ($profile_photo_error == "") {

          // $_SESSION['profile_photo'] = $_POST['profile_photo'];
          $des = "./uploaded_images/" . $profile_photo;
          move_uploaded_file($tmp_name, $des);

          $_SESSION['profile_photo'] = $profile_photo;

          header("location: a-view.php");
     }
     // } else {
     //      $confirm_error = "Please check this checkbox to submit the form.";
     // }
}

?>

<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Change Profile Picture</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">

     <style>
     img {
          width: 18vw;
          height: 18vw;
     }

     @media only screen and (orientation: landscape) {
          img {
               height: 120px;
               width: 120px;
          }
     }
     </style>
</head>

<body class="pb-4">

     <header style="background-color: white; z-index: 5;">
          <div class="ps-5 pe-5 pb-3 pt-3 d-flex shadow-lg justify-content-evenly">
               <img src="images/logo.jpeg"
                    class="rounded-circle border-1 border-dark border-opacity-100 float-start mt-4" alt="..."
                    width="10vw" height="10vw">
               <div style="max-width: 60vw;">
                    <p class="text-center h4">JAY HINGLAJ</p>
                    <p class="text-center h4">Shree Navpargana Bhavsar Seva Samaj-Navsari</p>
                    <p class="text-center h6 mt-3 fw-semibold">2738, Ashadip Colony,Chhapra Road Navsari,PIN-396445</p>

                    <p class="text-center h6 mt-3 fw-semibold">Mobile No.: 6353200313</p>
                    <p class="text-center h6 fw-semibold">Landline No.: 02637 244415 </p>
                    <p class="text-center h6 fw-semibold">Email: <a
                              href="mailto:navparaganabhavsar@gmail.com">navparaganabhavsar@gmail.com</a> </p>
               </div>
               <img src="images/image.jpeg" class="rounded-circle float-end mt-4 me-1" alt="..." width="9vw"
                    height=9vw">
          </div>
     </header>

     <div class="container mt-3 d-flex justify-content-center align-items-center">
          <div class="card p-5 z-2 shadow-lg border-0">
               <form class="row g-3" method="POST" enctype="multipart/form-data" netlify>
                    <h3 class="text-center m-0 fw-semibold">Online 2<sup>nd</sup> Marrage Beuro.</h3>
                    <label for="" class="h5 text-center fw-semibold">Last date for apply: 10 March, 2023</label>

                    <div class="col-12">
                         <label for="inputProfilePhoto" class="form-label">Profile Photo</label>
                         <input type="file" class="form-control" name="profile_photo" id="inputProfilePhoto" required>
                         <div class="invalid-input">
                              <?php echo $profile_photo_error; ?>
                         </div>
                    </div>

                    <div class="col-12">
                         <button type="submit" class="btn btn-primary">Submit</button>
                         <a href="a-view.php" class="btn btn-secondary">Back</a>
                    </div>

               </form>
          </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
     </script>
</body>

</html>