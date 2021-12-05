<?php include "db_conn.php";
$errors=array();
if(isset($_POST['registerbtn']))
  {
    register();
  }
function register(){
global $Name,$email,$password,$cpassword,$conn,$errors;
$Name = $_POST['Name'];
$password = $_POST['password'];
$email = $_POST['email'];
$cpassword=$_POST['cpassword'];

if($password!=$cpassword){
  array_push($errors,"Passwords do not match.");
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
array_push($errors,"Invalid email format.");
}
if(count($errors)==0){
  $pass=md5($password);
  $query="INSERT into users (Name,email,password,type) VALUES('$Name','$email','$pass','user')";
  mysqli_query($conn,$query);
  header('location: login.php');
  }
}
function display_error() {
  global $errors;

  if (count($errors) > 0){
      echo '<script>alert("'.implode("\\n", $errors).'");</script>';
      }
  }
 
?>
<!DOCTYPE html>
<html>
<head>
 
<style type="text/css" media="screen">
header .header{
  background-color: #fff;
  height: 60px;
}

.login-page {
  width: 460px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-bottom: 20px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 460px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  border-radius: 20px;
}
.form input {
  background: #f2f2f2;
  width: 90%;
  border-radius: 10px;
  border: 2px solid #d9d9d9;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
#Reg-submmision{
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
  background-color: #333;
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
<title> Register </title>
</head>
  <body>
<div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <div class="row">

        <div class="">
              
                    <div class="row">
                        <div class="">
                           <a href="index.html" target="_self"><img src="logo.png" alt="Logo" class="logo"></a>
                        </div>
                        <div class="">
                            <h2 class="pTitle"><strong>  E-Shipping</strong></h2>
                            </div>
                    </div><h3>Registeration</h3>
          <form class="login-form" action="" method="POST" autocomplete="off">
          <?php echo display_error(); ?>
          <input type="text" placeholder="Name" name="Name" id="Name" value="" required />
          <input type="password" placeholder="password" name="password" id="password" required/>
          <input type="password" placeholder="Confirm password" name="cpassword" id="cpassword" required/>
          <input type="email" placeholder="email" name="email" value="" id="email" required/>
          <input type="submit"  value="Register" name="registerbtn" id="Reg-submmision">
          </form>
        <a href="login.php">Already a user? Login</a>
      </div>
      
    </div>
  
    </body>
</html>