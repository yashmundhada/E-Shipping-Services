<?php session_start();
include "db_conn.php";
$mailID=$_SESSION['user'];
if(isset($_POST['btn'])==1){
$tr = $_REQUEST['trId'];
$name = $_REQUEST['sname'];
$feedback = $_REQUEST['feedback'];
$query = "INSERT INTO userfeedback (orderId,name,email,feedback) VALUES ('$tr', '$name','$mailID', '$feedback')";
mysqli_query($conn,$query);
if($query)
{
header("Location: feedbackSubmit.php");
}}
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
.form input {
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
.feedback{
  background: #f2f2f2;
  width: 100%;
  border-radius: 10px;
  border: 2px solid #d9d9d9;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  overflow-y: scroll;
  height:130px;
}
</style>
<title> Feedback </title>
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
            <h3>Feedback</h3>
            </div>
        </div>
        <form action="" method="post" id="frm1">
<input type="text" name="trId" id="ip1" placeholder="Enter Your 
Track ID" required>
<input type="text" name="sname" id="ip1" placeholder="Enter Your 
Name" required>
<textarea type="text" name="feedback" class="feedback" id="ip1" placeholder="Comment Your Feedback here." required></textarea>

<button class="btn11" name="btn">Confirm</button>
</form>
</div>
    </div>
 </div> 
</body>
</html>
