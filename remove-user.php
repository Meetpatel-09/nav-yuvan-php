<?php
require_once "config.php";

$id = $_GET['user_id'];

$sql = "DELETE FROM user_tbl WHERE user_id = '$id'";

$result = mysqli_query($conn, $sql);

header("location: admin-home.php");
