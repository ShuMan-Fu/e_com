<?php



//check if button was clicked
if (isset($_POST["registration"])) {


    include "connection.php";
    include "code.regprocess.php";
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $cpassword1 = $_POST["cpassword"];
     
    $sql = "SELECT * from users where email = '$email'";
    
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `cpassword` , `address` , `reg_date`, `user_type`) VALUES (NULL, '$first_name', '$last_name', '$email', '$password' , '$password1' , '$address', current_timestamp(), 'user');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";

        header("location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


session_start();

include "code.header.login.check.php";

?>


<style>
    body {
        color: #999;
        background: #fafafa;
        font-family: 'Roboto', sans-serif;
    }

    .form-control {
        min-height: 41px;
        box-shadow: none;
        border-color: #e6e6e6;
    }

    .form-control:focus {
        border-color: #00c1c0;
    }

    .form-control,
    .btn {
        border-radius: 3px;
    }

    .signup-form {
        width: 425px;
        margin: 0 auto;
        padding: 30px 0;
    }

    .signup-form h2 {
        color: #333;
        font-weight: bold;
        margin: 0 0 25px;
    }

    .signup-form form {
        margin-bottom: 15px;
        background: #fff;
        border: 1px solid #f4f4f4;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 40px 50px;
    }

    .signup-form .form-group {
        margin-bottom: 20px;
    }

    .signup-form label {
        font-weight: normal;
        font-size: 14px;
    }

    .signup-form input[type="checkbox"] {
        position: relative;
        top: 1px;
    }

    .signup-form .btn,
    .signup-form .btn:active {
        font-size: 16px;
        font-weight: bold;
        background: red !important;
        border: none;
        min-width: 140px;
    }

    .signup-form .btn:hover,
    .signup-form .btn:focus {
        background: #00b3b3 !important;
    }

    .signup-form a {
        color: #00c1c0;
        text-decoration: none;
    }

    .signup-form a:hover {
        text-decoration: underline;
    }
</style>

<div class="signup-form">
    <form action="registration.php" method="post" oninput='cpassword.setCustomValidity(cpassword.value != password.value ? "Passwords do not match." : "")'>
    
        
    <h2 class="title">Please sign up</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="first_name" placeholder="First name" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="last_name" placeholder="Last name" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Address" required="required">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required="required">
        </div>

        <div class="form-group">
            <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
        </div>

        <div class="form-group">
            <button name="registration" type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    
    
    </form>
    <div class="text-center">Already have an account? <a href="#">Login here</a></div>
</div>

















<?php include "code/footer.php"; ?>