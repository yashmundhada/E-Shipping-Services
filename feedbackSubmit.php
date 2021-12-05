<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                background-image: url(pic1.jpg);
                /* pic 1 */
                background-position: center;
                background-size: cover;

            }

            ul {
                      top: 0;
      position: sticky;

                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                display: inline;
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
            }

            li a:hover {
                background-color: #111;
            }

            h1 {
                text-align: center;
                margin-top: 100px;
            }

            .order {
                margin: 0px 370px 50px 370px;

                padding-top: 10px;
                padding-bottom: 70px;
                padding-left: 10px;
                padding-right: 10px;
                background-color: rgb(247, 216, 159);
            }
        </style>
    </head>

    <body>
        <ul>
            <li><a href="dashboard.php">Home</a></li>
  <li><a href="userPayments.php">Payment</a></li>
  <li><a href="add_shipment.php">Add shipment</a></li>
  <li><a href="orderHistory.php">Order History</a></li>
  <li><a href="track.php">Track</a></li>
  <li><a href="cancelRequest.php">Cancel Order</a></li>
  <li><a href="feedback.php">Feedback</a></li>
  <li><a href="contact.php">Contact us</a></li>
            <li style="float:right"><a href="logout.php">Logout</a></li>
        </ul>

        <h1>Feedback</h1>

        <div class="order">
            <h1>Your feed back has been submitted successfully.</h1>

        </div>

    </body>

</html>