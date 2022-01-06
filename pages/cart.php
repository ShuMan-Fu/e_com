<?php
include "header.php"; ?>


<body>
    <!---Cart items details-->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/miksec.png" width="20%">
                        <div>
                            <p>Unifi Security Gateway</p>
                            <small>Price: $500.00</small>
                            <br>
                            <a href="">Remove</a>

                        </div>
                    </div>

                </td>
                <td><input type="number" value="1"></td>
                <td>$500</td>
            </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td>$200</td>
                </tr>
            </table>
        </div>

    </div>












    <!-----FOOTER-->
    <?php include "code/footer.php"; ?>

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