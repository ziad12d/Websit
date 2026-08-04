<?php


$conn = mysqli_connect("localhost", "root", "", "homelytics");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password != $confirm_password) {
    echo "Passwords do not match!";
    exit();
}

// تشفير الباسورد
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// إدخال البيانات
$sql = "INSERT INTO users (fullname, email, password)
VALUES ('$fullname', '$email', '$hashed_password')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../LogIn/LogIn.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>