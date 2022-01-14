<?php

include "connection.php";

//Insert user Points @ 5%
$points = $total * 0.02;
$sql = "";
$sql = "UPDATE users ". "SET points = $points ". "WHERE user_id = $user_id" ;
if (mysqli_query($conn, $sql)){
    //echo "new record successful';

}else{
    // echo "Error";
}

?>