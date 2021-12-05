<?php
include "db_conn.php";
if(isset($_POST['login_btn'])){
    login();
}
function login(){
global $conn,$username,$errors;
$username = $_POST['username'];
$pass = $_POST['password'];
$pass=md5($pass);
$query="SELECT * FROM users where Name='$username' and password='$pass' and type='admin' LIMIT 1 ";
$results = mysqli_query($conn, $query);
if(mysqli_num_rows($results)==1){
    header("Location:a_dashboard.php");
}
else{
    echo '<script>alert("Invalid Credentials")</script>';
}
}
 ?>
<!DOCTYPE html>
<html>
<head>

<style type="text/css" media="screen">

ul {
        top: 0;
      position: sticky;

  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #424B52;
  }

li a{
  float:right;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
}
li a:hover {
  background-color: #111;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
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
#Login-submmision{
  background-color:#56baed;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  cursor: pointer;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background-color: #B4CCDE;
  font-family:  sans-serif;
  
}
.pTitle{
  margin-bottom: -10px;
}
.logo{
  height: 90px;
  float: left;
  padding: 5px;
  margin: 10px;
  margin-top: -25px;
}
</style>
<title> Admin Login </title>
</head>
  <body>
  <ul>
  <li><a href="login.php">User Login</a></li>
  </ul>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <div class="row">
                        <div class="">
                           <a href="index.html" target="_self"><img src="logo.png" alt="Logo" class="logo"></a>
                        </div>
                        <div class="">
                            <h2 class="pTitle"><strong>  E-Shipping</strong></h2>
                            </div>
                    </div>
            <h3>ADMIN</h3>
          </div>
        </div>
        <form class="login-form" action="" method="POST">
          <input type="text" placeholder="username" name="username" id="username" required />
          <input type="password" placeholder="password" name="password" id="password" required/>
          <input type="submit" name="login_btn" value="Login" id="Login-submmision">
        </form>
      </div>
    </div>
</body>
</html>
 
