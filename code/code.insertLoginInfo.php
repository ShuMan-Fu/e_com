<?php
session_start();


if (isset($_POST["login"])) {


    echo "";

    include "connection.php";
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
                echo "Sorry Password does not match";
            }
        }
    } else {
        echo "You are not registered";
    }
}
