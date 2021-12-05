<?php 
include "db_conn.php";
if(isset($_POST['new']) && $_POST['new'] && $_POST['new'] && $_POST['new'] && $_POST['new'] && $_POST['new']==1){
$st = $_REQUEST['Street'];
$ct = $_REQUEST['city'];
$sta = $_REQUEST['State'];
$pcode = $_REQUEST['Pincode'];
$ctry = $_REQUEST['Country'];
$ctact = $_REQUEST['Contact'];
$query = "INSERT INTO branches (street, city, state, pincode, country,contact) VALUES ('$st', '$ct', '$sta', '$pcode' ,'$ctry', '$ctact')";

mysqli_query($conn,$query);
php_alert("Branch added Successfully.");
echo "<script>window.location.href='viewBranch.php';
</script>";

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
  padding: 8% 0 0;
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

.form input,.form-input {
  background: #f2f2f2;
  width: 100%;
  border-radius: 10px;
  border: 2px solid #d9d9d9;
  margin: 0 0 10px;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
}
#branchDetails{
  width: 49%;
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


body {
  background-image: url(pic1.jpg);
                background-position: center;
                background-size: cover;
  font-family:  sans-serif;

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
          <h2>Add Branch</h2>
                    </div>
        </div>
       
         <form action="" method="POST"  id="frm1">
          <input type="hidden" name="new" value="1" />
            <div class="">
              <input type="text" name="Street" id="branchDetails" placeholder="Street/Building" required>
              <input type="text" name="city" placeholder="City" id="branchDetails" required>
            </div>
            <div class="">
              <input type="text" name="State" id="branchDetails" placeholder="State" required>
              <input type="text" name="Pincode" placeholder="Pincode" id="branchDetails" required>
            </div>
            <div class="">
              <input type="text" name="Country" id="branchDetails" placeholder="Country" required>
              <input type="text" name="Contact" placeholder="Contact" id="branchDetails" required>
            </div>
            <input type="submit" value="add" id="btn11">
          </form>

</div>
</div>
</div>


</body>
</html>


