<?php session_start();
include "db_conn.php"?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
 .order{
                margin: 0px 370px 0px 370px;
                
                padding: 10px;
                background-color: white;
            }
body {
  background-image: url(pic1.jpg);
                background-position: center;
                background-size: cover;
  font-family:  sans-serif;
}
    ul {
        top: 0;
        position: sticky;
        z-index: 2;
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
            
            .dC{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dC a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dC a:hover {background-color: #f1f1f1;}

.dropdown:hover .dC {
  display: block;
}
.orderStatus{
  pointer-events: none;
  background-color: #5af2d3;
  border: none;
  color: #2557D6;
  padding: 7px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-right: 10px;
  margin-left: -1px;
  margin-bottom: 10px;
  border-radius: 20px;
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
  <li><a href="feedback.php">Feedback</a></li>
  <li><a href="contact.php">Contact us</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
</ul>
        <h1>Order History</h1>
        <div class="order">
        <table class="content-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Timestamp</th>
                    <th>Sender's Name</th>
                    <th>Receiver's Name</th>
                    <th>Status</th>
                    </tr>
            </thead>
            <tbody>
                    <?php
                    $i = 1;
                    $where=" ";
                    $mailID=$_SESSION['user'];
                    $qry = $conn->query("SELECT * from orders $where where email='$mailID' and status='10' or status='7' order by  id asc ");
                    while($row= $qry->fetch_assoc()):
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i++ ?></td>
                        <td><b><?php echo ($row['trackingId']) ?></b></td>
                        <td><b><?php echo ($row['date_created']) ?></b></td>
                        <td><b><?php echo ucwords($row['sender_name']) ?></b></td>
                        <td><b><?php echo ucwords($row['recipient_name']) ?></b></td>
                        <td>
                            <?php 
                            switch ($row['status']) {
                                case '1':
                                    echo "<span class='orderStatus'> Collected</span>";
                                    break;
                                case '2':
                                    echo "<span class='orderStatus'> Shipped</span>";
                                    break;
                                case '3':
                                    echo "<span class='orderStatus'> In-Transit</span>";
                                    break;
                                case '4':
                                    echo "<span class='orderStatus'> Arrived At Destination</span>";
                                    break;
                                case '5':
                                    echo "<span class='orderStatus'> Out for Delivery</span>";
                                    break;
                                case '6':
                                    echo "<span class='orderStatus'> Ready to Pickup</span>";
                                    break;
                                case '7':
                                    echo "<span class='orderStatus'>Delivered</span>";
                                    break;
                                case '8':
                                    echo "<span class='orderStatus'> Picked-up</span>";
                                    break;
                                case '9':
                                    echo "<span class='orderStatus'> Unsuccessfull Delivery Attempt</span>";
                                    break;
                                case '10':
                                    echo "<span class='orderStatus'> Cancelled</span>";
                                    break;
                                case '11':
                                    echo "<span class='orderStatus'> Item Accepted for shipping</span>";
                                    
                                    break;
                            }

                            ?>
                        </td>
                        </tr>
                <?php endwhile; ?>
            </tbody>
        </table></div>

    </body>

</html>