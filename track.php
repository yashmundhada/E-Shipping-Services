<!DOCTYPE html>
<html >
<head>
  <style>
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
li{
display: inline;
float: left;
}
li a{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
}
li a:hover {
  background-color: #111;
}
.btn11{
  background-color:#56baed;
  width: 100px;
  text-align: center;
  padding: 15px;
  border-radius: 30%;
  color: #FFFFFF;
  font-size: 18px;
  cursor: pointer;
}  
.track-page {
  width: 700px;
  padding: 8% 0 0;
  margin: auto;
}

.form {
  position: relative;
  z-index: 1;
  background-color: white;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  border-radius: 20px;
}
.form input[type="text"] {
  background: #f2f2f2;
  width: 100%;
  border-radius: 10px;
  border: 2px solid #d9d9d9;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}


</style>
<title> Track </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
 </div>
 <div class="bg">
    <div class="track-page">
      <div class="form">
        <div class="track">
          <div class="track-header">
            <h3>TRACK</h3>
            </div>
        </div>
        <form action="" method="post" id="frm1">
<input type="text" name="trId" id="ip1" placeholder="Enter Your 
Track ID">
<input type="submit" class="btn11" name="btn" value="Track">
</form>
<br>
<div>
<?php include "db_conn.php";
global $t;
if(isset($_POST['btn']))
  {
    $t=$_POST['trId'];
  }
  $sql ="SELECT * FROM orders WHERE trackingId='$t' LIMIT 1";
  $result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
?>
<div class="info" id="info">
  <div class=""><b>TrackingID: </b><?php echo $row['trackingId']?>
</div>
<div class=""><b>Status:</b><?php 
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
</div>
<div class=""><b>Receiver's Name: </b><?php echo $row['recipient_name']?>
</div>
</div>
<?php } ?>
</div>
</div>

      </div>
    </div>
 </div>
  
</body>
</html>
