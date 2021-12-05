<?php 
session_start();
include "db_conn.php";
$id=$_GET['DID'];
$query="UPDATE orders set status='10' where id='$id'";
mysqli_query($conn,$query);
php_alert("Order Status Updated to CANCELLED Successfully..");
  echo "<script>window.location.href='a_cancellation.php';
</script>";
 ?>