<?php

//if conditional statement

if (isset($_POST["registration"])) {

  echo "You Resistered Successfully"; //returns the text

  include "code/connection.php"; //including connection to database connection.php

  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $password = password_hash($password, PASSWORD_DEFAULT); //password encryption


  //inserting data into database
  $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`, `user_type`) VALUES (NULL, '$first_name', '$last_name', '$email', '$password', current_timestamp(), 'user');";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}





include "code/header.php"; ?>

<!-- Registration Page -->

<h1>Registration</h1>

<form action="registration.php" method="post">

  <p>First Name</p>
  <p><input type="text" name="first_name"></p>

  <p>Last Name</p>
  <p><input type="text" name="last_name"></p>

  <p>Email</p>
  <p><input type="text" name="email"></p>

  <p>Password</p>
  <p><input type="password" name="password"></p>

  <p>Confrim Password</p>
  <p><input type="password" name="confirm_password"></p>

  <p><input type="submit" name="registration"></p>


</form>



<?php include "code/footer.php";

?>