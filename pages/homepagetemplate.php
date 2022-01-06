<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $first_name = $_SESSION["first_name"];
    $last_name = $_SESSION["last_name"];
    echo "Welcone $first_name $last_name";
} else {

    header("location: login.php");
}

include "header.php";

?>






<div class="container">
    <h3>Navbar With Dropdown</h3>
    <p>This example adds a dropdown menu in the navbar.</p>
</div>


<?php

include "footer.php";

?>