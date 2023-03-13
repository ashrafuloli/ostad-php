<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $profile_picture = $_FILES["profile-picture"]["name"];
  $profile_picture_tmp = $_FILES["profile-picture"]["tmp_name"];

  // Validate form inputs
  if (empty($name) || empty($email) || empty($password) || empty($profile_picture)) {
    echo "All fields are required";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
  } else {
    // Save profile picture to server
    $uploads_dir = "uploads/";
    $profile_picture_ext = pathinfo($profile_picture, PATHINFO_EXTENSION);
    $profile_picture_name = uniqid() . '_' . date("YmdHis") . '.' . $profile_picture_ext;
    move_uploaded_file($profile_picture_tmp, $uploads_dir . $profile_picture_name);

    // Save user data to CSV file
    $user_data = array($name, $email, $profile_picture_name);
    $file = fopen("users.csv", "a");
    fputcsv($file, $user_data);
    fclose($file);

    // Set session and cookie
    $_SESSION["name"] = $name;
    setcookie("name", $name, time() + 86400, "/"); // Cookie valid for 1 day

    // Redirect to success page
    header("Location: display.php");
  }
}
