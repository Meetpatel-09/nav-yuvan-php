<?php
$title = "Log In";
?>

<?php
// ob_start();
session_start();
// Check if user is already logged in
if (isset($_SESSION['admin_email'])) {
     header("location: admin-home.php");
     exit;
}

require_once "config.php";

function function_alert($message)
{
     // Display the alert box 
     echo "<script>alert('$message');</script>";
}
// Function call
// function_alert("Welcome to Geeks for Geeks");

$email = $password = "";
$email_err = $password_err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {

     if (empty(trim($_POST['exampleInputEmail1']))) {
          $email_err = "Please enter email";
          function_alert($email_err);
     } else {
          $email = trim($_POST['exampleInputEmail1']);
     }

     if (empty(trim($_POST['exampleInputPassword1']))) {
          $password_err = "Please enter password";
          function_alert($password_err);
     } else {
          $password = trim($_POST['exampleInputPassword1']);
     }

     if (empty($email_err) && empty($password_err)) {

          if ($email == "admin@test.com" && $password == "123456") {
               $_SESSION['admin_email'] = "demo";
               header("location: admin-home.php");
          } else {
               $password_err = "Invalid Id Password";
               function_alert($password_err);
          }

          // $sql = "SELECT id, email, password FROM admin WHERE email = ?";
          // $stmt = mysqli_prepare($conn, $sql);
          // mysqli_stmt_bind_param($stmt, "s", $param_email);
          // $param_email = $email;

          // // Try to execute this statement
          // if (mysqli_stmt_execute($stmt)) {
          // 	mysqli_stmt_store_result($stmt);
          // 	if (mysqli_stmt_num_rows($stmt) == 1) {

          // 		mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
          // 		if (mysqli_stmt_fetch($stmt)) {
          // 			if (password_verify($password, $hashed_password)) {
          // 				// this means the password is corrct. Allow user to login
          // 				session_start();
          // 				$_SESSION["adminEmail"] = $email;
          // 				$_SESSION["adminId"] = $id;
          // 				$_SESSION["loggedin"] = true;

          // 				//Redirect user to welcome page
          // 				header("location: adminHome.php");
          // 			} else {
          // 				function_alert("Invalid Password");
          // 			}
          // 		}
          // 	} else {
          // 		function_alert("Check Email Address");
          // 	}
          // } else {
          // 	function_alert("Internal server error");
          // }
     }
}
?>

<?php
ob_start();
// include header.php file
// include('MasterPage/header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <!-- <link rel="stylesheet" href="css/style.css"> -->
     <title><?php echo $title; ?></title>
     <style type="text/css">
          body {
               background-color: aliceblue;
          }

          .style1 {
               width: 100%;
          }

          .style2 {
               text-align: center;
               width: 50px;
          }

          .style3 {

               text-align: center;
               width: 183px;
               height: 50px;
          }

          .style4 {
               text-align: center;
          }
     </style>
</head>

<body>
     <div style="margin-top: 25px;">
          <h3 style="text-align: center">Admin Log In</h3>
     </div>
     <div class="form-design">
          <div class="container">
               <div class="row mt-5">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                         <form action="" method="post">
                              <div class="form-group">
                                   <label for="exampleInputEmail1">Email address</label>
                                   <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputPassword1">Password</label>
                                   <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div style="text-align:center">
                                   <button type="submit" class="btn btn-primary col-6">Login</button>
                              </div>
                         </form>
                    </div>
                    <div class="col-sm-4">
                    </div>
               </div>
          </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
     </script>
</body>

</html>
<?php
// include('MasterPage/footer.php');
?>