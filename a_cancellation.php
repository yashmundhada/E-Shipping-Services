<?php include "db_conn.php"?>
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
                margin: 80px 540px 50px 540px;
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
        <title>Cancellation Requests</title>
    </head>

    <body>
        <ul>
  <li><a href="a_dashboard.php">Home</a></li>
  <li><a href="a_order.php">Order Details</a></li>
    <li><a href="a_cancellation.php">Cancellation requests</a></li>
    <li><a href="userfeedback.php">User Feedback</a></li>
  <li class="dropdown"><a href="javascript:void(0)" class="drop">Employee</a>
  <div class="dC">
    <a href="addEmployee.php">Add Employee</a>
      <a href="viewEmployee.php">View Employees</a>
    </div>
    </li>
  <li class="dropdown"><a href="javascript:void(0)" class="drop">Branch manage</a>
  <div class="dC">
      <a href="addBranch.php">Add Branch</a>
      <a href="viewBranch.php">View Branch</a>
    </div>
    </li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
</ul>
        <h1 class="heading">Cancellation Requests</h1>
        <div class="order">
        <table class="content-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    $i = 1;
                    $qry = "SELECT orders.id,cancelrequest.trackingId,cancelrequest.sender_name,cancelrequest.senderEmail,orders.status from cancelrequest INNER JOIN orders on cancelrequest.trackingId=orders.trackingId";
                    $result = mysqli_query($conn, $qry); 
while($row = mysqli_fetch_assoc($result)) {                 ?>
                    <tr>
                        <td class="text-center"><?php echo ($row['id']) ?></td>
                        <td><b><?php echo ($row['trackingId']) ?></b></td>
                        <td><b><?php echo ucwords($row['sender_name']) ?></b></td>
                        <td><b><?php echo ucwords($row['senderEmail']) ?></b></td>
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
                                default:
                                    echo "<span class='orderStatus'> Item Accepted for shipping</span>";
                                    
                                    break;
                            }

                            ?>
                        </td>
                        <td>
                        <div class="btn">
                        <a href="cancelOrder.php?DID=<?php echo $row['id'] ?>">Cancel</a>
                         </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table></div>

    </body>

</html>
  