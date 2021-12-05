<!DOCTYPE html>
<html>
  <head>
<style>
  ul {
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
li a, .drop{
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
}
li a:hover ,.dropdown:hover .drop{
  background-color: #111;
}
li.dropdown{
  display: inline-block;
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
.admin
{
  width:500px; height:500px;
  margin: 40px 30px;
}
.container{
  overflow: auto;
}
.Welcome{
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
.admin_page{
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
<div class=".container">
  <div class="row">
    <div class="col1">
      <img src="admin.jpg" class="admin" alt="">
    </div>
    <div class="col2">
      <div class="admin_page">
        <h2 class="Welcome"> Welcome to Admin Page</h2>
        <p class="p1"> Our aim is to provide a lightweight courier system. We provide the facility of courier transportation and tracking. Customers can place orders and add the shipment details into the system. The admin will process the requested and update the shipment details into the system. Upon updation, the system will generate a consignment number ,using which the customer will be able to track their order.
        <p></p>
</div>
    </div>
  </div>
</div>

</body>
  </html>