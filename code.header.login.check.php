<?php


if (isset($_SESSION["user_id"])) {

   //Loggin in user header
    include "code.header.Loggedin.php";
} else {
    //guest user header
    include "header.php";
}

?>