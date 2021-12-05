<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Gateway</title>
        <link rel="stylesheet" href="css/style2.css">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: 0;
                font-family: consolas;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: linear-gradient(#73c1ff, #fff);

            }

            .payment {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                padding: 0px;
                transform: translateY(-63px);
                transition: 0.5s;
            }

            .payment:hover {
                padding: 40px;
            }

            .payment .bg {
                position: absolute;
                height: 70%;
                width: 100%;
                background: linear-gradient(255deg, #2196f3, #ff4efd);
                bottom: 0;
                border-radius: 25px;
            }

            .payment .card {
                position: relative;
                width: 580px;
                height: 350px;
                background: #fcfcfc;
                border-radius: 15px;
                padding: 40px;
                box-shadow: 6px 6px 12px rgba(0, 0, 0, 0);
                z-index: 1000;
                overflow: hidden;
                transform: translateY(127px);
                transition: 0.5s;
            }

            .payment:hover .card {
                transform: translateY(0);
            }

            .payment .card::before {
                content: '';
                position: absolute;
                top: -50%;
                left: -20%;
                width: 500px;
                height: 500px;
                border-radius: 50%;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.05), transparent);
                pointer-events: none;
            }

            .chip {
                position: absolute;
                max-width: 70px;

            }

            .logo {
                position: absolute;
                top: 130px;
                right: 40px;
                width: 60px;
                height: 60px;
                background: #ea222c;
                border-radius: 50%;
                box-shadow: -40px 0 0 rgba(255, 164, 35, 0.5);
            }

            .bankName {
                color: #999;
                text-align: end;
                outline: none;
                width: 100%;
                font-size: 1.5em;
            }

            form {
                margin-top: 45px;

            }

            .inputBox {
                display: flex;
                flex-direction: column;
                margin-bottom: 20px;
            }

            .inputBox span {
                color: #089cff;
                font-size: 1.1em;
            }

            .inputBox input {
                border: none;
                outline: none;
                background: transparent;
                font-size: 1.8em;
                color: #333;
            }

            .group {
                width: 100px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .group .inputBox:last-child {
                max-width: 60px;
            }

            .btn {
                position: relative;
                margin-top: 40px;
                padding: 15px 20px;
                border-radius: 5px;
                border: none;
                outline: none;
                background: #fff;
                color: #333;
                font-size: 1.5em;
                cursor: pointer;
                box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>

    <body>
        <div class="payment">
            <div class="bg"></div>
            <div class="card">
                <img src="images/chip.png" alt="" class="chip">
                <div class="logo"></div>
                <h2 class="bankName">Indian Bank</h2>
                <form action="">
                    <div class="inputBox">
                        <span>Card No.</span>
                        <input type="text" placeholder="**** **** ****" maxlength="12">
                    </div>
                    <div class="inputBox">
                        <span>Card Holder</span>
                        <input type="text" placeholder="">
                    </div>
                    <div class="group">
                        <div class="inputBox">
                            <span>Valid Thru</span>
                            <input type="text" placeholder="MM/YY" maxlength="5">
                        </div>
                        <div class="inputBox">
                            <span>CCV</span>
                            <input type="password" placeholder="***" maxlength="3">
                        </div>
                    </div>
                </form>
            </div>
            <button class="btn" onclick="location.href = 'userPayments.php';">Confirm and Pay</button>
        </div>
<?php
include "db_conn.php";
$id=$_GET['id'];
$query="UPDATE orders set payment='Paid' where id='$id'";
mysqli_query($conn,$query);
?>
    </body>

</html>