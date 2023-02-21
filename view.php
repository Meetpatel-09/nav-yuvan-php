<?php
ob_start();

session_start();

require_once "config.php";

if (isset($_SESSION['name'])) {
     $name = $_SESSION['name'];
     $father_name = $_SESSION['father_name'];
     $surname = $_SESSION['surname'];
     $father_native_place = $_SESSION['father_native_place'];
     $mother_name = $_SESSION['mother_name'];
     $mother_native_place = $_SESSION['mother_native_place'];
     $gender = $_SESSION['gender'];
     $marital_status = $_SESSION['marital_status'];
     $date_of_birth = $_SESSION['date_of_birth'];
     $birth_time = $_SESSION['birth_time'] . " " . $_SESSION['birth_time_ampm'] . " " . $_SESSION['birth_time_morining'];
     $birth_place = $_SESSION['birth_place'];
     $height = $_SESSION['height'];
     $mobile = $_SESSION['mobile_number'];
     $mobile_number_one = $_SESSION['mobile_number_one'];
     $mobile_number_two = $_SESSION['mobile_number_two'];
     $email = $_SESSION['email'];
     $address = $_SESSION['address'];
     $education = $_SESSION['education'];
     $job_business = $_SESSION['profession'];
     $monthly_income = $_SESSION['monthly_income'];
     $about_you = $_SESSION['about_you'];

     $profile_photo = $_SESSION['profile_photo'];
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

     $query = "INSERT INTO `user_tbl`(`name`, `father_name`, `mother_name`, `surname`, `father_native_place`, `mother_native_place`, `gender`, `marital_status`, `birth_date`, `birth_time`, birth_time_ampm, birth_time_morining, `birth_place`, `height`, `mobile_number_one`, `mobile_number_two`, `email`, `address`, `education`, `profession`, `monthly_income`, `about_you`, `profile_photo`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

     $stmt = mysqli_prepare($conn, $query);

     if ($stmt) {

          mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssss", $p_name, $p_father_name, $p_mother_name, $p_surname, $p_father_native_place, $p_mother_native_place, $p_gender, $p_marital_status, $p_birth_date, $p_birth_time, $birth_time_ampm, $birth_time_morining, $p_birth_place, $p_height, $p_mobile_number_one, $p_mobile_number_two, $p_email, $p_address, $p_education, $p_profession, $p_monthly_income, $p_about_you, $p_profile_photo);

          $p_name = $_SESSION['name'];
          $p_father_name = $_SESSION['father_name'];
          $p_mother_name = $_SESSION['mother_name'];
          $p_surname =  $_SESSION['surname'];
          $p_father_native_place = $_SESSION['father_native_place'];
          $p_mother_native_place = $_SESSION['mother_native_place'];
          $p_gender = $_SESSION['gender'];
          $p_marital_status = $_SESSION['marital_status'];
          $p_birth_date = $_SESSION['date_of_birth'];
          $p_birth_time = $_SESSION['birth_time'];
          $birth_time_ampm =  $_SESSION['birth_time_ampm'];
          $birth_time_morining = $_SESSION['birth_time_morining'];
          $p_birth_place = $_SESSION['birth_place'];
          $p_height = $_SESSION['height'];
          $p_mobile_number_one = $_SESSION['mobile_number_one'];
          $p_mobile_number_two = $_SESSION['mobile_number_two'];
          $p_email = $_SESSION['email'];
          $p_address = $_SESSION['address'];
          $p_education = $_SESSION['education'];
          $p_profession = $_SESSION['profession'];
          $p_monthly_income = $_SESSION['monthly_income'];
          $p_about_you = $_SESSION['about_you'];
          $p_profile_photo = $_SESSION['profile_photo'];

          if (mysqli_stmt_execute($stmt)) {
               unset($_SESSION['name']);
               unset($_SESSION['father_name']);
               unset($_SESSION['mother_name']);
               unset($_SESSION['surname']);
               unset($_SESSION['father_native_place']);
               unset($_SESSION['gender']);
               unset($_SESSION['marital_status']);
               unset($_SESSION['date_of_birth']);
               unset($_SESSION['birth_time']);
               unset($_SESSION['birth_time_ampm']);
               unset($_SESSION['birth_time_morining']);
               unset($_SESSION['birth_place']);
               unset($_SESSION['height']);
               unset($_SESSION['mobile_number_one']);
               unset($_SESSION['mobile_number_two']);
               unset($_SESSION['email']);
               unset($_SESSION['address']);
               unset($_SESSION['education']);
               unset($_SESSION['profession']);
               unset($_SESSION['monthly_income']);
               unset($_SESSION['about_you']);
               unset($_SESSION['profile_photo']);

               $_SESSION["status"] = "success";
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
     <title>Home</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">

     <style>
          header>div>img {
               width: 18vw;
               height: 18vw;
          }

          @media only screen and (orientation: landscape) {
               header>div>img {
                    height: 120px;
                    width: 120px;
               }
          }
     </style>
</head>

<body class="pb-4">


     <header style="background-color: white; z-index: 5;">
          <div class="ps-5 pe-5 pb-3 pt-3 d-flex shadow-lg justify-content-evenly">
               <img src="images/logo.jpeg" class="rounded-circle border-1 border-dark border-opacity-100 float-start mt-4" alt="..." width="10vw" height="10vw">
               <div style="max-width: 60vw;">
                    <p class="text-center h4">JAY HINGLAJ</p>
                    <p class="text-center h4">Shree Navpargana Bhavsar Seva Samaj-Navsari</p>
                    <p class="text-center h6 mt-3 fw-semibold">2738, Ashadip Colony,Chhapra Road Navsari,PIN-396445
                    </p>

                    <p class="text-center h6 mt-3 fw-semibold">Mobile No.: 6353200313</p>
                    <p class="text-center h6 fw-semibold">Landline No.: 02637 244415 </p>
                    <p class="text-center h6 fw-semibold">Email: <a href="mailto:navparaganabhavsar@gmail.com">navparaganabhavsar@gmail.com</a> </p>
               </div>
               <img src="images/image.jpeg" class="rounded-circle float-end mt-4 me-1" alt="..." width="9vw" height=9vw">
          </div>
     </header>

     <div class="container mt-3 d-flex justify-content-center align-items-center">
          <div class="card p-5 z-2 shadow-lg border-0">
               <form class="row g-3" method="POST">
                    <h1>Nav Yuvan</h1>
                    <div class="d-flex flex-wrap-reverse row">
                         <div class="col-md-6">
                              <label for="inputName" class="form-label">Name:
                                   <?php echo $name; ?></label>
                              <br>
                              <label for="inputFaterName" class="form-label">Father's Name:
                                   <?php echo $father_name; ?></label>
                              <br>
                              <label for="inputSurname" class="form-label">Surname: <?php echo $surname; ?></label>
                              <br>
                              <label for="inputFNPlace" class="form-label">Father's Native Place:
                                   <?php echo $father_native_place; ?></label>
                              <br>
                              <label for="inputMotherName" class="form-label">Mother's Name:
                                   <?php echo $mother_name; ?></label>
                              <br>
                              <label for="inputMNPlace" class="form-label">Mother's Address (Mosal):
                                   <?php echo $mother_native_place; ?></label>
                              <br>
                              <label for="inputGender" class="form-label">Gender:
                                   <?php echo $gender; ?></label>
                              <br>
                              <label for="inputMaritalStatus" class="form-label">Marital Status:
                                   <?php echo $marital_status; ?></label>
                              <br>
                              <label for="inputDoB" class="form-label">Birth Date: <?php echo $date_of_birth; ?></label>
                              <br>
                              <label for="inputToB" class="form-label">Birth Time: <?php echo $birth_time; ?></label>
                              <br>
                              <label for="inputBirthPlace" class="form-label">Birth Place:
                                   <?php echo $birth_place; ?></label>
                              <br>
                              <label for="inputGender" class="form-label">Height:
                                   <?php echo $height; ?></label>
                              <br>
                              <label for="inputMobile" class="form-label">Mobile Number:
                                   <?php echo $mobile; ?></label>
                              <br>
                              <label for="inputEmail" class="form-label">Email: <?php echo $email; ?></label>
                              <br>
                              <label for="inputAddress" class="form-label">Address: <?php echo $address; ?></label>
                              <br>
                              <label for="inputEducation" class="form-label">Education:
                                   <?php echo $education; ?></label>
                              <br>
                              <label for="inputProfession" class="form-label">Job/Business:
                                   <?php echo $job_business; ?></label>
                              <br>
                              <label for="inputProfession" class="form-label">Monthly Income:
                                   <?php echo $monthly_income; ?></label>
                              <br>
                              <label for="inputAboutYou" class="form-label">About You: <?php echo $about_you; ?></label>
                         </div>
                         <div class="col-md-6">
                              <img src="uploaded_images/<?php echo $profile_photo ?>" style="max-width: 100%;" />
                              <a href="change-profile-piciture.php" class="btn m-3 btn-warning">Change Profile
                                   Picture</a>
                         </div>
                    </div>
                    <div class="col-12">
                         <button type="submit" class="btn btn-primary">Submit</button>
                         <a href="edit.php" class="btn btn-warning">Edit</a>
                    </div>
               </form>
          </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
     </script>
</body>

</html>