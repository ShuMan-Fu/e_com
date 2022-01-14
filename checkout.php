<?php 
session_start();
include "code.header.login.check.php"; ?>
<h2 class="title">Check out</h2>


<style>
    body {
        margin-top: 20px;
    }

    /* ==========================================================================
   Credit Card Payment Section
   ========================================================================== */
    .credit-card {
        background-color: #f4f4f4;
        height: 100vh;
        width: 100%;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card-holder {
        margin: 2em 0;
    }

    .img-box {
        padding-top: 20px;
        display: flex;
        justify-content: center;
    }

    .card-box {
        font-weight: 800;
        padding: 1em 1em;
        border-radius: 0.25em;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .bg-news {
        background: -webkit-linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
        background: -o-linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
        background: -moz-linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
        background: linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
    }

    .btn-primary {
        background-image: -webkit-linear-gradient(315deg, #f54d70 0%, #fd8965 100%);
        background-image: -moz- oldlinear-gradient(315deg, #f54d70 0%, #fd8965 100%);
        background-image: -o-linear-gradient(315deg, #f54d70 0%, #fd8965 100%);
        background-image: linear-gradient(135deg, #f54d70 0%, #fd8965 100%);
        -webkit-filter: hue-rotate(0deg);
        filter: hue-rotate(0deg);
        border: none !important;
    }

    .credit-card form {
        background-color: #ffffff;
        padding: 0;
        max-width: 600px;
        margin: auto;
    }

    .credit-card .title {
        font-family: 'Abhaya Libre', serif;
        font-size: 1em;
        color: #2C3E50;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        margin-bottom: 0.8em;
        font-weight: 600;
        padding-bottom: 8px;
    }

    .credit-card .card-details {
        padding: 25px 25px 15px;
    }

    .inner-addon {
        position: relative;
    }

    .inner-addon .fas,
    .inner-addon .far {
        position: absolute;
        padding: 10px;
        pointer-events: none;
        color: #bcbdbd !important;
    }

    .right-addon .fas,
    .right-addon .far {
        right: 0px;
        top: 40px;
    }

    .right-addon input {
        padding-right: 30px;
    }

    .credit-card .card-details label {
        font-family: 'Abhaya Libre', serif;
        font-size: 14px;
        font-weight: 400;
        margin-bottom: 15px;
        color: #79818a;
        text-transform: uppercase;
    }

    .credit-card .card-details input[type="text"] {
        font-family: "Poppins", sans-serif;
        font-size: 16px;
        font-weight: 500;
        padding: 10px 10px 10px 5px;
        -webkit-appearance: none;
        display: block;
        background: #fafafa;
        color: #636363;
        border: none;
        border-radius: 0;
        border-bottom: 1px solid #757575;
    }

    .credit-card .card-details input[type="text"]:focus {
        outline: none;
    }

    .credit-card .card-details button {
        margin-top: 0.6em;
        padding: 12px 0;
        font-weight: 600;
    }

    .credit-card .date-separator {
        margin-left: 10px;
        margin-right: 10px;
        margin-top: 5px;
    }

    @media (max-width: 768px) {
        .credit-card {
            height: 250vh;
            width: 100%;
        }

        .credit-card .title {
            font-size: 1.2em;
        }

        .credit-card .row .col-lg-6 {
            margin-bottom: 40px;
        }

        .credit-card .card-details {
            padding: 40px 40px 30px;
        }

        .credit-card .card-details button {
            margin-top: 2em;
        }
    }
</style>

<!-- ==============================================
	    Credit Card Payment Section
	    =============================================== -->
<section class="credit-card">
    <div class="container">

        <div class="card-holder">
            <div class="card-box bg-news">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-box">

                        </div>
                    </div>
                    <div class="col-lg-6">


                        <div class="card-details">
                            <h3 class="title">Credit Card Details</h3>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <?php include "code.stripe1.php"; ?>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--/col-lg-6 -->

                </div>
                <!--/row -->
            </div>
            <!--/card-box -->
        </div>
        <!--/card-holder -->

    </div>
    <!--/container -->
</section>




<?php include "footer.php"; ?>