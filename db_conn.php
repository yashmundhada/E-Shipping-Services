<?php 
$conn= new mysqli('localhost','root','','e-shipping')or die("Could not connect to mysql".mysqli_error($con));

function php_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
 function funcPay(){
    php_alert("Payment Successful.");
  echo "<script>window.location.href='userPayments.php';";
}