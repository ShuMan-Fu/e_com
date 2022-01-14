<?php
include "connection.php";

$sql = "SELECT * FROM featureditems";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $item_id = $row["item_id"];
        $item_title = $row["item_title"];

        $item_image = $row["item_image"];

        $link = "details.php?id=$item_id";

?>
        <div class="col-md-3 col-sm-6">
            <div class="white-box">
                <div class="wishlist-icon">
                    <a href="javascript:void(0);"><img src="https://pngimage.net/wp-content/uploads/2018/06/wishlist-icon-png-3.png" /></a>
                </div>
                <div class="product-img">
                    <img src="<?php echo $item_image; ?>">
                </div>
                <div class=" product-bottom">
                    <div class="product-name"><?php echo $item_title; ?></div>
                    <a href="<?php echo $link; ?>" class="blue-btn">Details</a>
                </div>
            </div>
        </div>


<?php

    }
} else {
    echo "0 results";
}


?>