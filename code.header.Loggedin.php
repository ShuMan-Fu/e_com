



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="images/fortinet logo.png" width="50px" height="50px">

        </div>
        <nav>
            <ul id="menuitems">
            <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="store.php">Products</a></li>
                
                <li><a href="logout.php">Logout</a></li>
                <li>
                    <form class="form-inline">
                     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </li>

            </ul>
            <a href="cart.php"><img src="images/cart.png" width="50px" height="50px"></a>
            <a href="account.php"><img src="images/user.png" width="40px" height="40px"></a>
            
            <!--Checking is user is loggedin to display username in header-->
            <?php
            if (isset($_SESSION["first_name"])) {
            
                $name = $_SESSION["first_name"];
                echo "$name";
            } else {
            echo "Not Logged in";
            }
            ?>
            
        </nav>
        <img src="images/images1/menu.png" class="menu-icon" onclick="menutoggle()">
        
        

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