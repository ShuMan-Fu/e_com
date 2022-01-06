<?php include "header.php"; ?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style2.css" type="text/css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="product-list">
        <div class="row">

            <?php
            include "code/connection.php";

            $sql = "SELECT * FROM items";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $item_id = $row["item_id"];
                    $item_title = $row["item_title"];
                    $item_description = $row["item_description"];
                    $item_image = $row["item_image"];
                    $item_price = $row["item_price"];
                    $link = "productdetails.php?id=$item_id";

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
                                <div class="price">
                                    <span class="rupee-icon"><?php echo $item_price; ?>
                                </div>
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





        </div>
    </div>
</div>