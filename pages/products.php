<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subnet | All Products</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<!---HEADER-->

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/fortinet logo.png" width="50px">

            </div>
            <nav>
                <ul id="menuitems">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registration.php">Register</a></li>
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/images1/menu.png" class="menu-icon" onclick="menutoggle()">

        </div>




    </div>


    <!---PRODUCTS-->

    <div class="small-container">

        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Shorting</option>
                <option>Short by price</option>
                <option>Short by popularity</option>
                <option>Short by rating</option>
                <option>Short by sale</option>

            </select>


        </div>




        <div class="row">
            <?php include "connection.php";

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


                    <div class="col-4">
                        <img src="<?php echo $item_image; ?>" alt="">
                        <h4><?php echo $item_title; ?></h4>
                        <div class="rating">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>☆</span>
                        </div>
                        <p><?php echo $item_price; ?></p>
                        <a href="<?php echo $link; ?>" class="btn">Details</a>
                    </div>

            <?php


                }
            } else {
                echo "0 results";
            }


            ?>


        </div>





    </div>







    <!-----FOOTER-->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-30">
                    <h3>Download our App</h3>
                    <p>Available for IOS and Android</p>
                    <div class="app-logo">
                        <img src="images/images1/play-store.png" alt="">
                        <img src="images/images1/app-store.png" alt="">
                    </div>
                </div>
                <div class="col-30">
                    <img src="images/fortinet logo.png" alt="">
                    <p>Our goal is to secure your Environment</p>
                </div>

                <div class="col-30">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Retuen Policy</li>
                        <li>Joint Affiliate</li>
                    </ul>
                </div>

                <div class="col-30">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>YouTube</li>
                    </ul>
                </div>




            </div>
            <hr>
            <p class="copyright">Copyright 2021 - Subnet Integration</p>

        </div>
    </div>

    <!--JS toggle for menu-->
    <script>
        var menuitems = document.getElementById("menuitems");
        menuitems.style.maxHeight = "0px";

        function menutoggle() {
            if (menuitems.style.maxHeight == "0px") {
                menuitems.style.maxHeight = "200px";
            } else {
                menuitems.style.maxHeight = "0px";
            }


        }
    </script>





</body>

</html>