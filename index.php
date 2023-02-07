<?php

// ob_start();
session_start();
require_once "config.php";

$fname_error = $lname_error = $email_error = $pwd_error = $address_error = $cname_error = $mobile_error = $gender_error = $h1_error = $h2_error = $h3_error = $state_error = "";
$fname = $lname = $email = $pwd = $address = $cname = $mobile = $gender = $h1 = $h2 = $h3 = $state = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

     $_SESSION['name'] = $_POST['name'];
     $_SESSION['email'] = $_POST['email'];
     $_SESSION['mobile'] = $_POST['mobile'];
     $_SESSION['dob'] = $_POST['dob'];
     $_SESSION['marital_status'] = $_POST['marital_status'];
     $_SESSION['food'] = $_POST['food'];
     $_SESSION['father_name'] = $_POST['father_name'];
     $_SESSION['mother_name'] = $_POST['mother_name'];
     $_SESSION['surname'] = $_POST['surname'];
     $_SESSION['native_place'] = $_POST['native_place'];
     $_SESSION['address'] = $_POST['address'];
     $_SESSION['about_you'] = $_POST['about_you'];
     $_SESSION['education'] = $_POST['education'];
     $_SESSION['profession'] = $_POST['profession'];

     header("location: view.php");

     // if (empty($_POST['fName'])) {
     //      $fname_error = "Please Enter your full name";
     // } else {
     //      $fname = $_POST['fName'];
     // }

     // if (empty(trim($_POST['lName']))) {
     //      $lname_error = "Please Enter your last name";
     // } else {
     //      $lname = $_POST['lName'];
     // }

     // if (empty(trim($_POST['email']))) {
     //      $email_error = "Please Enter your Email address";
     // } else {

     //      $stmt = mysqli_prepare($conn, "SELECT id FROM user_tbl WHERE email = ?");

     //      if ($stmt) {

     //           mysqli_stmt_bind_param($stmt, 's', $p_email);

     //           $p_email = $_POST['email'];

     //           if (mysqli_stmt_execute($stmt)) {
     //                mysqli_stmt_store_result($stmt);

     //                if (mysqli_stmt_num_rows($stmt) > 0) {
     //                     $email_error = "Email already registered";
     //                } else {
     //                     $email = $_POST['email'];
     //                }
     //           }
     //      }
     // }

     // if (empty(trim($_POST['mobile']))) {
     //      $mobile_error = "Please Enter your Mobile number";
     // } else {

     //      $query = "SELECT mobile FROM user_tbl WHERE mobile = ?";

     //      $stmt = mysqli_prepare($conn, $query);

     //      if ($stmt) {

     //           mysqli_stmt_bind_param($stmt, 's', $p_mobile);

     //           $p_mobile = $_POST['mobile'];

     //           if (mysqli_stmt_execute($stmt)) {
     //                mysqli_stmt_store_result($stmt);

     //                if (mysqli_stmt_num_rows($stmt) == 1) {
     //                     $mobile_error = "Number already registered";
     //                } else {
     //                     $mobile = $_POST['mobile'];
     //                }
     //           }
     //      }
     // }

     // if (isset($_POST['Hobby1'])) {
     //      $h1 = $_POST['Hobby1'];
     // } else {
     //      echo "";
     // }
     // if (isset($_POST['Hobby2'])) {
     //      $h2 = $_POST['Hobby2'];
     // } else {
     //      echo "";
     // }
     // if (isset($_POST['Hobby3'])) {
     //      $h3 = $_POST['Hobby3'];
     // } else {
     //      echo "";
     // }

     // $address = $_POST['address'];

     // if (empty(trim($_POST['password']))) {
     //      $pwd_error = "Please Create a password";
     // } else {
     //      if (strlen($_POST['password']) < 6) {
     //           $pwd_error = "Password length must be between 6 to 12 charactors";
     //      } else {
     //           $pwd = $_POST['password'];
     //      }
     // }

     // if (isset($_POST['gender'])) {
     //      $gender = $_POST['gender'];
     // } else {
     //      $gender_error = "Select Gender";
     // }

     // if ($_POST['state'] == "Not Selected") {
     //      $state_error = "Please select a State";
     // } else {
     //      $state = $_POST['state'];
     // }


     // if (empty($fname_error) and empty($lname_error) and empty($email_error) and empty($pwd_error) and empty($gender_error) and empty($state_error) and empty($mobile_error)) {


     // $query = "INSERT INTO `users` (`name`, `email`, `mobile_number`, `marital_status`, `food`, `father_name`, `mother_name`, `surname`, `native_place`, `address`, `about_you`, `education`, `job_business`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

     // $stmt = mysqli_prepare($conn, $query);

     // if ($stmt) {

     //      mysqli_stmt_bind_param($stmt, "sssssssssssss", $p_name, $p_email, $p_mobile, $p_marital_status, $p_food, $p_father_name, $p_mother_name, $p_surname, $p_native_place, $p_address, $p_about_you, $p_education, $p_job_business);

     //      $p_name = $name;
     //      $p_email = $email;
     //      $p_mobile = $mobile;
     //      $p_marital_status = $marital_status;
     //      $p_food = $food;
     //      $p_father_name = $father_name;
     //      $p_mother_name = $mother_name;
     //      $p_surname = $surname;
     //      $p_native_place = $native_place;
     //      $p_address = $address;
     //      $p_about_you = $about_you;
     //      $p_education = $education;
     //      $p_job_business = $job_business;

     //      if (mysqli_stmt_execute($stmt)) {
     //           header("location: index.html");
     //      } else {
     //           echo "Someting went wrong";
     //      }
     // } else {
     //      echo "Database error";
     // }
     // mysqli_stmt_close($stmt);
     // // }
     // mysqli_close($conn);
}

?>
<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Nav Yuvan</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">

</head>

<body class="py-4">
     <div class="container d-flex justify-content-center align-items-center">
          <div class="card p-5 z-2 shadow-lg border-0">
               <form class="row g-3" method="POST">
                    <h1>Nav Yuvan</h1>
                    <!-- <div class="col-12">
                         <img src="images/p2.png" class="rounded-circle" style="width: 150px;" alt="Avatar" />
                         <br>
                    </div> -->

                    <div class="col-12">
                         <label for="inputProfilePhoto" class="form-label">Profile Photo</label>
                         <input type="file" class="form-control" name="profile_photo" id="inputProfilePhoto">
                    </div>
                    <div class="col-md-6">
                         <label for="inputName" class="form-label">Name</label>
                         <input type="text" class="form-control" name="name" id="inputName" required>
                         <!-- <div id="invalid-name" class="invalid-input">
                              Valid first name is required.
                         </div> -->
                    </div>
                    <div class="col-6">
                         <label for="" class="form-label">Gender</label>
                         <br>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Veg">
                              <label class="form-check-label" for="inlineRadio3">Male</label>
                         </div>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="inlineRadio4"
                                   value="Non-Veg">
                              <label class="form-check-label" for="inlineRadio4">Female</label>
                         </div>
                    </div>
                    <div class="col-md-6">
                         <label for="inputFaterName" class="form-label">Father's Name</label>
                         <input type="text" class="form-control" name="father_name" id="inputFaterName">
                    </div>
                    <div class="col-md-6">
                         <label for="inputFaterNativePlace" class="form-label">Father's Native Place</label>
                         <input type="text" class="form-control" name="father_native_place" id="inputFaterNativePlace">
                    </div>
                    <div class="col-md-6">
                         <label for="inputMotherName" class="form-label">Mother's Name</label>
                         <input type="text" class="form-control" name="mother_name" id="inputMotherName">
                    </div>
                    <div class="col-md-6">
                         <label for="inputMotherNativePlace" class="form-label">Mother's Native Place</label>
                         <input type="text" class="form-control" name="mother_native_place" id="inputMotherNativePlace">
                    </div>
                    <div class="col-md-6">
                         <label for="inputSurname" class="form-label">Surname</label>
                         <input type="text" class="form-control" name="surname" id="inputSurname" required>
                    </div>
                    <div class="col-6">
                         <label for="" class="form-label">Marital Status</label>
                         <br>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio1"
                                   value="Unmarried">
                              <label class="form-check-label" for="inlineRadio1">Unmarried</label>
                         </div>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio2"
                                   value="Divorcee">
                              <label class="form-check-label" for="inlineRadio2">Divorcee</label>
                         </div>
                    </div>
                    <div class="col-12">
                         <label for="inputAddress" class="form-label">Address</label>
                         <textarea class="form-control" name="address" id="inputAddress"></textarea>
                    </div>
                    <div class="col-md-6">
                         <label for="inputMobile" class="form-label">Mobile Number (1)</label>
                         <input type="tel" class="form-control" name="mobile" id="inputMobile" required>
                    </div>
                    <div class="col-md-6">
                         <label for="inputMobile" class="form-label">Mobile Number (2)(Optional)</label>
                         <input type="tel" class="form-control" name="mobile" id="inputMobile" required>
                    </div>
                    <div class="col-md-6">
                         <label for="inputEmail" class="form-label">Email</label>
                         <input type="email" class="form-control" name="email" id="inputEmail" required>
                         <!-- <div id="invalid-email" class="invalid-input">
                              Valid email is required.
                         </div> -->
                    </div>
                    <!-- 
                    <div class="col-md-6">
                         <label for="inputNPlace" class="form-label">Native Place</label>
                         <input type="text" class="form-control" name="native_place" id="inputNPlace">
                    </div> -->
                    <div class="col-md-6">
                         <label for="inputEducation" class="form-label">Education</label>
                         <input type="text" class="form-control" name="education" id="inputEducation">
                    </div>
                    <!-- <div class="col-12"> -->
                    <div class="col-md-6">
                         <label for="inputProfession" class="form-label">Job/Business</label>
                         <!-- <textarea class="form-control" name="profession" id="inputProfession"></textarea> -->
                         <input type="text" class="form-control" name="profession" id="inputProfession">
                    </div>
                    <div class="col-md-6">
                         <label for="inputMonthlyIncome" class="form-label">Monthly Income</label>
                         <input type="number" class="form-control" name="monthly_income" id="inputMonthlyIncome">
                    </div>
                    <div class="col-12">
                         <label for="inputAboutYou" class="form-label">About You</label>
                         <textarea class="form-control" name="address" id="inputAboutYou"></textarea>
                    </div>

                    <div class="col-md-6">
                         <label for="inputDateOfBirth" class="form-label">Date of Birth</label>
                         <input type="date" class="form-control" name="date_of_birth" id="inputDateOfBirth">
                    </div>

                    <div class="col-md-6">
                         <label for="inputTimeOfBirth" class="form-label">Time of Birth</label> <br>
                         <input type="time" min="01:00" max="12:00" class="form-control" name="time_of_birth"
                              id="inputTimeOfBirth" style="width: auto; display: inline">
                         <select class=" form-select" style="width: auto; display: inline">
                              <option value="1">Morning</option>
                              <option value="2">Evening</option>
                         </select>
                    </div>

                    <div class="col-12">
                         <button type="submit" class="btn btn-primary">Submit</button>
                         <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                              data-bs-target="#exampleModal">
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
                         <button type="reset" onclick="reset()" data-bs-dismiss="modal"
                              class="btn btn-warning">Reset</button>
                    </div>
               </div>
          </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
     </script>

     <script>
     var btnReset = document.getElementById("reset-button")

     btnReset.style.visibility = 'hidden';

     function reset() {
          btnReset.click();
     }
     </script>
</body>

</html>