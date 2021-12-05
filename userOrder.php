<?php
include "db_conn.php";
$Tid=$_GET["DID"];
$qry =mysqli_query($conn,"SELECT status from orders where trackingId='".$Tid."'");
$data = mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<html >
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
li a:hover ,.dropdown:hover .drop{
  background-color: #111;
}
li.dropdown{
  display: inline-block;
}

.track-page {
  width: 900px;
  height: 600px;
  padding: 8% 0 0;
  margin: auto;
}

.form { 
  z-index: -1;
  background-color: white;
  width: 500px;
  height: 250px;
  margin: 0 auto;
  padding: 45px;
  text-align: center;
  border-radius: 20px;
}

.form input,.form-input, #branch {
  background: #f2f2f2;
  width: 50%;
  border-radius: 10px;
  border: 2px solid #d9d9d9;
  margin: 0 0 10px;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
}
#name{
  width: 49%;
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
  width: 40%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  cursor: pointer;
}
label{
    float: left;
    padding: 10px;

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
<title> </title>
</head>
  <body>

 <ul>
  <li><a href="dashboard.php">Home</a></li>
  <li><a href="payment.php">Payment</a></li>
  <li><a href="add_shipment.php">Add shipment</a></li>
  <li><a href="track.php">Track</a></li>
  <li><a href="contact.php">Contact us</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
</ul>

 </div>
 <div class="bg">
    <div class="track-page">
      <div class="form">
        <div class="track">
          <div class="track-header">
          <h2>Order Details</h2>
                    </div>
        </div>
       
        <form action="" method="POST" class="addEmp" id="frm1">
          <input type="hidden" name="new" value="1" />
        <div class="">
           <label>TrackID:</label> <input type="text" id="st" name="trackingId" value="<?php echo $data['trackingId']?>" readonly>
            </div>
    <div class="">
            <label>Status: </label><input type="text" id="st" name="status" value="<?php echo $data['status']?>" readonly>
    </div>
           <input type="submit" value="Request Cancellation" name="cancel" id="btn11">
</form>

</div>
</div>
</div>
</body>
</html>
