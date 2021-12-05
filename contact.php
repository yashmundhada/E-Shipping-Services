<!DOCTYPE html>
<html>
  <head>
<style>
  ul {
          top: 0;
      position: sticky;

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
 body {
  background-image: url(pic3.jpg);
                background-position: center;
                font-size: 15px;
                height:700px;
background-size: cover;
  font-family:  sans-serif;
}
.bg{
  margin-top: 100px;
}
.track-page {
  width: 700px;
  padding: 8% 0 0;
  margin: auto;
}
h1{
  text-align: center;
}
p{
  font-size: large;
}
.form {
  position: relative;
   background-color: white;
  max-width:400px;
  margin: 0 auto 600px;
  padding: 45px;
  text-align: center;
  border-radius: 20px;
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
  <li><a href="contact.php">Contact us</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
</ul>
<div class="bg">
<div class="track-page">
      <div class="form">
      <div><h1><b>Contact us</b></h1></div><br>
      
      <p>Mail Id: shippingserv@gmail.com</p>
      <p>Phone number: +91-9876543212</p>
    </div>
</div>
</div>
</body>
  </html>