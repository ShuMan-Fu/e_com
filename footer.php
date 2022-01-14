<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

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
        <p class="copyright">Copyright 2021 - Subnet Integration </p>


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