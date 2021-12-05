<?php
$id=$_GET['id'];
include "db_conn.php";
$query="DELETE FROM emp where id='$id'";
$result=mysqli_query($conn,$query);
php_alert("Employee Successfully Deleted.");
  echo "<script>window.location.href='viewEmployee.php';
</script>";
?>