<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "code/connection.php";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from `users` where email='$email'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry! </strong> User already exists
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
        } else {
            $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`, `user_type`) VALUES (NULL, '$first_name', '$last_name', '$email', '$password', current_timestamp(), 'user');";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Welcom! </strong> Your registration was successful
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
            } else {
                die(mysqli_error($conn));
            }
        }
    }
}

?>


<title>Sign Up</title>

<?php include "code/header.php"; ?>

<h2 class="title">Please sign up</h2>
<link rel="stylesheet" href="css/style3.css">



<div class="signup-form">
    <form action="sign.php" method="post">


        <div class="form-group">
            <input type="text" name="first_name" class="form-control" name="first_name" placeholder="First Name" required="required">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>

        <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
        </div>

        <div class="form-group">
            <button type="type=" submit name="registration">Sign Up</button>
        </div>

    </form>
    <div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
</div>