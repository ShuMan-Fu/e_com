<?php
session_start();


if (isset($_POST["login"])) {


    echo "";

    include "code/connection.php";
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE users.email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "";

            //verify password
            $db_password = $row["password"];
            if (password_verify($password, $db_password)) {
                echo "Login Successful";
                $_SESSION["user_id"] = $row["user_id"];
                $_SESSION["first_name"] = $row["first_name"];
                $_SESSION["last_name"] = $row["last_name"];
                $_SESSION["user_type"] = $row["user_type"];


                //header("location: homepage.php");



            } else {
                echo "Sorry! Password does not match";
            }
        }
    } else {
        echo "You are not Regestered, Please click Register";
    }
}

?>

<?php include "code/header.php"; ?>


<h2 class="title">Please Login</h2>

<form action="login.php" method="post">

    <p>Email</p>
    <p><input type="text" name="email" </p>
    <p>Password</p>
    <p><input type="text" name="password" </p>
    <p><input type="submit" name="login" </p>

</form>

<?php include "code/footer.php"; ?>