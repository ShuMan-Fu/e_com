<?php

//if conditional statement for registration

if (isset($_POST["registration"])) {

  echo "You Resistered Successfully"; //returns the text

  include "connection.php"; //including connection to database connection.php

  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $password = password_hash($password, PASSWORD_DEFAULT); //password encryption


  //inserting data into database
  $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`, `user_type`) VALUES (NULL, '$first_name', '$last_name', '$email', '$password', current_timestamp(), 'user');";

  if (mysqli_query($conn, $sql)) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
