 <?php include "db_conn.php";
global $firstname;
global $lastname;
global $email;
global $branch_id;
if(isset($_POST['new']) && $_POST['new'] && $_POST['new'] && $_POST['new']==1){
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$branch_id=$_REQUEST['branch_id'];

$qry = "INSERT INTO emp (firstname,lastname,email,branch) VALUES ('$firstname', '$lastname', '$email', '$branch_id')";
mysqli_query($conn, $qry);
php_alert("Employee added Successfully.");
echo "<script>window.location.href='viewEmployee.php';
</script>"; }?>

<!DOCTYPE html>
<html >
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
  height: 350px;
  margin: 0 auto;
  padding: 45px;
  text-align: center;
  border-radius: 20px;
}

.form input,.form-input, #branch {
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
          <h2>Add Employee</h2>
                    </div>
        </div>
       
        <form action="" method="POST" class="addEmp" id="frm1">
          <input type="hidden" name="new" value="1" />
<div class="">
 <input type="text" name="firstname" id="name" placeholder="First Name" value="" required>
                <input type="text" name="lastname" placeholder="Last Name" id="name" value="" required>
              </div>
    <div class="">
                
                <input type="email" name="email" placeholder="Email" id="" class="form-control form-control-sm" value="" required>
              </div>
<div class="">
                
                <select name="branch_id" id="branch" class="form-control input-sm select2">
                  <option value=""></option>
                  <?php
                    $branches = $conn->query("SELECT *,concat(street,', ',city,', ',state,', ',pincode,', ',country) as branchN FROM branches");
                    while($row = $branches->fetch_assoc()):
                  ?>
                  <option value="<?php echo $row['id'] ?>" <?php echo isset($branch_id) && $branch_id == $row['id'] ? "selected":'' ?>><?php echo ucwords($row['branchN']) ?></option>
                <?php endwhile; ?>
                </select>
              </div>
           <input type="submit" value="add" id="btn11">
</form>

</div>
</div>
</div>


</body>
</html>


