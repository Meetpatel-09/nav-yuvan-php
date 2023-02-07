<?php
ob_start();

session_start();

require_once "config.php";

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

if ($_SERVER['REQUEST_METHOD'] == "POST") {

     $query = "INSERT INTO `users` (`name`, `email`, `mobile_number`, `marital_status`, `food`, `father_name`, `mother_name`, `surname`, `native_place`, `address`, `about_you`, `education`, `job_business`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

     $stmt = mysqli_prepare($conn, $query);

     if ($stmt) {

          mysqli_stmt_bind_param($stmt, "sssssssssssss", $p_name, $p_email, $p_mobile, $p_marital_status, $p_food, $p_father_name, $p_mother_name, $p_surname, $p_native_place, $p_address, $p_about_you, $p_education, $p_job_business);

          $p_name = $name;
          $p_email = $email;
          $p_mobile = $mobile;
          $p_marital_status = $marital_status;
          $p_food = $food;
          $p_father_name = $father_name;
          $p_mother_name = $mother_name;
          $p_surname = $surname;
          $p_native_place = $native_place;
          $p_address = $address;
          $p_about_you = $about_you;
          $p_education = $education;
          $p_job_business = $job_business;

          if (mysqli_stmt_execute($stmt)) {
               header("location: index.php");
          } else {
               echo "Someting went wrong";
          }
     } else {
          echo "Database error";
     }
     mysqli_stmt_close($stmt);
     // }
     mysqli_close($conn);
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
                              <!-- <input type="text" class="form-control" name="name" id="inputName" required> -->
                              <!-- <div id="invalid-name" class="invalid-input">
                              Valid first name is required.
                         </div> -->
                         </div>
                         <div class="col-md-6">
                              <label for="inputEmail" class="form-label">Email: <?php echo $email; ?></label>
                              <!-- <input type="email" class="form-control" name="email" id="inputEmail" required> -->
                              <!-- <div id="invalid-email" class="invalid-input">
                              Valid email is required.
                         </div> -->
                         </div>
                         <div class="col-md-6">
                              <label for="inputMobile" class="form-label">Mobile Number: <?php echo $mobile; ?></label>
                              <!-- <input type="tel" class="form-control" name="mobile" id="inputMobile" required> -->
                         </div>
                         <div class="col-md-6">
                              <label for="inputDoB" class="form-label">Birth Date: <?php echo $dob; ?></label>
                              <!-- <input type="date" class="form-control" name="dob" id="inputDoB" required> -->
                         </div>
                         <div class="col-6">
                              <label for="inputMobile" class="form-label">Marital Status:
                                   <?php echo $marital_status; ?></label>
                              <!-- <br> -->
                              <!-- <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio1"
                                        value="Married">
                                   <label class="form-check-label" for="inlineRadio1">Married</label>
                              </div> -->
                              <!-- <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio2"
                                        value="Divorced">
                                   <label class="form-check-label" for="inlineRadio2">Divorced</label>
                              </div> -->
                         </div>
                         <div class="col-6">
                              <label for="inputMobile" class="form-label">Food: <?php echo $food; ?></label>
                              <!-- <br> -->
                              <!-- <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="food" id="inlineRadio3"
                                        value="Veg">
                                   <label class="form-check-label" for="inlineRadio3">Veg</label>
                              </div>
                              <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="food" id="inlineRadio4"
                                        value="Non-Veg">
                                   <label class="form-check-label" for="inlineRadio4">Non-Veg</label>
                              </div> -->
                         </div>
                         <div class="col-md-6">
                              <label for="inputFaterName" class="form-label">Father's Name:
                                   <?php echo $father_name; ?></label>
                              <!-- <input type="text" class="form-control" name="father_name" id="inputFaterName"> -->
                         </div>
                         <div class="col-md-6">
                              <label for="inputMotherName" class="form-label">Mother's Name:
                                   <?php echo $mother_name; ?></label>
                              <!-- <input type="text" class="form-control" name="mother_name" id="inputMotherName"> -->
                         </div>
                         <div class="col-md-6">
                              <label for="inputSurname" class="form-label">Surname: <?php echo $surname; ?></label>
                              <!-- <input type="text" class="form-control" name="surname" id="inputSurname" required> -->
                         </div>
                         <div class="col-md-6">
                              <label for="inputNPlace" class="form-label">Native Place:
                                   <?php echo $native_place; ?></label>
                              <!-- <input type="text" class="form-control" name="native_place" id="inputNPlace"> -->
                         </div>
                         <div class="col-12">
                              <label for="inputAddress" class="form-label">Address: <?php echo $address; ?></label>
                              <!-- <textarea class="form-control" name="address" id="inputAddress"></textarea> -->
                         </div>
                         <!-- <div class="col-12">
                              <label for="inputProfilePhoto" class="form-label">Profile Photo</label>
                              <input type="file" class="form-control" name="profile_photo" id="inputProfilePhoto">
                         </div> -->
                         <div class="col-md-6">
                              <label for="inputAboutYou" class="form-label">About You: <?php echo $about_you; ?></label>
                              <!-- <input type="text" class="form-control" name="about_you" id="inputAboutYou"> -->
                         </div>
                         <div class="col-md-6">
                              <label for="inputEducation" class="form-label">Education:
                                   <?php echo $education; ?></label>
                              <!-- <input type="text" class="form-control" name="education" id="inputEducation"> -->
                         </div>
                         <div class="col-12">
                              <label for="inputProfession" class="form-label">Job/Business:
                                   <?php echo $job_business; ?></label>
                              <!-- <textarea class="form-control" name="profession" id="inputProfession"></textarea> -->
                         </div>
                         <div class="col-12">
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                   data-bs-target="#exampleModal">
                                   Reset
                              </button> -->
                              <a href="edit.php" class="btn btn-warning">Edit</a>
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