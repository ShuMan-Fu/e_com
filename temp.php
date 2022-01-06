<?php

//if conditional statement for registration and so on

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


?>




<title>Sign Up</title>
<?php include "code/header.php"; ?>


<body>
    <link rel="stylesheet" href="css/style3.css">



    <div class="signup-form">
        <form action="temp.php" method="post">
            <h2>Sign Up</h2>

            <div class="form-group">
                <input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
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
                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
            </div>

        </form>
        <div class="text-center">Already have an account? <a href="#">Login here</a></div>
    </div>
</body>

<?php include "code/footer.php"; ?>