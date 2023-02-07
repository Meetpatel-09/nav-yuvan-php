<?php
ob_start();

session_start();

require_once "config.php";

$id = $_GET['user_id'];



if (isset($_SESSION['name'])) {

     $name = $_SESSION['name'];
     $email = $_SESSION['email'];
     $mobile = $_SESSION['mobile'];
     $dob = $_SESSION['dob'];
     $marital_status = $_SESSION['marital_status'];
     $food = $_SESSION['food'];
     $father_name = $_SESSION['father_name'];
     $mother_name = $_SESSION['mother_name'];
     $surname = $_SESSION['surname'];
     $native_place = $_SESSION['native_place'];
     $address = $_SESSION['address'];
     $about_you = $_SESSION['about_you'];
     $education = $_SESSION['education'];
     $job_business = $_SESSION['profession'];
} else {
     echo "session not set";
     header("location: index.php");
}

?>

<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>View Details</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
</head>

<body>

     <body class="py-4">
          <div class="container d-flex justify-content-center align-items-center">
               <div class="card p-5 z-2 shadow-lg border-0">
                    <form class="row g-3" method="POST">
                         <h1>Nav Yuvan</h1>
                         <div class="col-md-6">
                              <label for="inputName" class="form-label">Name: <?php echo $_SESSION["name"]; ?></label>

                         </div>
                         <div class="col-md-6">
                              <label for="inputEmail" class="form-label">Email: <?php echo $email; ?></label>

                         </div>
                         <div class="col-md-6">
                              <label for="inputMobile" class="form-label">Mobile Number: <?php echo $mobile; ?></label>
                         </div>
                         <div class="col-md-6">
                              <label for="inputDoB" class="form-label">Birth Date: <?php echo $dob; ?></label>
                         </div>
                         <div class="col-6">
                              <label for="inputMobile" class="form-label">Marital Status:
                                   <?php echo $marital_status; ?></label>

                         </div>
                         <div class="col-6">
                              <label for="inputMobile" class="form-label">Food: <?php echo $food; ?></label>

                         </div>
                         <div class="col-md-6">
                              <label for="inputFaterName" class="form-label">Father's Name:
                                   <?php echo $father_name; ?></label>
                         </div>
                         <div class="col-md-6">
                              <label for="inputMotherName" class="form-label">Mother's Name:
                                   <?php echo $mother_name; ?></label>
                         </div>
                         <div class="col-md-6">
                              <label for="inputSurname" class="form-label">Surname: <?php echo $surname; ?></label>
                         </div>
                         <div class="col-md-6">
                              <label for="inputNPlace" class="form-label">Native Place:
                                   <?php echo $native_place; ?></label>
                         </div>
                         <div class="col-12">
                              <label for="inputAddress" class="form-label">Address: <?php echo $address; ?></label>
                         </div>

                         <div class="col-md-6">
                              <label for="inputAboutYou" class="form-label">About You: <?php echo $about_you; ?></label>
                         </div>
                         <div class="col-md-6">
                              <label for="inputEducation" class="form-label">Education:
                                   <?php echo $education; ?></label>
                         </div>
                         <div class="col-12">
                              <label for="inputProfession" class="form-label">Job/Business:
                                   <?php echo $job_business; ?></label>
                         </div>
                         <div class="col-12">
                              <!-- <button class="btn btn-primary">Submit</button> -->

                              <a href="admin-home.php" class="btn btn-primary">Back</a>
                         </div>
                    </form>
               </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
               integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
               crossorigin="anonymous">
          </script>
     </body>

</html>