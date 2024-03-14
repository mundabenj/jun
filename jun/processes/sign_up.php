<?php

require_once "../includes/dbConnect.php";

$fullname = $_POST["fullname"];
$email = $_POST["email_address"];
$birth = $_POST["dob"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$address = $_POST["address"];


$sql = "INSERT INTO users (fullname, email, password, dob, gender, address) VALUES ('$fullname', '$email', '$password', '$birth', '$gender', '$address')";

if ($dbConn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $dbConn->error;
}

$dbConn->close();

?>