<?php


session_start();

if (isset($_GET["id"])) {
    $item_id = $_GET["id"];
} else {
    echo "No Product Identifier in the url";
    exit();
}

include "code/connection.php";

$sql = "SELECT * FROM items WHERE items.item_id = $item_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

        $item_id = $row["item_id"];
        $item_title = $row["item_title"];
        $item_description = $row["item_description"];
        $item_image = $row["item_image"];
        $item_price = $row["item_price"];
        $link = "code.addToCart.php?id=$item_id";
    }
} else {
    echo "0 results";
}


?>
<title>Subnet | Product Details </title>
<?php include "code/header.php"; ?>







<!---SINGLE PRODUCT DETAILS-->
<div class="small-container single-product">
    <div class="row">
        <div class="col-50">
            <img src="<?php echo $item_image; ?>" width="100%" style="float: left;">
        </div>
        <div class="col-50">
            <p>Access Point</p>
            <h1><?php echo $item_title; ?></h1>
            <h4><?php echo $item_price; ?></h4>
            <p>Quantity</p>
            <input type="number" value="1">
            <a href="<?php echo $link; ?>" class="btn">Add to Cart</a>
            <h3>Product Details</h3>
            <p><?php echo $item_description; ?></p>

        </div>


    </div>
</div>




<!------latest--PRODUCTS--using relate items table---->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style2.css">

<h2 class="title">Latest Products</h2>
<div class="container">
    <div class="product-list">
        <div class="row">

            <?php include "code/code.latestitems.php"; ?>

        </div>
    </div>
</div>






<!-----FOOTER-->

<?php include "code/footer.php"; ?>