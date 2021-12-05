<?php 

include "db_conn.php";
$id=$_GET["DID"];
$qry =mysqli_query($conn,"SELECT `trackingId`, `price`, `status`, `date_created` from orders where id='".$id."'");
$data = mysqli_fetch_array($qry);
if(isset($_POST['update']))
{
$trackingId=$_POST['trackingId'];    
$price=$_POST['price'];
$status=$_POST['status'];
$date_created=$_POST['date_created'];
$edit=mysqli_query($conn,"UPDATE `orders` SET `trackingId`='$trackingId',`price`='$price', `date_created`='$date_created', `status`='$status' WHERE `id`='$id'");
if($edit)
{
  mysqli_close($conn);
  php_alert("Order Successfully Updated.");
  echo "<script>window.location.href='a_order.php';
</script>";
}
else
{
  echo mysqli_error();

}
}
?>
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
li a:hover ,.dropdown:hover .drop{
  background-color: #111;
}
li.dropdown{
  display: inline-block;
}

.track-page {
  width: 900px;
  height: 600px;
  padding: 6% 0 0;
  margin: auto;
}

.form { 
  z-index: -1;
  background-color: white;
  width: 500px;
  height: 300px;
  margin: 0 auto;
  padding: 45px;
  text-align: center;
  border-radius: 20px;
}
#orderStatus{
  width: 49%;
  background: #f2f2f2;
  width: 100%;
  border-radius: 10px;
  border: 2px solid #d9d9d9;
  margin: 0 0 10px;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
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

</style>
<title> </title>
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
          <h2>Edit Order</h2>
                    </div>
        </div>
                <form method="POST" id="frm1">
                    <input type="hidden" name="new" value="1" />
            <div class="">
              <input type="text" name="trackingId" id="orderStatus" value="<?php echo $data['trackingId']?>">
               </div>
               <div class="">
                <input type="text" name="date_created" id="orderStatus" value="<?php echo $data['date_created']?> ">
            </div>
            <div class="">
              <input type="text" name="price" id="orderStatus" value="<?php echo $data['price']?> ">
            </div>
              <div class="">
                <select type="text" name="status" id="orderStatus" value="<?php echo $data['status']?> " required>
                    <option>----------Status----------</option>
                     <option value="1">Collected</option>
                     <option value="2">Shipped</option>
                     <option value="3">In-Transit</option>
                     <option value="4">Arrived At Destination</option>
                     <option value="5">Out for Delivery</option>
                     <option value="6">Ready to Pickup</option>
                     <option value="7">Delivered</option>
                     <option value="8">Picked-up</option>
                     <option value="9">Unsuccessfull Delivery Attempt</option>
                     <option value="10">Cancelled</option>

                     
                 </select>
            </div>
            <input type="submit" value="Update" name="update" id="btn11">
          </form>

</div>
</div>
</div>

</body>
</html>