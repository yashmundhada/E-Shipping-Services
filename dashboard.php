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
.row:after {
  content: "";
  display: table;
  clear: both;
}
.col1 {
  float: left;
  width: 40%px;
}
.col2{
  float: left;
  width: 50%;
  margin:20px 40px 20px 40px;
  height:560px;
  background-image: url('pic2.jpg');
  background-size: cover;
}
.pic1
{
  width:500px; height:500px;
  margin: 40px 30px;
}
.container{
  overflow: auto;
}
.services{
  margin:10px 20px 10px 20px;
  width:500px;
  border:1px solid gray;
  border-radius: 10px;
  text-align: center;
  padding:20px;
}
.p1{
  width:400px;
  margin:auto;
  padding:10px;
}
.service{
  margin:40px 60px;
  width:580px;
  border:3px solid gray;
  border-radius: 15px;
  background-color: white;
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
<div class=".container">
  <div class="row">
    <div class="col1">
      <img src="pic1.jpg" class="pic1 " >
    </div>  
    <div class="col2">
      <div class="service">
        <h2 class="services"> Services</h2>
        <p class="p1">Our aim is to provide a lightweight courier system. We proveide the facility of courier transportation and tracking. Customers can place orders and add the shipment details into the system. The admin will process the requested and update the shipment details into the system. Upon updation, the system will generate a consignment number ,using which the customer will be able to track their order.
        <p></p>
</div>
    </div>
  </div>
</div>

</body>
  </html>