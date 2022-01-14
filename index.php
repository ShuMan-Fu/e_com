<?php
session_start();
include "code.header.login.check.php";

?>


<title>Subnet | Integration </title>


<div class="row">
    <div class="col-2">
        <h1>Fortify Your Environment</h1>
        <p>
            Welcome to Subnet Integration Services<br>
            <a href="store.php" class="btn">Explore Now &#8594;</a>
        </p>
        
    </div>
    <div class="col-2">
        <img src="images/fortigate.png">
    </div>

</div>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style2.css">
<h2 class="title">Featured Products</h2>
<div class="container">
    <div class="product-list">
        <div class="row">

            <?php include "code/code.featureditems.php"; ?>

        </div>
    </div>
</div>

<?php include "code/footer.php"; ?>