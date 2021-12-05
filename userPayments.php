<?php 
session_start();
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
  background-image: url(pic1.jpg);
                background-position: center;
                background-size: cover;
  font-family:  sans-serif;
}
    ul {
      font-size: 14px;
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
                background-color:white;
                margin: 80px 630px 50px 630px;
                padding: 12px;
                border-radius: 25px;  
                border: 7px solid #009889; 
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

.order {
                margin: 0px 370px 0px 370px;
                padding: 10px;
                background-color: white;
                border-collapse: collapse;
                margin-left: auto;
                margin-right: auto;
                margin-top: 50px;
                font-size: 0.8em;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                width:900px ;
                overflow-y: auto;
                height: 400px;
                padding-top: 0px;
            }

            .order thead tr {
                position: sticky;
                top: 0;
                background-color: #009879;
                color: white;
                text-align: left;
                font-weight: bold;
                height: 50px;
                }
            table{
                border-collapse: collapse;
        width: 100%;
            }
            
           .order th,
            .order td {
                padding: 10px 15px;
            }

            .order tbody tr {
                border-bottom: 1px solid #dddddd;

            }

            .order tbody tr:nth-of-type(odd) {
                color: #888888;
            }

            .order tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }

            .order tbody tr:last-of-type {
                border-bottom: 2px solid #009879;
            }
            .btn a{
  background-color: white ;
  border:2px solid #5af2d3;
  color: #2557D6;
  padding: 7px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-right: 10px;
  margin-left: -1px;
  margin-bottom: 10px;
  border-radius: 15px;
}
        </style>
        <title>Order Details</title>
    </head>

    <body>
        <ul>
            <li><a href="dashboard.php">Home</a></li>
  <li><a href="userPayments.php">Payment</a></li>
  <li><a href="add_shipment.php">Add shipment</a></li>
  <li><a href="orderHistory.php">Order History</a></li>
  <li><a href="track.php">Track</a></li>
  <li><a href="cancelRequest.php">Cancel Order</a></li>
  <li><a href="contact.php">Contact us</a></li>
            <li style="float:right"><a href="logout.php">Logout</a></li>
        </ul>
        <h1>Payment</h1>
        <div class="order">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order ID</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
               <?php
                    $i = 1;
                    $mailID=$_SESSION['user'];
                    $qry =$conn->query("SELECT id, trackingId,price,payment FROM `orders` where email='$mailID' order by id asc");
                    while($row=$qry->fetch_assoc()):
                    ?>
                <tr>
                    <td class="text-center"><?php echo ($row ['id']) ?></td>
                        <td><b><?php echo ($row['trackingId']) ?></b></td>
                        <td><b><?php echo ucwords($row['price']) ?></b></td>
                        <td><b><?php echo ucwords($row['payment']) ?></b></td>
                    <td>
                        <div class="btn">
                            <a href="payment.php?id=<?php echo $row['id'] ?>" class="">click to pay</a>
                        </div>
                    </td>
                </tr>
            <?php 
        endwhile?>
                </tbody>
        </table></div>
                
            </table>
        </div>

    </body>

</html>