<?php
$id=$_GET['dID'];
include "db_conn.php";

$query="DELETE FROM `branches` where id='$id'";
$result=mysqli_query($conn,$query);
php_alert("Branch Successfully Deleted.");
  echo "<script>window.location.href='viewBranch.php';
</script>";?>