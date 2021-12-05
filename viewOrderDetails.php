
<!DOCTYPE html>
<html >
<head>
  <style>
    ul {
           
font-size: 14px;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  }
  body {
  background-image: url(pic1.jpg);
                background-position: center;
                background-size: cover;
  font-family:  sans-serif;
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
li a:hover ,.dropdown:hover .drop{
  background-color: #111;
}
li.dropdown{
  display: inline-block;
}

.track-page {
  width: 900px;
  height: 600px;
  padding: 5% 0 0;
  margin: auto;
}

.form { 
  z-index: -1;
  background-color: white;
  width: 500px;
  height: 490px;
  margin: 0 auto;
  padding: 45px;
  text-align: center;
  border-radius: 20px;
}

.form input,.form-input{

  background: #f2f2f2;
  width: 100%;
  border-radius: 10px;
  border: 2px solid #d9d9d9;
  margin: 0 0 10px;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
}
#name{
  width: 58%;
  float: right;
 }
label{
  width: 40%;
  float: left;
  margin-top: 12px;
  margin-bottom: 20px;
}
.bg{
  background-image: url('pic1.jpg');
  width:1505px;
  height:auto;
  background-size: cover;
}
#btn11{
  z-index: 1;
  background-color:#56baed;
  width: 30%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  cursor: pointer;
  align-content: center;
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

p{
  font-size: 25px;
  font-weight: bold;
}



.p1{
  width:400px;
  margin:auto;
  padding:10px;
}

body {
  font-family:  sans-serif;
  
}
</style>
<title> Order Details</title>
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

 </div>
 <div class="bg">
    <div class="track-page">
      <div class="form">
        <div class="track">
          <div class="track-header">
          <h2>View Order Details</h2>
                    </div>
        </div>
       <?php
include "db_conn.php";
$id=$_GET["DID"];
$sql ="SELECT * FROM orders WHERE id='".$id."'";
$result = mysqli_query($conn, $sql) or die ( mysqli_error());
while($row = mysqli_fetch_array($result))
{?>
        <form action="" method="POST" class="addEmp" id="frm1">
          <div class="">
  <label>Order ID:</label>
 <input type="text" name="trackingId" value="<?php echo $row['trackingId'] ?>" id="name" readonly>
                
              </div>
              <div class="">
  <label>Sender's Name:</label>
 <input type="text" name="sname" value="<?php echo $row['sender_name'] ?>" id="name" readonly>
                
              </div>
    <div class="">
  <label>Sender's Phone</label>
 <input type="text" name="sphone" value="<?php echo $row['sender_contact'] ?>" id="name" readonly>
                
              </div>
<div class="">
  <label>Receiver's Name:</label>
 <input type="text" name="rname" value="<?php echo $row['recipient_name'] ?>" id="name" readonly>
                
              </div><div class="">
  <label>Receiver's Phone:</label>
 <input type="text" name="rphone" value="<?php echo $row['recipient_contact'] ?>" id="name" readonly>
                
              </div><div class="">
  <label>From address:</label>
 <input type="text" name="from" value="<?php echo $row['sender_address'] ?>" id="name" readonly>
                
              </div><div class="">
  <label>To address:</label>
 <input type="text" name="to" value="<?php echo $row['recipient_address'] ?>" id="name" readonly>
                
              </div>
              <div class="">
  <label>Status:</label>
 <input type="text" name="status" value="<?php switch ($row['status']) {
                                case '1':
                                    echo "Collected";
                                    break;
                                case '2':
                                    echo "Shipped";
                                    break;
                                case '3':
                                    echo "In-Transit";
                                    break;
                                case '4':
                                    echo "Arrived At Destination";
                                    break;
                                case '5':
                                    echo "Out for Delivery";
                                    break;
                                case '6':
                                    echo "Ready to Pickup";
                                    break;
                                case '7':
                                    echo "Delivered";
                                    break;
                                case '8':
                                    echo "Picked-up";
                                    break;
                                case '9':
                                    echo "Unsuccessfull Delivery Attempt";
                                    break;
                                case '10':
                                    echo "Cancelled";
                                    break;
                                case 0:
                                    echo "Item Accepted for shipping";
                                    
                                    break;
                            }
                            ?>" id="name" readonly>
                
              </div>
              </form>
            <?php }?>

</div>
</div>
</div>
</body>
</html>
