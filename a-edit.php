<?php

// ob_start();
session_start();
require_once "config.php";

// $name = $father_name = $mother_name = $surname = $father_native_place = $mother_native_place = $gender = $marital_status = $birth_date = $birth_time = $birth_time_ampm = $birth_time_morining = $birth_place = $height = $mobile_number_one = $mobile_number_two = $email = $address = $education = $profession = $monthly_income = $about_you = "";

if (isset($_SESSION['name'])) {
     $name = $_SESSION['name'];
     $father_name = $_SESSION['father_name'];
     $surname = $_SESSION['surname'];
     $father_native_place = $_SESSION['father_native_place'];
     $mother_name = $_SESSION['mother_name'];
     $mother_native_place = $_SESSION['mother_native_place'];
     $gender = $_SESSION['gender'];
     $marital_status = $_SESSION['marital_status'];
     $birth_date = $_SESSION['date_of_birth'];
     $birth_time = $_SESSION['birth_time'];
     // $birth_time_ampm = $_SESSION['birth_time_ampm'];
     // $birth_time_morining = $_SESSION['birth_time_morining'];
     $birth_place = $_SESSION['birth_place'];
     $height = $_SESSION['height'];
     $mobile = $_SESSION['mobile_number'];
     $mobile_number_one = $_SESSION['mobile_number_one'];
     $mobile_number_two = $_SESSION['mobile_number_two'];
     $email = $_SESSION['email'];
     $address = $_SESSION['address'];
     $education = $_SESSION['education'];
     $profession = $_SESSION['profession'];
     $monthly_income = $_SESSION['monthly_income'];
     $about_you = $_SESSION['about_you'];
     // $profile_photo = "";
} else {
     $id = $_SESSION['user_id'];
     $sql1 = mysqli_query($conn, "SELECT * FROM user_tbl WHERE user_id = $id");
     while ($row = mysqli_fetch_array($sql1)) {
          // $counter++;
          $name = $row['name'];
          $father_name = $row['father_name'];
          $surname = $row['surname'];
          $father_native_place = $row['father_native_place'];
          $mother_name = $row['mother_name'];
          $mother_native_place = $row['mother_native_place'];
          $gender = $row['gender'];
          $marital_status = $row['marital_status'];
          $birth_date = $row['birth_date'];
          $birth_time = $row['birth_time'];
          $birth_place = $row['birth_place'];
          $height = $row['height'];
          $mobile_number_one = $row['mobile_number_one'];
          $mobile_number_two = $row['mobile_number_two'];
          //  = $row['mobile_number'];
          $email = $row['email'];
          $address = $row['address'];
          $education = $row['education'];
          $profession = $row['profession'];
          $monthly_income = $row['monthly_income'];
          $about_you = $row['about_you'];
     }
}

$confirm_error = "";

$name_error = $father_name_error = $mother_name_error = $surname_error = $father_native_place_error = $mother_native_place_error = $gender_error = $marital_status_error = $birth_date_error = $birth_time_error = $birth_time_ampm_error = $birth_time_morining_error = $birth_place_error = $height_error = $mobile_number_one_error = $mobile_number_two_error = $email_error = $address_error = $education_error = $profession_error = $monthly_income_error = $about_you_error = "";
// $profile_photo_error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

     if (isset($_POST['confirm'])) {

          // if (isset($_FILES['profile_photo'])) {
          //      // $profile_photo = $_POST['profile_photo'];
          //      $image_name = $_FILES['profile_photo']['name'];
          //      $image_size = $_FILES['profile_photo']['size'];
          //      $tmp_name = $_FILES['profile_photo']['tmp_name'];
          //      $type = $_FILES['profile_photo']['type'];

          //      if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/jpe" || $type == "image/jfif") {

          //           $profile_photo = rand(10000000, 99999999) . ".png";
          //      } else {
          //           $profile_photo_error = "Valid extensions .jpg, .jpeg, .png, .jpe, .jifi";
          //      }
          // } else {
          //      $profile_photo_error = "Please select a picture";
          // }

          if (isset($_POST['name'])) {
               $name = $_POST['name'];
          } else {
               $name_error = "Please enter your first name";
          }

          if (isset($_POST['father_name'])) {
               $father_name = $_POST['father_name'];
          } else {
               $father_name_error = "Please enter your father's name";
          }

          if (isset($_POST['surname'])) {
               $surname = $_POST['surname'];
          } else {
               $surname_error = "Please enter your father's name";
          }

          if (isset($_POST['father_native_place'])) {
               $father_native_place = $_POST['father_native_place'];
          } else {
               $father_native_place_error = "Please enter your father's native place";
          }

          if (isset($_POST['mother_name'])) {
               $mother_name = $_POST['mother_name'];
          } else {
               $mother_name_error = "Please enter your mother's name";
          }

          if (isset($_POST['mother_native_place'])) {
               $mother_native_place = $_POST['mother_native_place'];
          } else {
               $mother_native_place_error = "Please enter your mother's native place";
          }

          if (isset($_POST['gender'])) {
               $gender = $_POST['gender'];
          } else {
               $gender_error = "Please select your gender";
          }

          if (isset($_POST['marital_status'])) {
               $marital_status = $_POST['marital_status'];
          } else {
               $marital_status_error = "Please select your marital status";
          }

          if (isset($_POST['birth_date'])) {
               $birth_date = $_POST['birth_date'];
          } else {
               $birth_date_error = "Please enter your date of birth";
          }

          if (isset($_POST['birth_place'])) {
               $birth_place = $_POST['birth_place'];
          } else {
               $birth_place_error = "Please enter your place of birth";
          }

          if (isset($_POST['height'])) {
               $height = $_POST['height'];
          } else {
               $height_error = "Please enter your height";
          }

          if (isset($_POST['mobile_number_one'])) {
               $mobile_number_one = $_POST['mobile_number_one'];
          } else {
               $mobile_number_one_error = "Please enter your mobile number";
          }

          if (isset($_POST['email'])) {
               $email = $_POST['email'];
          } else {
               $email_error = "Please enter your email address";
          }

          if (isset($_POST['address'])) {
               $address = $_POST['address'];
          } else {
               $address_error = "Please enter your present address";
          }

          if (isset($_POST['education'])) {
               $education = $_POST['education'];
          } else {
               $education_error = "Please enter your education details";
          }

          if (isset($_POST['profession'])) {
               $profession = $_POST['profession'];
          } else {
               $profession_error = "Please enter your job/bussiness details";
          }

          if (isset($_POST['about_you'])) {
               $about_you = $_POST['about_you'];
          } else {
               $about_you_error = "Please enter something in about you";
          }

          // $profile_photo_error == "" && 
          if ($name_error == "" && $father_name_error == "" && $surname_error == "" && $mother_name_error == "" && $father_native_place_error == "" && $mother_native_place_error == "" && $gender_error == "" && $marital_status_error == "" && $birth_date_error == "" && $birth_time_error == "" && $birth_place_error == "" && $height_error == "" && $mobile_number_one_error == "" && $email_error == "" && $address_error == "" && $education_error == "" && $profession_error == "" && $monthly_income_error == "" && $about_you_error == "") {

               // $_SESSION['profile_photo'] = $_POST['profile_photo'];
               // $des = "./uploaded_images/" . $profile_photo;
               // move_uploaded_file($tmp_name, $des);

               $_SESSION['name'] = $_POST['name'];

               $_SESSION['father_name'] = $_POST['father_name'];

               $_SESSION['surname'] = $_POST['surname'];

               $_SESSION['father_native_place'] = $_POST['father_native_place'];

               $_SESSION['mother_name'] = $_POST['mother_name'];

               $_SESSION['mother_native_place'] = $_POST['mother_native_place'];

               $_SESSION['gender'] = $_POST['gender'];

               $_SESSION['marital_status'] = $_POST['marital_status'];

               $_SESSION['date_of_birth'] = $_POST['birth_date'];

               $_SESSION['birth_time'] = $_POST['birth_time'] . " " . $_POST['birth_time_ampm'] . " " . $_POST['birth_time_morining'];
               // $_SESSION['birth_time'] = $_POST['birth_time'] . " ". $_POST['birth_time_ampm'] . " ". $_POST['birth_time_morining'];
               // $_SESSION['birth_time_ampm'] = $_POST['birth_time_ampm'];
               // $_SESSION['birth_time_morining'] = $_POST['birth_time_morining'];

               $_SESSION['birth_place'] = $_POST['birth_place'];

               $_SESSION['height'] = $_POST['height'];

               if ($_POST['mobile_number_two'] != "") {
                    $_SESSION['mobile_number'] = $_POST['mobile_number_one'] . ", " . $_POST['mobile_number_two'];
               } else {
                    $_SESSION['mobile_number'] = $_POST['mobile_number_one'];
               }

               $_SESSION['mobile_number_one'] = $_POST['mobile_number_one'];

               $_SESSION['mobile_number_two'] = $_POST['mobile_number_two'];

               $_SESSION['email'] = $_POST['email'];

               $_SESSION['address'] = $_POST['address'];

               $_SESSION['education'] = $_POST['education'];

               $_SESSION['profession'] = $_POST['profession'];

               $_SESSION['monthly_income'] = $_POST['monthly_income'];

               $_SESSION['about_you'] = $_POST['about_you'];

               // $_SESSION['profile_photo'] = $profile_photo;

               header("location: view.php");
          }
     } else {
          $confirm_error = "Please check this checkbox to submit the form.";
     }
}

?>

<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Update Details</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
               <img src="images/logo.jpeg" class="rounded-circle border-1 border-dark border-opacity-100 float-start mt-4" alt="..." width="10vw" height="10vw">
               <div style="max-width: 60vw;">
                    <p class="text-center h4">JAY HINGLAJ</p>
                    <p class="text-center h4">Shree Navpargana Bhavsar Seva Samaj-Navsari</p>
                    <p class="text-center h6 mt-3 fw-semibold">2738, Ashadip Colony,Chhapra Road Navsari,PIN-396445</p>

                    <p class="text-center h6 mt-3 fw-semibold">Mobile No.: 6353200313</p>
                    <p class="text-center h6 fw-semibold">Landline No.: 02637 244415 </p>
                    <p class="text-center h6 fw-semibold">Email: <a href="mailto:navparaganabhavsar@gmail.com">navparaganabhavsar@gmail.com</a> </p>
               </div>
               <img src="images/image.jpeg" class="rounded-circle float-end mt-4 me-1" alt="..." width="9vw" height=9vw">
          </div>
     </header>

     <div class="container mt-3 d-flex justify-content-center align-items-center">
          <div class="card p-5 z-2 shadow-lg border-0">
               <form class="row g-3" method="POST" enctype="multipart/form-data" netlify>
                    <h3 class="text-center m-0 fw-semibold">Online 2<sup>nd</sup> Marrage Beuro.</h3>
                    <label for="" class="h5 text-center fw-semibold">Last date for apply: 10 March, 2023</label>

                    <div class="col-md-6">
                         <label for="inputName" class="form-label">Name</label>
                         <input type="text" class="form-control" name="name" id="inputName" value="<?php echo $name; ?>" required>
                         <div class="invalid-input">
                              <?php echo $name_error; ?>
                         </div>
                    </div>

                    <div class="col-md-6">
                         <label for="inputFaterName" class="form-label">Father's Name</label>
                         <input type="text" class="form-control" name="father_name" id="inputFaterName" value="<?php echo $father_name; ?>" required>
                    </div>

                    <div class="col-md-6">
                         <label for="inputSurname" class="form-label">Surname</label>
                         <input type="text" class="form-control" name="surname" id="inputSurname" value="<?php echo $surname; ?>" required>
                    </div>
                    <div class="col-md-6">
                         <label for="inputFaterNativePlace" class="form-label">Father's Native Place</label>
                         <input type="text" class="form-control" name="father_native_place" id="inputFaterNativePlace" value="<?php echo $father_native_place; ?>" required>
                    </div>
                    <div class="col-md-6">
                         <label for="inputMotherName" class="form-label">Mother's Name</label>
                         <input type="text" class="form-control" name="mother_name" id="inputMotherName" value="<?php echo $mother_name; ?>" required>
                    </div>
                    <div class="col-md-6">
                         <label for="inputMotherNativePlace" class="form-label">Mother's Address (Mosal)</label>
                         <input type="text" class="form-control" name="mother_native_place" id="inputMotherNativePlace" value="<?php echo $mother_native_place; ?>" required>
                    </div>
                    <div class="col-6">
                         <label for="" class="form-label">Gender</label>
                         <br>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Male" <?php echo ($gender == "Male") ? "Checked" : ""; ?>>
                              <label class="form-check-label" for="inlineRadio3">Male</label>
                         </div>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="inlineRadio4" value="Female" <?php echo ($gender == "Female") ? "Checked" : ""; ?>>
                              <label class="form-check-label" for="inlineRadio4">Female</label>
                         </div>
                    </div>
                    <div class="col-6">
                         <label for="" class="form-label">Marital Status</label>
                         <br>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio1" value="Unmarried" <?php echo ($marital_status == "Unmarried") ? "Checked" : ""; ?>>
                              <label class="form-check-label" for="inlineRadio1">Unmarried</label>
                         </div>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio2" value="Divorcee" <?php echo ($marital_status == "Divorcee") ? "Checked" : ""; ?>>
                              <label class="form-check-label" for="inlineRadio2">Divorcee</label>
                         </div>
                    </div>

                    <div class="col-md-6">
                         <label for="inputDateOfBirth" class="form-label">Date of Birth</label>
                         <input type="date" class="form-control" name="birth_date" id="inputDateOfBirth" value="<?php echo $birth_date; ?>" required>
                    </div>


                    <div class="col-md-6">
                         <label for="inputTimeOfBirth" class="form-label">Time of Birth</label> <br>
                         <input type="text" class="form-control" name="birth_time" id="inputTimeOfBirth" style="width: 40%; display: inline" value="<?php echo $birth_time ?>" required>
                         <select class=" form-select" name="birth_time_ampm" title="birth_time_ampm" style="width: auto; display: inline" required>
                              <option value="AM" <?php //echo ($birth_time_ampm == "AM") ? "Selected" : ""; 
                                                  ?>>AM
                              </option>
                              <option value="PM" <?php // echo ($birth_time_ampm == "PM") ? "Selected" : ""; 
                                                  ?>>PM
                              </option>
                         </select>
                         <select class=" form-select" name="birth_time_morining" title="birth_time_morining" style="width: auto; display: inline" required>
                              <option value="Morning" <?php //echo ($birth_time_morining == "Morning") ? "Selected" : ""; 
                                                       ?>>
                                   Morning
                              </option>
                              <option value="Afternoon" <?php //echo ($birth_time_morining == "Afternoon") ? "Selected" : ""; 
                                                            ?>>
                                   Afternoon</option>
                              <option value="Evening" <?php //echo ($birth_time_morining == "Evening") ? "Selected" : ""; 
                                                       ?>>
                                   Evening
                              </option>
                         </select>
                    </div>
                    <div class="col-md-6">
                         <label for="inputBirthPlace" class="form-label">Birth Place</label>
                         <input type="text" class="form-control" name="birth_place" id="inputBirthPlace" value="<?php echo $birth_place; ?>" required>
                    </div>
                    <div class="col-md-6">
                         <label for="inputHeight" class="form-label">Height</label>
                         <input type="text" class="form-control" name="height" id="inputHeight" value="<?php echo $height; ?>" required>
                    </div>
                    <div class="col-md-6">
                         <label for="inputMobile" class="form-label">Mobile Number (1)</label>
                         <input type="tel" class="form-control" name="mobile_number_one" id="inputMobile" value="<?php echo $mobile_number_one; ?>" required>
                    </div>
                    <div class="col-md-6">
                         <label for="inputMobile2" class="form-label">Mobile Number (2)(Optional)</label>
                         <input type="tel" class="form-control" name="mobile_number_two" id="inputMobile2" value="<?php echo $mobile_number_two; ?>">
                    </div>
                    <div class="col-12">
                         <label for="inputEmail" class="form-label">Email</label>
                         <input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="col-12">
                         <label for="inputAddress" class="form-label">Present Address</label>
                         <textarea class="form-control" name="address" id="inputAddress"><?php echo $address; ?></textarea>
                    </div>
                    <div class="col-12">
                         <label for="inputEducation" class="form-label">Education</label>
                         <input type="text" class="form-control" name="education" id="inputEducation" value="<?php echo $education; ?>" required>
                    </div>
                    <div class="col-md-6">
                         <label for="inputProfession" class="form-label">Job/Business</label>
                         <input type="text" class="form-control" name="profession" id="inputProfession" value="<?php echo $profession; ?>" required>
                    </div>
                    <div class="col-md-6">
                         <label for="inputMonthlyIncome" class="form-label">Monthly Income</label>
                         <input type="text" class="form-control" name="monthly_income" id="inputMonthlyIncome" value="<?php echo $monthly_income; ?>">
                    </div>
                    <div class="col-12">
                         <label for="inputAboutYou" class="form-label">About You</label>
                         <textarea class="form-control" name="about_you" id="inputAboutYou"><?php echo $about_you; ?></textarea>
                    </div>

                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="checkbox" name="confirm" id="confirm" value="true" required>
                         <label class="form-check-label" for="confirm">I/We hereby declare that the above details are
                              correct and true to our knowledge</label>
                         <div class="invalid-input">
                              <?php echo $confirm_error; ?>
                         </div>
                    </div>
                    <div class="col-12">
                         <button type="submit" class="btn btn-primary">Submit</button>
                         <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              Reset
                         </button>
                         <button type="reset" class="btn btn-warning" id="reset-button">Reset</button>
                    </div>
               </form>
          </div>
     </div>


     <!-- Button trigger modal -->

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                    <div class="modal-header">
                         <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         Are you sure, you want to reset the form?
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="reset" onclick="reset()" data-bs-dismiss="modal" class="btn btn-warning">Reset</button>
                    </div>
               </div>
          </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
     </script>

     <script>
          var btnReset = document.getElementById("reset-button");
          btnReset.style.visibility = 'hidden';

          function reset() {
               btnReset.click();
          }
     </script>
</body>

</html>