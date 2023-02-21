<?php
ob_start();

session_start();

require_once "config.php";

if (!isset($_SESSION['admin_email'])) {
     header('location: index.php');
}
if (!isset($_SESSION['user_id'])) {

     $_SESSION['user_id'] = $_GET['user_id'];
     $id = $_SESSION['user_id'];
     // echo "nossid = $id";
} else {
     if (isset($_GET['user_id'])) {
          // echo "s2222dfsd";
          $id = $_GET['user_id'];
          $_SESSION['user_id'] = $_GET['user_id'];
     } else {
          // echo "np";
          $id = $_SESSION['user_id'];
     }
     // echo "aaa = $id";
}
$sql1 = mysqli_query($conn, "SELECT * FROM user_tbl WHERE user_id = $id");
// echo "id = $id";
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
     $date_of_birth = $row['birth_date'];
     $birth_time_d = $row['birth_time'] . " " . $row['birth_time_ampm'] . " " . $row['birth_time_morining'];
     $birth_time = $row['birth_time_ampm'];
     $birth_time_ampm =  $row['birth_time_ampm'];
     $birth_time_morining = $row['birth_time_morining'];
     $birth_place = $row['birth_place'];
     $height = $row['height'];
     if ($row['mobile_number_two'] != "") {
          $mobile = $row['mobile_number_one'] . ", " . $row['mobile_number_two'];
     } else {
          $mobile = $row['mobile_number_one'];
     }
     $mobile_number_one = $row['mobile_number_one'];
     $mobile_number_two = $row['mobile_number_two'];
     //  = $row['mobile_number'];
     $email = $row['email'];
     $address = $row['address'];
     $education = $row['education'];
     $job_business = $row['profession'];
     $monthly_income = $row['monthly_income'];
     $about_you = $row['about_you'];
     if (!isset($_GET['user_id'])) {
          if (isset($_SESSION['profile_photo'])) {
               $profile_photo = $_SESSION['profile_photo'];
          } else {
               // echo "10";
               $profile_photo = $row['profile_photo'];
          }
     } else {
          $profile_photo = $row['profile_photo'];
     }
     $_SESSION['profile_photo'] = $profile_photo;

     if (!isset($_GET['user_id'])) {


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
               $birth_time_d = $_SESSION['birth_time'] . " " . $_SESSION['birth_time_ampm'] . " " . $_SESSION['birth_time_morining'];
               $birth_time = $_SESSION['birth_time'];
               $birth_time_ampm =  $_SESSION['birth_time_ampm'];
               $birth_time_morining = $_SESSION['birth_time_morining'];
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
               if (isset($_SESSION['profile_photo'])) {
                    $profile_photo = $_SESSION['profile_photo'];
               }
          }
     }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

     if (isset($_SESSION['admin_email'])) {
          if (!isset($_SESSION['name'])) {
               $query = "UPDATE `user_tbl` SET `profile_photo`='$profile_photo' WHERE `user_id` = $id";
               $result = mysqli_query($conn, $query);

               unset($_SESSION['profile_photo']);
          } else {
               if (isset($_SESSION['profile_photo'])) {
                    $query = "UPDATE `user_tbl` SET name=?,father_name=?,`mother_name`=?,`surname`=?,`father_native_place`=?,`mother_native_place`=?,`gender`=?,`marital_status`=?,`birth_date`=?,`birth_time`=?,`birth_time_ampm`=?,`birth_time_morining`=?,`birth_place`=?,`height`=?,`mobile_number_one`=?,`mobile_number_two`=?,`email`=?,`address`=?,`education`=?,`profession`=?,`monthly_income`=?,`about_you`=?,`profile_photo`=? WHERE `user_id` = ?";
                    // $result = mysqli_query($conn, $query);
                    // echo "with pp";
                    // echo $result;


                    $stmt = mysqli_prepare($conn, $query);

                    if ($stmt) {

                         echo " $name";
                         mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssss", $name, $father_name, $mother_name, $surname, $father_native_place, $mother_native_place, $gender, $marital_status, $date_of_birth, $birth_time, $birth_time_ampm, $birth_time_morining, $birth_place, $height, $mobile_number_one, $mobile_number_two, $email, $address, $education, $job_business, $monthly_income, $about_you, $profile_photo, $id);

                         echo " $name";
                         $p_name = $name;
                         $p_father_name = $father_name;
                         $p_mother_name = $mother_name;
                         $p_surname =  $surname;
                         $p_father_native_place = $father_native_place;
                         $p_mother_native_place = $mother_native_place;
                         $p_gender = $gender;
                         $p_marital_status = $marital_status;
                         $p_birth_date = $p_birth_date;
                         $p_birth_time = $birth_time;
                         $birth_time_ampm =  $birth_time_ampm;
                         $birth_time_morining = $birth_time_morining;
                         $p_birth_place = $p_birth_place;
                         $p_height = $height;
                         $p_mobile_number_one = $mobile_number_one;
                         $p_mobile_number_two = $mobile_number_two;
                         $p_email = $email;
                         $p_address = $address;
                         $p_education = $education;
                         $p_profession = $job_business;
                         $p_monthly_income = $monthly_income;
                         $p_about_you = $about_you;
                         $p_profile_photo = $profile_photo;
                         $p_id = $id;

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
                              header("location: admin-home.php");
                         } else {
                              echo "Someting went wrong";
                         }
                    } else {
                         echo "Database error";
                    }
               } else {
                    $query = "UPDATE `user_tbl` SET name=?,father_name=?,`mother_name`=?,`surname`=?,`father_native_place`=?,`mother_native_place`=?,`gender`=?,`marital_status`=?,`birth_date`=?,`birth_time`=?,`birth_time_ampm`=?,`birth_time_morining`=?,`birth_place`=?,`height`=?,`mobile_number_one`=?,`mobile_number_two`=?,`email`=?,`address`=?,`education`=?,`profession`=?,`monthly_income`=?,`about_you`=?, WHERE `user_id` = ?";
                    // $result = mysqli_query($conn, $query);
                    // echo "with pp";
                    // echo $result;


                    $stmt = mysqli_prepare($conn, $query);

                    if ($stmt) {

                         echo " $name";
                         mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssss", $name, $father_name, $mother_name, $surname, $father_native_place, $mother_native_place, $gender, $marital_status, $date_of_birth, $birth_time, $birth_time_ampm, $birth_time_morining, $birth_place, $height, $mobile_number_one, $mobile_number_two, $email, $address, $education, $job_business, $monthly_income, $about_you, $id);

                         echo " $name";
                         $p_name = $name;
                         $p_father_name = $father_name;
                         $p_mother_name = $mother_name;
                         $p_surname =  $surname;
                         $p_father_native_place = $father_native_place;
                         $p_mother_native_place = $mother_native_place;
                         $p_gender = $gender;
                         $p_marital_status = $marital_status;
                         $p_birth_date = $p_birth_date;
                         $p_birth_time = $birth_time;
                         $birth_time_ampm =  $birth_time_ampm;
                         $birth_time_morining = $birth_time_morining;
                         $p_birth_place = $p_birth_place;
                         $p_height = $height;
                         $p_mobile_number_one = $mobile_number_one;
                         $p_mobile_number_two = $mobile_number_two;
                         $p_email = $email;
                         $p_address = $address;
                         $p_education = $education;
                         $p_profession = $job_business;
                         $p_monthly_income = $monthly_income;
                         $p_about_you = $about_you;
                         // $p_profile_photo = $profile_photo;
                         $p_id = $id;

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
                              // unset($_SESSION['profile_photo']);

                              $_SESSION["status"] = "success";
                              header("location: admin-home.php");
                         } else {
                              echo "Someting went wrong";
                         }
                    } else {
                         echo "Database error";
                    }
                    // echo $result;
               }
               unset($_SESSION['name']);
               unset($_SESSION['father_name']);
               unset($_SESSION['mother_name']);
               unset($_SESSION['surname']);
               unset($_SESSION['father_native_place']);
               unset($_SESSION['gender']);
               unset($_SESSION['marital_status']);
               unset($_SESSION['date_of_birth']);
               unset($_SESSION['birth_time']);
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
               unset($_SESSION['user_id']);
               header("location: admin-home.php");
          }
     }
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
                              <label for="inputToB" class="form-label">Birth Time: <?php echo $birth_time_d; ?></label>
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
                              <a href="a-change-profile-piciture.php" class="btn m-3 btn-warning">Change Profile
                                   Picture</a>
                         </div>
                    </div>
                    <div class="col-12">
                         <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                         <a href="a-edit.php" class="btn btn-warning">Edit</a>
                         <a href="admin-home.php" type="submit" name="Back" class="btn btn-secondary">Back</a>
                    </div>
               </form>
          </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
     </script>
</body>

</html>