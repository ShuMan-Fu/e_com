<?php
include "code.alerts.php";

if (isset($_SESSION["user_id"])) {

    $user_id = $_SESSION["user_id"];
    
} else {
    
    header("location: login.php");
    $_SESSION["alert"] = "Please Log In To Shop";
}
